<?php

/* profesores/new.html.twig */
class __TwigTemplate_90a4e6a0e03c2fd115bce0d0e5cbb798be72d3d08da681d0ee288b2c0f109e29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "profesores/new.html.twig", 1);
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
        $__internal_6f5793681821ea361bd91883e8d0e87f52309b9cbed3751a769abc5ab86939b7 = $this->env->getExtension("native_profiler");
        $__internal_6f5793681821ea361bd91883e8d0e87f52309b9cbed3751a769abc5ab86939b7->enter($__internal_6f5793681821ea361bd91883e8d0e87f52309b9cbed3751a769abc5ab86939b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profesores/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f5793681821ea361bd91883e8d0e87f52309b9cbed3751a769abc5ab86939b7->leave($__internal_6f5793681821ea361bd91883e8d0e87f52309b9cbed3751a769abc5ab86939b7_prof);

    }

    // line 3
    public function block_act2($context, array $blocks = array())
    {
        $__internal_fca1ba4c174395c3ec6ebc3aa58ea9caedb7cca463a025ade288c1a7234f35c6 = $this->env->getExtension("native_profiler");
        $__internal_fca1ba4c174395c3ec6ebc3aa58ea9caedb7cca463a025ade288c1a7234f35c6->enter($__internal_fca1ba4c174395c3ec6ebc3aa58ea9caedb7cca463a025ade288c1a7234f35c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "act2"));

        echo "active";
        
        $__internal_fca1ba4c174395c3ec6ebc3aa58ea9caedb7cca463a025ade288c1a7234f35c6->leave($__internal_fca1ba4c174395c3ec6ebc3aa58ea9caedb7cca463a025ade288c1a7234f35c6_prof);

    }

    // line 5
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_5999d5fdec3ff9585771447384ba4341b16e5828d7c1c9bbed449b2f1fde99bb = $this->env->getExtension("native_profiler");
        $__internal_5999d5fdec3ff9585771447384ba4341b16e5828d7c1c9bbed449b2f1fde99bb->enter($__internal_5999d5fdec3ff9585771447384ba4341b16e5828d7c1c9bbed449b2f1fde99bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        // line 6
        echo "Agregar profesor
";
        
        $__internal_5999d5fdec3ff9585771447384ba4341b16e5828d7c1c9bbed449b2f1fde99bb->leave($__internal_5999d5fdec3ff9585771447384ba4341b16e5828d7c1c9bbed449b2f1fde99bb_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_09de703d7441c368f42abbb33c7ed7420cc1a12c9964697f5fac6a03865d2477 = $this->env->getExtension("native_profiler");
        $__internal_09de703d7441c368f42abbb33c7ed7420cc1a12c9964697f5fac6a03865d2477->enter($__internal_09de703d7441c368f42abbb33c7ed7420cc1a12c9964697f5fac6a03865d2477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form")));
        echo "
<div class=\"row\">
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label', array("label" => "Nombre"));
        echo "
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control border-input")));
        echo "
      </div>
  </div>
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidos", array()), 'label', array("label" => "Apellidos"));
        echo "
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidos", array()), 'widget', array("attr" => array("class" => "form-control border-input")));
        echo "
      </div>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "edad", array()), 'label', array("label" => "Edad"));
        echo "
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "edad", array()), 'widget', array("attr" => array("class" => "form-control border-input")));
        echo "
      </div>
  </div>
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaNacimiento", array()), 'label', array("label" => "Fecha de nacimiento"));
        echo "
        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaNacimiento", array()), 'widget', array("attr" => array("class" => "form-control border-input")));
        echo "
      </div>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono", array()), 'label', array("label" => "Telefono"));
        echo "
        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono", array()), 'widget', array("attr" => array("class" => "form-control border-input")));
        echo "
      </div>
  </div>
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'label', array("label" => "Direccion"));
        echo "
        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'widget', array("attr" => array("class" => "form-control border-input")));
        echo "
      </div>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label" => "Email"));
        echo "
        ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control border-input")));
        echo "
      </div>
  </div>
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profesion", array()), 'label', array("label" => "Profesion"));
        echo "
        ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profesion", array()), 'widget', array("attr" => array("class" => "form-control border-input")));
        echo "
      </div>
  </div>
</div>
<div class=\"text-center\">
  <input type=\"submit\" class=\"btn btn-info btn-fill btn-wd\"  value=\"Guardar\">
</div>

    ";
        // line 71
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
            <a class=\"btn\" href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("profesores_index");
        echo "\">Regresar</a>
    </ul>

";
        
        $__internal_09de703d7441c368f42abbb33c7ed7420cc1a12c9964697f5fac6a03865d2477->leave($__internal_09de703d7441c368f42abbb33c7ed7420cc1a12c9964697f5fac6a03865d2477_prof);

    }

    public function getTemplateName()
    {
        return "profesores/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 74,  180 => 71,  169 => 63,  165 => 62,  157 => 57,  153 => 56,  143 => 49,  139 => 48,  131 => 43,  127 => 42,  117 => 35,  113 => 34,  105 => 29,  101 => 28,  91 => 21,  87 => 20,  79 => 15,  75 => 14,  68 => 10,  62 => 9,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block act2 %}active{% endblock %}*/
/* */
/* {% block titulo %}*/
/* Agregar profesor*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
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
/*         {{form_label(form.apellidos,'Apellidos')}}*/
/*         {{ form_widget(form.apellidos,{'attr':{'class' : 'form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(form.edad,'Edad')}}*/
/*         {{ form_widget(form.edad,{'attr':{'class' : 'form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(form.fechaNacimiento,'Fecha de nacimiento')}}*/
/*         {{ form_widget(form.fechaNacimiento,{'attr':{'class' : 'form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(form.telefono,'Telefono')}}*/
/*         {{ form_widget(form.telefono,{'attr':{'class' : 'form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(form.direccion,'Direccion')}}*/
/*         {{ form_widget(form.direccion,{'attr':{'class' : 'form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(form.email,'Email')}}*/
/*         {{ form_widget(form.email,{'attr':{'class' : 'form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(form.profesion,'Profesion')}}*/
/*         {{ form_widget(form.profesion,{'attr':{'class' : 'form-control border-input'}}) }}*/
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
/*             <a class="btn" href="{{ path('profesores_index') }}">Regresar</a>*/
/*     </ul>*/
/* */
/* {% endblock %}*/
/* */
