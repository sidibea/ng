<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_305c6e6e259b1c4339b1cc2829f49f75578830d304c3290c3f6b1b278b5a90e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_113e451b524461e67c8473cbd1780f7856dcd28100b52a24b76b0b9015a2e65d = $this->env->getExtension("native_profiler");
        $__internal_113e451b524461e67c8473cbd1780f7856dcd28100b52a24b76b0b9015a2e65d->enter($__internal_113e451b524461e67c8473cbd1780f7856dcd28100b52a24b76b0b9015a2e65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_113e451b524461e67c8473cbd1780f7856dcd28100b52a24b76b0b9015a2e65d->leave($__internal_113e451b524461e67c8473cbd1780f7856dcd28100b52a24b76b0b9015a2e65d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f3b646a8618f20bce53f49ed1d70e48c4992032c85331580e2d495ef0c9d9352 = $this->env->getExtension("native_profiler");
        $__internal_f3b646a8618f20bce53f49ed1d70e48c4992032c85331580e2d495ef0c9d9352->enter($__internal_f3b646a8618f20bce53f49ed1d70e48c4992032c85331580e2d495ef0c9d9352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f3b646a8618f20bce53f49ed1d70e48c4992032c85331580e2d495ef0c9d9352->leave($__internal_f3b646a8618f20bce53f49ed1d70e48c4992032c85331580e2d495ef0c9d9352_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
/* <p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
