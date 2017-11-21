<?php

/* aula/edit.html.twig */
class __TwigTemplate_7a8a55af5481565d6e7aba9554ff0145781957b0f2bf5211fc554c9fda365646 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "aula/edit.html.twig", 1);
        $this->blocks = array(
            'act1' => array($this, 'block_act1'),
            'titulo' => array($this, 'block_titulo'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cca2bd147d7049122aec1453cb7173350d4e12e77f0ba838eb6aa795f319c5c9 = $this->env->getExtension("native_profiler");
        $__internal_cca2bd147d7049122aec1453cb7173350d4e12e77f0ba838eb6aa795f319c5c9->enter($__internal_cca2bd147d7049122aec1453cb7173350d4e12e77f0ba838eb6aa795f319c5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "aula/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cca2bd147d7049122aec1453cb7173350d4e12e77f0ba838eb6aa795f319c5c9->leave($__internal_cca2bd147d7049122aec1453cb7173350d4e12e77f0ba838eb6aa795f319c5c9_prof);

    }

    // line 3
    public function block_act1($context, array $blocks = array())
    {
        $__internal_40e7818dd9e0127d895965736e019807df81e02d42e5bf11b88f3d62a02f9f91 = $this->env->getExtension("native_profiler");
        $__internal_40e7818dd9e0127d895965736e019807df81e02d42e5bf11b88f3d62a02f9f91->enter($__internal_40e7818dd9e0127d895965736e019807df81e02d42e5bf11b88f3d62a02f9f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "act1"));

        echo "active";
        
        $__internal_40e7818dd9e0127d895965736e019807df81e02d42e5bf11b88f3d62a02f9f91->leave($__internal_40e7818dd9e0127d895965736e019807df81e02d42e5bf11b88f3d62a02f9f91_prof);

    }

    // line 5
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_0182277e2ece4df62b22179da9e22d408f436f50785329672507ec33d44e6055 = $this->env->getExtension("native_profiler");
        $__internal_0182277e2ece4df62b22179da9e22d408f436f50785329672507ec33d44e6055->enter($__internal_0182277e2ece4df62b22179da9e22d408f436f50785329672507ec33d44e6055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        // line 6
        echo "Editar aula
";
        
        $__internal_0182277e2ece4df62b22179da9e22d408f436f50785329672507ec33d44e6055->leave($__internal_0182277e2ece4df62b22179da9e22d408f436f50785329672507ec33d44e6055_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_214336b14e3d80a4103c6ca6ed4844781c95af62c1043eb54006ebe998ddc1aa = $this->env->getExtension("native_profiler");
        $__internal_214336b14e3d80a4103c6ca6ed4844781c95af62c1043eb54006ebe998ddc1aa->enter($__internal_214336b14e3d80a4103c6ca6ed4844781c95af62c1043eb54006ebe998ddc1aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("role" => "form")));
        echo "

<div class=\"row\">
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre", array()), 'label', array("label" => "Nombre"));
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control border-input")));
        echo "
      </div>
  </div>
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcion", array()), 'label', array("label" => "Descripcion"));
        echo "
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcion", array()), 'widget', array("attr" => array("class" => "form-control border-input")));
        echo "
      </div>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "edificio", array()), 'label', array("label" => "Edificio"));
        echo "
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "edificio", array()), 'widget', array("attr" => array("class" => "form-control border-input")));
        echo "
      </div>
  </div>
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "encargado", array()), 'label', array("label" => "Encargado"));
        echo "
        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "encargado", array()), 'widget', array("attr" => array("class" => "form-control border-input")));
        echo "
      </div>
  </div>
</div>
<div class=\"text-center\">
  <input type=\"submit\" class=\"btn btn-info btn-fill btn-wd\"  value=\"Guardar\">
</div>

    ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
            <a class=\"btn\" href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("aula_index");
        echo "\">Regresar</a>
    </ul>
";
        
        $__internal_214336b14e3d80a4103c6ca6ed4844781c95af62c1043eb54006ebe998ddc1aa->leave($__internal_214336b14e3d80a4103c6ca6ed4844781c95af62c1043eb54006ebe998ddc1aa_prof);

    }

    public function getTemplateName()
    {
        return "aula/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 48,  132 => 45,  121 => 37,  117 => 36,  109 => 31,  105 => 30,  95 => 23,  91 => 22,  83 => 17,  79 => 16,  71 => 11,  68 => 10,  62 => 9,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block act1 %}active{% endblock %}*/
/* */
/* {% block titulo %}*/
/* Editar aula*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* {{ form_start(edit_form,{'attr':{'role':'form'}}) }}*/
/* */
/* <div class="row">*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(edit_form.nombre,'Nombre')}}*/
/*         {{ form_widget(edit_form.nombre,{'attr':{'class' : 'form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(edit_form.descripcion,'Descripcion')}}*/
/*         {{ form_widget(edit_form.descripcion,{'attr':{'class' : 'form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(edit_form.edificio,'Edificio')}}*/
/*         {{ form_widget(edit_form.edificio,{'attr':{'class' : 'form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(edit_form.encargado,'Encargado')}}*/
/*         {{ form_widget(edit_form.encargado,{'attr':{'class' : 'form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/* </div>*/
/* <div class="text-center">*/
/*   <input type="submit" class="btn btn-info btn-fill btn-wd"  value="Guardar">*/
/* </div>*/
/* */
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*             <a class="btn" href="{{ path('aula_index') }}">Regresar</a>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
