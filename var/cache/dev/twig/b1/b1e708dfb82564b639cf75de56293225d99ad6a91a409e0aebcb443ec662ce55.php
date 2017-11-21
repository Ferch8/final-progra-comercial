<?php

/* base.html.twig */
class __TwigTemplate_36f4d58f7e74f4ce87215a4d07af0464bac931481b4a83712777b4aa90f13cf0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46cf4c80fc565a8c3095ecdb9ff519a35d6c246d6924ce25103a52a991ea095a = $this->env->getExtension("native_profiler");
        $__internal_46cf4c80fc565a8c3095ecdb9ff519a35d6c246d6924ce25103a52a991ea095a->enter($__internal_46cf4c80fc565a8c3095ecdb9ff519a35d6c246d6924ce25103a52a991ea095a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_46cf4c80fc565a8c3095ecdb9ff519a35d6c246d6924ce25103a52a991ea095a->leave($__internal_46cf4c80fc565a8c3095ecdb9ff519a35d6c246d6924ce25103a52a991ea095a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b40b5f86f6e30878a1a6ded95bf553021743f0d0f6a06c1fd241968e616f48b9 = $this->env->getExtension("native_profiler");
        $__internal_b40b5f86f6e30878a1a6ded95bf553021743f0d0f6a06c1fd241968e616f48b9->enter($__internal_b40b5f86f6e30878a1a6ded95bf553021743f0d0f6a06c1fd241968e616f48b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b40b5f86f6e30878a1a6ded95bf553021743f0d0f6a06c1fd241968e616f48b9->leave($__internal_b40b5f86f6e30878a1a6ded95bf553021743f0d0f6a06c1fd241968e616f48b9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_da40ce543a4c2b0587cd623ebb7c7436bcb97cbc8a1f67a1d196b5216839901b = $this->env->getExtension("native_profiler");
        $__internal_da40ce543a4c2b0587cd623ebb7c7436bcb97cbc8a1f67a1d196b5216839901b->enter($__internal_da40ce543a4c2b0587cd623ebb7c7436bcb97cbc8a1f67a1d196b5216839901b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_da40ce543a4c2b0587cd623ebb7c7436bcb97cbc8a1f67a1d196b5216839901b->leave($__internal_da40ce543a4c2b0587cd623ebb7c7436bcb97cbc8a1f67a1d196b5216839901b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_80834533c7ec81abbb808bec72eba1f3a0bf0d586d3ee4ca2796bbd81e4e10fe = $this->env->getExtension("native_profiler");
        $__internal_80834533c7ec81abbb808bec72eba1f3a0bf0d586d3ee4ca2796bbd81e4e10fe->enter($__internal_80834533c7ec81abbb808bec72eba1f3a0bf0d586d3ee4ca2796bbd81e4e10fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_80834533c7ec81abbb808bec72eba1f3a0bf0d586d3ee4ca2796bbd81e4e10fe->leave($__internal_80834533c7ec81abbb808bec72eba1f3a0bf0d586d3ee4ca2796bbd81e4e10fe_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_761ee49db5e649a0fee82a42db15636a14b548e6785609cb17ac590815a8a308 = $this->env->getExtension("native_profiler");
        $__internal_761ee49db5e649a0fee82a42db15636a14b548e6785609cb17ac590815a8a308->enter($__internal_761ee49db5e649a0fee82a42db15636a14b548e6785609cb17ac590815a8a308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_761ee49db5e649a0fee82a42db15636a14b548e6785609cb17ac590815a8a308->leave($__internal_761ee49db5e649a0fee82a42db15636a14b548e6785609cb17ac590815a8a308_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
