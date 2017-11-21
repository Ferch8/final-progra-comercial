<?php

/* profesores/edit.html.twig */
class __TwigTemplate_40521ff9ddf427f493d350480086c9a82f8516138bcaf1d972e0270540964042 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "profesores/edit.html.twig", 1);
        $this->blocks = array(
            'act2' => array($this, 'block_act2'),
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
        $__internal_6f285a05b0e0c50b3d073ff56137fa305fe004a82c3d9ad6173014e41f2ea342 = $this->env->getExtension("native_profiler");
        $__internal_6f285a05b0e0c50b3d073ff56137fa305fe004a82c3d9ad6173014e41f2ea342->enter($__internal_6f285a05b0e0c50b3d073ff56137fa305fe004a82c3d9ad6173014e41f2ea342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profesores/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f285a05b0e0c50b3d073ff56137fa305fe004a82c3d9ad6173014e41f2ea342->leave($__internal_6f285a05b0e0c50b3d073ff56137fa305fe004a82c3d9ad6173014e41f2ea342_prof);

    }

    // line 3
    public function block_act2($context, array $blocks = array())
    {
        $__internal_679cd8f4b12937d4fa7cb60ad3d31f171aa0c7fcd31baf1e6a33ecaf134f4a79 = $this->env->getExtension("native_profiler");
        $__internal_679cd8f4b12937d4fa7cb60ad3d31f171aa0c7fcd31baf1e6a33ecaf134f4a79->enter($__internal_679cd8f4b12937d4fa7cb60ad3d31f171aa0c7fcd31baf1e6a33ecaf134f4a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "act2"));

        echo "active";
        
        $__internal_679cd8f4b12937d4fa7cb60ad3d31f171aa0c7fcd31baf1e6a33ecaf134f4a79->leave($__internal_679cd8f4b12937d4fa7cb60ad3d31f171aa0c7fcd31baf1e6a33ecaf134f4a79_prof);

    }

    // line 5
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_d301bab79395181ed0099fdc43b0fbd9be8e8ad238194265e3b020bd7a73ea12 = $this->env->getExtension("native_profiler");
        $__internal_d301bab79395181ed0099fdc43b0fbd9be8e8ad238194265e3b020bd7a73ea12->enter($__internal_d301bab79395181ed0099fdc43b0fbd9be8e8ad238194265e3b020bd7a73ea12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        // line 6
        echo "Editar profesor
";
        
        $__internal_d301bab79395181ed0099fdc43b0fbd9be8e8ad238194265e3b020bd7a73ea12->leave($__internal_d301bab79395181ed0099fdc43b0fbd9be8e8ad238194265e3b020bd7a73ea12_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fb3f7cceb512b234fcf056b20b85637cf7eeda17fd16ec330a0b287246e20e4 = $this->env->getExtension("native_profiler");
        $__internal_9fb3f7cceb512b234fcf056b20b85637cf7eeda17fd16ec330a0b287246e20e4->enter($__internal_9fb3f7cceb512b234fcf056b20b85637cf7eeda17fd16ec330a0b287246e20e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre", array()), 'label', array("label" => "Nombre"));
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control border-input")));
        echo "
      </div>
  </div>
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "apellidos", array()), 'label', array("label" => "Apellidos"));
        echo "
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "apellidos", array()), 'widget', array("attr" => array("class" => "form-control border-input")));
        echo "
      </div>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "edad", array()), 'label', array("label" => "Edad"));
        echo "
        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "edad", array()), 'widget', array("attr" => array("class" => "form-control border-input")));
        echo "
      </div>
  </div>
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fechaNacimiento", array()), 'label', array("label" => "Fecha de nacimiento"));
        echo "
        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fechaNacimiento", array()), 'widget', array("attr" => array("class" => "form-control border-input")));
        echo "
      </div>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telefono", array()), 'label', array("label" => "Telefono"));
        echo "
        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telefono", array()), 'widget', array("attr" => array("class" => "form-control border-input")));
        echo "
      </div>
  </div>
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "direccion", array()), 'label', array("label" => "Direccion"));
        echo "
        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "direccion", array()), 'widget', array("attr" => array("class" => "form-control border-input")));
        echo "
      </div>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'label', array("label" => "Email"));
        echo "
        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'widget', array("attr" => array("class" => "form-control border-input")));
        echo "
      </div>
  </div>
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "profesion", array()), 'label', array("label" => "Profesion"));
        echo "
        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "profesion", array()), 'widget', array("attr" => array("class" => "form-control border-input")));
        echo "
      </div>
  </div>
</div>
<div class=\"text-center\">
  <input type=\"submit\" class=\"btn btn-info btn-fill btn-wd\"  value=\"Guardar\">
</div>

    ";
        // line 72
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
            <a class=\"btn\" href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("profesores_index");
        echo "\">Regresar</a>
    </ul>
";
        
        $__internal_9fb3f7cceb512b234fcf056b20b85637cf7eeda17fd16ec330a0b287246e20e4->leave($__internal_9fb3f7cceb512b234fcf056b20b85637cf7eeda17fd16ec330a0b287246e20e4_prof);

    }

    public function getTemplateName()
    {
        return "profesores/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 75,  183 => 72,  172 => 64,  168 => 63,  160 => 58,  156 => 57,  146 => 50,  142 => 49,  134 => 44,  130 => 43,  120 => 36,  116 => 35,  108 => 30,  104 => 29,  94 => 22,  90 => 21,  82 => 16,  78 => 15,  71 => 11,  68 => 10,  62 => 9,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block act2 %}active{% endblock %}*/
/* */
/* {% block titulo %}*/
/* Editar profesor*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
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
/*         {{form_label(edit_form.apellidos,'Apellidos')}}*/
/*         {{ form_widget(edit_form.apellidos,{'attr':{'class' : 'form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(edit_form.edad,'Edad')}}*/
/*         {{ form_widget(edit_form.edad,{'attr':{'class' : 'form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(edit_form.fechaNacimiento,'Fecha de nacimiento')}}*/
/*         {{ form_widget(edit_form.fechaNacimiento,{'attr':{'class' : 'form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(edit_form.telefono,'Telefono')}}*/
/*         {{ form_widget(edit_form.telefono,{'attr':{'class' : 'form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(edit_form.direccion,'Direccion')}}*/
/*         {{ form_widget(edit_form.direccion,{'attr':{'class' : 'form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(edit_form.email,'Email')}}*/
/*         {{ form_widget(edit_form.email,{'attr':{'class' : 'form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(edit_form.profesion,'Profesion')}}*/
/*         {{ form_widget(edit_form.profesion,{'attr':{'class' : 'form-control border-input'}}) }}*/
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
/*             <a class="btn" href="{{ path('profesores_index') }}">Regresar</a>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
