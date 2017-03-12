<?php

/* NBMainBundle::contact.html.twig */
class __TwigTemplate_7d807e9479af9818ab4d5462efb6fa8d259d0c786927a488b77d87de51b4e224 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "NBMainBundle::contact.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'keywords' => array($this, 'block_keywords'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e52c6af801197589265be47fe431784806814e1ad819078c619c1e4f33d6a2e = $this->env->getExtension("native_profiler");
        $__internal_8e52c6af801197589265be47fe431784806814e1ad819078c619c1e4f33d6a2e->enter($__internal_8e52c6af801197589265be47fe431784806814e1ad819078c619c1e4f33d6a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NBMainBundle::contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e52c6af801197589265be47fe431784806814e1ad819078c619c1e4f33d6a2e->leave($__internal_8e52c6af801197589265be47fe431784806814e1ad819078c619c1e4f33d6a2e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f023d661236827132d2327bc5410567d10ca4fd4dfeeaf5aa4ead5dd8bb572c1 = $this->env->getExtension("native_profiler");
        $__internal_f023d661236827132d2327bc5410567d10ca4fd4dfeeaf5aa4ead5dd8bb572c1->enter($__internal_f023d661236827132d2327bc5410567d10ca4fd4dfeeaf5aa4ead5dd8bb572c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contactez-nous| La première plateforme d'achat et de réservation de billet de bus ";
        
        $__internal_f023d661236827132d2327bc5410567d10ca4fd4dfeeaf5aa4ead5dd8bb572c1->leave($__internal_f023d661236827132d2327bc5410567d10ca4fd4dfeeaf5aa4ead5dd8bb572c1_prof);

    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        $__internal_f3b16faeaecad6a5ab6194437eb4448a0446305d27a1971d08bf429853bb91bf = $this->env->getExtension("native_profiler");
        $__internal_f3b16faeaecad6a5ab6194437eb4448a0446305d27a1971d08bf429853bb91bf->enter($__internal_f3b16faeaecad6a5ab6194437eb4448a0446305d27a1971d08bf429853bb91bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo "Notre service client reste à votre équipe 24/7 pour vous accompagner et vous guider dans votre voyage.";
        
        $__internal_f3b16faeaecad6a5ab6194437eb4448a0446305d27a1971d08bf429853bb91bf->leave($__internal_f3b16faeaecad6a5ab6194437eb4448a0446305d27a1971d08bf429853bb91bf_prof);

    }

    // line 6
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_a16fd2bf76254eceb71572c97e34452b202c57bd1a6e8624890f0b9cb8daff2c = $this->env->getExtension("native_profiler");
        $__internal_a16fd2bf76254eceb71572c97e34452b202c57bd1a6e8624890f0b9cb8daff2c->enter($__internal_a16fd2bf76254eceb71572c97e34452b202c57bd1a6e8624890f0b9cb8daff2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        // line 7
        echo "    voyage bus, bus voyage, billet de bus pas cher, bus mali, voyage car, bus pas cher mali, reservation bus, mali bus, billet de bus,
    billet bus, billet pas cher, prix billet, voyage mali, reservation nextBus, nextBus, reservation en ligne,
    plateforme de vente mali, plateforme de vente au mali, plateforme de vente de billet de bus, plateforme de vente
    de billet de bus au Mali, reserver, reserver mali, reserver au mali, achat de billet, billet mali,
    billet de bus mali, plateforme de reservation de billet de bus au Mali
";
        
        $__internal_a16fd2bf76254eceb71572c97e34452b202c57bd1a6e8624890f0b9cb8daff2c->leave($__internal_a16fd2bf76254eceb71572c97e34452b202c57bd1a6e8624890f0b9cb8daff2c_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_3dcbf28353d626532dfb76b51c6e38241a9f49dcebebb5e837c3148e8086cb46 = $this->env->getExtension("native_profiler");
        $__internal_3dcbf28353d626532dfb76b51c6e38241a9f49dcebebb5e837c3148e8086cb46->enter($__internal_3dcbf28353d626532dfb76b51c6e38241a9f49dcebebb5e837c3148e8086cb46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 15
        echo "    <div class=\"page-title-container\">
        <div class=\"container\">
            <div class=\"page-title pull-left\">
                <h2 class=\"entry-title\">Contactez-nous</h2>
            </div>
            <ul class=\"breadcrumbs pull-right\">
                <li><a href=\"#\">ACCUEIL</a></li>
                <li class=\"active\">Contactez-nous</li>
            </ul>
        </div>
    </div>

    <section id=\"content\">
        <div class=\"container\">
            <div id=\"main\">
                <div class=\"travelo-google-map block\"></div>
                <div class=\"row\">
                    <div class=\"col-sm-4 col-md-3\">
                        <div class=\"travelo-box contact-us-box\">
                            <h4>Contact us</h4>
                            <ul class=\"contact-address\">
                                <li class=\"address\">
                                    <i class=\"soap-icon-address circle\"></i>
                                    <h5 class=\"title\">Adresse</h5>
                                    <p>Balabougou SEMA près de shopreate.</p>
                                    <p>Rue: 111 Porte: 202.</p>
                                </li>
                                <li class=\"phone\">
                                    <i class=\"soap-icon-phone circle\"></i>
                                    <h5 class=\"title\">Telephone</h5>
                                    <p>Local: (+223) 44-27-27-18</p>
                                    <p>Mobile:(+223) 73 03 39 39</p>
                                </li>
                                <li class=\"email\">
                                    <i class=\"soap-icon-message circle\"></i>
                                    <h5 class=\"title\">Email</h5>
                                    <p>info@next-bus.net</p>
                                    <p>www.next-bus.net</p>
                                </li>
                            </ul>
                            <ul class=\"social-icons full-width\">
                                <li class=\"facebook\"><a title=\"facebook\" href=\"https://www.facebook.com/nextbusml/\" target=\"_blank\" data-toggle=\"tooltip\"><i class=\"soap-icon-facebook\"></i></a></li>
                                <li class=\"twitter\"><a title=\"twitter\" href=\"https://twitter.com/NextBusml\" target=\"_blank\" data-toggle=\"tooltip\"><i class=\"soap-icon-twitter\"></i></a></li>
                                <li><a href=\"#\" data-toggle=\"tooltip\" title=\"GooglePlus\"><i class=\"soap-icon-googleplus\"></i></a></li>
                                <li><a href=\"#\" data-toggle=\"tooltip\" title=\"Linkedin\"><i class=\"soap-icon-linkedin\"></i></a></li>
                                <li><a href=\"#\" data-toggle=\"tooltip\" title=\"Vimeo\"><i class=\"soap-icon-vimeo\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-sm-8 col-md-9\">
                        <div class=\"travelo-box\">
                            ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 67
            echo "                                <span class=\"info green-color\">";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</span>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                            <form class=\"contact-form\"  method=\"post\">
                                <h4 class=\"box-title\">Envoyez-nous votre message</h4>
                                <div class=\"row form-group\">
                                    <div class=\"col-xs-6\">
                                        <label>Votre nom complet</label>
                                        <input type=\"text\" name=\"name\" class=\"input-text full-width\">
                                    </div>
                                    <div class=\"col-xs-6\">
                                        <label>Votre Email</label>
                                        <input type=\"email\" name=\"email\" class=\"input-text full-width\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label>Votre Message</label>
                                    <textarea name=\"message\" rows=\"6\" class=\"input-text full-width\" placeholder=\"Ecrivez votre message ici\"></textarea>
                                </div>
                                <button type=\"submit\" class=\"btn-large full-width\">ENVOYER LE MESSAGE</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

";
        
        $__internal_3dcbf28353d626532dfb76b51c6e38241a9f49dcebebb5e837c3148e8086cb46->leave($__internal_3dcbf28353d626532dfb76b51c6e38241a9f49dcebebb5e837c3148e8086cb46_prof);

    }

    // line 98
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_c2cdf883ff67b9b2e6d9c2284c5c3819347b3b18ac9a4c27d8ff87ffb14c95ea = $this->env->getExtension("native_profiler");
        $__internal_c2cdf883ff67b9b2e6d9c2284c5c3819347b3b18ac9a4c27d8ff87ffb14c95ea->enter($__internal_c2cdf883ff67b9b2e6d9c2284c5c3819347b3b18ac9a4c27d8ff87ffb14c95ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 99
        echo "    <script type=\"text/javascript\">
        tjq(\".travelo-google-map\").gmap3({
            map: {
                options: {
                    center: [12.618573, -7.998936],
                    zoom: 12
                }
            },
            marker:{
                values: [
                    {latLng:[12.618573, -7.998936], data:\"Badalabougou\"}

                ],
                options: {
                    draggable: false
                },
            }
        });

    </script>
";
        
        $__internal_c2cdf883ff67b9b2e6d9c2284c5c3819347b3b18ac9a4c27d8ff87ffb14c95ea->leave($__internal_c2cdf883ff67b9b2e6d9c2284c5c3819347b3b18ac9a4c27d8ff87ffb14c95ea_prof);

    }

    public function getTemplateName()
    {
        return "NBMainBundle::contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 99,  185 => 98,  152 => 69,  143 => 67,  139 => 66,  86 => 15,  80 => 14,  68 => 7,  62 => 6,  50 => 4,  38 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Contactez-nous| La première plateforme d'achat et de réservation de billet de bus {% endblock %}*/
/* {% block description %}Notre service client reste à votre équipe 24/7 pour vous accompagner et vous guider dans votre voyage.{% endblock %}*/
/* */
/* {% block keywords %}*/
/*     voyage bus, bus voyage, billet de bus pas cher, bus mali, voyage car, bus pas cher mali, reservation bus, mali bus, billet de bus,*/
/*     billet bus, billet pas cher, prix billet, voyage mali, reservation nextBus, nextBus, reservation en ligne,*/
/*     plateforme de vente mali, plateforme de vente au mali, plateforme de vente de billet de bus, plateforme de vente*/
/*     de billet de bus au Mali, reserver, reserver mali, reserver au mali, achat de billet, billet mali,*/
/*     billet de bus mali, plateforme de reservation de billet de bus au Mali*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="page-title-container">*/
/*         <div class="container">*/
/*             <div class="page-title pull-left">*/
/*                 <h2 class="entry-title">Contactez-nous</h2>*/
/*             </div>*/
/*             <ul class="breadcrumbs pull-right">*/
/*                 <li><a href="#">ACCUEIL</a></li>*/
/*                 <li class="active">Contactez-nous</li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <section id="content">*/
/*         <div class="container">*/
/*             <div id="main">*/
/*                 <div class="travelo-google-map block"></div>*/
/*                 <div class="row">*/
/*                     <div class="col-sm-4 col-md-3">*/
/*                         <div class="travelo-box contact-us-box">*/
/*                             <h4>Contact us</h4>*/
/*                             <ul class="contact-address">*/
/*                                 <li class="address">*/
/*                                     <i class="soap-icon-address circle"></i>*/
/*                                     <h5 class="title">Adresse</h5>*/
/*                                     <p>Balabougou SEMA près de shopreate.</p>*/
/*                                     <p>Rue: 111 Porte: 202.</p>*/
/*                                 </li>*/
/*                                 <li class="phone">*/
/*                                     <i class="soap-icon-phone circle"></i>*/
/*                                     <h5 class="title">Telephone</h5>*/
/*                                     <p>Local: (+223) 44-27-27-18</p>*/
/*                                     <p>Mobile:(+223) 73 03 39 39</p>*/
/*                                 </li>*/
/*                                 <li class="email">*/
/*                                     <i class="soap-icon-message circle"></i>*/
/*                                     <h5 class="title">Email</h5>*/
/*                                     <p>info@next-bus.net</p>*/
/*                                     <p>www.next-bus.net</p>*/
/*                                 </li>*/
/*                             </ul>*/
/*                             <ul class="social-icons full-width">*/
/*                                 <li class="facebook"><a title="facebook" href="https://www.facebook.com/nextbusml/" target="_blank" data-toggle="tooltip"><i class="soap-icon-facebook"></i></a></li>*/
/*                                 <li class="twitter"><a title="twitter" href="https://twitter.com/NextBusml" target="_blank" data-toggle="tooltip"><i class="soap-icon-twitter"></i></a></li>*/
/*                                 <li><a href="#" data-toggle="tooltip" title="GooglePlus"><i class="soap-icon-googleplus"></i></a></li>*/
/*                                 <li><a href="#" data-toggle="tooltip" title="Linkedin"><i class="soap-icon-linkedin"></i></a></li>*/
/*                                 <li><a href="#" data-toggle="tooltip" title="Vimeo"><i class="soap-icon-vimeo"></i></a></li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-sm-8 col-md-9">*/
/*                         <div class="travelo-box">*/
/*                             {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*                                 <span class="info green-color">{{ flashMessage }}</span>*/
/*                             {% endfor %}*/
/*                             <form class="contact-form"  method="post">*/
/*                                 <h4 class="box-title">Envoyez-nous votre message</h4>*/
/*                                 <div class="row form-group">*/
/*                                     <div class="col-xs-6">*/
/*                                         <label>Votre nom complet</label>*/
/*                                         <input type="text" name="name" class="input-text full-width">*/
/*                                     </div>*/
/*                                     <div class="col-xs-6">*/
/*                                         <label>Votre Email</label>*/
/*                                         <input type="email" name="email" class="input-text full-width">*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label>Votre Message</label>*/
/*                                     <textarea name="message" rows="6" class="input-text full-width" placeholder="Ecrivez votre message ici"></textarea>*/
/*                                 </div>*/
/*                                 <button type="submit" class="btn-large full-width">ENVOYER LE MESSAGE</button>*/
/*                             </form>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block scripts %}*/
/*     <script type="text/javascript">*/
/*         tjq(".travelo-google-map").gmap3({*/
/*             map: {*/
/*                 options: {*/
/*                     center: [12.618573, -7.998936],*/
/*                     zoom: 12*/
/*                 }*/
/*             },*/
/*             marker:{*/
/*                 values: [*/
/*                     {latLng:[12.618573, -7.998936], data:"Badalabougou"}*/
/* */
/*                 ],*/
/*                 options: {*/
/*                     draggable: false*/
/*                 },*/
/*             }*/
/*         });*/
/* */
/*     </script>*/
/* {% endblock %}*/
