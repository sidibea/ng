<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // nb_main_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'nb_main_homepage');
            }

            return array (  '_controller' => 'NB\\MainBundle\\Controller\\MainController::indexAction',  '_route' => 'nb_main_homepage',);
        }

        // nb_main_listing
        if ($pathinfo === '/listing') {
            return array (  '_controller' => 'NB\\MainBundle\\Controller\\MainController::listingAction',  '_route' => 'nb_main_listing',);
        }

        // nb_main_infos_client
        if (0 === strpos($pathinfo, '/information-client') && preg_match('#^/information\\-client/(?P<travel_id>[^/]++)/(?P<dateJ>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'nb_main_infos_client')), array (  '_controller' => 'NB\\MainBundle\\Controller\\MainController::infosAction',));
        }

        // nb_main_payment
        if (0 === strpos($pathinfo, '/payments') && preg_match('#^/payments/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'nb_main_payment')), array (  '_controller' => 'NB\\MainBundle\\Controller\\MainController::paymentAction',));
        }

        // nb_main_callback
        if ($pathinfo === '/callback') {
            return array (  '_controller' => 'NB\\MainBundle\\Controller\\MainController::callbackAction',  '_route' => 'nb_main_callback',);
        }

        // nb_main_webhook
        if ($pathinfo === '/webhook') {
            return array (  '_controller' => 'NB\\MainBundle\\Controller\\MainController::webhookAction',  '_route' => 'nb_main_webhook',);
        }

        // nb_main_thanks_you
        if (0 === strpos($pathinfo, '/reservation/merci') && preg_match('#^/reservation/merci/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'nb_main_thanks_you')), array (  '_controller' => 'NB\\MainBundle\\Controller\\MainController::thanksAction',));
        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/cms')) {
                // nb_main_aboutus
                if ($pathinfo === '/cms/qui-sommes-nous') {
                    return array (  '_controller' => 'NB\\MainBundle\\Controller\\CMSController::aboutAction',  '_route' => 'nb_main_aboutus',);
                }

                // nb_main_preparer_voyage
                if ($pathinfo === '/cms/preparer-votre-voyage') {
                    return array (  '_controller' => 'NB\\MainBundle\\Controller\\CMSController::prepareAction',  '_route' => 'nb_main_preparer_voyage',);
                }

                // nb_main_devenir_partenaire
                if ($pathinfo === '/cms/devenir-partenaire') {
                    return array (  '_controller' => 'NB\\MainBundle\\Controller\\CMSController::partenaireAction',  '_route' => 'nb_main_devenir_partenaire',);
                }

            }

            // nb_main_contact
            if ($pathinfo === '/contactez-nous') {
                return array (  '_controller' => 'NB\\MainBundle\\Controller\\CMSController::contactAction',  '_route' => 'nb_main_contact',);
            }

        }

        // nb_main_promo
        if ($pathinfo === '/promotions') {
            return array (  '_controller' => 'NB\\MainBundle\\Controller\\CMSController::promoAction',  '_route' => 'nb_main_promo',);
        }

        // nb_main_newsletter_add
        if ($pathinfo === '/newsletter/add') {
            return array (  '_controller' => 'NB\\MainBundle\\Controller\\CMSController::newsletterAction',  '_route' => 'nb_main_newsletter_add',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'login_check');
            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        // fos_user_resetting_request
        if ($pathinfo === '/request') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_resetting_request;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
        }
        not_fos_user_resetting_request:

        // fos_user_resetting_send_email
        if ($pathinfo === '/send-email') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_fos_user_resetting_send_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
        }
        not_fos_user_resetting_send_email:

        // fos_user_resetting_check_email
        if ($pathinfo === '/check-email') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_user_resetting_check_email;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
        }
        not_fos_user_resetting_check_email:

        // fos_user_resetting_reset
        if (0 === strpos($pathinfo, '/reset') && preg_match('#^/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_resetting_reset;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
        }
        not_fos_user_resetting_reset:

        // fos_user_change_password
        if ($pathinfo === '/change-password/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/registration')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/registration') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_registration_register;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }
            not_fos_user_registration_register:

            if (0 === strpos($pathinfo, '/registration/c')) {
                // fos_user_registration_check_email
                if ($pathinfo === '/registration/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/registration/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/registration/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ($pathinfo === '/registration/confirmed') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    }
                    not_fos_user_registration_confirmed:

                }

            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
