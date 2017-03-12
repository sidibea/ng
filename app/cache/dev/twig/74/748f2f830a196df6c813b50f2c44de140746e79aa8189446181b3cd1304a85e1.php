<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_790cca7b39e3368bf5c2cd37967086375f5140c51bfef63914ee783c5930ab55 extends Twig_Template
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
        $__internal_d0f0a83627f8c0c3fd3bd7a8a7baf64d7e28855e9a2e5447b0cde1c91bbb374d = $this->env->getExtension("native_profiler");
        $__internal_d0f0a83627f8c0c3fd3bd7a8a7baf64d7e28855e9a2e5447b0cde1c91bbb374d->enter($__internal_d0f0a83627f8c0c3fd3bd7a8a7baf64d7e28855e9a2e5447b0cde1c91bbb374d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_profile_edit\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_d0f0a83627f8c0c3fd3bd7a8a7baf64d7e28855e9a2e5447b0cde1c91bbb374d->leave($__internal_d0f0a83627f8c0c3fd3bd7a8a7baf64d7e28855e9a2e5447b0cde1c91bbb374d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  29 => 2,  22 => 1,);
    }
}
/* <form action="{{ path('fos_user_profile_edit') }}" {{ form_enctype(form) }} method="POST" class="fos_user_profile_edit">*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'profile.edit.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*     </div>*/
/* </form>*/
/* */
