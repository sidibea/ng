<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_9b1a1440a5657b29e4bcb09beb7b14c3b8a8ed3000dbd7a8f1f70625cef5a2dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'description' => array($this, 'block_description'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29b83fd022e517c7d70d67592881996b204b7285c334616a39c19dea5b9f6e4c = $this->env->getExtension("native_profiler");
        $__internal_29b83fd022e517c7d70d67592881996b204b7285c334616a39c19dea5b9f6e4c->enter($__internal_29b83fd022e517c7d70d67592881996b204b7285c334616a39c19dea5b9f6e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 8]>          <html class=\"ie ie8\"> <![endif]-->
<!--[if IE 9]>          <html class=\"ie ie9\"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>
    <!-- Page Title -->
    <title>Connexion |nextBus - La première plateforme d'achat et de réservation de billet de bus</title>

    <!-- Meta Tags -->
    <meta charset=\"utf-8\">
    <meta name=\"keywords\" content=\"voyage bus, bus voyage, billet de bus pas cher, bus mali, voyage car, bus pas cher mali, reservation bus, mali bus, billet de bus,
    billet bus, billet pas cher, prix billet, voyage mali, reservation nextBus, nextBus, reservation en ligne,
    plateforme de vente mali, plateforme de vente au mali, plateforme de vente de billet de bus, plateforme de vente
    de billet de bus au Mali, reserver, reserver mali, reserver au mali, achat de billet, billet mali,
    billet de bus mali, plateforme de reservation de billet de bus au Mali\" />

    <meta name=\"description\" content=\"";
        // line 17
        $this->displayBlock('description', $context, $blocks);
        echo "\">
    <meta name=\"author\" content=\"Next Group SARL\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"icon\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("favicon.png")), "html", null, true);
        echo "\" sizes=\"32x32\" type=\"image/png\">
    <!-- Theme Styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/css/bootstrap.min.css")), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/css/font-awesome.min.css")), "html", null, true);
        echo "\">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/css/animate.min.css")), "html", null, true);
        echo "\">

    <!-- Current Page Styles -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/components/revolution_slider/css/settings.css")), "html", null, true);
        echo "\" media=\"screen\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/components/revolution_slider/css/style.css")), "html", null, true);
        echo "\" media=\"screen\" />

    <!-- Main Style -->
    <link id=\"main-style\" rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/css/style.css")), "html", null, true);
        echo "\">
    <!-- Custom Styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/css/custom.css")), "html", null, true);
        echo "\">

    <!-- Updated Styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/css/updates.css")), "html", null, true);
        echo "\">

    <!-- Responsive Styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/css/responsive.css")), "html", null, true);
        echo "\">

    <!-- CSS for IE -->
    <!--[if lte IE 9]>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/css/ie.css")), "html", null, true);
        echo "\" />
    <![endif]-->


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type='text/javascript' src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
    <script type='text/javascript' src=\"http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js\"></script>
    <![endif]-->

