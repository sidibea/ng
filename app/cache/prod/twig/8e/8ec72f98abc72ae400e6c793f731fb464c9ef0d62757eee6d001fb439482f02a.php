<?php

/* includes/mobile_menu.html.twig */
class __TwigTemplate_a3d338fc2abf05916d09dbf10bb02f195d67d9319e0ce78a3bf623511fdfe1ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15fa10c708c5656b62deb266a66f83dcebe0a7f5a41ac1c0223f4a4f2425cda8 = $this->env->getExtension("native_profiler");
        $__internal_15fa10c708c5656b62deb266a66f83dcebe0a7f5a41ac1c0223f4a4f2425cda8->enter($__internal_15fa10c708c5656b62deb266a66f83dcebe0a7f5a41ac1c0223f4a4f2425cda8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "includes/mobile_menu.html.twig"));

        // line 1
        echo "<ul id=\"mobile-primary-menu\" class=\"menu\">
    <li class=\"\">
        <a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("nb_main_homepage");
        echo "\">Accueil</a>
    </li>
    <li class=\"\">
        <a href=\"\">Locations de voitures</a>
    </li>
    <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("nb_main_aboutus");
        echo "\">Qui sommes-nous ?</a></li>
    <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("nb_main_promo");
        echo "\">Bons plans</a></li>


    <li class=\"\">
        <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("nb_main_devenir_partenaire");
        echo "\">Devenir Partenaire</a>
    </li>
    <li class=\"\">
        <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("nb_main_contact");
        echo "\">Contact</a>
    </li>
</ul>

<ul class=\"mobile-topnav container\">
    <li><a href=\"#\">MON COMPTE</a></li>
    <li><a href=\"#\" data-toggle=\"collapse\">IMPRIMER TICKET</a></li>

    <li><a href=\"#\" class=\"soap-popupbox\">ANNULATION</a></li>

    ";
        // line 26
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 27
            echo "        <li><a href=\"#\">MON COMPTE</a></li>
    ";
        } else {
            // line 29
            echo "        <li><a href=\"/login\" class=\"\">CONNEXION</a></li>
        <li><a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\" >INSCRIPTION</a></li>
    ";
        }
        // line 32
        echo "
</ul>
";
        
        $__internal_15fa10c708c5656b62deb266a66f83dcebe0a7f5a41ac1c0223f4a4f2425cda8->leave($__internal_15fa10c708c5656b62deb266a66f83dcebe0a7f5a41ac1c0223f4a4f2425cda8_prof);

    }

    public function getTemplateName()
    {
        return "includes/mobile_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 32,  73 => 30,  70 => 29,  66 => 27,  64 => 26,  51 => 16,  45 => 13,  38 => 9,  34 => 8,  26 => 3,  22 => 1,);
    }
}
/* <ul id="mobile-primary-menu" class="menu">*/
/*     <li class="">*/
/*         <a href="{{ path('nb_main_homepage') }}">Accueil</a>*/
/*     </li>*/
/*     <li class="">*/
/*         <a href="">Locations de voitures</a>*/
/*     </li>*/
/*     <li><a href="{{ path('nb_main_aboutus') }}">Qui sommes-nous ?</a></li>*/
/*     <li><a href="{{ path('nb_main_promo') }}">Bons plans</a></li>*/
/* */
/* */
/*     <li class="">*/
/*         <a href="{{ path('nb_main_devenir_partenaire') }}">Devenir Partenaire</a>*/
/*     </li>*/
/*     <li class="">*/
/*         <a href="{{ path('nb_main_contact') }}">Contact</a>*/
/*     </li>*/
/* </ul>*/
/* */
/* <ul class="mobile-topnav container">*/
/*     <li><a href="#">MON COMPTE</a></li>*/
/*     <li><a href="#" data-toggle="collapse">IMPRIMER TICKET</a></li>*/
/* */
/*     <li><a href="#" class="soap-popupbox">ANNULATION</a></li>*/
/* */
/*     {% if app.user %}*/
/*         <li><a href="#">MON COMPTE</a></li>*/
/*     {% else %}*/
/*         <li><a href="/login" class="">CONNEXION</a></li>*/
/*         <li><a href="{{ path('fos_user_registration_register') }}" >INSCRIPTION</a></li>*/
/*     {% endif %}*/
/* */
/* </ul>*/
/* */