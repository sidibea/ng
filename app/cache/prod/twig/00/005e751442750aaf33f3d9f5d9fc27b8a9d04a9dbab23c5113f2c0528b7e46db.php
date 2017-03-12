<?php

/* includes/login.html.twig */
class __TwigTemplate_51b011963fe62e936777c78c94fb490dc912c9c400fa8b4b221b3b421cd273e3 extends Twig_Template
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
        $__internal_9cb2384a9f1f16f31fb32bbbc360fe88e0595a28d541c94a91e894b043fa11a3 = $this->env->getExtension("native_profiler");
        $__internal_9cb2384a9f1f16f31fb32bbbc360fe88e0595a28d541c94a91e894b043fa11a3->enter($__internal_9cb2384a9f1f16f31fb32bbbc360fe88e0595a28d541c94a91e894b043fa11a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "includes/login.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">

    <div class=\"form-group\">
        <label for=\"username\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" class=\"input-text full-width\" id=\"username\" name=\"_username\"   placeholder=\"Adresse email\" required=\"required\" />
    </div>
    <div class=\"form-group\">
        <label for=\"password\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"password\" class=\"input-text full-width\" id=\"password\" name=\"_password\" placeholder=\"Mot de passe\" required=\"required\" />
    </div>
    <div class=\"form-group\">
        <a href=\"#\" class=\"forgot-password pull-right\">Forgot password?</a>
        <div class=\"checkbox checkbox-inline\">
            <label>
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                <label for=\"remember_me\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            </label>
        </div>
    </div>
    <input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()), "html", null, true);
        echo "\" />
    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    <div class=\"seperator\"></div>
    <p>Don't have an account? <a href=\"#travelo-signup\" class=\"goto-signup soap-popupbox\">Sign up</a></p>
</form>

";
        
        $__internal_9cb2384a9f1f16f31fb32bbbc360fe88e0595a28d541c94a91e894b043fa11a3->leave($__internal_9cb2384a9f1f16f31fb32bbbc360fe88e0595a28d541c94a91e894b043fa11a3_prof);

    }

    public function getTemplateName()
    {
        return "includes/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 21,  54 => 20,  47 => 16,  36 => 8,  29 => 4,  22 => 1,);
    }
}
/* <form action="{{ path("fos_user_security_check") }}" method="post">*/
/* */
/*     <div class="form-group">*/
/*         <label for="username">{{ 'security.login.username'|trans({}, 'FOSUserBundle') }}</label>*/
/*         <input type="text" class="input-text full-width" id="username" name="_username"   placeholder="Adresse email" required="required" />*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <label for="password">{{ 'security.login.password'|trans({}, 'FOSUserBundle') }}</label>*/
/*         <input type="password" class="input-text full-width" id="password" name="_password" placeholder="Mot de passe" required="required" />*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <a href="#" class="forgot-password pull-right">Forgot password?</a>*/
/*         <div class="checkbox checkbox-inline">*/
/*             <label>*/
/*                 <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*                 <label for="remember_me">{{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}</label>*/
/*             </label>*/
/*         </div>*/
/*     </div>*/
/*     <input type="hidden" name="_target_path" value="{{ app.request.uri }}" />*/
/*     <input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*     <div class="seperator"></div>*/
/*     <p>Don't have an account? <a href="#travelo-signup" class="goto-signup soap-popupbox">Sign up</a></p>*/
/* </form>*/
/* */
/* */
