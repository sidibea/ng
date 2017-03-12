<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 3/5/17
 * Time: 3:37 AM
 */

namespace NB\MainBundle\Controller;


use NB\MainBundle\Entity\Reservation;
use NB\MainBundle\Entity\Ticket;
use NB\MainBundle\Entity\Transaction;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Unirest;
class MainController extends Controller {

    public function indexAction(){

        //throw new \Exception('kjhjn');

        $em = $this->getDoctrine()->getManager();
        $villes = $em->getRepository('NBMainBundle:Ville')->ListeVilles();
        $compagnie = $em->getRepository('NBMainBundle:Compagnie')->findAll();


        return $this->render('NBMainBundle::index.html.twig', [
            'ville' => $villes,
            'compagnie' => $compagnie
        ]);
    }

    public function listingAction(Request $request){

        if($request->getMethod() == 'GET'){
            $depart =  $this->get('doctrine.orm.entity_manager')->getRepository('NBMainBundle:Ville') ->findByName($request->get('from'));
            $arrivee = $this->get('doctrine.orm.entity_manager')->getRepository('NBMainBundle:Ville') ->findByName($request->get('to'));
        }
        $admin_link = $this->getParameter('admin_link');

        $search =  $this->get('doctrine.orm.entity_manager')
            ->getRepository('NBMainBundle:Voyages')
            ->findByAxes($depart->getId(), $arrivee->getId());

        return $this->render('NBMainBundle::listing.html.twig', [
            'departure' => $depart,
            'arrival' => $arrivee,
            'search' => $search,
            'admin_link' => $admin_link,
            'dateJ' => $request->get('dateJ')
        ]);
    }

    public function infosAction($travel_id, $dateJ, Request $request){

        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $count =  $this->get('doctrine.orm.entity_manager')->getRepository('NBMainBundle:Reservation') ->getTotalRows()->getId() + 1;

        $search =  $this->get('doctrine.orm.entity_manager')
            ->getRepository('NBMainBundle:Voyages')
            ->find($travel_id);
        $admin_link = $this->getParameter('admin_link');
        $reservation = new Reservation();
        $ticket = new Ticket();


        if($request->getMethod() == 'POST'){
            $nom = $request->get('nom');
            $prenom = $request->get('prenom');
            $email = $request->get('email');
            $age = $request->get('age');
            $sexe = $request->get('sexe');
            $telephone = $request->get('telephone');
            $pointEmbarquement = $this->get('doctrine.orm.entity_manager')->getRepository('NBMainBundle:PointEmbarquement')->find($request->get('boardingPoint'));


            $reservation->setDoj($dateJ);
            $reservation->setVoyages($search);
            $reservation->setChannel('web');
            if ($this->isGranted('ROLE_USER') == true)
                $reservation->setChannelId($user->getId());
            else
                $reservation->setChannelId('user');
            $reservation->setSeats('1');
            $reservation->setConfirmed(false);
            $reservation->setDateAdd(new \datetime);
            $reservation->setDateUpd(new \datetime);
            $reservation->setPointEmbarquement($pointEmbarquement);
            $em->persist($reservation);

            $ticket->setNom($nom." ".$prenom);
            $ticket->setAge($age);
            $ticket->setGender($sexe);
            $ticket->setTelephone($telephone);
            $ticket->setEmail($email);
            $reservation->setTickets($ticket);
            $em->persist($reservation);
            $em->flush();

            $ticketNo =
                (($this->isGranted('ROLE_USER') == true)?$user->getId():$reservation->getId() ). ( ( $search->getAxes()->isTypeBus() == 0)?'O':'C').
                strtoupper(substr($search->getAxes()->getSource()->getNom(), 0, 1).substr($search->getAxes()->getDestination()->getNom(), 0, 2)).
                $count;
            $reservation->getTickets()->setTicketNo($ticketNo);
            $em->flush();


            return $this->redirect($this->generateUrl('nb_main_payment', ['id' => $reservation->getId()]));
        }

        return $this->render('NBMainBundle::custInfo.html.twig', [
            'search' => $search,
            'admin_link' => $admin_link,
            'dateJ' => $dateJ
        ]);

    }

