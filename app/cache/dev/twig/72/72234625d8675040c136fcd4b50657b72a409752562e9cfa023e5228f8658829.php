<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_40f1176cba2bebfed91b51b6b222e2f5ca805944784113b19402e022748b4b64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94e1613aeb2d38fad2303591296cce062edbb010c894fd3caf4dfbc9479f4af1 = $this->env->getExtension("native_profiler");
        $__internal_94e1613aeb2d38fad2303591296cce062edbb010c894fd3caf4dfbc9479f4af1->enter($__internal_94e1613aeb2d38fad2303591296cce062edbb010c894fd3caf4dfbc9479f4af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94e1613aeb2d38fad2303591296cce062edbb010c894fd3caf4dfbc9479f4af1->leave($__internal_94e1613aeb2d38fad2303591296cce062edbb010c894fd3caf4dfbc9479f4af1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6655acb8d8099d07396964f4ab1f3ffbd87ef7e0fe87c8c4000d3d40272ca5b2 = $this->env->getExtension("native_profiler");
        $__internal_6655acb8d8099d07396964f4ab1f3ffbd87ef7e0fe87c8c4000d3d40272ca5b2->enter($__internal_6655acb8d8099d07396964f4ab1f3ffbd87ef7e0fe87c8c4000d3d40272ca5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_6655acb8d8099d07396964f4ab1f3ffbd87ef7e0fe87c8c4000d3d40272ca5b2->leave($__internal_6655acb8d8099d07396964f4ab1f3ffbd87ef7e0fe87c8c4000d3d40272ca5b2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
