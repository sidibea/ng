<?php

/* NBMainBundle:Exception:exception.html.twig */
class __TwigTemplate_477cff4f6dbe45edaba57719c1d45a4d4286aa5180ca03245586846792205989 extends Twig_Template
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
        $__internal_070e3b514f66d779f80e5f7532b373666ca43dee3758692b301fadcca55c12b0 = $this->env->getExtension("native_profiler");
        $__internal_070e3b514f66d779f80e5f7532b373666ca43dee3758692b301fadcca55c12b0->enter($__internal_070e3b514f66d779f80e5f7532b373666ca43dee3758692b301fadcca55c12b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NBMainBundle:Exception:exception.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 8]>          <html class=\"ie ie8\"> <![endif]-->
<!--[if IE 9]>          <html class=\"ie ie9\"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>
    <!-- Page Title -->
    <title>Erreur";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "statusCode", array()), "html", null, true);
        echo "</title>

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
<body class=\"post-404page style1\">
<div id=\"page-wrapper\">
    <header id=\"header\" class=\"navbar-static-top\">
        <a href=\"#mobile-menu-01\" data-toggle=\"collapse\" class=\"mobile-menu-toggle blue-bg\">Mobile Menu Toggle</a>
        <div class=\"container\">
            <h1 class=\"logo\">
                <a href=\"index.html\" title=\"Travelo - home\">
                    <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/images/logo.png")), "html", null, true);
        echo "\" height=\"90\" alt=\"Travelo HTML5 Template\" />
                </a>
            </h1>
        </div>
    </header>

    <section id=\"content\">
        <div class=\"container\">
            <div id=\"main\">
                <div class=\"col-md-6 col-sm-9 no-float no-padding center-block\">
                    <div class=\"error-message\">La ressource que vous  <i>cherchez</i> est indisponible ou non trouvée.</div>
                </div>
                <div class=\"error-message-404\">
                    ";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "statusCode", array()), "html", null, true);
        echo "
                </div>
            </div>
        </div>
    </section>

    <footer id=\"footer\">
        <div class=\"footer-wrapper\">
            <div class=\"container\">
                <nav id=\"main-menu\" role=\"navigation\" class=\"inline-block hidden-mobile\">

                </nav>
                <div class=\"copyright\">
                    <p>&copy; ";
        // line 89
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Next Group </p>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- Javascript -->
<script type=\"text/javascript\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/jquery-1.11.1.min.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.noconflict.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/modernizr.2.7.1.min.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/jquery-migrate-1.2.1.min.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.placeholder.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/jquery-ui.1.10.4.min.js")), "html", null, true);
        echo "\"></script>

<!-- Twitter Bootstrap -->
<script type=\"text/javascript\" src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/bootstrap.js")), "html", null, true);
        echo "\"></script>


<!-- parallax -->
<script type=\"text/javascript\" src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.stellar.min.js")), "html", null, true);
        echo "\"></script>

<!-- waypoint -->
<script type=\"text/javascript\" src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/waypoints.min.js")), "html", null, true);
        echo "\"></script>

<!-- load page Javascript -->
<script type=\"text/javascript\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/theme-scripts.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/scripts.js")), "html", null, true);
        echo "\"></script>

</body>
</html>

";
        
        $__internal_070e3b514f66d779f80e5f7532b373666ca43dee3758692b301fadcca55c12b0->leave($__internal_070e3b514f66d779f80e5f7532b373666ca43dee3758692b301fadcca55c12b0_prof);

    }

    // line 17
    public function block_description($context, array $blocks = array())
    {
        $__internal_1ebbd505c4feed43f208870720dedbf34c51084688c02e1024935c4517e3604d = $this->env->getExtension("native_profiler");
        $__internal_1ebbd505c4feed43f208870720dedbf34c51084688c02e1024935c4517e3604d->enter($__internal_1ebbd505c4feed43f208870720dedbf34c51084688c02e1024935c4517e3604d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo "Connectez vous pour bénéficier des meilleures fonctionnalités de nextBus ! ";
        
        $__internal_1ebbd505c4feed43f208870720dedbf34c51084688c02e1024935c4517e3604d->leave($__internal_1ebbd505c4feed43f208870720dedbf34c51084688c02e1024935c4517e3604d_prof);

    }

    public function getTemplateName()
    {
        return "NBMainBundle:Exception:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 17,  218 => 116,  214 => 115,  208 => 112,  202 => 109,  195 => 105,  189 => 102,  185 => 101,  181 => 100,  177 => 99,  173 => 98,  169 => 97,  158 => 89,  142 => 76,  126 => 63,  105 => 45,  98 => 41,  92 => 38,  86 => 35,  81 => 33,  75 => 30,  71 => 29,  65 => 26,  60 => 24,  56 => 23,  51 => 21,  44 => 17,  31 => 7,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if IE 8]>          <html class="ie ie8"> <![endif]-->*/
/* <!--[if IE 9]>          <html class="ie ie9"> <![endif]-->*/
/* <!--[if gt IE 9]><!-->  <html> <!--<![endif]-->*/
/* <head>*/
/*     <!-- Page Title -->*/
/*     <title>Erreur{{ exception.statusCode }}</title>*/
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
/* <body class="post-404page style1">*/
/* <div id="page-wrapper">*/
/*     <header id="header" class="navbar-static-top">*/
/*         <a href="#mobile-menu-01" data-toggle="collapse" class="mobile-menu-toggle blue-bg">Mobile Menu Toggle</a>*/
/*         <div class="container">*/
/*             <h1 class="logo">*/
/*                 <a href="index.html" title="Travelo - home">*/
/*                     <img src="{{ absolute_url(asset('assets/images/logo.png')) }}" height="90" alt="Travelo HTML5 Template" />*/
/*                 </a>*/
/*             </h1>*/
/*         </div>*/
/*     </header>*/
/* */
/*     <section id="content">*/
/*         <div class="container">*/
/*             <div id="main">*/
/*                 <div class="col-md-6 col-sm-9 no-float no-padding center-block">*/
/*                     <div class="error-message">La ressource que vous  <i>cherchez</i> est indisponible ou non trouvée.</div>*/
/*                 </div>*/
/*                 <div class="error-message-404">*/
/*                     {{ exception.statusCode }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* */
/*     <footer id="footer">*/
/*         <div class="footer-wrapper">*/
/*             <div class="container">*/
/*                 <nav id="main-menu" role="navigation" class="inline-block hidden-mobile">*/
/* */
/*                 </nav>*/
/*                 <div class="copyright">*/
/*                     <p>&copy; {{ 'now' | date('Y') }} Next Group </p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </footer>*/
/* </div>*/
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
/* </body>*/
/* </html>*/
/* */
/* */
