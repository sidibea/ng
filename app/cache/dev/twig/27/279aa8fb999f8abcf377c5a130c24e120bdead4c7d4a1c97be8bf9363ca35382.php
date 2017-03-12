<?php

/* NBMainBundle::layout.html.twig */
class __TwigTemplate_e926d3255f38c322314445f8099e834370c19ff4f683740b9cc356b058fc59ae extends Twig_Template
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
        $__internal_f93f70502b5b8095bfcd012b16f8a2d2edba78268490776066d46a45e0597869 = $this->env->getExtension("native_profiler");
        $__internal_f93f70502b5b8095bfcd012b16f8a2d2edba78268490776066d46a45e0597869->enter($__internal_f93f70502b5b8095bfcd012b16f8a2d2edba78268490776066d46a45e0597869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NBMainBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f93f70502b5b8095bfcd012b16f8a2d2edba78268490776066d46a45e0597869->leave($__internal_f93f70502b5b8095bfcd012b16f8a2d2edba78268490776066d46a45e0597869_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_34e2bcf90349fc3edfe81535c62839d41b39fd3dadc76002c4fb8546d620b899 = $this->env->getExtension("native_profiler");
        $__internal_34e2bcf90349fc3edfe81535c62839d41b39fd3dadc76002c4fb8546d620b899->enter($__internal_34e2bcf90349fc3edfe81535c62839d41b39fd3dadc76002c4fb8546d620b899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_34e2bcf90349fc3edfe81535c62839d41b39fd3dadc76002c4fb8546d620b899->leave($__internal_34e2bcf90349fc3edfe81535c62839d41b39fd3dadc76002c4fb8546d620b899_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_3d4c764fe01b8ea434e2bf6ecfc5dfe2e17bc3420a7d8e8b966d9478ba2722b5 = $this->env->getExtension("native_profiler");
        $__internal_3d4c764fe01b8ea434e2bf6ecfc5dfe2e17bc3420a7d8e8b966d9478ba2722b5->enter($__internal_3d4c764fe01b8ea434e2bf6ecfc5dfe2e17bc3420a7d8e8b966d9478ba2722b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_3d4c764fe01b8ea434e2bf6ecfc5dfe2e17bc3420a7d8e8b966d9478ba2722b5->leave($__internal_3d4c764fe01b8ea434e2bf6ecfc5dfe2e17bc3420a7d8e8b966d9478ba2722b5_prof);

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
