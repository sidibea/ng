<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 3/6/17
 * Time: 4:58 PM
 */

namespace NB\MainBundle\Controller;


use NB\MainBundle\Entity\Contact;
use NB\MainBundle\Entity\Newsletter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CMSController extends Controller {

    public function aboutAction(){
        $em = $this->getDoctrine()->getManager();

        $city = $em->getRepository('NBMainBundle:Ville')->findAll();
        $axes = $em->getRepository('NBMainBundle:Axes')->findAll();
        $seatseller = $em->getRepository('NBMainBundle:Seatseller')->findAll();
        $users = $em->getRepository('NBUsersBundle:Users')->findAll();

        return $this->render('NBMainBundle:CMS:about.html.twig', [
            'city' => $city,
            'axes' => $axes,
            'seatseller' => $seatseller,
            'users' => $users
        ]);
    }

    public function prepareAction(){
        return $this->render('NBMainBundle:CMS:prepare.html.twig', [
        ]);
    }

    public function partenaireAction(){
        $em = $this->getDoctrine()->getManager();
        $compagnie = $em->getRepository('NBMainBundle:Compagnie')->findAll();


        return $this->render('NBMainBundle:CMS:partenaire.html.twig', [
            'compagnie' => $compagnie
        ]);
    }

    public function contactAction(Request $request){

        $em = $this->getDoctrine()->getManager();

        $contact = new Contact();

        if($request->getMethod() == 'POST'){
            $nom = $request->get('name');
            $email = $request->get('email');
            $message = $request->get('message');

            $contact->setEmail($email);
            $contact->setNom($nom);
            $contact->setMessage($message);
            $contact->setCreatedAt(new \datetime);

            $em->persist($contact);
            $em->flush();

            $message = \Swift_Message::newInstance()
                ->setSubject('Message de '.$nom)
                ->setFrom($email)
                ->setTo('info@next-bus.net')
                ->setBody(
                    $this->renderView(
                    // app/Resources/views/Emails/registration.html.twig
                        'Emails/contact.html.twig',
                        array('nom' => $nom, 'email' => $email, 'message' => $message)
                    ),
                    'text/html'
                )
            ;
            $this->get('mailer')->send($message);

            $request->getSession()->getFlashBag()->add('notice', 'Votre message a bien été enregistrée. Nous vous donnerons suite très bientôt !');
            return $this->redirect($this->generateUrl('nb_main_contact'));
        }


        return $this->render('NBMainBundle::contact.html.twig', [
        ]);
    }

    public function promoAction(){

        return $this->render('NBMainBundle::promotion.html.twig', [
        ]);
    }

    public function newsletterAction(Request $request){

        if($request->getMethod() == 'POST'){
            $newsletter = new Newsletter();

            $newsletter->setEmail($request->get('email'));
            $newsletter->setCreatedAt(new \datetime);

            $request->getSession()->getFlashBag()->add('notice', 'Merci pour votre confiance !');
            return $this->redirect($request->headers->get('referer'));

        }
    }

}