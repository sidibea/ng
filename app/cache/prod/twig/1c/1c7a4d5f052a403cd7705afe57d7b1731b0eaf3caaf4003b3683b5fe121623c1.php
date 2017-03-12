<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_32c33fef53b846c17fc8c33481cb2663e47e3f8f6de659b8cb4645e52559e078 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NBMainBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NBMainBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_565124102bf36caf87b1a8d9152269b928ea2149bac1bd3855b2f7033803f4dd = $this->env->getExtension("native_profiler");
        $__internal_565124102bf36caf87b1a8d9152269b928ea2149bac1bd3855b2f7033803f4dd->enter($__internal_565124102bf36caf87b1a8d9152269b928ea2149bac1bd3855b2f7033803f4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_565124102bf36caf87b1a8d9152269b928ea2149bac1bd3855b2f7033803f4dd->leave($__internal_565124102bf36caf87b1a8d9152269b928ea2149bac1bd3855b2f7033803f4dd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ac555e4c9be710ef55ea9e791fbd682c531d7b51b3a6d35914149822a2f85c4 = $this->env->getExtension("native_profiler");
        $__internal_6ac555e4c9be710ef55ea9e791fbd682c531d7b51b3a6d35914149822a2f85c4->enter($__internal_6ac555e4c9be710ef55ea9e791fbd682c531d7b51b3a6d35914149822a2f85c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Profile ";
        
        $__internal_6ac555e4c9be710ef55ea9e791fbd682c531d7b51b3a6d35914149822a2f85c4->leave($__internal_6ac555e4c9be710ef55ea9e791fbd682c531d7b51b3a6d35914149822a2f85c4_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_dd72a66acc9977bfdfa8572d05ccb69f12ded8cc0fdd57672e708d5e78711ff4 = $this->env->getExtension("native_profiler");
        $__internal_dd72a66acc9977bfdfa8572d05ccb69f12ded8cc0fdd57672e708d5e78711ff4->enter($__internal_dd72a66acc9977bfdfa8572d05ccb69f12ded8cc0fdd57672e708d5e78711ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "<div class=\"page-title-container\">
    <div class=\"container\">
        <div class=\"page-title pull-left\">
            <h2 class=\"entry-title\">Mon Compte</h2>
        </div>
        <ul class=\"breadcrumbs pull-right\">
            <li><a href=\"#\">ACCUEIL</a></li>
            <li class=\"active\">Mon Compte</li>
        </ul>
    </div>
</div>
    <section id=\"content\" class=\"gray-area\">
        <div class=\"container\">
            <div id=\"main\">
                <div class=\"tab-container full-width-style arrow-left dashboard\">
                    <ul class=\"tabs\">
                        <li class=\"active\"><a data-toggle=\"tab\" href=\"#dashboard\"><i class=\"soap-icon-anchor circle\"></i>Tableau de Bord</a></li>
                        <li class=\"\"><a data-toggle=\"tab\" href=\"#profile\"><i class=\"soap-icon-user circle\"></i>Profil</a></li>
                        <li class=\"\"><a data-toggle=\"tab\" href=\"#booking\"><i class=\"soap-icon-businessbag circle\"></i>Réservations</a></li>
                        <li class=\"\"><a data-toggle=\"tab\" href=\"#settings\"><i class=\"soap-icon-settings circle\"></i>Réglages</a></li>
                    </ul>
                    <div class=\"tab-content\">
                        <div id=\"dashboard\" class=\"tab-pane fade in active\">
                            <h1 class=\"no-margin skin-color\">Bonjour ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
        echo ", Bienvenue à nextBus !</h1>
                            <p>Tous vos voyages réservés avec nous apparaîtront ici et vous serez en mesure de gérer tout!</p>
                            <br />

                            <div class=\"notification-area\">
                                <div class=\"info-box block\">
                                    <span class=\"close\"></span>
                                    <p>Ceci est votre tableau de bord, l'endroit idéal pour vérifier votre profil,
                                        afficher des informations de voyage à venir, et bien plus encore.</p>
                                    <br />
                                    <ul class=\"circle\">
                                        <li><span class=\"skin-color\">Apprenez comment ça marche</span> — Regardez une courte vidéo qui vous montre comment fonctionne nextBus.</li>
                                        <li><span class=\"skin-color\">Obtenir de l'aide</span> — Consultez notre section d'aide et nos FAQ pour commencer à utiliser nextBus. </li>
                                    </ul>
                                </div>
                            </div>

                            <div class=\"row block\">

                                <div class=\"col-md-12\">
                                    <h2>Activités Récentes </h2>
                                    <div class=\"recent-activity\">
                                        <ul>
                                            ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recentActivity"]) ? $context["recentActivity"] : $this->getContext($context, "recentActivity")));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 54
            echo "                                                <li>
                                                    <a href=\"#\">
                                                        <i class=\"icon soap-icon-plane-right circle takeoff-effect yellow-color\"></i>
                                                        <span class=\"price\"><small>Tarifs</small>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["val"], "voyages", array()), "prix", array()), "html", null, true);
            echo " FCFA</span>
                                                        <h4 class=\"box-title\">
                                                            ";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["val"], "voyages", array()), "axes", array()), "nom", array()), "html", null, true);
            echo "
                                                        </h4>
                                                    </a>
                                                </li>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class=\"row\">
                                ";
        // line 70
        $this->loadTemplate("FOSUserBundle:Profile:footer.html.twig", "FOSUserBundle:Profile:show.html.twig", 70)->display($context);
        // line 71
        echo "
                            </div>
                        </div>
                        <div id=\"profile\" class=\"tab-pane fade\">
                            <div class=\"view-profile\">
                                <article class=\"image-box style2 box innerstyle personal-details\">
                                    <figure>
                                        <a title=\"\" href=\"#\"><img width=\"270\" height=\"263\" alt=\"\" src=\"http://placehold.it/270x263\"></a>
                                    </figure>
                                    <div class=\"details\">
                                        <a href=\"#\" class=\"button btn-mini pull-right edit-profile-btn \">MODIFIER PROFIL</a>
                                        <h2 class=\"box-title fullname\"> ";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo "</h2>
                                        <dl class=\"term-description\">
                                            <dt>Nom d'utilisateur:</dt><dd>";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "</dd>
                                            <dt>Nom:</dt><dd>";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo "</dd>
                                            <dt>Prénom:</dt><dd>";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
        echo "</dd>
                                            <dt>Numéro de telephone:</dt><dd>";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "mob", array()), "html", null, true);
        echo "-HELLO</dd>
                                            <dt>Adresse:</dt><dd>";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "adresse", array()), "html", null, true);
        echo "</dd>
                                            <dt>Ville:</dt><dd>Paris,France</dd>
                                            <dt>Pays:</dt><dd>United States of america</dd>
                                        </dl>
                                    </div>
                                </article>
                                <hr>
                                <div class=\"row\">
                                    ";
        // line 96
        $this->loadTemplate("FOSUserBundle:Profile:footer.html.twig", "FOSUserBundle:Profile:show.html.twig", 96)->display($context);
        // line 97
        echo "                                </div>
                            </div>
                            <div class=\"edit-profile\">
                                ";
        // line 100
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                                    <h2>Détails personnels</h2>
                                    <div class=\"col-sm-9 no-padding no-float\">
                                        <div class=\"row form-group\">
                                            <div class=\"col-sms-6 col-sm-6\">
                                                <label>Nom</label>
                                                <input type=\"text\" name=\"_nom\" value=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo "\"  class=\"input-text full-width\" placeholder=\"\">
                                            </div>
                                            <div class=\"col-sms-6 col-sm-6\">
                                                <label>Prenom</label>
                                                <input type=\"text\" name=\"_prenom\" value=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
        echo "\" class=\"input-text full-width\" placeholder=\"\">
                                            </div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <div class=\"col-sms-12 col-sm-12\">
                                                <label>Email Address</label>
                                                <input type=\"text\" name=\"_email\" value=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "\" class=\"input-text full-width\" placeholder=\"\">
                                            </div>
                                        </div>
                                        <div class=\"row form-group\">

                                            <div class=\"col-sms-12 col-sm-12\">
                                                <label>Numéro de Téléphone</label>
                                                <input type=\"text\" name=\"_mob\" value=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "mob", array()), "html", null, true);
        echo "\" class=\"input-text full-width\" placeholder=\"\">
                                            </div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <label>Date de  naissance</label>
                                            <div class=\"datepicker\">
                                                <input type=\"text\" required value=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "dob", array()), "html", null, true);
        echo "\" name=\"_dob\" class=\"input-text datepicker-wrap full-width\" placeholder=\"ex. DD/MM/AAAA\" />
                                            </div>
                                        </div>
                                        <hr>
                                        <h2>Contact </h2>
                                        <div class=\"row form-group\">
                                            <div class=\"col-sms-6 col-sm-6\">
                                                <label>Adresse</label>
                                                <input type=\"text\" name=\"_adresse\" value=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "adresse", array()), "html", null, true);
        echo "\" class=\"input-text full-width\">
                                            </div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <div class=\"col-sms-6 col-sm-6\">
                                                <label>Ville</label>
                                                <input type=\"text\" name=\"_ville\" value=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ville", array()), "html", null, true);
        echo "\" class=\"input-text full-width\">
                                            </div>
                                            <div class=\"col-sms-6 col-sm-6\">
                                                <label>Pays</label>
                                                    <div class=\"selector\">
                                                        <select name=\"_pays\" class=\"full-width\">
                                                            <option value=\"Mali\" ";
        // line 149
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pays", array()) == "Mali")) {
            echo " SELECTED ";
        }
        echo " >Mali (+223)</option>
                                                            <option value=\"Burkina Faso\" ";
        // line 150
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pays", array()) == "Burkina Faso")) {
            echo " SELECTED ";
        }
        echo ">Burkina Faso (+226)</option>
                                                            <option value=\"Côte d'ivoire\" ";
        // line 151
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pays", array()) == "Côte d'ivoire")) {
            echo " SELECTED ";
        }
        echo ">Côte d'ivoire (+225)</option>
                                                            <option value=\"Niger\" ";
        // line 152
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pays", array()) == "Niger")) {
            echo " SELECTED ";
        }
        echo ">Niger (+227)</option>
                                                            <option value=\"Sénégal\" ";
        // line 153
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pays", array()) == "Sénégal")) {
            echo " SELECTED ";
        }
        echo ">Sénégal (+221)</option>
                                                            <option value=\"Bénin\" ";
        // line 154
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "pays", array()) == "Bénin")) {
            echo " SELECTED ";
        }
        echo ">Bénin (+229)</option>
                                                        </select>
                                                    </div>
                                            </div>
                                        </div>
                                        <hr>

                                        <div class=\"from-group\">
                                            <button type=\"submit\" name=\"_submit\" class=\"btn-medium col-sms-6 col-sm-4\">UPDATE SETTINGS</button>
                                        </div>

                                    </div>
                                ";
        // line 166
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                                ";
        // line 167
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                            </div>
                        </div>
                        <div id=\"booking\" class=\"tab-pane fade\">
                            <h2>Voyages que vous avez réservés!</h2>

                            <div class=\"booking-history\">
                                ";
        // line 174
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 175
            echo "                                    <div class=\"booking-info clearfix\">
                                        <div class=\"date\">
                                            <label class=\"month\">";
            // line 177
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["val"], "doj", array()), "M"), "html", null, true);
            echo "</label>
                                            <label class=\"date\">";
            // line 178
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["val"], "doj", array()), "d"), "html", null, true);
            echo "</label>
                                            <label class=\"day\">";
            // line 179
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["val"], "doj", array()), "D"), "html", null, true);
            echo "</label>
                                        </div>
                                        <h4 class=\"box-title\"><i class=\"icon soap-icon-plane-right takeoff-effect yellow-color circle\"></i>";
            // line 181
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["val"], "voyages", array()), "axes", array()), "nom", array()), "html", null, true);
            echo "</h4>
                                        <dl class=\"info\">
                                            <dt>VOYAGE ID</dt>
                                            <dd>";
            // line 184
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["val"], "tickets", array()), "ticketNo", array()), "html", null, true);
            echo "</dd>
                                            <dt>réserver le</dt>
                                            <dd>";
            // line 186
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["val"], "doj", array()), "D, d M Y"), "html", null, true);
            echo "</dd>
                                        </dl>
                                        ";
            // line 188
            if ((twig_date_format_filter($this->env, $this->getAttribute($context["val"], "doj", array()), "Y-m-d") < twig_date_format_filter($this->env, "now", "Y-m-d"))) {
                // line 189
                echo "                                            <button class=\"btn-mini bg-green status\">A VENIR</button>
                                        ";
            } else {
                // line 191
                echo "                                            <button class=\"btn-mini status\">DEPASSE</button>
                                        ";
            }
            // line 193
            echo "                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "                        </div>
                    </div>

                        
                        <div id=\"settings\" class=\"tab-pane fade\">
                            <h2>Account Settings</h2>
                            <h5 class=\"skin-color\">Change Your Password</h5>
                            <form >
                                <div class=\"row form-group\">
                                    <div class=\"col-xs-12 col-sm-6 col-md-4\">
                                        <label>Old Password</label>
                                        <input type=\"text\" class=\"input-text full-width\">
                                    </div>
                                </div>
                                <div class=\"row form-group\">
                                    <div class=\"col-xs-12 col-sm-6 col-md-4\">
                                        <label>Enter New Password</label>
                                        <input type=\"text\" class=\"input-text full-width\">
                                    </div>
                                </div>
                                <div class=\"row form-group\">
                                    <div class=\"col-xs-12 col-sm-6 col-md-4\">
                                        <label>Confirm New password</label>
                                        <input type=\"text\" class=\"input-text full-width\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <button class=\"btn-medium\">UPDATE PASSWORD</button>
                                </div>
                            </form>
                            <hr>
                            <h5 class=\"skin-color\">Change Your Email</h5>
                            <form>
                                <div class=\"row form-group\">
                                    <div class=\"col-xs-12 col-sm-6 col-md-4\">
                                        <label>Old email</label>
                                        <input type=\"text\" class=\"input-text full-width\">
                                    </div>
                                </div>
                                <div class=\"row form-group\">
                                    <div class=\"col-xs-12 col-sm-6 col-md-4\">
                                        <label>Enter New Email</label>
                                        <input type=\"text\" class=\"input-text full-width\">
                                    </div>
                                </div>
                                <div class=\"row form-group\">
                                    <div class=\"col-xs-12 col-sm-6 col-md-4\">
                                        <label>Confirm New Email</label>
                                        <input type=\"text\" class=\"input-text full-width\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <button class=\"btn-medium\">UPDATE EMAIL ADDRESS</button>
                                </div>
                            </form>
                            <hr>
                            <h5 class=\"skin-color\">Send Me Emails When</h5>
                            <form>
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\"> Travelo has periodic offers and deals on really cool destinations.
                                    </label>
                                </div>
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\"> Travelo has fun company news, as well as periodic emails.
                                    </label>
                                </div>
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\"> I have an upcoming reservation.
                                    </label>
                                </div>
                                <button class=\"btn-medium uppercase\">Update All Settings</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



