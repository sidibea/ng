<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_b037df6590f01dcb76478e8f004d6066cc56e69e8c16214e1264c36a249493d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc6d3d8d469523196111e8bb630fa64891142683be5b9c877845173229860f30 = $this->env->getExtension("native_profiler");
        $__internal_bc6d3d8d469523196111e8bb630fa64891142683be5b9c877845173229860f30->enter($__internal_bc6d3d8d469523196111e8bb630fa64891142683be5b9c877845173229860f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_bc6d3d8d469523196111e8bb630fa64891142683be5b9c877845173229860f30->leave($__internal_bc6d3d8d469523196111e8bb630fa64891142683be5b9c877845173229860f30_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b7614e78df9b070f2c8c9a9acb8bf72d2f15ece00a6d3c6e3df3c9cda3eb3d15 = $this->env->getExtension("native_profiler");
        $__internal_b7614e78df9b070f2c8c9a9acb8bf72d2f15ece00a6d3c6e3df3c9cda3eb3d15->enter($__internal_b7614e78df9b070f2c8c9a9acb8bf72d2f15ece00a6d3c6e3df3c9cda3eb3d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b7614e78df9b070f2c8c9a9acb8bf72d2f15ece00a6d3c6e3df3c9cda3eb3d15->leave($__internal_b7614e78df9b070f2c8c9a9acb8bf72d2f15ece00a6d3c6e3df3c9cda3eb3d15_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_78a5d44ea102a3df005639d11ee3eb7c3ce7f85c489efe345f535d0e04b900c0 = $this->env->getExtension("native_profiler");
        $__internal_78a5d44ea102a3df005639d11ee3eb7c3ce7f85c489efe345f535d0e04b900c0->enter($__internal_78a5d44ea102a3df005639d11ee3eb7c3ce7f85c489efe345f535d0e04b900c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_78a5d44ea102a3df005639d11ee3eb7c3ce7f85c489efe345f535d0e04b900c0->leave($__internal_78a5d44ea102a3df005639d11ee3eb7c3ce7f85c489efe345f535d0e04b900c0_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e4dad8068e3f899204be6189dff74475dce3129b69fab4f1404f5dffc905b7e7 = $this->env->getExtension("native_profiler");
        $__internal_e4dad8068e3f899204be6189dff74475dce3129b69fab4f1404f5dffc905b7e7->enter($__internal_e4dad8068e3f899204be6189dff74475dce3129b69fab4f1404f5dffc905b7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e4dad8068e3f899204be6189dff74475dce3129b69fab4f1404f5dffc905b7e7->leave($__internal_e4dad8068e3f899204be6189dff74475dce3129b69fab4f1404f5dffc905b7e7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }
}
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