    public function paymentAction($id, Request $request){

        $em = $this->getDoctrine()->getManager();
        $reservation = $em->getRepository('NBMainBundle:Reservation')->find($id);


        return $this->render('NBMainBundle::payment.html.twig', [
            'reservation' => $reservation
        ]);

    }


    public function callbackAction(Request $request){

        $em = $this->getDoctrine()->getManager();
        $transaction = new Transaction();

        /************************************************************************************
        STEP 1 - CONFIGURATION : START
        Find your merchant UID, Public Key and secret code on the
        home page of your merchant dashboard
         *************************************************************************************/


        $merchant_uid = 'lywG2RnO5lZyWUczbiaEtO00Y1c2';            // Replace with your merchant_uid
        $merchant_public_key = 'q6Fs62Quar7BNIiNNlfmuwfx60y6hIcAjsjr9JhOFq1o'; // Replace by your merchant_public_key !!!
        $merchant_secret = 'sCJ4qhTseoh8DR8z';                       // Replace by your merchant_private_key !!!


        /*************************************************************************************
        STEP 1 - CONFIGURATION : END
         **************************************************************************************/

        /*************************************************************************************
        STEP 2 - CREATING AND GETTING THE POST REQUEST VARIABLES : START
        Create and initialize variables to be sent to confirm that
        the ongoing transaction is associated with the current merchant
         **************************************************************************************/

        $transaction_uid = '';//create an empty transaction_uid
        $transaction_token  = '';//create an empty transaction_token
        $transaction_provider_name  = ''; //create an empty transaction_provider_name
        $transaction_confirmation_code  = ''; //create an empty confirmation code
        $transaction_receiver_reference = "";

        //extracting data from the post
        if($request->get('transaction_uid')){
            $transaction_uid = $request->get('transaction_uid'); //Get the transaction_uid posted by the payment box
        }

        if($request->get('transaction_token')){
            $transaction_token  = $request->get('transaction_token'); //Get the transaction_token posted by the payment box
        }

        if($request->get('transaction_provider_name')){
            $transaction_provider_name  = $request->get('transaction_provider_name'); //Get the transaction_provider_name posted by the payment box
        }

        if($request->get('transaction_confirmation_code')){
            $transaction_confirmation_code  = $request->get('transaction_confirmation_code'); //Get the transaction_confirmation_code posted by the payment box
        }

        if($request->get('transaction_receiver_reference')){
            $transaction_receiver_reference  = $request->get('transaction_receiver_reference'); //Get the transaction_confirmation_code posted by the payment box
        }

       // echo '<pre>'; var_dump($request->getContent()); exit;

        /*****************************************************************************************
        STEP 2 - CREATING AND GETTING THE POST REQUEST VARIABLES : END
         ******************************************************************************************/

        /*****************************************************************************************
        STEP 3 - SAVING THE POST REQUEST VARIABLES IN YOUR DATABASE : START
        Before doing anything, save the 4 variables that we just got from the POST request in your database.
        This will be useful for further operations to authenticate the requests sent to the default webhook url
        Save the transaction in your database with | $transaction_uid | $transaction_token | $transaction_provider_name | $transaction_confirmation_code
         *******************************************************************************************/

        //Write a script here to save a transaction with the 4 variables above
      /*  $reservation = $em->getRepository('NBMainBundle:Reservation')->findByTicketNo($transaction_receiver_reference);
        $transaction->setToken($transaction_token);
        $transaction->setUid($transaction_uid);
        $transaction->setProviderName($transaction_provider_name);
        $transaction->setConfimationCode($transaction_confirmation_code);
        $transaction->setReservation($reservation);
        $em->persist($transaction);
        $em->flush(); */

        /******************************************************************************************
        STEP 3 - SAVING THE POST REQUEST VARIABLES IN YOUR DATABASE : END
         *******************************************************************************************/


        /******************************************************************************************
        STEP 4 - BUILDING THE WECASHUP URL WHERE TO POST THE TRANSACTION CONFIRMATION DATA : START
        The endpoint is https://www.wecashup.com/api/v1.0/
        build your URL by adding /merchants/{YOUR-MERCHANT-UID}/transactions/{THE-TRANSACTION-UID-GOTTEN-IN-THE-RECEIVED-POST-REQUEST}/?merchant_public_key={YOUR-PUBLIC-KEY}
         *******************************************************************************************/

        //Building the url where to send the transaction confirmation data
        $url = 'https://www.wecashup.com/api/v1.0/merchants/'.$merchant_uid.'/transactions/'.$transaction_uid.'/?merchant_public_key='.$merchant_public_key;

       // echo $url;

        /******************************************************************************************
        STEP 4 - BUILDING THE WECASHUP URL WHERE TO POST THE TRANSACTION CONFIRMATION DATA : END
         *******************************************************************************************/


        /******************************************************************************************
        STEP 5 - SETTING UP THE VARIABLES ARRAY TO BE POSTED TO WECASHUP TO CONFIRM THE TRANSACTION : START
        The endpoint is https://www.wecashup.com/api/v1.0/
        build your URL by adding /merchants/{YOUR-MERCHANT-UID}/transactions/{THE-TRANSACTION-UID-GOTTEN-IN-THE-RECEIVED-POST-REQUEST}/?merchant_public_key={YOUR-PUBLIC-KEY}
         *******************************************************************************************/

        $fields = array(
            'merchant_secret' => urlencode($merchant_secret),
            'transaction_token' => urlencode($transaction_token),
            'transaction_uid' => urlencode($transaction_uid),
            'transaction_confirmation_code' => urlencode($transaction_confirmation_code),
            'transaction_provider_name' => urlencode($transaction_provider_name),
            '_method' => urlencode('PATCH')/* Very important : TO PATCH an entity on WeCashUp, make an HTTP POST request and add an input
		                            * with the name "_method" and value "PATCH" to specify that you are patching an existing entity
								    * (here you are confirming an existing INCOMPLETE transaction)
								    */
        );
        $fields_string = '';

        //url-ify the data for the POST
        foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
        rtrim($fields_string, '&');

        /******************************************************************************************
        STEP 5 - SETTING UP THE VARIABLES ARRAY TO BE POSTED TO WECASHUP TO CONFIRM THE TRANSACTION : END
         *******************************************************************************************/

        /******************************************************************************************
        STEP 6 - PREPARE THE POST REQUEST, EXECUTE IT AND GET THE RESPONSE : START
        Initialize PHP curl to execute an HTTP POST request to send the received data to WeCashUp
        Receive server response and parse it to JSON
         *******************************************************************************************/


        //Initialize PHP curl to execute an HTTP POST request to send the received data to WeCashUp
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);