";
        
        $__internal_dd72a66acc9977bfdfa8572d05ccb69f12ded8cc0fdd57672e708d5e78711ff4->leave($__internal_dd72a66acc9977bfdfa8572d05ccb69f12ded8cc0fdd57672e708d5e78711ff4_prof);

    }

    // line 281
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_aab4bd8ef5e15927e50bf3c8a5280be688ac5ab6f8962a50fa60d18971780ba6 = $this->env->getExtension("native_profiler");
        $__internal_aab4bd8ef5e15927e50bf3c8a5280be688ac5ab6f8962a50fa60d18971780ba6->enter($__internal_aab4bd8ef5e15927e50bf3c8a5280be688ac5ab6f8962a50fa60d18971780ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 282
        echo "    <script type=\"text/javascript\">
        tjq(document).ready(function() {
            tjq(\"#profile .edit-profile-btn\").click(function(e) {
                e.preventDefault();
                tjq(\".view-profile\").fadeOut();
                tjq(\".edit-profile\").fadeIn();
            });

            setTimeout(function() {
                tjq(\".notification-area\").append('<div class=\"info-box block\"><span class=\"close\"></span><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ab quis a dolorem, placeat eos doloribus esse repellendus quasi libero illum dolore. Esse minima voluptas magni impedit, iusto, obcaecati dignissimos.</p></div>');
            }, 10000);
        });
        tjq('a[href=\"#profile\"]').on('shown.bs.tab', function (e) {
            tjq(\".view-profile\").show();
            tjq(\".edit-profile\").hide();
        });
    </script>
";
        
        $__internal_aab4bd8ef5e15927e50bf3c8a5280be688ac5ab6f8962a50fa60d18971780ba6->leave($__internal_aab4bd8ef5e15927e50bf3c8a5280be688ac5ab6f8962a50fa60d18971780ba6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  479 => 282,  473 => 281,  382 => 195,  375 => 193,  371 => 191,  367 => 189,  365 => 188,  360 => 186,  355 => 184,  349 => 181,  344 => 179,  340 => 178,  336 => 177,  332 => 175,  328 => 174,  318 => 167,  314 => 166,  297 => 154,  291 => 153,  285 => 152,  279 => 151,  273 => 150,  267 => 149,  258 => 143,  249 => 137,  238 => 129,  229 => 123,  219 => 116,  210 => 110,  203 => 106,  194 => 100,  189 => 97,  187 => 96,  176 => 88,  172 => 87,  168 => 86,  164 => 85,  160 => 84,  153 => 82,  140 => 71,  138 => 70,  130 => 64,  119 => 59,  114 => 57,  109 => 54,  105 => 53,  79 => 30,  54 => 7,  48 => 6,  36 => 3,  11 => 1,);
    }
}
/* {% extends "NBMainBundle::layout.html.twig" %}*/
/* */
/* {% block title %} Profile {% endblock %}*/
/* */
/* */
/* {% block content %}*/
/* <div class="page-title-container">*/
/*     <div class="container">*/
/*         <div class="page-title pull-left">*/
/*             <h2 class="entry-title">Mon Compte</h2>*/
/*         </div>*/
/*         <ul class="breadcrumbs pull-right">*/
/*             <li><a href="#">ACCUEIL</a></li>*/
/*             <li class="active">Mon Compte</li>*/
/*         </ul>*/
/*     </div>*/
/* </div>*/
/*     <section id="content" class="gray-area">*/
/*         <div class="container">*/
/*             <div id="main">*/
/*                 <div class="tab-container full-width-style arrow-left dashboard">*/
/*                     <ul class="tabs">*/
/*                         <li class="active"><a data-toggle="tab" href="#dashboard"><i class="soap-icon-anchor circle"></i>Tableau de Bord</a></li>*/
/*                         <li class=""><a data-toggle="tab" href="#profile"><i class="soap-icon-user circle"></i>Profil</a></li>*/
/*                         <li class=""><a data-toggle="tab" href="#booking"><i class="soap-icon-businessbag circle"></i>Réservations</a></li>*/
/*                         <li class=""><a data-toggle="tab" href="#settings"><i class="soap-icon-settings circle"></i>Réglages</a></li>*/
/*                     </ul>*/
/*                     <div class="tab-content">*/
/*                         <div id="dashboard" class="tab-pane fade in active">*/
/*                             <h1 class="no-margin skin-color">Bonjour {{ app.user.prenom }}, Bienvenue à nextBus !</h1>*/
/*                             <p>Tous vos voyages réservés avec nous apparaîtront ici et vous serez en mesure de gérer tout!</p>*/
/*                             <br />*/
/* */
/*                             <div class="notification-area">*/
/*                                 <div class="info-box block">*/
/*                                     <span class="close"></span>*/
/*                                     <p>Ceci est votre tableau de bord, l'endroit idéal pour vérifier votre profil,*/
/*                                         afficher des informations de voyage à venir, et bien plus encore.</p>*/
/*                                     <br />*/
/*                                     <ul class="circle">*/
/*                                         <li><span class="skin-color">Apprenez comment ça marche</span> — Regardez une courte vidéo qui vous montre comment fonctionne nextBus.</li>*/
/*                                         <li><span class="skin-color">Obtenir de l'aide</span> — Consultez notre section d'aide et nos FAQ pour commencer à utiliser nextBus. </li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="row block">*/
/* */
/*                                 <div class="col-md-12">*/
/*                                     <h2>Activités Récentes </h2>*/
/*                                     <div class="recent-activity">*/
/*                                         <ul>*/
/*                                             {% for key, val in recentActivity %}*/
/*                                                 <li>*/
/*                                                     <a href="#">*/
/*                                                         <i class="icon soap-icon-plane-right circle takeoff-effect yellow-color"></i>*/
/*                                                         <span class="price"><small>Tarifs</small>{{ val.voyages.prix }} FCFA</span>*/
/*                                                         <h4 class="box-title">*/
/*                                                             {{ val.voyages.axes.nom }}*/
/*                                                         </h4>*/
/*                                                     </a>*/
/*                                                 </li>*/
/*                                             {% endfor %}*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <hr>*/
/*                             <div class="row">*/
/*                                 {% include 'FOSUserBundle:Profile:footer.html.twig' %}*/
/* */
/*                             </div>*/
/*                         </div>*/
/*                         <div id="profile" class="tab-pane fade">*/
/*                             <div class="view-profile">*/
/*                                 <article class="image-box style2 box innerstyle personal-details">*/
/*                                     <figure>*/
/*                                         <a title="" href="#"><img width="270" height="263" alt="" src="http://placehold.it/270x263"></a>*/
/*                                     </figure>*/
/*                                     <div class="details">*/
/*                                         <a href="#" class="button btn-mini pull-right edit-profile-btn ">MODIFIER PROFIL</a>*/
/*                                         <h2 class="box-title fullname"> {{ app.user.prenom }} {{ app.user.nom }}</h2>*/
/*                                         <dl class="term-description">*/
/*                                             <dt>Nom d'utilisateur:</dt><dd>{{ app.user.email }}</dd>*/
/*                                             <dt>Nom:</dt><dd>{{ app.user.nom }}</dd>*/
/*                                             <dt>Prénom:</dt><dd>{{ app.user.prenom }}</dd>*/
/*                                             <dt>Numéro de telephone:</dt><dd>{{ app.user.mob }}-HELLO</dd>*/
/*                                             <dt>Adresse:</dt><dd>{{ app.user.adresse }}</dd>*/
/*                                             <dt>Ville:</dt><dd>Paris,France</dd>*/
/*                                             <dt>Pays:</dt><dd>United States of america</dd>*/
/*                                         </dl>*/
/*                                     </div>*/
/*                                 </article>*/
/*                                 <hr>*/
/*                                 <div class="row">*/
/*                                     {% include 'FOSUserBundle:Profile:footer.html.twig' %}*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="edit-profile">*/
/*                                 {{ form_start(form) }}*/
/*                                     <h2>Détails personnels</h2>*/
/*                                     <div class="col-sm-9 no-padding no-float">*/
/*                                         <div class="row form-group">*/
/*                                             <div class="col-sms-6 col-sm-6">*/
/*                                                 <label>Nom</label>*/
/*                                                 <input type="text" name="_nom" value="{{ app.user.nom }}"  class="input-text full-width" placeholder="">*/
/*                                             </div>*/
/*                                             <div class="col-sms-6 col-sm-6">*/
/*                                                 <label>Prenom</label>*/
/*                                                 <input type="text" name="_prenom" value="{{ app.user.prenom }}" class="input-text full-width" placeholder="">*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="row form-group">*/
/*                                             <div class="col-sms-12 col-sm-12">*/
/*                                                 <label>Email Address</label>*/
/*                                                 <input type="text" name="_email" value="{{ app.user.email }}" class="input-text full-width" placeholder="">*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="row form-group">*/
/* */
/*                                             <div class="col-sms-12 col-sm-12">*/
/*                                                 <label>Numéro de Téléphone</label>*/
/*                                                 <input type="text" name="_mob" value="{{ app.user.mob }}" class="input-text full-width" placeholder="">*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="row form-group">*/
/*                                             <label>Date de  naissance</label>*/
/*                                             <div class="datepicker">*/
/*                                                 <input type="text" required value="{{ app.user.dob }}" name="_dob" class="input-text datepicker-wrap full-width" placeholder="ex. DD/MM/AAAA" />*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <hr>*/
/*                                         <h2>Contact </h2>*/
/*                                         <div class="row form-group">*/
/*                                             <div class="col-sms-6 col-sm-6">*/
/*                                                 <label>Adresse</label>*/
/*                                                 <input type="text" name="_adresse" value="{{ app.user.adresse }}" class="input-text full-width">*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="row form-group">*/
/*                                             <div class="col-sms-6 col-sm-6">*/
/*                                                 <label>Ville</label>*/
/*                                                 <input type="text" name="_ville" value="{{ app.user.ville }}" class="input-text full-width">*/
/*                                             </div>*/
/*                                             <div class="col-sms-6 col-sm-6">*/
/*                                                 <label>Pays</label>*/
/*                                                     <div class="selector">*/
/*                                                         <select name="_pays" class="full-width">*/
/*                                                             <option value="Mali" {% if(app.user.pays == 'Mali') %} SELECTED {% endif %} >Mali (+223)</option>*/
/*                                                             <option value="Burkina Faso" {% if(app.user.pays == 'Burkina Faso') %} SELECTED {% endif %}>Burkina Faso (+226)</option>*/
/*                                                             <option value="Côte d'ivoire" {% if(app.user.pays == 'Côte d\'ivoire') %} SELECTED {% endif %}>Côte d'ivoire (+225)</option>*/
/*                                                             <option value="Niger" {% if(app.user.pays == 'Niger') %} SELECTED {% endif %}>Niger (+227)</option>*/
/*                                                             <option value="Sénégal" {% if(app.user.pays == 'Sénégal') %} SELECTED {% endif %}>Sénégal (+221)</option>*/
/*                                                             <option value="Bénin" {% if(app.user.pays == 'Bénin') %} SELECTED {% endif %}>Bénin (+229)</option>*/
/*                                                         </select>*/
/*                                                     </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <hr>*/
/* */
/*                                         <div class="from-group">*/
/*                                             <button type="submit" name="_submit" class="btn-medium col-sms-6 col-sm-4">UPDATE SETTINGS</button>*/
/*                                         </div>*/
/* */
/*                                     </div>*/
/*                                 {{ form_rest(form) }}*/
/*                                 {{ form_end(form) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div id="booking" class="tab-pane fade">*/
/*                             <h2>Voyages que vous avez réservés!</h2>*/
/* */
/*                             <div class="booking-history">*/
/*                                 {% for key, val in reservation %}*/
/*                                     <div class="booking-info clearfix">*/
/*                                         <div class="date">*/
/*                                             <label class="month">{{ val.doj | date('M') }}</label>*/
/*                                             <label class="date">{{ val.doj | date('d') }}</label>*/
/*                                             <label class="day">{{ val.doj | date('D') }}</label>*/
/*                                         </div>*/
/*                                         <h4 class="box-title"><i class="icon soap-icon-plane-right takeoff-effect yellow-color circle"></i>{{ val.voyages.axes.nom }}</h4>*/
/*                                         <dl class="info">*/
/*                                             <dt>VOYAGE ID</dt>*/
/*                                             <dd>{{ val.tickets.ticketNo }}</dd>*/
/*                                             <dt>réserver le</dt>*/
/*                                             <dd>{{ val.doj |date('D, d M Y') }}</dd>*/
/*                                         </dl>*/
/*                                         {% if val.doj |date('Y-m-d') < "now"|date('Y-m-d') %}*/
/*                                             <button class="btn-mini bg-green status">A VENIR</button>*/
/*                                         {% else %}*/
/*                                             <button class="btn-mini status">DEPASSE</button>*/
/*                                         {% endif %}*/
/*                                     </div>*/
/*                                 {% endfor %}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                         */
/*                         <div id="settings" class="tab-pane fade">*/
/*                             <h2>Account Settings</h2>*/
/*                             <h5 class="skin-color">Change Your Password</h5>*/
/*                             <form >*/
/*                                 <div class="row form-group">*/
/*                                     <div class="col-xs-12 col-sm-6 col-md-4">*/
/*                                         <label>Old Password</label>*/
/*                                         <input type="text" class="input-text full-width">*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="row form-group">*/
/*                                     <div class="col-xs-12 col-sm-6 col-md-4">*/
/*                                         <label>Enter New Password</label>*/
/*                                         <input type="text" class="input-text full-width">*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="row form-group">*/
/*                                     <div class="col-xs-12 col-sm-6 col-md-4">*/
/*                                         <label>Confirm New password</label>*/
/*                                         <input type="text" class="input-text full-width">*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <button class="btn-medium">UPDATE PASSWORD</button>*/
/*                                 </div>*/
/*                             </form>*/
/*                             <hr>*/
/*                             <h5 class="skin-color">Change Your Email</h5>*/
/*                             <form>*/
/*                                 <div class="row form-group">*/
/*                                     <div class="col-xs-12 col-sm-6 col-md-4">*/
/*                                         <label>Old email</label>*/
/*                                         <input type="text" class="input-text full-width">*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="row form-group">*/
/*                                     <div class="col-xs-12 col-sm-6 col-md-4">*/
/*                                         <label>Enter New Email</label>*/
/*                                         <input type="text" class="input-text full-width">*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="row form-group">*/
/*                                     <div class="col-xs-12 col-sm-6 col-md-4">*/
/*                                         <label>Confirm New Email</label>*/
/*                                         <input type="text" class="input-text full-width">*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <button class="btn-medium">UPDATE EMAIL ADDRESS</button>*/
/*                                 </div>*/
/*                             </form>*/
/*                             <hr>*/
/*                             <h5 class="skin-color">Send Me Emails When</h5>*/
/*                             <form>*/
/*                                 <div class="checkbox">*/
/*                                     <label>*/
/*                                         <input type="checkbox"> Travelo has periodic offers and deals on really cool destinations.*/
/*                                     </label>*/
/*                                 </div>*/
/*                                 <div class="checkbox">*/
/*                                     <label>*/
/*                                         <input type="checkbox"> Travelo has fun company news, as well as periodic emails.*/
/*                                     </label>*/
/*                                 </div>*/
/*                                 <div class="checkbox">*/
/*                                     <label>*/
/*                                         <input type="checkbox"> I have an upcoming reservation.*/
/*                                     </label>*/
/*                                 </div>*/
/*                                 <button class="btn-medium uppercase">Update All Settings</button>*/
/*                             </form>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block scripts %}*/
/*     <script type="text/javascript">*/
/*         tjq(document).ready(function() {*/
/*             tjq("#profile .edit-profile-btn").click(function(e) {*/
/*                 e.preventDefault();*/
/*                 tjq(".view-profile").fadeOut();*/
/*                 tjq(".edit-profile").fadeIn();*/
/*             });*/
/* */
/*             setTimeout(function() {*/
/*                 tjq(".notification-area").append('<div class="info-box block"><span class="close"></span><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ab quis a dolorem, placeat eos doloribus esse repellendus quasi libero illum dolore. Esse minima voluptas magni impedit, iusto, obcaecati dignissimos.</p></div>');*/
/*             }, 10000);*/
/*         });*/
/*         tjq('a[href="#profile"]').on('shown.bs.tab', function (e) {*/
/*             tjq(".view-profile").show();*/
/*             tjq(".edit-profile").hide();*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
