<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e9e1ba41ed79ac0f6dea58b2c77dee0830a034f39eea714d8f0f979e3b4bb175 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c92a8b17ba449a569d013af43230ace113c466f2c78c1b79714973ba8f306e7f = $this->env->getExtension("native_profiler");
        $__internal_c92a8b17ba449a569d013af43230ace113c466f2c78c1b79714973ba8f306e7f->enter($__internal_c92a8b17ba449a569d013af43230ace113c466f2c78c1b79714973ba8f306e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c92a8b17ba449a569d013af43230ace113c466f2c78c1b79714973ba8f306e7f->leave($__internal_c92a8b17ba449a569d013af43230ace113c466f2c78c1b79714973ba8f306e7f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_12a3ae7f4b794c30ca19ce07525d4e8959699f797227a67ddf7c6344a12988fc = $this->env->getExtension("native_profiler");
        $__internal_12a3ae7f4b794c30ca19ce07525d4e8959699f797227a67ddf7c6344a12988fc->enter($__internal_12a3ae7f4b794c30ca19ce07525d4e8959699f797227a67ddf7c6344a12988fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_12a3ae7f4b794c30ca19ce07525d4e8959699f797227a67ddf7c6344a12988fc->leave($__internal_12a3ae7f4b794c30ca19ce07525d4e8959699f797227a67ddf7c6344a12988fc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ab5e06c38d8bb9fea29a3f1ce487231c025d41103d8a6939538d3cc13e0a466d = $this->env->getExtension("native_profiler");
        $__internal_ab5e06c38d8bb9fea29a3f1ce487231c025d41103d8a6939538d3cc13e0a466d->enter($__internal_ab5e06c38d8bb9fea29a3f1ce487231c025d41103d8a6939538d3cc13e0a466d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ab5e06c38d8bb9fea29a3f1ce487231c025d41103d8a6939538d3cc13e0a466d->leave($__internal_ab5e06c38d8bb9fea29a3f1ce487231c025d41103d8a6939538d3cc13e0a466d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_123e7aa972e485b89b7adadb760dabffff5d9157507f81becd1f08c14a5c59d9 = $this->env->getExtension("native_profiler");
        $__internal_123e7aa972e485b89b7adadb760dabffff5d9157507f81becd1f08c14a5c59d9->enter($__internal_123e7aa972e485b89b7adadb760dabffff5d9157507f81becd1f08c14a5c59d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_123e7aa972e485b89b7adadb760dabffff5d9157507f81becd1f08c14a5c59d9->leave($__internal_123e7aa972e485b89b7adadb760dabffff5d9157507f81becd1f08c14a5c59d9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