        // receive server response ...
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec ($ch);

        //echo $server_output;

        curl_close ($ch);

        //Parse the response to JSON and save the JSON string in the variable "$data"

       // echo "<br><br> data : ".$data;

        $data = json_decode($server_output, true);

       // echo '<br><br> data : '.$data;

        $content = $data['response_content']['transaction'];

        //echo '<pre>'; var_dump($content); exit;

        $reservation = $em->getRepository('NBMainBundle:Reservation')->findByTicketNo($content['transaction_sender_reference']);
        $transaction->setToken($transaction_token);
        $transaction->setUid($transaction_uid);
        $transaction->setProviderName($transaction_provider_name);
        $transaction->setConfimationCode($transaction_confirmation_code);
        $transaction->setReservation($reservation);
        $transaction->setCreatedAt(new \datetime);
        $em->persist($transaction);
        $em->flush();

        ///  echo '<pre>'; var_dump($data['response_content']);

       //// echo '<br><br> transaction_token : '.$transaction_token;
       // echo '<br><br> transaction_uid : '.$transaction_uid;
       // echo '<br><br> transaction_confirmation_code : '.$transaction_confirmation_code;
      //  echo '<br><br> transaction_provider_name : '.$transaction_provider_name;

      //  echo '<br><br> response_status : '.$data['response_status'];

