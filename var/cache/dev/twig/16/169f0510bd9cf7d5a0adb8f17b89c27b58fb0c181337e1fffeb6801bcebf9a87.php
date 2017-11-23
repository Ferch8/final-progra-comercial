<?php

/* estudiantes/new.html.twig */
class __TwigTemplate_077b373ccf8dd32bad93306bd23318cf67db3464e3f1993ee8c815532bd5a56e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "estudiantes/new.html.twig", 1);
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
        $__internal_18a88e461800639f6a827786573a27bef4809a976c2c3db38b8fc0ee71dc6598 = $this->env->getExtension("native_profiler");
        $__internal_18a88e461800639f6a827786573a27bef4809a976c2c3db38b8fc0ee71dc6598->enter($__internal_18a88e461800639f6a827786573a27bef4809a976c2c3db38b8fc0ee71dc6598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "estudiantes/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18a88e461800639f6a827786573a27bef4809a976c2c3db38b8fc0ee71dc6598->leave($__internal_18a88e461800639f6a827786573a27bef4809a976c2c3db38b8fc0ee71dc6598_prof);

    }

    // line 3
    public function block_act4($context, array $blocks = array())
    {
        $__internal_2edd333b438ed72794cd8ad2508b56e59afd1d45f1c8aed9f5d9b4176c47ee3e = $this->env->getExtension("native_profiler");
        $__internal_2edd333b438ed72794cd8ad2508b56e59afd1d45f1c8aed9f5d9b4176c47ee3e->enter($__internal_2edd333b438ed72794cd8ad2508b56e59afd1d45f1c8aed9f5d9b4176c47ee3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "act4"));

        echo "active";
        
        $__internal_2edd333b438ed72794cd8ad2508b56e59afd1d45f1c8aed9f5d9b4176c47ee3e->leave($__internal_2edd333b438ed72794cd8ad2508b56e59afd1d45f1c8aed9f5d9b4176c47ee3e_prof);

    }

    // line 5
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_1ca8f8333f6a83af092513d7d6912a744a53516c22095a663f35a3d543128d6b = $this->env->getExtension("native_profiler");
        $__internal_1ca8f8333f6a83af092513d7d6912a744a53516c22095a663f35a3d543128d6b->enter($__internal_1ca8f8333f6a83af092513d7d6912a744a53516c22095a663f35a3d543128d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        // line 6
        echo "Agregar asignacion
";
        
        $__internal_1ca8f8333f6a83af092513d7d6912a744a53516c22095a663f35a3d543128d6b->leave($__internal_1ca8f8333f6a83af092513d7d6912a744a53516c22095a663f35a3d543128d6b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b02332df7d47c24c6c930a0edba66241767a573ae3dc7957415f6b2194bfb5f = $this->env->getExtension("native_profiler");
        $__internal_8b02332df7d47c24c6c930a0edba66241767a573ae3dc7957415f6b2194bfb5f->enter($__internal_8b02332df7d47c24c6c930a0edba66241767a573ae3dc7957415f6b2194bfb5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "


";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form")));
        echo "
<div class=\"row\">
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label', array("label" => "Nombre"));
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control border-input")));
        echo "
      </div>
  </div>
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellido", array()), 'label', array("label" => "apellido"));
        echo "
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellido", array()), 'widget', array("attr" => array("class" => "form-control border-input")));
        echo "
      </div>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaNacimiento", array()), 'label', array("label" => "fechaNacimiento"));
        echo "
        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaNacimiento", array()), 'widget', array("attr" => array("class" => "form-control border-input")));
        echo "
      </div>
  </div>
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "edad", array()), 'label', array("label" => "edad"));
        echo "
        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "edad", array()), 'widget', array("attr" => array("class" => "form-control border-input")));
        echo "
      </div>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "carnet", array()), 'label', array("label" => "carnet"));
        echo "
        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "carnet", array()), 'widget', array("attr" => array("class" => "form-control border-input")));
        echo "
      </div>
  </div>
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono", array()), 'label', array("label" => "telefono"));
        echo "
        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono", array()), 'widget', array("attr" => array("class" => " form-control border-input")));
        echo "
      </div>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'label', array("label" => "direccion"));
        echo "
        ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'widget', array("attr" => array("class" => " form-control border-input")));
        echo "
      </div>
  </div>
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cursos", array()), 'label', array("label" => "cursos"));
        echo "
        ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cursos", array()), 'widget', array("attr" => array("class" => " form-control ")));
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
        // line 77
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "




    <ul>

            <a class=\"btn\" href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("estudiantes_index");
        echo "\">Regresar</a>

    </ul>
";
        
        $__internal_8b02332df7d47c24c6c930a0edba66241767a573ae3dc7957415f6b2194bfb5f->leave($__internal_8b02332df7d47c24c6c930a0edba66241767a573ae3dc7957415f6b2194bfb5f_prof);

    }

    public function getTemplateName()
    {
        return "estudiantes/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 84,  188 => 77,  174 => 66,  170 => 65,  162 => 60,  158 => 59,  148 => 52,  144 => 51,  136 => 46,  132 => 45,  122 => 38,  118 => 37,  110 => 32,  106 => 31,  96 => 24,  92 => 23,  84 => 18,  80 => 17,  73 => 13,  68 => 10,  62 => 9,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block act4 %}active{% endblock %}*/
/* */
/* {% block titulo %}*/
/* Agregar asignacion*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* */
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
/*         {{form_label(form.apellido,'apellido')}}*/
/*         {{ form_widget(form.apellido,{'attr':{'class' : 'form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(form.fechaNacimiento,'fechaNacimiento')}}*/
/*         {{ form_widget(form.fechaNacimiento,{'attr':{'class' : 'form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(form.edad,'edad')}}*/
/*         {{ form_widget(form.edad,{'attr':{'class' : 'form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(form.carnet,'carnet')}}*/
/*         {{ form_widget(form.carnet,{'attr':{'class' : 'form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(form.telefono,'telefono')}}*/
/*         {{ form_widget(form.telefono,{'attr':{'class' : ' form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(form.direccion,'direccion')}}*/
/*         {{ form_widget(form.direccion,{'attr':{'class' : ' form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(form.cursos,'cursos')}}*/
/*         {{ form_widget(form.cursos,{'attr':{'class' : ' form-control '}}) }}*/
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
/*     {{ form_end(form) }}*/
/* */
/* */
/* */
/* */
/*     <ul>*/
/* */
/*             <a class="btn" href="{{ path('estudiantes_index') }}">Regresar</a>*/
/* */
/*     </ul>*/
/* {% endblock %}*/
/* */
