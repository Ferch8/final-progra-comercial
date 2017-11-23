<?php

/* curso/new.html.twig */
class __TwigTemplate_fe187843e12fc88702ba6123c0ec2c7e584293ac596dfa1d8196eb6ef866ffa8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "curso/new.html.twig", 1);
        $this->blocks = array(
            'act3' => array($this, 'block_act3'),
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
        $__internal_b90aadcd019de5a341317c77bc377f8fd427ff1aef5bed8bdb093a01f8acd81c = $this->env->getExtension("native_profiler");
        $__internal_b90aadcd019de5a341317c77bc377f8fd427ff1aef5bed8bdb093a01f8acd81c->enter($__internal_b90aadcd019de5a341317c77bc377f8fd427ff1aef5bed8bdb093a01f8acd81c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "curso/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b90aadcd019de5a341317c77bc377f8fd427ff1aef5bed8bdb093a01f8acd81c->leave($__internal_b90aadcd019de5a341317c77bc377f8fd427ff1aef5bed8bdb093a01f8acd81c_prof);

    }

    // line 3
    public function block_act3($context, array $blocks = array())
    {
        $__internal_fe889d697918bcc2528e97e2be6428c90d57d08584230009cb96e71858a5dd8b = $this->env->getExtension("native_profiler");
        $__internal_fe889d697918bcc2528e97e2be6428c90d57d08584230009cb96e71858a5dd8b->enter($__internal_fe889d697918bcc2528e97e2be6428c90d57d08584230009cb96e71858a5dd8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "act3"));

        echo "active";
        
        $__internal_fe889d697918bcc2528e97e2be6428c90d57d08584230009cb96e71858a5dd8b->leave($__internal_fe889d697918bcc2528e97e2be6428c90d57d08584230009cb96e71858a5dd8b_prof);

    }

    // line 5
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_fc5921024cdc6d704c11c3c4477d21d368e1454ddf459189ddabb3530153ad54 = $this->env->getExtension("native_profiler");
        $__internal_fc5921024cdc6d704c11c3c4477d21d368e1454ddf459189ddabb3530153ad54->enter($__internal_fc5921024cdc6d704c11c3c4477d21d368e1454ddf459189ddabb3530153ad54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        // line 6
        echo "Agregar curso
";
        
        $__internal_fc5921024cdc6d704c11c3c4477d21d368e1454ddf459189ddabb3530153ad54->leave($__internal_fc5921024cdc6d704c11c3c4477d21d368e1454ddf459189ddabb3530153ad54_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf892f3fa7e3e209822e1a2981019d4d8cdbac5e29bfa035a2fed519a28a350e = $this->env->getExtension("native_profiler");
        $__internal_cf892f3fa7e3e209822e1a2981019d4d8cdbac5e29bfa035a2fed519a28a350e->enter($__internal_cf892f3fa7e3e209822e1a2981019d4d8cdbac5e29bfa035a2fed519a28a350e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "

";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form")));
        echo "
<div class=\"row\">
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label', array("label" => "Nombre"));
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control border-input")));
        echo "
      </div>
  </div>
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'label', array("label" => "Descripcion"));
        echo "
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'widget', array("attr" => array("class" => "form-control border-input")));
        echo "
      </div>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaCreacion", array()), 'label', array("label" => "fechaCreacion"));
        echo "
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaCreacion", array()), 'widget', array("attr" => array("class" => "form-control border-input")));
        echo "
      </div>
  </div>
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "horario", array()), 'label', array("label" => "horario"));
        echo "
        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "horario", array()), 'widget', array("attr" => array("class" => "form-control border-input")));
        echo "
      </div>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observacion", array()), 'label', array("label" => "observacion"));
        echo "
        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observacion", array()), 'widget', array("attr" => array("class" => "form-control border-input")));
        echo "
      </div>
  </div>
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aula", array()), 'label', array("label" => "aula"));
        echo "
        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aula", array()), 'widget', array("attr" => array("class" => "selectpicker form-control border-input")));
        echo "
      </div>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profesor", array()), 'label', array("label" => "profesor"));
        echo "
        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profesor", array()), 'widget', array("attr" => array("class" => "selectpicker form-control border-input")));
        echo "
      </div>
  </div>
</div>
<div class=\"text-center\">
  <input type=\"submit\" class=\"btn btn-info btn-fill btn-wd\"  value=\"Guardar\">
</div>

    ";
        // line 67
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


    <ul>
            <a class=\"btn\" href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("curso_index");
        echo "\">Regresar</a>
    </ul>
";
        
        $__internal_cf892f3fa7e3e209822e1a2981019d4d8cdbac5e29bfa035a2fed519a28a350e->leave($__internal_cf892f3fa7e3e209822e1a2981019d4d8cdbac5e29bfa035a2fed519a28a350e_prof);

    }

    public function getTemplateName()
    {
        return "curso/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 71,  172 => 67,  161 => 59,  157 => 58,  147 => 51,  143 => 50,  135 => 45,  131 => 44,  121 => 37,  117 => 36,  109 => 31,  105 => 30,  95 => 23,  91 => 22,  83 => 17,  79 => 16,  72 => 12,  68 => 10,  62 => 9,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block act3 %}active{% endblock %}*/
/* */
/* {% block titulo %}*/
/* Agregar curso*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
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
/*         {{form_label(form.descripcion,'Descripcion')}}*/
/*         {{ form_widget(form.descripcion,{'attr':{'class' : 'form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(form.fechaCreacion,'fechaCreacion')}}*/
/*         {{ form_widget(form.fechaCreacion,{'attr':{'class' : 'form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(form.horario,'horario')}}*/
/*         {{ form_widget(form.horario,{'attr':{'class' : 'form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(form.observacion,'observacion')}}*/
/*         {{ form_widget(form.observacion,{'attr':{'class' : 'form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(form.aula,'aula')}}*/
/*         {{ form_widget(form.aula,{'attr':{'class' : 'selectpicker form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(form.profesor,'profesor')}}*/
/*         {{ form_widget(form.profesor,{'attr':{'class' : 'selectpicker form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/* </div>*/
/* <div class="text-center">*/
/*   <input type="submit" class="btn btn-info btn-fill btn-wd"  value="Guardar">*/
/* </div>*/
/* */
/*     {{ form_end(form) }}*/
/* */
/* */
/*     <ul>*/
/*             <a class="btn" href="{{ path('curso_index') }}">Regresar</a>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
