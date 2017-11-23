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
        $__internal_73a77f7d77b3d591bf31e8ee35b9f33a41c721a50f1b7759d865900392181e7e = $this->env->getExtension("native_profiler");
        $__internal_73a77f7d77b3d591bf31e8ee35b9f33a41c721a50f1b7759d865900392181e7e->enter($__internal_73a77f7d77b3d591bf31e8ee35b9f33a41c721a50f1b7759d865900392181e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73a77f7d77b3d591bf31e8ee35b9f33a41c721a50f1b7759d865900392181e7e->leave($__internal_73a77f7d77b3d591bf31e8ee35b9f33a41c721a50f1b7759d865900392181e7e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1eef41a2fc451bae972e0294e37bead63f6050236f27aef7dde59a71b33901fb = $this->env->getExtension("native_profiler");
        $__internal_1eef41a2fc451bae972e0294e37bead63f6050236f27aef7dde59a71b33901fb->enter($__internal_1eef41a2fc451bae972e0294e37bead63f6050236f27aef7dde59a71b33901fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1eef41a2fc451bae972e0294e37bead63f6050236f27aef7dde59a71b33901fb->leave($__internal_1eef41a2fc451bae972e0294e37bead63f6050236f27aef7dde59a71b33901fb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5cebbfa0b7d224ef652aa7f69bbd3854eb4c07a7617c77f75d9cde81199551c8 = $this->env->getExtension("native_profiler");
        $__internal_5cebbfa0b7d224ef652aa7f69bbd3854eb4c07a7617c77f75d9cde81199551c8->enter($__internal_5cebbfa0b7d224ef652aa7f69bbd3854eb4c07a7617c77f75d9cde81199551c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5cebbfa0b7d224ef652aa7f69bbd3854eb4c07a7617c77f75d9cde81199551c8->leave($__internal_5cebbfa0b7d224ef652aa7f69bbd3854eb4c07a7617c77f75d9cde81199551c8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_166a664dfc14f608bae4870ae93384413827f5abe9ee794f9a76ae59abad3564 = $this->env->getExtension("native_profiler");
        $__internal_166a664dfc14f608bae4870ae93384413827f5abe9ee794f9a76ae59abad3564->enter($__internal_166a664dfc14f608bae4870ae93384413827f5abe9ee794f9a76ae59abad3564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_166a664dfc14f608bae4870ae93384413827f5abe9ee794f9a76ae59abad3564->leave($__internal_166a664dfc14f608bae4870ae93384413827f5abe9ee794f9a76ae59abad3564_prof);

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
