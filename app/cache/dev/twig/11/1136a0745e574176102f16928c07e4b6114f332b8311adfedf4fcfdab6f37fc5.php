<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8885c391b443224975fb681cbd8875d9ee71fed8a70751068e5dd648e4ed754f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_665229de8199c3e2c2d46bd8a97387aa2c134e2f59c10596fd8a672b7fcda547 = $this->env->getExtension("native_profiler");
        $__internal_665229de8199c3e2c2d46bd8a97387aa2c134e2f59c10596fd8a672b7fcda547->enter($__internal_665229de8199c3e2c2d46bd8a97387aa2c134e2f59c10596fd8a672b7fcda547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_665229de8199c3e2c2d46bd8a97387aa2c134e2f59c10596fd8a672b7fcda547->leave($__internal_665229de8199c3e2c2d46bd8a97387aa2c134e2f59c10596fd8a672b7fcda547_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3bce75b6dd02c099ef49656010653ee9ecc96f00e9f8211a5e7e307e147cc152 = $this->env->getExtension("native_profiler");
        $__internal_3bce75b6dd02c099ef49656010653ee9ecc96f00e9f8211a5e7e307e147cc152->enter($__internal_3bce75b6dd02c099ef49656010653ee9ecc96f00e9f8211a5e7e307e147cc152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3bce75b6dd02c099ef49656010653ee9ecc96f00e9f8211a5e7e307e147cc152->leave($__internal_3bce75b6dd02c099ef49656010653ee9ecc96f00e9f8211a5e7e307e147cc152_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f295274a9c69258916c3b4c1bd02914d3eb2d418e1c8c00aac3b65fb4fa57bc = $this->env->getExtension("native_profiler");
        $__internal_9f295274a9c69258916c3b4c1bd02914d3eb2d418e1c8c00aac3b65fb4fa57bc->enter($__internal_9f295274a9c69258916c3b4c1bd02914d3eb2d418e1c8c00aac3b65fb4fa57bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9f295274a9c69258916c3b4c1bd02914d3eb2d418e1c8c00aac3b65fb4fa57bc->leave($__internal_9f295274a9c69258916c3b4c1bd02914d3eb2d418e1c8c00aac3b65fb4fa57bc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f3ccff5cb1c976855faf51f8d776f678f68cb0a325de033fb9b5ecc3663e07f = $this->env->getExtension("native_profiler");
        $__internal_3f3ccff5cb1c976855faf51f8d776f678f68cb0a325de033fb9b5ecc3663e07f->enter($__internal_3f3ccff5cb1c976855faf51f8d776f678f68cb0a325de033fb9b5ecc3663e07f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3f3ccff5cb1c976855faf51f8d776f678f68cb0a325de033fb9b5ecc3663e07f->leave($__internal_3f3ccff5cb1c976855faf51f8d776f678f68cb0a325de033fb9b5ecc3663e07f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
