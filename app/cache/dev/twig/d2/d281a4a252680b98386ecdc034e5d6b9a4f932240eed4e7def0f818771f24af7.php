<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_6c96cd83aeaba67b06d8138026d7af1ecf3252b12fa33fd1644e9f72c9bb2e33 extends Twig_Template
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
        $__internal_cb4c2336c261e48bbf7979613cf94e17f76dc26bee24fa7460fe6f5cddac9d29 = $this->env->getExtension("native_profiler");
        $__internal_cb4c2336c261e48bbf7979613cf94e17f76dc26bee24fa7460fe6f5cddac9d29->enter($__internal_cb4c2336c261e48bbf7979613cf94e17f76dc26bee24fa7460fe6f5cddac9d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb4c2336c261e48bbf7979613cf94e17f76dc26bee24fa7460fe6f5cddac9d29->leave($__internal_cb4c2336c261e48bbf7979613cf94e17f76dc26bee24fa7460fe6f5cddac9d29_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_49359f94c0cc9555ea301f700a57820a513d301f4bbba831411de61ddb8a076b = $this->env->getExtension("native_profiler");
        $__internal_49359f94c0cc9555ea301f700a57820a513d301f4bbba831411de61ddb8a076b->enter($__internal_49359f94c0cc9555ea301f700a57820a513d301f4bbba831411de61ddb8a076b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Profile ";
        
        $__internal_49359f94c0cc9555ea301f700a57820a513d301f4bbba831411de61ddb8a076b->leave($__internal_49359f94c0cc9555ea301f700a57820a513d301f4bbba831411de61ddb8a076b_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_749d1d2fbf8f39fc019ae1d31142943bdc50c8dbaf17abfc07de73554a6e44dd = $this->env->getExtension("native_profiler");
        $__internal_749d1d2fbf8f39fc019ae1d31142943bdc50c8dbaf17abfc07de73554a6e44dd->enter($__internal_749d1d2fbf8f39fc019ae1d31142943bdc50c8dbaf17abfc07de73554a6e44dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                                                ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "input-text input-large full-width", "placeholder" => "Entrez votre nom", "required" => "required")));
        echo "
                                            </div>
                                            <div class=\"col-sms-6 col-sm-6\">
                                                <label>Prenom</label>
                                                ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "input-text input-large full-width", "placeholder" => "Entrez votre prenom", "required" => "required")));
        echo "
                                            </div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <div class=\"col-sms-12 col-sm-12\">
                                                <label>Email Address</label>
                                                ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "input-text input-large full-width", "placeholder" => "Nom d'utilisateur", "required" => "required")));
        echo "
                                            </div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <div class=\"col-sms-12 col-sm-12\">
                                                <label>Numéro de Téléphone</label>
                                                ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mob", array()), 'widget', array("attr" => array("class" => "input-text input-large full-width", "placeholder" => "Entrez votre numero de téléphone", "required" => "required")));
        echo "
                                            </div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <label>Date de  naissance</label>
                                            <div class=\"datepicker\">
                                                ";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dob", array()), 'widget', array("attr" => array("class" => "input-text input-large full-width", "placeholder" => "JJ/MM/AAAA", "required" => "required")));
        echo "

                                            </div>
                                        </div>
                                        <hr>
                                        <h2>Contact </h2>
                                        <div class=\"row form-group\">
                                            <div class=\"col-sms-6 col-sm-6\">
                                                <label>Adresse</label>
                                                ";
        // line 137
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "input-text input-large full-width", "placeholder" => "Entrez votre adresse", "required" => "required")));
        echo "
                                            </div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <div class=\"col-sms-6 col-sm-6\">
                                                <label>Ville</label>
                                                ";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'widget', array("attr" => array("class" => "input-text input-large full-width", "placeholder" => "Entrez votre adresse", "required" => "required")));
        echo "
                                            </div>
                                            <div class=\"col-sms-6 col-sm-6\">
                                                <label>Pays</label>
                                                    <div class=\"selector\">
                                                        ";
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'widget', array("attr" => array("class" => "input-text input-large full-width", "placeholder" => "Entrez votre adresse", "required" => "required")));
        echo "
                                                    </div>
                                            </div>
                                        </div>
                                        <hr>

                                        <div class=\"from-group\">
                                            <button type=\"submit\" name=\"_submit\" class=\"btn-medium col-sms-6 col-sm-4\">UPDATE SETTINGS</button>
                                        </div>

                                    </div>
                                ";
        // line 159
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                                ";
        // line 160
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                            </div>
                        </div>
                        <div id=\"booking\" class=\"tab-pane fade\">
                            <h2>Voyages que vous avez réservés!</h2>

                            <div class=\"booking-history\">
                                ";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 168
            echo "                                    <div class=\"booking-info clearfix\">
                                        <div class=\"date\">
                                            <label class=\"month\">";
            // line 170
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["val"], "doj", array()), "M"), "html", null, true);
            echo "</label>
                                            <label class=\"date\">";
            // line 171
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["val"], "doj", array()), "d"), "html", null, true);
            echo "</label>
                                            <label class=\"day\">";
            // line 172
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["val"], "doj", array()), "D"), "html", null, true);
            echo "</label>
                                        </div>
                                        <h4 class=\"box-title\"><i class=\"icon soap-icon-plane-right takeoff-effect yellow-color circle\"></i>";
            // line 174
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["val"], "voyages", array()), "axes", array()), "nom", array()), "html", null, true);
            echo "</h4>
                                        <dl class=\"info\">
                                            <dt>VOYAGE ID</dt>
                                            <dd>";
            // line 177
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["val"], "tickets", array()), "ticketNo", array()), "html", null, true);
            echo "</dd>
                                            <dt>réserver le</dt>
                                            <dd>";
            // line 179
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["val"], "doj", array()), "D, d M Y"), "html", null, true);
            echo "</dd>
                                        </dl>
                                        ";
            // line 181
            if ((twig_date_format_filter($this->env, $this->getAttribute($context["val"], "doj", array()), "Y-m-d") < twig_date_format_filter($this->env, "now", "Y-m-d"))) {
                // line 182
                echo "                                            <button class=\"btn-mini bg-green status\">A VENIR</button>
                                        ";
            } else {
                // line 184
                echo "                                            <button class=\"btn-mini status\">DEPASSE</button>
                                        ";
            }
            // line 186
            echo "                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
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
        
        $__internal_749d1d2fbf8f39fc019ae1d31142943bdc50c8dbaf17abfc07de73554a6e44dd->leave($__internal_749d1d2fbf8f39fc019ae1d31142943bdc50c8dbaf17abfc07de73554a6e44dd_prof);

    }

    // line 274
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_ca5001b56629e909097ae7affb36eafbfccaccb006e81c5e2fb0c6d8576adc2c = $this->env->getExtension("native_profiler");
        $__internal_ca5001b56629e909097ae7affb36eafbfccaccb006e81c5e2fb0c6d8576adc2c->enter($__internal_ca5001b56629e909097ae7affb36eafbfccaccb006e81c5e2fb0c6d8576adc2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 275
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
        
        $__internal_ca5001b56629e909097ae7affb36eafbfccaccb006e81c5e2fb0c6d8576adc2c->leave($__internal_ca5001b56629e909097ae7affb36eafbfccaccb006e81c5e2fb0c6d8576adc2c_prof);

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
        return array (  445 => 275,  439 => 274,  348 => 188,  341 => 186,  337 => 184,  333 => 182,  331 => 181,  326 => 179,  321 => 177,  315 => 174,  310 => 172,  306 => 171,  302 => 170,  298 => 168,  294 => 167,  284 => 160,  280 => 159,  266 => 148,  258 => 143,  249 => 137,  237 => 128,  228 => 122,  219 => 116,  210 => 110,  203 => 106,  194 => 100,  189 => 97,  187 => 96,  176 => 88,  172 => 87,  168 => 86,  164 => 85,  160 => 84,  153 => 82,  140 => 71,  138 => 70,  130 => 64,  119 => 59,  114 => 57,  109 => 54,  105 => 53,  79 => 30,  54 => 7,  48 => 6,  36 => 3,  11 => 1,);
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
/*                                                 {{ form_widget(form.nom, {'attr': {'class': 'input-text input-large full-width', 'placeholder' : 'Entrez votre nom', 'required': 'required' }}) }}*/
/*                                             </div>*/
/*                                             <div class="col-sms-6 col-sm-6">*/
/*                                                 <label>Prenom</label>*/
/*                                                 {{ form_widget(form.prenom, {'attr': {'class': 'input-text input-large full-width', 'placeholder' : 'Entrez votre prenom', 'required': 'required' }}) }}*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="row form-group">*/
/*                                             <div class="col-sms-12 col-sm-12">*/
/*                                                 <label>Email Address</label>*/
/*                                                 {{ form_widget(form.email, {'attr': {'class': 'input-text input-large full-width', 'placeholder' : 'Nom d\'utilisateur', 'required': 'required' }}) }}*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="row form-group">*/
/*                                             <div class="col-sms-12 col-sm-12">*/
/*                                                 <label>Numéro de Téléphone</label>*/
/*                                                 {{ form_widget(form.mob, {'attr': {'class': 'input-text input-large full-width', 'placeholder' : 'Entrez votre numero de téléphone', 'required': 'required' }}) }}*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="row form-group">*/
/*                                             <label>Date de  naissance</label>*/
/*                                             <div class="datepicker">*/
/*                                                 {{ form_widget(form.dob, {'attr': {'class': 'input-text input-large full-width', 'placeholder' : 'JJ/MM/AAAA', 'required': 'required' }}) }}*/
/* */
/*                                             </div>*/
/*                                         </div>*/
/*                                         <hr>*/
/*                                         <h2>Contact </h2>*/
/*                                         <div class="row form-group">*/
/*                                             <div class="col-sms-6 col-sm-6">*/
/*                                                 <label>Adresse</label>*/
/*                                                 {{ form_widget(form.adresse, {'attr': {'class': 'input-text input-large full-width', 'placeholder' : 'Entrez votre adresse', 'required': 'required' }}) }}*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="row form-group">*/
/*                                             <div class="col-sms-6 col-sm-6">*/
/*                                                 <label>Ville</label>*/
/*                                                 {{ form_widget(form.ville, {'attr': {'class': 'input-text input-large full-width', 'placeholder' : 'Entrez votre adresse', 'required': 'required' }}) }}*/
/*                                             </div>*/
/*                                             <div class="col-sms-6 col-sm-6">*/
/*                                                 <label>Pays</label>*/
/*                                                     <div class="selector">*/
/*                                                         {{ form_widget(form.pays, {'attr': {'class': 'input-text input-large full-width', 'placeholder' : 'Entrez votre adresse', 'required': 'required' }}) }}*/
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
