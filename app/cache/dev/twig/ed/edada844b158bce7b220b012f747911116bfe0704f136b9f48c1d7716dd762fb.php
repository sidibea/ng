<?php

/* ::base.html.twig */
class __TwigTemplate_0512f16b29c0df82e1f35ee69498c2fce828542ae6d53ebd465d24728148712a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'breadcumb' => array($this, 'block_breadcumb'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe2d410584aad9408eb91895d8bbff56f50faac0f58ba59b3d8c287d51865b2b = $this->env->getExtension("native_profiler");
        $__internal_fe2d410584aad9408eb91895d8bbff56f50faac0f58ba59b3d8c287d51865b2b->enter($__internal_fe2d410584aad9408eb91895d8bbff56f50faac0f58ba59b3d8c287d51865b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 8]>          <html class=\"ie ie8\"> <![endif]-->
<!--[if IE 9]>          <html class=\"ie ie9\"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>
    <!-- Page Title -->
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Meta Tags -->
    <meta charset=\"utf-8\">
    <meta name=\"keywords\" content=\"";
        // line 11
        $this->displayBlock('keywords', $context, $blocks);
        echo "\" />
    <meta name=\"description\" content=\"";
        // line 12
        $this->displayBlock('description', $context, $blocks);
        echo "\">
    <meta name=\"author\" content=\"Next Group SARL\">
    <link rel=\"icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("favicon.png")), "html", null, true);
        echo "\" sizes=\"32x32\" type=\"image/png\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <!-- Theme Styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/css/bootstrap.min.css")), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/css/font-awesome.min.css")), "html", null, true);
        echo "\">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/css/animate.min.css")), "html", null, true);
        echo "\">

    <!-- Current Page Styles -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/components/revolution_slider/css/settings.css")), "html", null, true);
        echo "\" media=\"screen\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/components/revolution_slider/css/style.css")), "html", null, true);
        echo "\" media=\"screen\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/components/jquery.bxslider/jquery.bxslider.css")), "html", null, true);
        echo "\" media=\"screen\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/components/flexslider/flexslider.css")), "html", null, true);
        echo "\" media=\"screen\" />

    <!-- Main Style -->
    <link id=\"main-style\" rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/css/style.css")), "html", null, true);
        echo "\">
    <link id=\"main-style\" rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/css/jquery-ui.css")), "html", null, true);
        echo "\">
    <!-- Custom Styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/css/custom.css")), "html", null, true);
        echo "\">

    <!-- Updated Styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/css/updates.css")), "html", null, true);
        echo "\">

    <!-- Responsive Styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/css/responsive.css")), "html", null, true);
        echo "\">

    <!-- CSS for IE -->
    <!--[if lte IE 9]>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/css/ie.css")), "html", null, true);
        echo "\" />
    <![endif]-->


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type='text/javascript' src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
    <script type='text/javascript' src=\"http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js\"></script>
    <![endif]-->