        /******************************************************************************************
        STEP 6 - PREPARE THE POST REQUEST, EXECUTE IT AND GET THE RESPONSE : END
         *******************************************************************************************/

        /******************************************************************************************
        STEP 7 - PROCESS THE RESPONSE AND TAKE ACTION : START
        a) Extract the useful data from the response and save them.
        b) Processing : If the response state the transaction as successful, do whatever you want to let the
        customer know that his transaction was successful and take action (like launching the delivery
        process or whatever is relevant for you)
        If it is not successfull, do wathever you want
         *******************************************************************************************/

//a) Extract the relevant data like the transaction_uid and transaction_status and save them n your database or just update the previously saved data.

//b) Process the response.

        $location = 'http://next-bus.net/reservation/echoue/'.$reservation->getId();

        /*echo '<br><br> DATA : '.$data;
        echo '<br><br> $data["response_status"] : '.$data['response_status'];
        echo '<br><br> $data["response_code"] : '.$data['response_code'];
        echo '<br><br> $data["response_content"] : '.$data['response_content'];
        echo '<br><br> $data["response_errors"] : '.$data['response_errors'];
        echo '<br><br> $data["response_details"] : '.$data['response_details'];*/

        if($data['response_status'] =="success"){

            //Do wathever you want to tell the user that it's transaction succeed or redirect him/her to a success page

            echo '<br><br> response_code : '.$data['response_code'];
            $transaction->setStatus(true);
            $reservation->setConfirmed(true);

            $em->flush();

            $location = 'http://next-bus.net/reservation/merci/'.$reservation->getId();

            ///
        }else{
            $transaction->setStatus(false);
            $reservation->setConfirmed(false);

            $em->flush();

            //Do wathever you want to tell the user that it's transaction failed or redirect him/her to a failure page
            echo '<br><br> response_code : '.$data['response_code'];
            $location = 'http://next-bus.net/reservation/sorry/'.$reservation->getId();

        }

        //redirect to your feedback page
        echo '<script>top.window.location = "'.$location.'"</script>';

        /******************************************************************************************
        STEP 7 - PROCESS THE RESPONSE AND TAKE ACTION : END
         *******************************************************************************************/