</head>
<body class=\"soap-login-page style1 body-blank\">
<div id=\"page-wrapper\" class=\"wrapper-blank\">
    <header id=\"header\" class=\"navbar-static-top\">
        <a href=\"#mobile-menu-01\" data-toggle=\"collapse\" class=\"mobile-menu-toggle blue-bg\">Mobile Menu Toggle</a>
        <div class=\"container\">
            <h1 class=\"logo\">

            </h1>
        </div>
        <nav id=\"mobile-menu-01\" class=\"mobile-menu collapse menu-color-blue\">
            ";
        // line 66
        $this->loadTemplate("::includes/mobile_menu.html.twig", "FOSUserBundle:Resetting:request.html.twig", 66)->display($context);
        // line 67
        echo "
        </nav>
        <div id=\"travelo-signup\" class=\"travelo-signup-box travelo-box\">
            ";
        // line 70
        $this->loadTemplate("::includes/inscription.html.twig", "FOSUserBundle:Resetting:request.html.twig", 70)->display($context);
        // line 71
        echo "        </div>
        <div id=\"travelo-login\" class=\"travelo-login-box travelo-box\">
            ";
        // line 73
        $this->loadTemplate("::includes/login.html.twig", "FOSUserBundle:Resetting:request.html.twig", 73)->display($context);
        // line 74
        echo "        </div>
    </header>
    <section id=\"content\">
        <div class=\"container\">
            <div id=\"main\">
                <h1 class=\"logo block\">
                    <a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("nb_main_homepage");
        echo "\" title=\"nextBus - Accueil\">
                        <img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/images/logo2.png")), "html", null, true);
        echo "\" alt=\"Logo nextBus\" />
                    </a>
                </h1>
                <div class=\"text-center yellow-color box\" style=\"font-size: 4em; font-weight: 300; line-height: 1em;\">Bienvenue sur nextBus!</div>
                <p class=\"white-color block\" style=\"font-size: 1.5em;\">Ré-initialiser votre mot de passe</p>
                <div class=\"col-sm-8 col-md-6 col-lg-5 no-float no-padding center-block\">
                    <form action=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
                        <div>
                            ";
        // line 89
        if (array_key_exists("invalid_username", $context)) {
            // line 90
            echo "                                <p class=\"red-color\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</p>
                            ";
        }
        // line 92
        echo "                            <input type=\"text\" placeholder=\"Entrez votre adresse email\" id=\"username\" class=\"input-text input-large full-width\" name=\"username\" required=\"required\" />
                        </div>
                        <div><br>
                            <button type=\"submit\" class=\"btn-large full-width red\">";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer id=\"footer\">
        <div class=\"footer-wrapper\">
            <div class=\"container\">
                <nav id=\"main-menu\" role=\"navigation\" class=\"inline-block hidden-mobile\">
                    ";
        // line 106
        $this->loadTemplate("::includes/desktop_menu.html.twig", "FOSUserBundle:Resetting:request.html.twig", 106)->display($context);
        // line 107
        echo "                </nav>
                <div class=\"copyright\">
                    <p>&copy; ";
        // line 109
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " nextBus</p>
                </div>
            </div>
        </div>
    </footer>

</div>


<!-- Javascript -->
<script type=\"text/javascript\" src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/jquery-1.11.1.min.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.noconflict.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/modernizr.2.7.1.min.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/jquery-migrate-1.2.1.min.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.placeholder.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/jquery-ui.1.10.4.min.js")), "html", null, true);
        echo "\"></script>

<!-- Twitter Bootstrap -->
<script type=\"text/javascript\" src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/bootstrap.js")), "html", null, true);
        echo "\"></script>


<!-- parallax -->
<script type=\"text/javascript\" src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.stellar.min.js")), "html", null, true);
        echo "\"></script>

<!-- waypoint -->
<script type=\"text/javascript\" src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/waypoints.min.js")), "html", null, true);
        echo "\"></script>

<!-- load page Javascript -->
<script type=\"text/javascript\" src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/theme-scripts.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/scripts.js")), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\">
    enableChaser = 0; //disable chaser
</script>
</body>
</html>






