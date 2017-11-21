<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_23712cc358c66a7bdfc0a58475a1eae031ae6d7f447445685adf0c697631b1c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55ea633fe3be9148ce1e7bcccf1396f19fcd53dcde017b3b8df54a9ac8f0c6a2 = $this->env->getExtension("native_profiler");
        $__internal_55ea633fe3be9148ce1e7bcccf1396f19fcd53dcde017b3b8df54a9ac8f0c6a2->enter($__internal_55ea633fe3be9148ce1e7bcccf1396f19fcd53dcde017b3b8df54a9ac8f0c6a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55ea633fe3be9148ce1e7bcccf1396f19fcd53dcde017b3b8df54a9ac8f0c6a2->leave($__internal_55ea633fe3be9148ce1e7bcccf1396f19fcd53dcde017b3b8df54a9ac8f0c6a2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3fd75ec7026623c5299afdf4e5f0faf4e54a16d39dbdcc83499cf39c7511d754 = $this->env->getExtension("native_profiler");
        $__internal_3fd75ec7026623c5299afdf4e5f0faf4e54a16d39dbdcc83499cf39c7511d754->enter($__internal_3fd75ec7026623c5299afdf4e5f0faf4e54a16d39dbdcc83499cf39c7511d754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3fd75ec7026623c5299afdf4e5f0faf4e54a16d39dbdcc83499cf39c7511d754->leave($__internal_3fd75ec7026623c5299afdf4e5f0faf4e54a16d39dbdcc83499cf39c7511d754_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c1948ce98abfa04c632ef7742876cebfcfca881fb04a892c1be1fd95c58f7ce2 = $this->env->getExtension("native_profiler");
        $__internal_c1948ce98abfa04c632ef7742876cebfcfca881fb04a892c1be1fd95c58f7ce2->enter($__internal_c1948ce98abfa04c632ef7742876cebfcfca881fb04a892c1be1fd95c58f7ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c1948ce98abfa04c632ef7742876cebfcfca881fb04a892c1be1fd95c58f7ce2->leave($__internal_c1948ce98abfa04c632ef7742876cebfcfca881fb04a892c1be1fd95c58f7ce2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1e552514142c5c2f349c3c6f5795f0a417d8600d7c8d1d33a9309024095ed446 = $this->env->getExtension("native_profiler");
        $__internal_1e552514142c5c2f349c3c6f5795f0a417d8600d7c8d1d33a9309024095ed446->enter($__internal_1e552514142c5c2f349c3c6f5795f0a417d8600d7c8d1d33a9309024095ed446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1e552514142c5c2f349c3c6f5795f0a417d8600d7c8d1d33a9309024095ed446->leave($__internal_1e552514142c5c2f349c3c6f5795f0a417d8600d7c8d1d33a9309024095ed446_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
