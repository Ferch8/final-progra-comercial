<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_892770d7893f5c75339d4e960d41734c2b1746ad7be29a3576df55d1c3588710 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_d15e617d6da08b3308f342c55035c1a705243d3d28956a6f28290d919af7d748 = $this->env->getExtension("native_profiler");
        $__internal_d15e617d6da08b3308f342c55035c1a705243d3d28956a6f28290d919af7d748->enter($__internal_d15e617d6da08b3308f342c55035c1a705243d3d28956a6f28290d919af7d748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d15e617d6da08b3308f342c55035c1a705243d3d28956a6f28290d919af7d748->leave($__internal_d15e617d6da08b3308f342c55035c1a705243d3d28956a6f28290d919af7d748_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f9ed9bdeb6ae85e3f561282ede888ec8ad827f411faf36396a48403456de1135 = $this->env->getExtension("native_profiler");
        $__internal_f9ed9bdeb6ae85e3f561282ede888ec8ad827f411faf36396a48403456de1135->enter($__internal_f9ed9bdeb6ae85e3f561282ede888ec8ad827f411faf36396a48403456de1135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f9ed9bdeb6ae85e3f561282ede888ec8ad827f411faf36396a48403456de1135->leave($__internal_f9ed9bdeb6ae85e3f561282ede888ec8ad827f411faf36396a48403456de1135_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b93c2736c196fd538aed9bb682def3b445c429b411f50b65d9170b152faa3500 = $this->env->getExtension("native_profiler");
        $__internal_b93c2736c196fd538aed9bb682def3b445c429b411f50b65d9170b152faa3500->enter($__internal_b93c2736c196fd538aed9bb682def3b445c429b411f50b65d9170b152faa3500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b93c2736c196fd538aed9bb682def3b445c429b411f50b65d9170b152faa3500->leave($__internal_b93c2736c196fd538aed9bb682def3b445c429b411f50b65d9170b152faa3500_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f592184578329e129a938ae401ac58a6cd64e7d11afc42cd34b7852b229ebc9b = $this->env->getExtension("native_profiler");
        $__internal_f592184578329e129a938ae401ac58a6cd64e7d11afc42cd34b7852b229ebc9b->enter($__internal_f592184578329e129a938ae401ac58a6cd64e7d11afc42cd34b7852b229ebc9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_f592184578329e129a938ae401ac58a6cd64e7d11afc42cd34b7852b229ebc9b->leave($__internal_f592184578329e129a938ae401ac58a6cd64e7d11afc42cd34b7852b229ebc9b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
