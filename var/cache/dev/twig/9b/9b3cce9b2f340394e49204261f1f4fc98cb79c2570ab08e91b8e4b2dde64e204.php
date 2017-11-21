<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2c2cade34c069b2c82d846eea9827f800a37d81905ff0f6d5d187d4be02133b7 extends Twig_Template
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
        $__internal_bcdca96d03bcd6b4b3b268b206beed481d225d55ef9f53b68e082c65851b0efc = $this->env->getExtension("native_profiler");
        $__internal_bcdca96d03bcd6b4b3b268b206beed481d225d55ef9f53b68e082c65851b0efc->enter($__internal_bcdca96d03bcd6b4b3b268b206beed481d225d55ef9f53b68e082c65851b0efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcdca96d03bcd6b4b3b268b206beed481d225d55ef9f53b68e082c65851b0efc->leave($__internal_bcdca96d03bcd6b4b3b268b206beed481d225d55ef9f53b68e082c65851b0efc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_48165bd865f2b18a9d4bee3afe63ea7dc3911e2f20ea2864495a60e44e5ecf6b = $this->env->getExtension("native_profiler");
        $__internal_48165bd865f2b18a9d4bee3afe63ea7dc3911e2f20ea2864495a60e44e5ecf6b->enter($__internal_48165bd865f2b18a9d4bee3afe63ea7dc3911e2f20ea2864495a60e44e5ecf6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_48165bd865f2b18a9d4bee3afe63ea7dc3911e2f20ea2864495a60e44e5ecf6b->leave($__internal_48165bd865f2b18a9d4bee3afe63ea7dc3911e2f20ea2864495a60e44e5ecf6b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e57cf0f438e924cb0522c1296365d6e6c1c298be932784f518dba3bd97558b74 = $this->env->getExtension("native_profiler");
        $__internal_e57cf0f438e924cb0522c1296365d6e6c1c298be932784f518dba3bd97558b74->enter($__internal_e57cf0f438e924cb0522c1296365d6e6c1c298be932784f518dba3bd97558b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e57cf0f438e924cb0522c1296365d6e6c1c298be932784f518dba3bd97558b74->leave($__internal_e57cf0f438e924cb0522c1296365d6e6c1c298be932784f518dba3bd97558b74_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb67ef03d5be54b5a58c2b254c9f4b313d7413daa310ff79c1e31f71c52dc2d8 = $this->env->getExtension("native_profiler");
        $__internal_cb67ef03d5be54b5a58c2b254c9f4b313d7413daa310ff79c1e31f71c52dc2d8->enter($__internal_cb67ef03d5be54b5a58c2b254c9f4b313d7413daa310ff79c1e31f71c52dc2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_cb67ef03d5be54b5a58c2b254c9f4b313d7413daa310ff79c1e31f71c52dc2d8->leave($__internal_cb67ef03d5be54b5a58c2b254c9f4b313d7413daa310ff79c1e31f71c52dc2d8_prof);

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
