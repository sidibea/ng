<?php

/* NBMainBundle::layout.html.twig */
class __TwigTemplate_b79a2f58151de82b9098d6c5987bd6a4804eb2935f138dd95af84e0e1a8eca48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "NBMainBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b497092d18b75d52d9971103ad309773eac5e0d4154c8e0f0b4586e7849f5b60 = $this->env->getExtension("native_profiler");
        $__internal_b497092d18b75d52d9971103ad309773eac5e0d4154c8e0f0b4586e7849f5b60->enter($__internal_b497092d18b75d52d9971103ad309773eac5e0d4154c8e0f0b4586e7849f5b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NBMainBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b497092d18b75d52d9971103ad309773eac5e0d4154c8e0f0b4586e7849f5b60->leave($__internal_b497092d18b75d52d9971103ad309773eac5e0d4154c8e0f0b4586e7849f5b60_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3228ede659e08c5bc0f1e61661c2120835c8aff3fa49e42b0729cce478331caa = $this->env->getExtension("native_profiler");
        $__internal_3228ede659e08c5bc0f1e61661c2120835c8aff3fa49e42b0729cce478331caa->enter($__internal_3228ede659e08c5bc0f1e61661c2120835c8aff3fa49e42b0729cce478331caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_3228ede659e08c5bc0f1e61661c2120835c8aff3fa49e42b0729cce478331caa->leave($__internal_3228ede659e08c5bc0f1e61661c2120835c8aff3fa49e42b0729cce478331caa_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_a59d9deefcef45a056f185b834ce285e63f592316df74ad6ef83709202d0dc8e = $this->env->getExtension("native_profiler");
        $__internal_a59d9deefcef45a056f185b834ce285e63f592316df74ad6ef83709202d0dc8e->enter($__internal_a59d9deefcef45a056f185b834ce285e63f592316df74ad6ef83709202d0dc8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_a59d9deefcef45a056f185b834ce285e63f592316df74ad6ef83709202d0dc8e->leave($__internal_a59d9deefcef45a056f185b834ce285e63f592316df74ad6ef83709202d0dc8e_prof);

    }

    public function getTemplateName()
    {
        return "NBMainBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %} {% endblock %}*/
/* */
/* {% block content %} {% endblock %}*/
