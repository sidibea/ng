<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_46bc5f0ec6fad6924dbe6d2e843e56126d4768cffaf8d1a8c2c87af872185f9c extends Twig_Template
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
        $__internal_bdd2fcd19607e0c285ddf0f16e8fb9eb66326bc0e195aba097ec76b553ffee94 = $this->env->getExtension("native_profiler");
        $__internal_bdd2fcd19607e0c285ddf0f16e8fb9eb66326bc0e195aba097ec76b553ffee94->enter($__internal_bdd2fcd19607e0c285ddf0f16e8fb9eb66326bc0e195aba097ec76b553ffee94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 1
        echo "é<div class=\"fos_user_user_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_bdd2fcd19607e0c285ddf0f16e8fb9eb66326bc0e195aba097ec76b553ffee94->leave($__internal_bdd2fcd19607e0c285ddf0f16e8fb9eb66326bc0e195aba097ec76b553ffee94_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 2,  22 => 1,);
    }
}
/* é<div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans({}, 'FOSUserBundle') }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans({}, 'FOSUserBundle') }}: {{ user.email }}</p>*/
/* </div>*/
/* */
