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
        $__internal_58e0256db52508040b6a5899f4fb6d5e91cffd6397ae0dffcff61a50ea4f3bce = $this->env->getExtension("native_profiler");
        $__internal_58e0256db52508040b6a5899f4fb6d5e91cffd6397ae0dffcff61a50ea4f3bce->enter($__internal_58e0256db52508040b6a5899f4fb6d5e91cffd6397ae0dffcff61a50ea4f3bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58e0256db52508040b6a5899f4fb6d5e91cffd6397ae0dffcff61a50ea4f3bce->leave($__internal_58e0256db52508040b6a5899f4fb6d5e91cffd6397ae0dffcff61a50ea4f3bce_prof);

    }

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_3681b93dae801aa8dc1e6faa508144d74302b7d35a658459bac6d743eb23f195 = $this->env->getExtension("native_profiler");
        $__internal_3681b93dae801aa8dc1e6faa508144d74302b7d35a658459bac6d743eb23f195->enter($__internal_3681b93dae801aa8dc1e6faa508144d74302b7d35a658459bac6d743eb23f195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        // line 4
        echo "Bienvenido !
";
        
        $__internal_3681b93dae801aa8dc1e6faa508144d74302b7d35a658459bac6d743eb23f195->leave($__internal_3681b93dae801aa8dc1e6faa508144d74302b7d35a658459bac6d743eb23f195_prof);

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