</head>
<body>
<div id=\"page-wrapper\">
    <header id=\"header\" class=\"navbar-static-top\">
        <div class=\"topnav hidden-xs\">
            ";
        // line 58
        $this->loadTemplate("includes/topnav.html.twig", "::base.html.twig", 58)->display($context);
        // line 59
        echo "        </div>

        <div class=\"main-header\">

            <a href=\"#mobile-menu-01\" data-toggle=\"collapse\" class=\"mobile-menu-toggle\">
                Mobile Menu Toggle
            </a>

            <div class=\"container\">
                <h1 class=\"logo navbar-brand\">
                    <a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("nb_main_homepage");
        echo "\" title=\"nextBus - Accueil\">
                        <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/images/logo2.png")), "html", null, true);
        echo "\" alt=\"Logo nextBus\" />
                    </a>
                </h1>

                <nav id=\"main-menu\" role=\"navigation\">
                    ";
        // line 75
        $this->loadTemplate("includes/desktop_menu.html.twig", "::base.html.twig", 75)->display($context);
        // line 76
        echo "                </nav>
            </div>

            <nav id=\"mobile-menu-01\" class=\"mobile-menu collapse\">
                ";
        // line 80
        $this->loadTemplate("includes/mobile_menu.html.twig", "::base.html.twig", 80)->display($context);
        // line 81
        echo "
            </nav>
        </div>
        <div id=\"travelo-signup\" class=\"travelo-signup-box travelo-box\">
            ";
        // line 85
        $this->loadTemplate("includes/inscription.html.twig", "::base.html.twig", 85)->display($context);
        // line 86
        echo "        </div>
        <div id=\"travelo-login\" class=\"travelo-login-box travelo-box\">
            ";
        // line 88
        $this->loadTemplate("includes/login.html.twig", "::base.html.twig", 88)->display($context);
        // line 89
        echo "        </div>
    </header>
    ";
        // line 91
        $this->displayBlock('breadcumb', $context, $blocks);
        // line 92
        echo "
    ";
        // line 93
        $this->displayBlock('content', $context, $blocks);
        // line 96
        echo "
    <footer id=\"footer\">
        ";
        // line 98
        $this->displayBlock('footer', $context, $blocks);
        // line 151
        echo "        <div class=\"bottom\">
            <div class=\"container\">
                <div class=\"logo pull-left\">
                    <a href=\"";
        // line 154
        echo $this->env->getExtension('routing')->getPath("nb_main_homepage");
        echo "\" title=\"nextBus - Accueil\">
                        <img src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/images/logo2.png")), "html", null, true);
        echo "\" alt=\"Logo nextBus\" />
                    </a>
                </div>
                <div class=\"pull-right\">
                    <a id=\"back-to-top\" href=\"#\" class=\"animated\" data-animation-type=\"bounce\"><i class=\"soap-icon-longarrow-up circle\"></i></a>
                </div>
                <div class=\"copyright pull-right\">
                    <p>&copy; ";
        // line 162
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " nextBus</p>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- Javascript -->
<script type=\"text/javascript\" src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/jquery-1.11.1.min.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.noconflict.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/modernizr.2.7.1.min.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/jquery-migrate-1.2.1.min.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.placeholder.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/jquery-ui.1.10.4.min.js")), "html", null, true);
        echo "\"></script>

<!-- Twitter Bootstrap -->
<script type=\"text/javascript\" src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/bootstrap.js")), "html", null, true);
        echo "\"></script>
<!-- Google Map Api -->
<script type='text/javascript' src=\"http://maps.google.com/maps/api/js?sensor=false&amp;language=en\"></script>
<script type=\"text/javascript\" src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/gmap3.min.js")), "html", null, true);
        echo "\"></script>
<!-- load revolution slider scripts -->
<script type=\"text/javascript\" src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/components/revolution_slider/js/jquery.themepunch.plugins.min.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/components/revolution_slider/js/jquery.themepunch.revolution.min.js")), "html", null, true);
        echo "\"></script>

<!-- Flex Slider -->
<script type=\"text/javascript\" src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/components/flexslider/jquery.flexslider-min.js")), "html", null, true);
        echo "\"></script>

<!-- load BXSlider scripts -->
<script type=\"text/javascript\" src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/components/jquery.bxslider/jquery.bxslider.min.js")), "html", null, true);
        echo "\"></script>

<!-- parallax -->
<script type=\"text/javascript\" src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.stellar.min.js")), "html", null, true);
        echo "\"></script>

<!-- waypoint -->
<script type=\"text/javascript\" src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/waypoints.min.js")), "html", null, true);
        echo "\"></script>

<!-- load page Javascript -->
<script type=\"text/javascript\" src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/theme-scripts.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/js/scripts.js")), "html", null, true);
        echo "\"></script>

";
        // line 202
        $this->displayBlock('scripts', $context, $blocks);
        // line 205
        echo "</body>
</html>

