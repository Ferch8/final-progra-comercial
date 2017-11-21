<?php

/* estudiantes/edit.html.twig */
class __TwigTemplate_7a183836a284b38530e82e1d359dc46e4b5c7fcd1c86edb6cae4f854ef8aa41c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "estudiantes/edit.html.twig", 1);
        $this->blocks = array(
            'act4' => array($this, 'block_act4'),
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
        $__internal_b900390bcf4251cf6d7665238c49fedda3ca93483b0c8be7c3950a05aae106f5 = $this->env->getExtension("native_profiler");
        $__internal_b900390bcf4251cf6d7665238c49fedda3ca93483b0c8be7c3950a05aae106f5->enter($__internal_b900390bcf4251cf6d7665238c49fedda3ca93483b0c8be7c3950a05aae106f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "estudiantes/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b900390bcf4251cf6d7665238c49fedda3ca93483b0c8be7c3950a05aae106f5->leave($__internal_b900390bcf4251cf6d7665238c49fedda3ca93483b0c8be7c3950a05aae106f5_prof);

    }

    // line 3
    public function block_act4($context, array $blocks = array())
    {
        $__internal_8320dc206ff078af6159db3300b3f38102c424f4262f8ea404a130d0ed8fdebd = $this->env->getExtension("native_profiler");
        $__internal_8320dc206ff078af6159db3300b3f38102c424f4262f8ea404a130d0ed8fdebd->enter($__internal_8320dc206ff078af6159db3300b3f38102c424f4262f8ea404a130d0ed8fdebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "act4"));

        echo "active";
        
        $__internal_8320dc206ff078af6159db3300b3f38102c424f4262f8ea404a130d0ed8fdebd->leave($__internal_8320dc206ff078af6159db3300b3f38102c424f4262f8ea404a130d0ed8fdebd_prof);

    }

    // line 5
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_83c1f08b966ce0fb224b52510732d293471a9d4597259aef753a7aa4329c8681 = $this->env->getExtension("native_profiler");
        $__internal_83c1f08b966ce0fb224b52510732d293471a9d4597259aef753a7aa4329c8681->enter($__internal_83c1f08b966ce0fb224b52510732d293471a9d4597259aef753a7aa4329c8681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        // line 6
        echo "Editar asignacion
";
        
        $__internal_83c1f08b966ce0fb224b52510732d293471a9d4597259aef753a7aa4329c8681->leave($__internal_83c1f08b966ce0fb224b52510732d293471a9d4597259aef753a7aa4329c8681_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_23c75fb77103975b383e73fc87003b1276d4e34c16795c03e9b9a75065f0fad9 = $this->env->getExtension("native_profiler");
        $__internal_23c75fb77103975b383e73fc87003b1276d4e34c16795c03e9b9a75065f0fad9->enter($__internal_23c75fb77103975b383e73fc87003b1276d4e34c16795c03e9b9a75065f0fad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "

";
        // line 12
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "apellido", array()), 'label', array("label" => "apellido"));
        echo "
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "apellido", array()), 'widget', array("attr" => array("class" => "form-control border-input")));
        echo "
      </div>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fechaNacimiento", array()), 'label', array("label" => "fechaNacimiento"));
        echo "
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fechaNacimiento", array()), 'widget', array("attr" => array("class" => "form-control border-input")));
        echo "
      </div>
  </div>
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "edad", array()), 'label', array("label" => "edad"));
        echo "
        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "edad", array()), 'widget', array("attr" => array("class" => "form-control border-input")));
        echo "
      </div>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "carnet", array()), 'label', array("label" => "carnet"));
        echo "
        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "carnet", array()), 'widget', array("attr" => array("class" => "form-control border-input")));
        echo "
      </div>
  </div>
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telefono", array()), 'label', array("label" => "telefono"));
        echo "
        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telefono", array()), 'widget', array("attr" => array("class" => " form-control border-input")));
        echo "
      </div>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "direccion", array()), 'label', array("label" => "direccion"));
        echo "
        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "direccion", array()), 'widget', array("attr" => array("class" => " form-control border-input")));
        echo "
      </div>
  </div>
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cursos", array()), 'label', array("label" => "cursos"));
        echo "
        ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cursos", array()), 'widget', array("attr" => array("class" => " form-control ")));
        echo "
      </div>
  </div>
</div>
<div class=\"text-center\">
  <input type=\"submit\" class=\"btn btn-info btn-fill btn-wd\"  value=\"Guardar\">
</div>

    ";
        // line 73
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "


    <ul>
            <a class=\"btn\" href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("estudiantes_index");
        echo "\">Regresar</a>
        <li>
            ";
        // line 79
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 81
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_23c75fb77103975b383e73fc87003b1276d4e34c16795c03e9b9a75065f0fad9->leave($__internal_23c75fb77103975b383e73fc87003b1276d4e34c16795c03e9b9a75065f0fad9_prof);

    }

    public function getTemplateName()
    {
        return "estudiantes/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 81,  196 => 79,  191 => 77,  184 => 73,  173 => 65,  169 => 64,  161 => 59,  157 => 58,  147 => 51,  143 => 50,  135 => 45,  131 => 44,  121 => 37,  117 => 36,  109 => 31,  105 => 30,  95 => 23,  91 => 22,  83 => 17,  79 => 16,  72 => 12,  68 => 10,  62 => 9,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block act4 %}active{% endblock %}*/
/* */
/* {% block titulo %}*/
/* Editar asignacion*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* {{ form_start(edit_form,{'attr':{'role':'form'}}) }}*/
/* <div class="row">*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(edit_form.nombre,'Nombre')}}*/
/*         {{ form_widget(edit_form.nombre,{'attr':{'class' : 'form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(edit_form.apellido,'apellido')}}*/
/*         {{ form_widget(edit_form.apellido,{'attr':{'class' : 'form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(edit_form.fechaNacimiento,'fechaNacimiento')}}*/
/*         {{ form_widget(edit_form.fechaNacimiento,{'attr':{'class' : 'form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(edit_form.edad,'edad')}}*/
/*         {{ form_widget(edit_form.edad,{'attr':{'class' : 'form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(edit_form.carnet,'carnet')}}*/
/*         {{ form_widget(edit_form.carnet,{'attr':{'class' : 'form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(edit_form.telefono,'telefono')}}*/
/*         {{ form_widget(edit_form.telefono,{'attr':{'class' : ' form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(edit_form.direccion,'direccion')}}*/
/*         {{ form_widget(edit_form.direccion,{'attr':{'class' : ' form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(edit_form.cursos,'cursos')}}*/
/*         {{ form_widget(edit_form.cursos,{'attr':{'class' : ' form-control '}}) }}*/
/*       </div>*/
/*   </div>*/
/* </div>*/
/* <div class="text-center">*/
/*   <input type="submit" class="btn btn-info btn-fill btn-wd"  value="Guardar">*/
/* </div>*/
/* */
/*     {{ form_end(edit_form) }}*/
/* */
/* */
/*     <ul>*/
/*             <a class="btn" href="{{ path('estudiantes_index') }}">Regresar</a>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
