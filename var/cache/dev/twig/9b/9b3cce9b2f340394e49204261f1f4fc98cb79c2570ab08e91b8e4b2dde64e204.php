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
        $__internal_d94ab6dcdb2542f82cb0a16e8b482a8f2e8009856942acb680d241f0e78d16d7 = $this->env->getExtension("native_profiler");
        $__internal_d94ab6dcdb2542f82cb0a16e8b482a8f2e8009856942acb680d241f0e78d16d7->enter($__internal_d94ab6dcdb2542f82cb0a16e8b482a8f2e8009856942acb680d241f0e78d16d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d94ab6dcdb2542f82cb0a16e8b482a8f2e8009856942acb680d241f0e78d16d7->leave($__internal_d94ab6dcdb2542f82cb0a16e8b482a8f2e8009856942acb680d241f0e78d16d7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d2f49074a3d6df4419ca70bf6e9346b40b2dc443fe7e235a27e104b51954ac6e = $this->env->getExtension("native_profiler");
        $__internal_d2f49074a3d6df4419ca70bf6e9346b40b2dc443fe7e235a27e104b51954ac6e->enter($__internal_d2f49074a3d6df4419ca70bf6e9346b40b2dc443fe7e235a27e104b51954ac6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d2f49074a3d6df4419ca70bf6e9346b40b2dc443fe7e235a27e104b51954ac6e->leave($__internal_d2f49074a3d6df4419ca70bf6e9346b40b2dc443fe7e235a27e104b51954ac6e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a825afacaf11506d41a8d1cd77958a44081c31ba78777d9a58f4ff042905536 = $this->env->getExtension("native_profiler");
        $__internal_0a825afacaf11506d41a8d1cd77958a44081c31ba78777d9a58f4ff042905536->enter($__internal_0a825afacaf11506d41a8d1cd77958a44081c31ba78777d9a58f4ff042905536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0a825afacaf11506d41a8d1cd77958a44081c31ba78777d9a58f4ff042905536->leave($__internal_0a825afacaf11506d41a8d1cd77958a44081c31ba78777d9a58f4ff042905536_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d62083ae60530ac2bc88509baf1f51f8adbd437213dd7e066468dfbcb928e29c = $this->env->getExtension("native_profiler");
        $__internal_d62083ae60530ac2bc88509baf1f51f8adbd437213dd7e066468dfbcb928e29c->enter($__internal_d62083ae60530ac2bc88509baf1f51f8adbd437213dd7e066468dfbcb928e29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d62083ae60530ac2bc88509baf1f51f8adbd437213dd7e066468dfbcb928e29c->leave($__internal_d62083ae60530ac2bc88509baf1f51f8adbd437213dd7e066468dfbcb928e29c_prof);

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
