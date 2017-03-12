<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_2e6ec3684bcc375981354fa9dcddfa0c65129e997a37454ae19e92e56c5cd217 extends Twig_Template
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
        $__internal_b263c696d765d68063d0ba2ad74c59f630a4eb4633bd971df1547af8e8d416af = $this->env->getExtension("native_profiler");
        $__internal_b263c696d765d68063d0ba2ad74c59f630a4eb4633bd971df1547af8e8d416af->enter($__internal_b263c696d765d68063d0ba2ad74c59f630a4eb4633bd971df1547af8e8d416af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

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
        $this->loadTemplate("::includes/mobile_menu.html.twig", "FOSUserBundle:Security:login.html.twig", 66)->display($context);
        // line 67
        echo "
        </nav>
        <div id=\"travelo-signup\" class=\"travelo-signup-box travelo-box\">
            ";
        // line 70
        $this->loadTemplate("::includes/inscription.html.twig", "FOSUserBundle:Security:login.html.twig", 70)->display($context);
        // line 71
        echo "        </div>
        <div id=\"travelo-login\" class=\"travelo-login-box travelo-box\">
            ";
        // line 73
        $this->loadTemplate("::includes/login.html.twig", "FOSUserBundle:Security:login.html.twig", 73)->display($context);
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
                <p class=\"white-color block\" style=\"font-size: 1.5em;\">Connectez-vous à votre compte</p>
                <div class=\"col-sm-8 col-md-6 col-lg-5 no-float no-padding center-block\">
                    <form class=\"login-form\" action=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                        ";
        // line 88
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 89
            echo "                            <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
                        ";
        }
        // line 91
        echo "                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"input-text input-large full-width\" name=\"_username\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"Entrez votre email ou nom d'utilisateur\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"password\" class=\"input-text input-large full-width\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"Entrez votre mot de passe\">
                        </div>
                        <div class=\"form-group\">
                            <label class=\"checkbox\">
                                <input type=\"checkbox\" class=\"checkbox-inline\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                                ";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                            </label>
                        </div>
                        <input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()), "html", null, true);
        echo "\" />
                        <button type=\"submit\" id=\"_submit\" name=\"_submit\"  class=\"btn-large full-width yellow\">CONNEXION</button>
                        <div class=\"seperator\"></div>
                      <br>  <p>Vous êtes nouveau sur nextBus ? <a href=\"";
        // line 107
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" >Inscrivez-vous</a></p>
                        <br> <p><a href=\"";
        // line 108
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe oublié ?</a> </p>
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
        // line 118
        $this->loadTemplate("::includes/desktop_menu.html.twig", "FOSUserBundle:Security:login.html.twig", 118)->display($context);
        // line 119
        echo "                </nav>
                <div class=\"copyright\">
                    <p>&copy; ";
        // line 121
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " nextBus</p>
                </div>
            </div>
        </div>
    </footer>

</div>


<!-- Javascript -->
<script type=\"text/javascript\" src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/jquery-1.11.1.min.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.noconflict.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/modernizr.2.7.1.min.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/jquery-migrate-1.2.1.min.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.placeholder.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/jquery-ui.1.10.4.min.js")), "html", null, true);
        echo "\"></script>

<!-- Twitter Bootstrap -->
<script type=\"text/javascript\" src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/bootstrap.js")), "html", null, true);
        echo "\"></script>


<!-- parallax -->
<script type=\"text/javascript\" src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.stellar.min.js")), "html", null, true);
        echo "\"></script>

<!-- waypoint -->
<script type=\"text/javascript\" src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/waypoints.min.js")), "html", null, true);
        echo "\"></script>

<!-- load page Javascript -->
<script type=\"text/javascript\" src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/theme-scripts.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/scripts.js")), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\">
    enableChaser = 0; //disable chaser
</script>
</body>
</html>




";
        
        $__internal_b263c696d765d68063d0ba2ad74c59f630a4eb4633bd971df1547af8e8d416af->leave($__internal_b263c696d765d68063d0ba2ad74c59f630a4eb4633bd971df1547af8e8d416af_prof);

    }

    // line 17
    public function block_description($context, array $blocks = array())
    {
        $__internal_2dcb9e47ebf51b14ba9b0174090ba34261c28375a163ecb41eb564e6e5b02ff5 = $this->env->getExtension("native_profiler");
        $__internal_2dcb9e47ebf51b14ba9b0174090ba34261c28375a163ecb41eb564e6e5b02ff5->enter($__internal_2dcb9e47ebf51b14ba9b0174090ba34261c28375a163ecb41eb564e6e5b02ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo "Connectez vous pour bénéficier des meilleures fonctionnalités de nextBus ! ";
        
        $__internal_2dcb9e47ebf51b14ba9b0174090ba34261c28375a163ecb41eb564e6e5b02ff5->leave($__internal_2dcb9e47ebf51b14ba9b0174090ba34261c28375a163ecb41eb564e6e5b02ff5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 17,  288 => 150,  284 => 149,  278 => 146,  272 => 143,  265 => 139,  259 => 136,  255 => 135,  251 => 134,  247 => 133,  243 => 132,  239 => 131,  226 => 121,  222 => 119,  220 => 118,  207 => 108,  203 => 107,  197 => 104,  191 => 101,  180 => 93,  174 => 91,  168 => 89,  166 => 88,  162 => 87,  153 => 81,  149 => 80,  141 => 74,  139 => 73,  135 => 71,  133 => 70,  128 => 67,  126 => 66,  102 => 45,  95 => 41,  89 => 38,  83 => 35,  78 => 33,  72 => 30,  68 => 29,  62 => 26,  57 => 24,  53 => 23,  48 => 21,  41 => 17,  23 => 1,);
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
/*                 <p class="white-color block" style="font-size: 1.5em;">Connectez-vous à votre compte</p>*/
/*                 <div class="col-sm-8 col-md-6 col-lg-5 no-float no-padding center-block">*/
/*                     <form class="login-form" action="{{ path("fos_user_security_check") }}" method="post">*/
/*                         {% if error %}*/
/*                             <div>{{ error|trans({}, 'FOSUserBundle') }}</div>*/
/*                         {% endif %}*/
/*                         <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*                         <div class="form-group">*/
/*                             <input type="text" class="input-text input-large full-width" name="_username" value="{{ last_username }}" required="required" placeholder="Entrez votre email ou nom d'utilisateur">*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <input type="password" class="input-text input-large full-width" id="password" name="_password" required="required" placeholder="Entrez votre mot de passe">*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="checkbox">*/
/*                                 <input type="checkbox" class="checkbox-inline" id="remember_me" name="_remember_me" value="on" />*/
/*                                 {{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}*/
/*                             </label>*/
/*                         </div>*/
/*                         <input type="hidden" name="_target_path" value="{{ app.request.uri }}" />*/
/*                         <button type="submit" id="_submit" name="_submit"  class="btn-large full-width yellow">CONNEXION</button>*/
/*                         <div class="seperator"></div>*/
/*                       <br>  <p>Vous êtes nouveau sur nextBus ? <a href="{{ path('fos_user_registration_register') }}" >Inscrivez-vous</a></p>*/
/*                         <br> <p><a href="{{ path('fos_user_resetting_request') }}">Mot de passe oublié ?</a> </p>*/
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
