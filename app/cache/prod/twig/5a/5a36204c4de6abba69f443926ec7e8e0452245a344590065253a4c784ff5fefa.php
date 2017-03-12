<?php

/* NBMainBundle::index.html.twig */
class __TwigTemplate_421fd81769554e876663c521629ef9fdc3d79ba8032672e711007b112d60686a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "NBMainBundle::index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c763cdda4c51d9336613bd927286fbc3fed1deb3c58898dec1a84624243534f = $this->env->getExtension("native_profiler");
        $__internal_5c763cdda4c51d9336613bd927286fbc3fed1deb3c58898dec1a84624243534f->enter($__internal_5c763cdda4c51d9336613bd927286fbc3fed1deb3c58898dec1a84624243534f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NBMainBundle::index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c763cdda4c51d9336613bd927286fbc3fed1deb3c58898dec1a84624243534f->leave($__internal_5c763cdda4c51d9336613bd927286fbc3fed1deb3c58898dec1a84624243534f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a71484728fd77030f3452fe5eba387a13c3058f8bdc8edbe8631899ea26295f = $this->env->getExtension("native_profiler");
        $__internal_0a71484728fd77030f3452fe5eba387a13c3058f8bdc8edbe8631899ea26295f->enter($__internal_0a71484728fd77030f3452fe5eba387a13c3058f8bdc8edbe8631899ea26295f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue sur nextBus - La première plateforme d'achat et de réservation de billet de bus ";
        
        $__internal_0a71484728fd77030f3452fe5eba387a13c3058f8bdc8edbe8631899ea26295f->leave($__internal_0a71484728fd77030f3452fe5eba387a13c3058f8bdc8edbe8631899ea26295f_prof);

    }

    // line 4
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_51e71d4b463e296280e84bd6e30ebc45c436d1c190241b36486b14aa0628302f = $this->env->getExtension("native_profiler");
        $__internal_51e71d4b463e296280e84bd6e30ebc45c436d1c190241b36486b14aa0628302f->enter($__internal_51e71d4b463e296280e84bd6e30ebc45c436d1c190241b36486b14aa0628302f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        // line 5
        echo "    voyage bus, bus voyage, billet de bus pas cher, bus mali, voyage car, bus pas cher mali, reservation bus, mali bus, billet de bus,
    billet bus, billet pas cher, prix billet, voyage mali, reservation nextBus, nextBus, reservation en ligne,
    plateforme de vente mali, plateforme de vente au mali, plateforme de vente de billet de bus, plateforme de vente
    de billet de bus au Mali, reserver, reserver mali, reserver au mali, achat de billet, billet mali,
    billet de bus mali, plateforme de reservation de billet de bus au Mali
";
        
        $__internal_51e71d4b463e296280e84bd6e30ebc45c436d1c190241b36486b14aa0628302f->leave($__internal_51e71d4b463e296280e84bd6e30ebc45c436d1c190241b36486b14aa0628302f_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_2032453acf3b23ddaf62b54bdacf0239fb46bd54cf158ed783524940043b9bd6 = $this->env->getExtension("native_profiler");
        $__internal_2032453acf3b23ddaf62b54bdacf0239fb46bd54cf158ed783524940043b9bd6->enter($__internal_2032453acf3b23ddaf62b54bdacf0239fb46bd54cf158ed783524940043b9bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    <style>
        section#content {  min-height: 1000px; padding: 0; position: relative; overflow: hidden; }
        #main { padding-top: 200px; }
        .page-title, .page-description { color: #fff; }
        .page-title { font-size: 4.1667em; font-weight: bold;
            color: #0f3e68;}
        .page-description { font-size: 2.7em; margin-bottom: 50px; font-weight: bold; text-align: center;
            color: #f45533 ; }
        .featured { position: absolute; right: 50px; bottom: 50px; z-index: 9; margin-bottom: 0;  text-align: right; }
        .featured figure a { border: 2px solid #fff; }
        .featured .details { margin-right: 10px; }
        .featured .details > * { color: #fff; line-height: 1.25em; margin: 0; font-weight: bold; text-shadow: 2px -2px rgba(0, 0, 0, 0.2); }
    </style>
    <section id=\"content\" class=\"slideshow-bg\">
        <div id=\"slideshow\">
            <div class=\"flexslider\">
                <ul class=\"slides\">
                    <li>
                        <div class=\"slidebg\" style=\"background-image: url(";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("assets/images/slider/slider1.png")), "html", null, true);
        echo ");\"></div>
                    </li>

                </ul>
            </div>
        </div>
        <div class=\"container\">
            <div id=\"main\">
                <h1 class=\"page-title\">Découvrez une autre façon de voyager !</h1>
                <h2 class=\"page-description col-md-8 no-float no-padding\">Acheter votre billet en seulement 3 clics !</h2>
                <div class=\"search-box-wrapper style2\">
                    <div class=\"search-box\">
                        <ul class=\"search-tabs clearfix\">
                            <li class=\"active\"><a href=\"#national-tab\" data-toggle=\"tab\">&nbsp;</a></li>
                        </ul>
                        <div class=\"visible-mobile\">
                            <ul id=\"mobile-search-tabs\" class=\"search-tabs clearfix\">
                                <li class=\"active\"><a href=\"#national-tab\">&nbsp;</a></li>
                            </ul>
                        </div>

                        <div class=\"search-tab-content\">
                            <div class=\"tab-pane fade active in\" id=\"national-tab\">
                                <form action=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("nb_main_listing");
        echo "\" method=\"get\">
                                    <div class=\"row\">
                                        <div class=\"col-md-3\">
                                            <div class=\"form-group\">
                                                <label>De</label>
                                                <input type=\"text\" required name=\"from\" id=\"from\" class=\"input-text full-width\" placeholder=\"Ex. Bamako\" />
                                            </div>
                                        </div>
                                        <div class=\"col-md-3\">
                                            <div class=\"form-group\">
                                                <label>A</label>
                                                <input type=\"text\" required name=\"to\" id=\"to\" class=\"input-text full-width\" placeholder=\"Ex. Kayes\" />
                                            </div>
                                        </div>

                                        <div class=\"col-md-3\">
                                            <div class=\"form-group row\">
                                                <label>Date de voyage</label>
                                                <div class=\"datepicker-wrap\">
                                                    <input type=\"text\" required name=\"dateJ\" class=\"input-text datepicker-wrap full-width\" placeholder=\"ex. MM/JJ/AAAA\" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"col-md-3\">
                                            <div class=\"form-group row\">
                                                <label>&nbsp; </label>
                                                <div class=\"col-xs-6\">
                                                    <button class=\"full-width\">RECHERCHER</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["compagnie"]) ? $context["compagnie"] : $this->getContext($context, "compagnie")));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 96
            echo "            <div class=\"featured image-box\">
                <div class=\"details pull-left\">
                    <h3>";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "nom", array()), "html", null, true);
            echo "</h3>
                </div><br>
                <figure class=\"pull-left text-center\">
                    <a class=\"badge-container text-center\" href=\"#\">
                        <img width=\"64\" height=\"64\" alt=\"\" src=\"http://administration.next-bus.net/assets/images/uploads/compagnies/logo/";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "logo", array()), "html", null, true);
            echo "\" class=\"\">
                    </a>
                </figure>
            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "
    </section>
";
        
        $__internal_2032453acf3b23ddaf62b54bdacf0239fb46bd54cf158ed783524940043b9bd6->leave($__internal_2032453acf3b23ddaf62b54bdacf0239fb46bd54cf158ed783524940043b9bd6_prof);

    }

    // line 111
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e579f030a259e2293b074105d818c2cda30475aa33aaa7b2b1cf8f128afb259d = $this->env->getExtension("native_profiler");
        $__internal_e579f030a259e2293b074105d818c2cda30475aa33aaa7b2b1cf8f128afb259d->enter($__internal_e579f030a259e2293b074105d818c2cda30475aa33aaa7b2b1cf8f128afb259d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo " ";
        
        $__internal_e579f030a259e2293b074105d818c2cda30475aa33aaa7b2b1cf8f128afb259d->leave($__internal_e579f030a259e2293b074105d818c2cda30475aa33aaa7b2b1cf8f128afb259d_prof);

    }

    // line 114
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_60883362fdb1127ef32d17b4538fd27e2db02444a4cff0a85eea74c331289b62 = $this->env->getExtension("native_profiler");
        $__internal_60883362fdb1127ef32d17b4538fd27e2db02444a4cff0a85eea74c331289b62->enter($__internal_60883362fdb1127ef32d17b4538fd27e2db02444a4cff0a85eea74c331289b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 115
        echo "    <script type=\"text/javascript\">
        tjq(document).ready(function() {
            // UI Form Element
            tjq(\".flexslider\").flexslider({
                animation: \"fade\",
                controlNav: false,
                animationLoop: true,
                directionNav: false,
                slideshow: true,
                slideshowSpeed: 5000
            });

            var availableTags = [
                ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ville"]) ? $context["ville"] : $this->getContext($context, "ville")));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 129
            echo "                    \"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "nom", array()), "html", null, true);
            echo "\",
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "            ];
            tjq( \"#from\" ).autocomplete({
                source: availableTags
            });
            tjq( \"#to\" ).autocomplete({
                source: availableTags
            });
        });

    </script>
";
        
        $__internal_60883362fdb1127ef32d17b4538fd27e2db02444a4cff0a85eea74c331289b62->leave($__internal_60883362fdb1127ef32d17b4538fd27e2db02444a4cff0a85eea74c331289b62_prof);

    }

    public function getTemplateName()
    {
        return "NBMainBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 131,  237 => 129,  233 => 128,  218 => 115,  212 => 114,  200 => 111,  191 => 108,  179 => 102,  172 => 98,  168 => 96,  164 => 95,  120 => 54,  94 => 31,  74 => 13,  68 => 12,  56 => 5,  50 => 4,  38 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Bienvenue sur nextBus - La première plateforme d'achat et de réservation de billet de bus {% endblock %}*/
/* {% block keywords %}*/
/*     voyage bus, bus voyage, billet de bus pas cher, bus mali, voyage car, bus pas cher mali, reservation bus, mali bus, billet de bus,*/
/*     billet bus, billet pas cher, prix billet, voyage mali, reservation nextBus, nextBus, reservation en ligne,*/
/*     plateforme de vente mali, plateforme de vente au mali, plateforme de vente de billet de bus, plateforme de vente*/
/*     de billet de bus au Mali, reserver, reserver mali, reserver au mali, achat de billet, billet mali,*/
/*     billet de bus mali, plateforme de reservation de billet de bus au Mali*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <style>*/
/*         section#content {  min-height: 1000px; padding: 0; position: relative; overflow: hidden; }*/
/*         #main { padding-top: 200px; }*/
/*         .page-title, .page-description { color: #fff; }*/
/*         .page-title { font-size: 4.1667em; font-weight: bold;*/
/*             color: #0f3e68;}*/
/*         .page-description { font-size: 2.7em; margin-bottom: 50px; font-weight: bold; text-align: center;*/
/*             color: #f45533 ; }*/
/*         .featured { position: absolute; right: 50px; bottom: 50px; z-index: 9; margin-bottom: 0;  text-align: right; }*/
/*         .featured figure a { border: 2px solid #fff; }*/
/*         .featured .details { margin-right: 10px; }*/
/*         .featured .details > * { color: #fff; line-height: 1.25em; margin: 0; font-weight: bold; text-shadow: 2px -2px rgba(0, 0, 0, 0.2); }*/
/*     </style>*/
/*     <section id="content" class="slideshow-bg">*/
/*         <div id="slideshow">*/
/*             <div class="flexslider">*/
/*                 <ul class="slides">*/
/*                     <li>*/
/*                         <div class="slidebg" style="background-image: url({{ absolute_url(asset('assets/images/slider/slider1.png')) }});"></div>*/
/*                     </li>*/
/* */
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*         <div class="container">*/
/*             <div id="main">*/
/*                 <h1 class="page-title">Découvrez une autre façon de voyager !</h1>*/
/*                 <h2 class="page-description col-md-8 no-float no-padding">Acheter votre billet en seulement 3 clics !</h2>*/
/*                 <div class="search-box-wrapper style2">*/
/*                     <div class="search-box">*/
/*                         <ul class="search-tabs clearfix">*/
/*                             <li class="active"><a href="#national-tab" data-toggle="tab">&nbsp;</a></li>*/
/*                         </ul>*/
/*                         <div class="visible-mobile">*/
/*                             <ul id="mobile-search-tabs" class="search-tabs clearfix">*/
/*                                 <li class="active"><a href="#national-tab">&nbsp;</a></li>*/
/*                             </ul>*/
/*                         </div>*/
/* */
/*                         <div class="search-tab-content">*/
/*                             <div class="tab-pane fade active in" id="national-tab">*/
/*                                 <form action="{{ path('nb_main_listing') }}" method="get">*/
/*                                     <div class="row">*/
/*                                         <div class="col-md-3">*/
/*                                             <div class="form-group">*/
/*                                                 <label>De</label>*/
/*                                                 <input type="text" required name="from" id="from" class="input-text full-width" placeholder="Ex. Bamako" />*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="col-md-3">*/
/*                                             <div class="form-group">*/
/*                                                 <label>A</label>*/
/*                                                 <input type="text" required name="to" id="to" class="input-text full-width" placeholder="Ex. Kayes" />*/
/*                                             </div>*/
/*                                         </div>*/
/* */
/*                                         <div class="col-md-3">*/
/*                                             <div class="form-group row">*/
/*                                                 <label>Date de voyage</label>*/
/*                                                 <div class="datepicker-wrap">*/
/*                                                     <input type="text" required name="dateJ" class="input-text datepicker-wrap full-width" placeholder="ex. MM/JJ/AAAA" />*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/* */
/*                                         <div class="col-md-3">*/
/*                                             <div class="form-group row">*/
/*                                                 <label>&nbsp; </label>*/
/*                                                 <div class="col-xs-6">*/
/*                                                     <button class="full-width">RECHERCHER</button>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </form>*/
/* */
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         {% for key, val in compagnie %}*/
/*             <div class="featured image-box">*/
/*                 <div class="details pull-left">*/
/*                     <h3>{{ val.nom }}</h3>*/
/*                 </div><br>*/
/*                 <figure class="pull-left text-center">*/
/*                     <a class="badge-container text-center" href="#">*/
/*                         <img width="64" height="64" alt="" src="http://administration.next-bus.net/assets/images/uploads/compagnies/logo/{{ val.logo }}" class="">*/
/*                     </a>*/
/*                 </figure>*/
/*             </div>*/
/* */
/*         {% endfor %}*/
/* */
/*     </section>*/
/* {% endblock %}*/
/* {% block footer %} {% endblock %}*/
/* */
/* */
/* {% block scripts %}*/
/*     <script type="text/javascript">*/
/*         tjq(document).ready(function() {*/
/*             // UI Form Element*/
/*             tjq(".flexslider").flexslider({*/
/*                 animation: "fade",*/
/*                 controlNav: false,*/
/*                 animationLoop: true,*/
/*                 directionNav: false,*/
/*                 slideshow: true,*/
/*                 slideshowSpeed: 5000*/
/*             });*/
/* */
/*             var availableTags = [*/
/*                 {% for key, val in ville %}*/
/*                     "{{ val.nom }}",*/
/*                 {% endfor %}*/
/*             ];*/
/*             tjq( "#from" ).autocomplete({*/
/*                 source: availableTags*/
/*             });*/
/*             tjq( "#to" ).autocomplete({*/
/*                 source: availableTags*/
/*             });*/
/*         });*/
/* */
/*     </script>*/
/* {% endblock %}*/