";
        
        $__internal_29b83fd022e517c7d70d67592881996b204b7285c334616a39c19dea5b9f6e4c->leave($__internal_29b83fd022e517c7d70d67592881996b204b7285c334616a39c19dea5b9f6e4c_prof);

    }

    // line 17
    public function block_description($context, array $blocks = array())
    {
        $__internal_3e9df697ec6606c9538852557e43992ef2e5fac5a08ea636693fcd28473ae53f = $this->env->getExtension("native_profiler");
        $__internal_3e9df697ec6606c9538852557e43992ef2e5fac5a08ea636693fcd28473ae53f->enter($__internal_3e9df697ec6606c9538852557e43992ef2e5fac5a08ea636693fcd28473ae53f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo "Connectez vous pour bénéficier des meilleures fonctionnalités de nextBus ! ";
        
        $__internal_3e9df697ec6606c9538852557e43992ef2e5fac5a08ea636693fcd28473ae53f->leave($__internal_3e9df697ec6606c9538852557e43992ef2e5fac5a08ea636693fcd28473ae53f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 17,  262 => 138,  258 => 137,  252 => 134,  246 => 131,  239 => 127,  233 => 124,  229 => 123,  225 => 122,  221 => 121,  217 => 120,  213 => 119,  200 => 109,  196 => 107,  194 => 106,  180 => 95,  175 => 92,  169 => 90,  167 => 89,  162 => 87,  153 => 81,  149 => 80,  141 => 74,  139 => 73,  135 => 71,  133 => 70,  128 => 67,  126 => 66,  102 => 45,  95 => 41,  89 => 38,  83 => 35,  78 => 33,  72 => 30,  68 => 29,  62 => 26,  57 => 24,  53 => 23,  48 => 21,  41 => 17,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if IE 8]>          <html class="ie ie8"> <![endif]-->*/
/* <!--[if IE 9]>          <html class="ie ie9"> <![endif]-->*/
/* <!--[if gt IE 9]><!-->  <html> <!--<![endif]-->*/
/* <head>*/
/*     <!-- Page Title -->*/
/*     <title>Connexion |nextBus - La première plateforme d'achat et de réservation de billet de bus</title>*/
/* */
/*     <!-- Meta Tags -->*/
/*     <meta charset="utf-8">*/
/*     <meta name="keywords" content="voyage bus, bus voyage, billet de bus pas cher, bus mali, voyage car, bus pas cher mali, reservation bus, mali bus, billet de bus,*/
/*     billet bus, billet pas cher, prix billet, voyage mali, reservation nextBus, nextBus, reservation en ligne,*/
/*     plateforme de vente mali, plateforme de vente au mali, plateforme de vente de billet de bus, plateforme de vente*/
/*     de billet de bus au Mali, reserver, reserver mali, reserver au mali, achat de billet, billet mali,*/
/*     billet de bus mali, plateforme de reservation de billet de bus au Mali" />*/
/* */
/*     <meta name="description" content="{% block description %}Connectez vous pour bénéficier des meilleures fonctionnalités de nextBus ! {% endblock %}">*/
/*     <meta name="author" content="Next Group SARL">*/
/* */
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <link rel="icon" href="{{ absolute_url(asset('favicon.png')) }}" sizes="32x32" type="image/png">*/
/*     <!-- Theme Styles -->*/
/*     <link rel="stylesheet" href="{{ absolute_url(asset('assets/css/bootstrap.min.css')) }}">*/
/*     <link rel="stylesheet" href="{{ absolute_url(asset('assets/css/font-awesome.min.css')) }}">*/
/*     <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>*/
/*     <link rel="stylesheet" href="{{ absolute_url(asset('assets/css/animate.min.css')) }}">*/
/* */
/*     <!-- Current Page Styles -->*/
/*     <link rel="stylesheet" type="text/css" href="{{ absolute_url(asset('assets/components/revolution_slider/css/settings.css')) }}" media="screen" />*/
/*     <link rel="stylesheet" type="text/css" href="{{ absolute_url(asset('assets/components/revolution_slider/css/style.css')) }}" media="screen" />*/
/* */
/*     <!-- Main Style -->*/
/*     <link id="main-style" rel="stylesheet" href="{{ absolute_url(asset('assets/css/style.css')) }}">*/
/*     <!-- Custom Styles -->*/
/*     <link rel="stylesheet" href="{{ absolute_url(asset('assets/css/custom.css')) }}">*/
/* */
/*     <!-- Updated Styles -->*/
/*     <link rel="stylesheet" href="{{ absolute_url(asset('assets/css/updates.css')) }}">*/
/* */
/*     <!-- Responsive Styles -->*/
/*     <link rel="stylesheet" href="{{ absolute_url(asset('assets/css/responsive.css')) }}">*/
/* */
/*     <!-- CSS for IE -->*/
/*     <!--[if lte IE 9]>*/
/*     <link rel="stylesheet" type="text/css" href="{{ absolute_url(asset('assets/css/ie.css')) }}" />*/
/*     <![endif]-->*/
/* */
/* */
/*     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!--[if lt IE 9]>*/
/*     <script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>*/
/*     <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>*/
/*     <![endif]-->*/
/* */
/* </head>*/
/* <body class="soap-login-page style1 body-blank">*/
/* <div id="page-wrapper" class="wrapper-blank">*/
/*     <header id="header" class="navbar-static-top">*/
/*         <a href="#mobile-menu-01" data-toggle="collapse" class="mobile-menu-toggle blue-bg">Mobile Menu Toggle</a>*/
/*         <div class="container">*/
/*             <h1 class="logo">*/
/* */
/*             </h1>*/
/*         </div>*/
/*         <nav id="mobile-menu-01" class="mobile-menu collapse menu-color-blue">*/
/*             {% include '::includes/mobile_menu.html.twig' %}*/
/* */
/*         </nav>*/
/*         <div id="travelo-signup" class="travelo-signup-box travelo-box">*/
/*             {% include '::includes/inscription.html.twig' %}*/
/*         </div>*/
/*         <div id="travelo-login" class="travelo-login-box travelo-box">*/
/*             {% include '::includes/login.html.twig' %}*/
/*         </div>*/
/*     </header>*/
/*     <section id="content">*/
/*         <div class="container">*/
/*             <div id="main">*/
/*                 <h1 class="logo block">*/
/*                     <a href="{{ path('nb_main_homepage') }}" title="nextBus - Accueil">*/
/*                         <img src="{{ absolute_url(asset('assets/images/logo2.png')) }}" alt="Logo nextBus" />*/
/*                     </a>*/
/*                 </h1>*/
/*                 <div class="text-center yellow-color box" style="font-size: 4em; font-weight: 300; line-height: 1em;">Bienvenue sur nextBus!</div>*/
/*                 <p class="white-color block" style="font-size: 1.5em;">Ré-initialiser votre mot de passe</p>*/
/*                 <div class="col-sm-8 col-md-6 col-lg-5 no-float no-padding center-block">*/
/*                     <form action="{{ path('fos_user_resetting_send_email') }}" method="POST" class="fos_user_resetting_request">*/
/*                         <div>*/
/*                             {% if invalid_username is defined %}*/
/*                                 <p class="red-color">{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}, 'FOSUserBundle') }}</p>*/
/*                             {% endif %}*/
/*                             <input type="text" placeholder="Entrez votre adresse email" id="username" class="input-text input-large full-width" name="username" required="required" />*/
/*                         </div>*/
/*                         <div><br>*/
/*                             <button type="submit" class="btn-large full-width red">{{ 'resetting.request.submit'|trans({}, 'FOSUserBundle') }}</button>*/
/*                         </div>*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/*     <footer id="footer">*/
/*         <div class="footer-wrapper">*/
/*             <div class="container">*/
/*                 <nav id="main-menu" role="navigation" class="inline-block hidden-mobile">*/
/*                     {% include '::includes/desktop_menu.html.twig' %}*/
/*                 </nav>*/
/*                 <div class="copyright">*/
/*                     <p>&copy; {{ 'now' | date('Y') }} nextBus</p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </footer>*/
/* */
/* </div>*/
/* */
/* */
/* <!-- Javascript -->*/
/* <script type="text/javascript" src="{{ absolute_url(asset('assets/js/jquery-1.11.1.min.js')) }}"></script>*/
/* <script type="text/javascript" src="{{ absolute_url(asset('assets/js/jquery.noconflict.js')) }}"></script>*/
/* <script type="text/javascript" src="{{ absolute_url(asset('assets/js/modernizr.2.7.1.min.js')) }}"></script>*/
/* <script type="text/javascript" src="{{ absolute_url(asset('assets/js/jquery-migrate-1.2.1.min.js')) }}"></script>*/
/* <script type="text/javascript" src="{{ absolute_url(asset('assets/js/jquery.placeholder.js')) }}"></script>*/
/* <script type="text/javascript" src="{{ absolute_url(asset('assets/js/jquery-ui.1.10.4.min.js')) }}"></script>*/
/* */
/* <!-- Twitter Bootstrap -->*/
/* <script type="text/javascript" src="{{ absolute_url(asset('assets/js/bootstrap.js')) }}"></script>*/
/* */
/* */
/* <!-- parallax -->*/
/* <script type="text/javascript" src="{{ absolute_url(asset('assets/js/jquery.stellar.min.js')) }}"></script>*/
/* */
/* <!-- waypoint -->*/
/* <script type="text/javascript" src="{{ absolute_url(asset('assets/js/waypoints.min.js')) }}"></script>*/
/* */
/* <!-- load page Javascript -->*/
/* <script type="text/javascript" src="{{ absolute_url(asset('assets/js/theme-scripts.js')) }}"></script>*/
/* <script type="text/javascript" src="{{ absolute_url(asset('assets/js/scripts.js')) }}"></script>*/
/* */
/* <script type="text/javascript">*/
/*     enableChaser = 0; //disable chaser*/
/* </script>*/
/* </body>*/
/* </html>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
