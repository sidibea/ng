<?php

/* includes/topnav.html.twig */
class __TwigTemplate_71c25fa224679d07d2f54548cfd05c1fdaecd138d4a5d502c12824749fc85c4e extends Twig_Template
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
        $__internal_2f898cadd3d14db308da2e5549bcfe7f3af0bc47a922dbba637bea92e78f77dd = $this->env->getExtension("native_profiler");
        $__internal_2f898cadd3d14db308da2e5549bcfe7f3af0bc47a922dbba637bea92e78f77dd->enter($__internal_2f898cadd3d14db308da2e5549bcfe7f3af0bc47a922dbba637bea92e78f77dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "includes/topnav.html.twig"));

        // line 1
        echo "<div class=\"container\">
    <ul class=\"quick-menu pull-left\">
        <li><a href=\"#\" class=\"soap-popupbox\">IMPRIMER TICKET</a></li>
        <li><a href=\"#\" class=\"soap-popupbox\">ANNULATION</a></li>

    </ul>
    <ul class=\"quick-menu pull-right\">
        ";
        // line 8
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 9
            echo "            <li><a href=\"#\">MON COMPTE</a></li>
        ";
        } else {
            // line 11
            echo "            <li><a href=\"/login\" class=\"\">CONNEXION</a></li>
            <li><a href=\"";
            // line 12
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\" >INSCRIPTION</a></li>
        ";
        }
        // line 14
        echo "

    </ul>
</div>";
        
        $__internal_2f898cadd3d14db308da2e5549bcfe7f3af0bc47a922dbba637bea92e78f77dd->leave($__internal_2f898cadd3d14db308da2e5549bcfe7f3af0bc47a922dbba637bea92e78f77dd_prof);

    }

    public function getTemplateName()
    {
        return "includes/topnav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 14,  40 => 12,  37 => 11,  33 => 9,  31 => 8,  22 => 1,);
    }
}
/* <div class="container">*/
/*     <ul class="quick-menu pull-left">*/
/*         <li><a href="#" class="soap-popupbox">IMPRIMER TICKET</a></li>*/
/*         <li><a href="#" class="soap-popupbox">ANNULATION</a></li>*/
/* */
/*     </ul>*/
/*     <ul class="quick-menu pull-right">*/
/*         {% if app.user %}*/
/*             <li><a href="#">MON COMPTE</a></li>*/
/*         {% else %}*/
/*             <li><a href="/login" class="">CONNEXION</a></li>*/
/*             <li><a href="{{ path('fos_user_registration_register') }}" >INSCRIPTION</a></li>*/
/*         {% endif %}*/
/* */
/* */
/*     </ul>*/
/* </div>*/
