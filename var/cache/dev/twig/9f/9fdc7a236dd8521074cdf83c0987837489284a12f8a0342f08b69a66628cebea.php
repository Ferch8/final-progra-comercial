<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_e49dc94aa5f26a749a5927c7ef9152fc18dff383f5899e1464c4f20e52eccc46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "AppBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b6b429fdaf8335c636777086a4af6deeb05656876f75caac58e90a34ad8d9fc = $this->env->getExtension("native_profiler");
        $__internal_1b6b429fdaf8335c636777086a4af6deeb05656876f75caac58e90a34ad8d9fc->enter($__internal_1b6b429fdaf8335c636777086a4af6deeb05656876f75caac58e90a34ad8d9fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b6b429fdaf8335c636777086a4af6deeb05656876f75caac58e90a34ad8d9fc->leave($__internal_1b6b429fdaf8335c636777086a4af6deeb05656876f75caac58e90a34ad8d9fc_prof);

    }

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_7ae383281198a3ed35f1a93fb55da1f12c8fe3aa0edbe1916ba3e6ba609ba04d = $this->env->getExtension("native_profiler");
        $__internal_7ae383281198a3ed35f1a93fb55da1f12c8fe3aa0edbe1916ba3e6ba609ba04d->enter($__internal_7ae383281198a3ed35f1a93fb55da1f12c8fe3aa0edbe1916ba3e6ba609ba04d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        // line 4
        echo "Bienvenido !
";
        
        $__internal_7ae383281198a3ed35f1a93fb55da1f12c8fe3aa0edbe1916ba3e6ba609ba04d->leave($__internal_7ae383281198a3ed35f1a93fb55da1f12c8fe3aa0edbe1916ba3e6ba609ba04d_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:index.html.twig";
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
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block titulo %}*/
/* Bienvenido !*/
/* {% endblock %}*/
/* */
