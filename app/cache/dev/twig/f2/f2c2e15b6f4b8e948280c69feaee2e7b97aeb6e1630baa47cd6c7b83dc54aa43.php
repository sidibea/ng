<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_64aa9c6a223883c641b4ece5c1199199f1f643334aec9c8b50b0e3d8b437ef7c extends Twig_Template
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
        $__internal_470a2ef21d7f8ae84d7a37ff3eac4367dc389eb26eb82a51a7a41f49dfae94bd = $this->env->getExtension("native_profiler");
        $__internal_470a2ef21d7f8ae84d7a37ff3eac4367dc389eb26eb82a51a7a41f49dfae94bd->enter($__internal_470a2ef21d7f8ae84d7a37ff3eac4367dc389eb26eb82a51a7a41f49dfae94bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_470a2ef21d7f8ae84d7a37ff3eac4367dc389eb26eb82a51a7a41f49dfae94bd->leave($__internal_470a2ef21d7f8ae84d7a37ff3eac4367dc389eb26eb82a51a7a41f49dfae94bd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