        /*
            NOTE : 	You can access the json response to process further operations like this :
                    $data['response_status'],
                    $data['response_code'],
                    $data['response_content'],
                    $data['response_errors'],
                    $data['response_details'] .
        */

    }

    public function webhookAction(Request $request){
        $em = $this->getDoctrine()->getManager();

        //Config
        $merchant_secret = 'sCJ4qhTseoh8DR8z'; // ****************** PUT YOUR MERCHANT SECRET HERE (you can get it in your WeCashUp merchant dashboard) ***************

        // Create and initialize variables to be sent to confirm the that the ongoing transaction is associated with the current merchant

        $received_transaction_merchant_secret = null;//create an empty received_transaction_merchant_secret
        $received_transaction_uid = null;//create an empty received_transaction_uid
        $received_transaction_status  = null;//create an empty received_transaction_status
        $received_transaction_details = null;//create an empty received_transaction_details | provider_name
        $received_transaction_token = null;//create an empty received_transaction_token
        $received_transaction_type = null;//create an empty  received_transaction_type | PAYMENT, REFUND, TRANSFER
        $transaction_receiver_reference = null;
        $authenticated = 'false'; //create an authentification boolean and initialize it at false


        //extracting data from the post and filling the variable above
        if(isset($_POST['merchant_secret'])){
            $received_transaction_merchant_secret = $_POST['merchant_secret']; //Get the merchant_secret posted by WeCashUp.

        }

        if($request->get('transaction_uid')){
            $received_transaction_uid = $request->get('transaction_uid'); //Get the transaction_uid posted by WeCashUp
        }

        if($request->get('transaction_status')){
            $received_transaction_status  = $request->get('transaction_status'); //Get the transaction_status posted by WeCashUp
        }

        if($request->get('transaction_details')){
            $received_transaction_details  = $request->get('transaction_details'); //Get the transaction_details posted by WeCashUp
        }


        if($request->get('transaction_token')){
            $received_transaction_token  = $request->get('transaction_token'); //Get the transaction_token posted by WeCashUp
        }
        if($request->get('transaction_type')){
            $received_transaction_type  = $request->get('transaction_type'); //Get the transaction_type posted by WeCashUp
        }

        echo '<br><br> received_transaction_merchant_secret : '.$received_transaction_merchant_secret;
        echo '<br><br> received_transaction_uid : '.$received_transaction_uid;
        echo '<br><br> received_transaction_token : '.$received_transaction_token;
        echo '<br><br> received_transaction_details : '.$received_transaction_details;
        echo '<br><br> received_transaction_status : '.$received_transaction_status;
        echo '<br><br> received_transaction_type : '.$received_transaction_type;


        //Authentification |We make sure that the received data come from a system that knows our secret key (WeCashUp only)
        if($received_transaction_merchant_secret !=null && $received_transaction_merchant_secret == $merchant_secret){
            //received_transaction_merchant_secret is Valid

            echo '<br><br> merchant_secret [MATCH]';

            //Now check if you have a transaction with the received_transaction_uid and received_transaction_token
            $transaction = $em->getRepository('NBMainBundle:Transaction')->findByUid($received_transaction_uid);
            $reservation = $transaction->getReservation();

            $database_transaction_uid = $transaction->getUid();//************* LOAD FROM YOUR DATABASE ****************
            $database_transaction_token = $transaction->getToken();//************* LOAD FROM YOUR DATABASE ****************

            if($received_transaction_uid != null && $received_transaction_uid == $database_transaction_uid){
                //received_transaction_merchant_secret is Valid

                echo '<br><br> transaction_uid [MATCH]';

                if($received_transaction_token  != null && $received_transaction_token == $database_transaction_token){
                    //received_transaction_token is Valid

                    echo '<br><br> transaction_token [MATCH]';

                    //All the 3 parameters match, so...
                    $authenticated = 'true';

                }
            }
        }

        echo '<br><br>authenticated : '.$authenticated;

        if($authenticated == 'true'){

            //Update and process your transaction

            if($received_transaction_status =="PAID"){

                //Save the transaction status in your database and do wathever you want to tell the user that it's transaction succeed
               $reservation->setConfirmed(true);

            }else{ //Status = FAILED

                //Save the transaction status in your database and do wathever you want to tell the user that it's transaction failed
                $reservation->setConfirmed(false);

            }


            /***** SAVE THIS IN YOUD DATABASE - start ****************/

            $file = 'transactions.txt';
            $txt = "received_transaction_merchant_secret : ".$received_transaction_merchant_secret."\n".
                "received_transaction_uid : ".$received_transaction_uid."\n".
                "received_transaction_token : ".$received_transaction_token."\n".
                "received_transaction_details : ".$received_transaction_details."\n".
                "received_transaction_status : ".$received_transaction_status."\n".
                "received_transaction_type : ".$received_transaction_type."\n";


            $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");

            fwrite($myfile, $txt);
            fclose($myfile);

            /***** SAVE THIS IN YOUD DATABASE - end ****************/
            /*
                NOTE : 	You can analyze each variable in order to process further operations like sending
                        an email to the customer to inform him that his transaction failed or launching the
                        delivery process if the transaction succeed.
            */

        }


    }

    public function thanksAction($id, Request $request){

        $em = $this->getDoctrine()->getManager();
        $reservation = $em->getRepository('NBMainBundle:Reservation')->find($id);


        return $this->render('NBMainBundle::confirmed.html.twig', [
            'reservation' => $reservation
        ]);
    }

}