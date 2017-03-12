<?php

/* includes/desktop_menu.html.twig */
class __TwigTemplate_65ce2d93de8bfb7553ab734af435c5c4f26017876172855a38ed2f4242057930 extends Twig_Template
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
        $__internal_dc00b9f6762bfd174b1ddd0ade209e0a183df4866aa431242320b881a8c79f23 = $this->env->getExtension("native_profiler");
        $__internal_dc00b9f6762bfd174b1ddd0ade209e0a183df4866aa431242320b881a8c79f23->enter($__internal_dc00b9f6762bfd174b1ddd0ade209e0a183df4866aa431242320b881a8c79f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "includes/desktop_menu.html.twig"));

        // line 1
        echo "<ul class=\"menu\">
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


</ul>";
        
        $__internal_dc00b9f6762bfd174b1ddd0ade209e0a183df4866aa431242320b881a8c79f23->leave($__internal_dc00b9f6762bfd174b1ddd0ade209e0a183df4866aa431242320b881a8c79f23_prof);

    }

    public function getTemplateName()
    {
        return "includes/desktop_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  45 => 13,  38 => 9,  34 => 8,  26 => 3,  22 => 1,);
    }
}
/* <ul class="menu">*/
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
/* */
/* */
/* </ul>*/
