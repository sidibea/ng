<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_395a4341ccd84c7d7d24d15bf84ef44e66bfa80bbf6ab92d44c10b2e70886774 extends Twig_Template
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
        $__internal_4c73e5ed2aa283cb5a7cd5631c067a0a0604b8612a595be8d6ae85617c5918e7 = $this->env->getExtension("native_profiler");
        $__internal_4c73e5ed2aa283cb5a7cd5631c067a0a0604b8612a595be8d6ae85617c5918e7->enter($__internal_4c73e5ed2aa283cb5a7cd5631c067a0a0604b8612a595be8d6ae85617c5918e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_resetting_reset\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_4c73e5ed2aa283cb5a7cd5631c067a0a0604b8612a595be8d6ae85617c5918e7->leave($__internal_4c73e5ed2aa283cb5a7cd5631c067a0a0604b8612a595be8d6ae85617c5918e7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset_content.html.twig";
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
/* <form action="{{ path('fos_user_resetting_reset', {'token': token}) }}" {{ form_enctype(form) }} method="POST" class="fos_user_resetting_reset">*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'resetting.reset.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*     </div>*/
/* </form>*/
/* */