";
        
        $__internal_fe2d410584aad9408eb91895d8bbff56f50faac0f58ba59b3d8c287d51865b2b->leave($__internal_fe2d410584aad9408eb91895d8bbff56f50faac0f58ba59b3d8c287d51865b2b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c984019d1458169673c805c2726c6842a32466b20d03af48a3efad25e2cc865 = $this->env->getExtension("native_profiler");
        $__internal_3c984019d1458169673c805c2726c6842a32466b20d03af48a3efad25e2cc865->enter($__internal_3c984019d1458169673c805c2726c6842a32466b20d03af48a3efad25e2cc865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_3c984019d1458169673c805c2726c6842a32466b20d03af48a3efad25e2cc865->leave($__internal_3c984019d1458169673c805c2726c6842a32466b20d03af48a3efad25e2cc865_prof);

    }

    // line 11
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_1128ee5147cc2fef1fc3fdf06ef696f0cf1202cfb8c6910286023db2093502ab = $this->env->getExtension("native_profiler");
        $__internal_1128ee5147cc2fef1fc3fdf06ef696f0cf1202cfb8c6910286023db2093502ab->enter($__internal_1128ee5147cc2fef1fc3fdf06ef696f0cf1202cfb8c6910286023db2093502ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        echo " ";
        
        $__internal_1128ee5147cc2fef1fc3fdf06ef696f0cf1202cfb8c6910286023db2093502ab->leave($__internal_1128ee5147cc2fef1fc3fdf06ef696f0cf1202cfb8c6910286023db2093502ab_prof);

    }

    // line 12
    public function block_description($context, array $blocks = array())
    {
        $__internal_b04263b20dff36f1b43f3771b3e299628a230405dddc589f8bdcf937a69c51c8 = $this->env->getExtension("native_profiler");
        $__internal_b04263b20dff36f1b43f3771b3e299628a230405dddc589f8bdcf937a69c51c8->enter($__internal_b04263b20dff36f1b43f3771b3e299628a230405dddc589f8bdcf937a69c51c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo "Avec nextBus, voyagez en bus au Mali et en Afrique de l'Ouest à prix discount. Découvrez la solution pour voyager simplement et moins chèr. Réservez/acheter votre billet en ligne en quelques clics ! ";
        
        $__internal_b04263b20dff36f1b43f3771b3e299628a230405dddc589f8bdcf937a69c51c8->leave($__internal_b04263b20dff36f1b43f3771b3e299628a230405dddc589f8bdcf937a69c51c8_prof);

    }

    // line 91
    public function block_breadcumb($context, array $blocks = array())
    {
        $__internal_ba684a82ae0beb6eb3f0dba44c85cf215a0c9ba76f718f515c021788b0662f50 = $this->env->getExtension("native_profiler");
        $__internal_ba684a82ae0beb6eb3f0dba44c85cf215a0c9ba76f718f515c021788b0662f50->enter($__internal_ba684a82ae0beb6eb3f0dba44c85cf215a0c9ba76f718f515c021788b0662f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcumb"));

        echo " ";
        
        $__internal_ba684a82ae0beb6eb3f0dba44c85cf215a0c9ba76f718f515c021788b0662f50->leave($__internal_ba684a82ae0beb6eb3f0dba44c85cf215a0c9ba76f718f515c021788b0662f50_prof);

    }

    // line 93
    public function block_content($context, array $blocks = array())
    {
        $__internal_b37ecc1e9e62bbeae24f184bd756dc3a1b13555fd8eade6dfc16276c9f6ffdca = $this->env->getExtension("native_profiler");
        $__internal_b37ecc1e9e62bbeae24f184bd756dc3a1b13555fd8eade6dfc16276c9f6ffdca->enter($__internal_b37ecc1e9e62bbeae24f184bd756dc3a1b13555fd8eade6dfc16276c9f6ffdca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 94
        echo "
    ";
        
        $__internal_b37ecc1e9e62bbeae24f184bd756dc3a1b13555fd8eade6dfc16276c9f6ffdca->leave($__internal_b37ecc1e9e62bbeae24f184bd756dc3a1b13555fd8eade6dfc16276c9f6ffdca_prof);

    }

    // line 98
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f8cfac131f94ed51198afda5cfc7145f1ffecbd78f747d07575e196c1e404367 = $this->env->getExtension("native_profiler");
        $__internal_f8cfac131f94ed51198afda5cfc7145f1ffecbd78f747d07575e196c1e404367->enter($__internal_f8cfac131f94ed51198afda5cfc7145f1ffecbd78f747d07575e196c1e404367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 99
        echo "            <div class=\"footer-wrapper\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-6 col-md-3\">
                            <h2>Découvrez</h2>
                            <ul class=\"discover triangle hover row\">
                                <li class=\"col-xs-6\"><a href=\"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("nb_main_aboutus");
        echo "\">A Propos</a></li>
                                <li class=\"col-xs-6\"><a href=\"";
        // line 106
        echo $this->env->getExtension('routing')->getPath("nb_main_devenir_partenaire");
        echo "\">Partenaires</a></li>
                                <li class=\"col-xs-6\"><a href=\"";
        // line 107
        echo $this->env->getExtension('routing')->getPath("nb_main_promo");
        echo "\">Bons plans</a></li>
                                <li class=\"col-xs-6\"><a href=\"#\">Blog</a></li>
                                <li class=\"col-xs-6\"><a href=\"#\">FAQ</a></li>
                                <li class=\"col-xs-8\"><a href=\"#\">Conditions d'utilisation</a></li>
                                <li class=\"col-xs-8\"><a href=\"#\">Politiques</a></li>
                            </ul>
                        </div>

                        <div class=\"col-sm-6 col-md-6\">
                            <h2>Newsletters</h2>
                            <p style=\"font-size: 14px;\">Souscrivez à notre newsletter pour avoie les dernièrs mises à jour et nos offres.</p>
                            ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 119
            echo "                                <span class=\"info green-color\">";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</span>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "                            <br/> <form action=\"";
        echo $this->env->getExtension('routing')->getPath("nb_main_newsletter_add");
        echo "\" method=\"post\">
                                <div class=\"with-icon full-width\">
                                    <input type=\"text\" class=\"input-text full-width\" placeholder=\"Entrer votre adresse email\">
                                    <button class=\"icon green-bg white-color\"><i class=\"soap-icon-search\"></i></button>
                                </div>
                            </form><br>
                            <span>Nous respectons votre vie privée</span>
                        </div>
                        <div class=\"col-sm-6 col-md-3\">
                            <h2>A Propos de nextBus</h2>
                            <p>Nous serons heureux de vous aider. Notre service client est à votre disposition 24/7 pour accompagner.</p>
                            <br><address class=\"contact-details\">
                                <span class=\"contact-phone\"><i class=\"soap-icon-phone\"></i> 44-27-27-18-HELLO</span>
                                <br>
                                <a class=\"contact-email\" href=\"#\">aide@next-bus.net</a>
                            </address>
                            <ul class=\"social-icons clearfix\">
                                <li class=\"facebook\"><a title=\"facebook\" href=\"https://www.facebook.com/nextbusml/\" target=\"_blank\" data-toggle=\"tooltip\"><i class=\"soap-icon-facebook\"></i></a></li>
                                <li class=\"twitter\"><a title=\"twitter\" href=\"https://twitter.com/NextBusml\" target=\"_blank\" data-toggle=\"tooltip\"><i class=\"soap-icon-twitter\"></i></a></li>
                                <li class=\"googleplus\"><a title=\"googleplus\" href=\"#\" data-toggle=\"tooltip\"><i class=\"soap-icon-googleplus\"></i></a></li>
                                <li class=\"linkedin\"><a title=\"linkedin\" href=\"#\" data-toggle=\"tooltip\"><i class=\"soap-icon-linkedin\"></i></a></li>
                                <li class=\"vimeo\"><a title=\"vimeo\" href=\"#\" data-toggle=\"tooltip\"><i class=\"soap-icon-vimeo\"></i></a></li>
                                <li class=\"dribble\"><a title=\"dribble\" href=\"#\" data-toggle=\"tooltip\"><i class=\"soap-icon-dribble\"></i></a></li>
                                <li class=\"flickr\"><a title=\"flickr\" href=\"#\" data-toggle=\"tooltip\"><i class=\"soap-icon-flickr\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        ";
        
        $__internal_f8cfac131f94ed51198afda5cfc7145f1ffecbd78f747d07575e196c1e404367->leave($__internal_f8cfac131f94ed51198afda5cfc7145f1ffecbd78f747d07575e196c1e404367_prof);

    }

    // line 202
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_8196de594a12d24d21d1f96a6fbc33f1a42942d1db398942e47a5b440c849e82 = $this->env->getExtension("native_profiler");
        $__internal_8196de594a12d24d21d1f96a6fbc33f1a42942d1db398942e47a5b440c849e82->enter($__internal_8196de594a12d24d21d1f96a6fbc33f1a42942d1db398942e47a5b440c849e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 203
        echo "
";
        
        $__internal_8196de594a12d24d21d1f96a6fbc33f1a42942d1db398942e47a5b440c849e82->leave($__internal_8196de594a12d24d21d1f96a6fbc33f1a42942d1db398942e47a5b440c849e82_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  483 => 203,  477 => 202,  439 => 121,  430 => 119,  426 => 118,  412 => 107,  408 => 106,  404 => 105,  396 => 99,  390 => 98,  382 => 94,  376 => 93,  364 => 91,  352 => 12,  340 => 11,  328 => 7,  318 => 205,  316 => 202,  311 => 200,  307 => 199,  301 => 196,  295 => 193,  289 => 190,  283 => 187,  277 => 184,  273 => 183,  268 => 181,  262 => 178,  256 => 175,  252 => 174,  248 => 173,  244 => 172,  240 => 171,  236 => 170,  225 => 162,  215 => 155,  211 => 154,  206 => 151,  204 => 98,  200 => 96,  198 => 93,  195 => 92,  193 => 91,  189 => 89,  187 => 88,  183 => 86,  181 => 85,  175 => 81,  173 => 80,  167 => 76,  165 => 75,  157 => 70,  153 => 69,  141 => 59,  139 => 58,  121 => 43,  114 => 39,  108 => 36,  102 => 33,  97 => 31,  93 => 30,  87 => 27,  83 => 26,  79 => 25,  75 => 24,  69 => 21,  64 => 19,  60 => 18,  53 => 14,  48 => 12,  44 => 11,  37 => 7,  29 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if IE 8]>          <html class="ie ie8"> <![endif]-->*/
/* <!--[if IE 9]>          <html class="ie ie9"> <![endif]-->*/
/* <!--[if gt IE 9]><!-->  <html> <!--<![endif]-->*/
/* <head>*/
/*     <!-- Page Title -->*/
/*     <title>{% block title %} {% endblock %}</title>*/
/* */
/*     <!-- Meta Tags -->*/
/*     <meta charset="utf-8">*/
/*     <meta name="keywords" content="{% block keywords %} {% endblock %}" />*/
/*     <meta name="description" content="{% block description %}Avec nextBus, voyagez en bus au Mali et en Afrique de l'Ouest à prix discount. Découvrez la solution pour voyager simplement et moins chèr. Réservez/acheter votre billet en ligne en quelques clics ! {% endblock %}">*/
/*     <meta name="author" content="Next Group SARL">*/
/*     <link rel="icon" href="{{ absolute_url(asset('favicon.png')) }}" sizes="32x32" type="image/png">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* */
/*     <!-- Theme Styles -->*/
/*     <link rel="stylesheet" href="{{ absolute_url(asset('assets/css/bootstrap.min.css')) }}">*/
/*     <link rel="stylesheet" href="{{ absolute_url(asset('assets/css/font-awesome.min.css')) }}">*/
/*     <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>*/
/*     <link rel="stylesheet" href="{{ absolute_url(asset('assets/css/animate.min.css')) }}">*/
/* */
/*     <!-- Current Page Styles -->*/
/*     <link rel="stylesheet" type="text/css" href="{{ absolute_url(asset('assets/components/revolution_slider/css/settings.css')) }}" media="screen" />*/
/*     <link rel="stylesheet" type="text/css" href="{{ absolute_url(asset('assets/components/revolution_slider/css/style.css')) }}" media="screen" />*/
/*     <link rel="stylesheet" type="text/css" href="{{ absolute_url(asset('assets/components/jquery.bxslider/jquery.bxslider.css')) }}" media="screen" />*/
/*     <link rel="stylesheet" type="text/css" href="{{ absolute_url(asset('assets/components/flexslider/flexslider.css')) }}" media="screen" />*/
/* */
/*     <!-- Main Style -->*/
/*     <link id="main-style" rel="stylesheet" href="{{ absolute_url(asset('assets/css/style.css')) }}">*/
/*     <link id="main-style" rel="stylesheet" href="{{ absolute_url(asset('assets/css/jquery-ui.css')) }}">*/
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
/* <body>*/
/* <div id="page-wrapper">*/
/*     <header id="header" class="navbar-static-top">*/
/*         <div class="topnav hidden-xs">*/
/*             {% include 'includes/topnav.html.twig' %}*/
/*         </div>*/
/* */
/*         <div class="main-header">*/
/* */
/*             <a href="#mobile-menu-01" data-toggle="collapse" class="mobile-menu-toggle">*/
/*                 Mobile Menu Toggle*/
/*             </a>*/
/* */
/*             <div class="container">*/
/*                 <h1 class="logo navbar-brand">*/
/*                     <a href="{{ path('nb_main_homepage') }}" title="nextBus - Accueil">*/
/*                         <img src="{{ absolute_url(asset('assets/images/logo2.png')) }}" alt="Logo nextBus" />*/
/*                     </a>*/
/*                 </h1>*/
/* */
/*                 <nav id="main-menu" role="navigation">*/
/*                     {% include 'includes/desktop_menu.html.twig' %}*/
/*                 </nav>*/
/*             </div>*/
/* */
/*             <nav id="mobile-menu-01" class="mobile-menu collapse">*/
/*                 {% include 'includes/mobile_menu.html.twig' %}*/
/* */
/*             </nav>*/
/*         </div>*/
/*         <div id="travelo-signup" class="travelo-signup-box travelo-box">*/
/*             {% include 'includes/inscription.html.twig' %}*/
/*         </div>*/
/*         <div id="travelo-login" class="travelo-login-box travelo-box">*/
/*             {% include 'includes/login.html.twig' %}*/
/*         </div>*/
/*     </header>*/
/*     {% block breadcumb %} {% endblock %}*/
/* */
/*     {% block content %}*/
/* */
/*     {% endblock %}*/
/* */
/*     <footer id="footer">*/
/*         {% block footer %}*/
/*             <div class="footer-wrapper">*/
/*                 <div class="container">*/
/*                     <div class="row">*/
/*                         <div class="col-sm-6 col-md-3">*/
/*                             <h2>Découvrez</h2>*/
/*                             <ul class="discover triangle hover row">*/
/*                                 <li class="col-xs-6"><a href="{{ path('nb_main_aboutus') }}">A Propos</a></li>*/
/*                                 <li class="col-xs-6"><a href="{{ path('nb_main_devenir_partenaire') }}">Partenaires</a></li>*/
/*                                 <li class="col-xs-6"><a href="{{ path('nb_main_promo') }}">Bons plans</a></li>*/
/*                                 <li class="col-xs-6"><a href="#">Blog</a></li>*/
/*                                 <li class="col-xs-6"><a href="#">FAQ</a></li>*/
/*                                 <li class="col-xs-8"><a href="#">Conditions d'utilisation</a></li>*/
/*                                 <li class="col-xs-8"><a href="#">Politiques</a></li>*/
/*                             </ul>*/
/*                         </div>*/
/* */
/*                         <div class="col-sm-6 col-md-6">*/
/*                             <h2>Newsletters</h2>*/
/*                             <p style="font-size: 14px;">Souscrivez à notre newsletter pour avoie les dernièrs mises à jour et nos offres.</p>*/
/*                             {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*                                 <span class="info green-color">{{ flashMessage }}</span>*/
/*                             {% endfor %}*/
/*                             <br/> <form action="{{ path('nb_main_newsletter_add') }}" method="post">*/
/*                                 <div class="with-icon full-width">*/
/*                                     <input type="text" class="input-text full-width" placeholder="Entrer votre adresse email">*/
/*                                     <button class="icon green-bg white-color"><i class="soap-icon-search"></i></button>*/
/*                                 </div>*/
/*                             </form><br>*/
/*                             <span>Nous respectons votre vie privée</span>*/
/*                         </div>*/
/*                         <div class="col-sm-6 col-md-3">*/
/*                             <h2>A Propos de nextBus</h2>*/
/*                             <p>Nous serons heureux de vous aider. Notre service client est à votre disposition 24/7 pour accompagner.</p>*/
/*                             <br><address class="contact-details">*/
/*                                 <span class="contact-phone"><i class="soap-icon-phone"></i> 44-27-27-18-HELLO</span>*/
/*                                 <br>*/
/*                                 <a class="contact-email" href="#">aide@next-bus.net</a>*/
/*                             </address>*/
/*                             <ul class="social-icons clearfix">*/
/*                                 <li class="facebook"><a title="facebook" href="https://www.facebook.com/nextbusml/" target="_blank" data-toggle="tooltip"><i class="soap-icon-facebook"></i></a></li>*/
/*                                 <li class="twitter"><a title="twitter" href="https://twitter.com/NextBusml" target="_blank" data-toggle="tooltip"><i class="soap-icon-twitter"></i></a></li>*/
/*                                 <li class="googleplus"><a title="googleplus" href="#" data-toggle="tooltip"><i class="soap-icon-googleplus"></i></a></li>*/
/*                                 <li class="linkedin"><a title="linkedin" href="#" data-toggle="tooltip"><i class="soap-icon-linkedin"></i></a></li>*/
/*                                 <li class="vimeo"><a title="vimeo" href="#" data-toggle="tooltip"><i class="soap-icon-vimeo"></i></a></li>*/
/*                                 <li class="dribble"><a title="dribble" href="#" data-toggle="tooltip"><i class="soap-icon-dribble"></i></a></li>*/
/*                                 <li class="flickr"><a title="flickr" href="#" data-toggle="tooltip"><i class="soap-icon-flickr"></i></a></li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endblock %}*/
/*         <div class="bottom">*/
/*             <div class="container">*/
/*                 <div class="logo pull-left">*/
/*                     <a href="{{ path('nb_main_homepage') }}" title="nextBus - Accueil">*/
/*                         <img src="{{ absolute_url(asset('assets/images/logo2.png')) }}" alt="Logo nextBus" />*/
/*                     </a>*/
/*                 </div>*/
/*                 <div class="pull-right">*/
/*                     <a id="back-to-top" href="#" class="animated" data-animation-type="bounce"><i class="soap-icon-longarrow-up circle"></i></a>*/
/*                 </div>*/
/*                 <div class="copyright pull-right">*/
/*                     <p>&copy; {{ 'now' | date('Y') }} nextBus</p>*/
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
/* <!-- Google Map Api -->*/
/* <script type='text/javascript' src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>*/
/* <script type="text/javascript" src="{{ absolute_url(asset('assets/js/gmap3.min.js')) }}"></script>*/
/* <!-- load revolution slider scripts -->*/
/* <script type="text/javascript" src="{{ absolute_url(asset('assets/components/revolution_slider/js/jquery.themepunch.plugins.min.js')) }}"></script>*/
/* <script type="text/javascript" src="{{ absolute_url(asset('assets/components/revolution_slider/js/jquery.themepunch.revolution.min.js')) }}"></script>*/
/* */
/* <!-- Flex Slider -->*/
/* <script type="text/javascript" src="{{ absolute_url(asset('assets/components/flexslider/jquery.flexslider-min.js')) }}"></script>*/
/* */
/* <!-- load BXSlider scripts -->*/
/* <script type="text/javascript" src="{{ absolute_url(asset('assets/components/jquery.bxslider/jquery.bxslider.min.js')) }}"></script>*/
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
/* {% block scripts %}*/
/* */
/* {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
/* */
