<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_47348cc9c321bd15504cd1253180744f88ba858c8e7f96a50dba74f1c80feffd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_a0d7d2d8d54c35e0880f99cf453235835a8110378fc693ff4c0fdbe4ba425f74 = $this->env->getExtension("native_profiler");
        $__internal_a0d7d2d8d54c35e0880f99cf453235835a8110378fc693ff4c0fdbe4ba425f74->enter($__internal_a0d7d2d8d54c35e0880f99cf453235835a8110378fc693ff4c0fdbe4ba425f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0d7d2d8d54c35e0880f99cf453235835a8110378fc693ff4c0fdbe4ba425f74->leave($__internal_a0d7d2d8d54c35e0880f99cf453235835a8110378fc693ff4c0fdbe4ba425f74_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8a72903236dc3b2b53b9a8be87b7659ed7471a27c09ecce0af640446bf78d916 = $this->env->getExtension("native_profiler");
        $__internal_8a72903236dc3b2b53b9a8be87b7659ed7471a27c09ecce0af640446bf78d916->enter($__internal_8a72903236dc3b2b53b9a8be87b7659ed7471a27c09ecce0af640446bf78d916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_8a72903236dc3b2b53b9a8be87b7659ed7471a27c09ecce0af640446bf78d916->leave($__internal_8a72903236dc3b2b53b9a8be87b7659ed7471a27c09ecce0af640446bf78d916_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}*/
/* </p>*/
/* {% endblock %}*/
/* */
