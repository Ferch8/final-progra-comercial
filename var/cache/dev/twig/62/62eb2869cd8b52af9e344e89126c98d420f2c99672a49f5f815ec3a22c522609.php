<?php

/* aula/new.html.twig */
class __TwigTemplate_b34d1a7d4a79dc2802fe2aebddcec84a056f97c2d8c6388238754fd7a8422c84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "aula/new.html.twig", 1);
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
        $__internal_5e345a0f3297171c970716f1b70c5591d883e5c799213cf1555ef52d44a24ca5 = $this->env->getExtension("native_profiler");
        $__internal_5e345a0f3297171c970716f1b70c5591d883e5c799213cf1555ef52d44a24ca5->enter($__internal_5e345a0f3297171c970716f1b70c5591d883e5c799213cf1555ef52d44a24ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "aula/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e345a0f3297171c970716f1b70c5591d883e5c799213cf1555ef52d44a24ca5->leave($__internal_5e345a0f3297171c970716f1b70c5591d883e5c799213cf1555ef52d44a24ca5_prof);

    }

    // line 3
    public function block_act1($context, array $blocks = array())
    {
        $__internal_daec75d995b470ae497aaef9f59bfb99c1ed034bb11497799cb70cbb6d652208 = $this->env->getExtension("native_profiler");
        $__internal_daec75d995b470ae497aaef9f59bfb99c1ed034bb11497799cb70cbb6d652208->enter($__internal_daec75d995b470ae497aaef9f59bfb99c1ed034bb11497799cb70cbb6d652208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "act1"));

        echo "active";
        
        $__internal_daec75d995b470ae497aaef9f59bfb99c1ed034bb11497799cb70cbb6d652208->leave($__internal_daec75d995b470ae497aaef9f59bfb99c1ed034bb11497799cb70cbb6d652208_prof);

    }

    // line 5
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_5b7bf6368b610d8320ba6557d5dee2efec0e6e86c732539a8725eb83746272e5 = $this->env->getExtension("native_profiler");
        $__internal_5b7bf6368b610d8320ba6557d5dee2efec0e6e86c732539a8725eb83746272e5->enter($__internal_5b7bf6368b610d8320ba6557d5dee2efec0e6e86c732539a8725eb83746272e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        // line 6
        echo "Agregar aula
";
        
        $__internal_5b7bf6368b610d8320ba6557d5dee2efec0e6e86c732539a8725eb83746272e5->leave($__internal_5b7bf6368b610d8320ba6557d5dee2efec0e6e86c732539a8725eb83746272e5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_adb08c6d4bfde9b052c3b48c315b9b1e5679bcd8d85975316f1fe9e8ab37696c = $this->env->getExtension("native_profiler");
        $__internal_adb08c6d4bfde9b052c3b48c315b9b1e5679bcd8d85975316f1fe9e8ab37696c->enter($__internal_adb08c6d4bfde9b052c3b48c315b9b1e5679bcd8d85975316f1fe9e8ab37696c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form")));
        echo "
<div class=\"row\">
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label', array("label" => "Nombre"));
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control border-input")));
        echo "
      </div>
  </div>
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'label', array("label" => "Descripcion"));
        echo "
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'widget', array("attr" => array("class" => "form-control border-input")));
        echo "
      </div>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "edificio", array()), 'label', array("label" => "Edificio"));
        echo "
        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "edificio", array()), 'widget', array("attr" => array("class" => "form-control border-input")));
        echo "
      </div>
  </div>
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "encargado", array()), 'label', array("label" => "Encargado"));
        echo "
        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "encargado", array()), 'widget', array("attr" => array("class" => "form-control border-input")));
        echo "
      </div>
  </div>
</div>
<div class=\"text-center\">
  <input type=\"submit\" class=\"btn btn-info btn-fill btn-wd\"  value=\"Guardar\">
</div>

    ";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
            <a class=\"btn\" href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("aula_index");
        echo "\">Regresar</a>
    </ul>
";
        
        $__internal_adb08c6d4bfde9b052c3b48c315b9b1e5679bcd8d85975316f1fe9e8ab37696c->leave($__internal_adb08c6d4bfde9b052c3b48c315b9b1e5679bcd8d85975316f1fe9e8ab37696c_prof);

    }

    public function getTemplateName()
    {
        return "aula/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 47,  131 => 44,  120 => 36,  116 => 35,  108 => 30,  104 => 29,  94 => 22,  90 => 21,  82 => 16,  78 => 15,  71 => 11,  68 => 10,  62 => 9,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block act1 %}active{% endblock %}*/
/* */
/* {% block titulo %}*/
/* Agregar aula*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* {{ form_start(form,{'attr':{'role':'form'}}) }}*/
/* <div class="row">*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(form.nombre,'Nombre')}}*/
/*         {{ form_widget(form.nombre,{'attr':{'class' : 'form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(form.descripcion,'Descripcion')}}*/
/*         {{ form_widget(form.descripcion,{'attr':{'class' : 'form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(form.edificio,'Edificio')}}*/
/*         {{ form_widget(form.edificio,{'attr':{'class' : 'form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(form.encargado,'Encargado')}}*/
/*         {{ form_widget(form.encargado,{'attr':{'class' : 'form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/* </div>*/
/* <div class="text-center">*/
/*   <input type="submit" class="btn btn-info btn-fill btn-wd"  value="Guardar">*/
/* </div>*/
/* */
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*             <a class="btn" href="{{ path('aula_index') }}">Regresar</a>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
