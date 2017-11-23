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
        $__internal_f2c4ec65a5beb3bc7776bec4ad45c27c5efeeea1783e0f8951d19c1f23e5d2af = $this->env->getExtension("native_profiler");
        $__internal_f2c4ec65a5beb3bc7776bec4ad45c27c5efeeea1783e0f8951d19c1f23e5d2af->enter($__internal_f2c4ec65a5beb3bc7776bec4ad45c27c5efeeea1783e0f8951d19c1f23e5d2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "estudiantes/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2c4ec65a5beb3bc7776bec4ad45c27c5efeeea1783e0f8951d19c1f23e5d2af->leave($__internal_f2c4ec65a5beb3bc7776bec4ad45c27c5efeeea1783e0f8951d19c1f23e5d2af_prof);

    }

    // line 3
    public function block_act4($context, array $blocks = array())
    {
        $__internal_8cab6b901eb91aa5e72ac43dba314e45e6c467d81c07cdd12c9a3c6d35a9747e = $this->env->getExtension("native_profiler");
        $__internal_8cab6b901eb91aa5e72ac43dba314e45e6c467d81c07cdd12c9a3c6d35a9747e->enter($__internal_8cab6b901eb91aa5e72ac43dba314e45e6c467d81c07cdd12c9a3c6d35a9747e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "act4"));

        echo "active";
        
        $__internal_8cab6b901eb91aa5e72ac43dba314e45e6c467d81c07cdd12c9a3c6d35a9747e->leave($__internal_8cab6b901eb91aa5e72ac43dba314e45e6c467d81c07cdd12c9a3c6d35a9747e_prof);

    }

    // line 5
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_1eb86b024ca95a000530ac315806b8f6986c0b225d180e2078c23c9ff170d49a = $this->env->getExtension("native_profiler");
        $__internal_1eb86b024ca95a000530ac315806b8f6986c0b225d180e2078c23c9ff170d49a->enter($__internal_1eb86b024ca95a000530ac315806b8f6986c0b225d180e2078c23c9ff170d49a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        // line 6
        echo "Editar asignacion
";
        
        $__internal_1eb86b024ca95a000530ac315806b8f6986c0b225d180e2078c23c9ff170d49a->leave($__internal_1eb86b024ca95a000530ac315806b8f6986c0b225d180e2078c23c9ff170d49a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_aeaf826361efced297f78e8c5f98741902b982d76d414d7c62cb4a85fa0e1908 = $this->env->getExtension("native_profiler");
        $__internal_aeaf826361efced297f78e8c5f98741902b982d76d414d7c62cb4a85fa0e1908->enter($__internal_aeaf826361efced297f78e8c5f98741902b982d76d414d7c62cb4a85fa0e1908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
<br>
<br>
<br>
<div class=\"text-center\">
  <input type=\"submit\" class=\"btn btn-info btn-fill btn-wd\"  value=\"Guardar\">
</div>

    ";
        // line 76
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "


    <ul>
            <a class=\"btn\" href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("estudiantes_index");
        echo "\">Regresar</a>
        <li>
            ";
        // line 82
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 84
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_aeaf826361efced297f78e8c5f98741902b982d76d414d7c62cb4a85fa0e1908->leave($__internal_aeaf826361efced297f78e8c5f98741902b982d76d414d7c62cb4a85fa0e1908_prof);

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
        return array (  204 => 84,  199 => 82,  194 => 80,  187 => 76,  173 => 65,  169 => 64,  161 => 59,  157 => 58,  147 => 51,  143 => 50,  135 => 45,  131 => 44,  121 => 37,  117 => 36,  109 => 31,  105 => 30,  95 => 23,  91 => 22,  83 => 17,  79 => 16,  72 => 12,  68 => 10,  62 => 9,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
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
/* <br>*/
/* <br>*/
/* <br>*/
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
