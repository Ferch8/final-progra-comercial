<?php

/* curso/edit.html.twig */
class __TwigTemplate_4b384bef97afc36e8534978fd7e3ca50e97852c142aa300db7ed02ec6aeeeb91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "curso/edit.html.twig", 1);
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
        $__internal_9c964c7d13ccc0076c77138bf83914f7f5c6c6a70dd0fb701e2dad39d7595ff1 = $this->env->getExtension("native_profiler");
        $__internal_9c964c7d13ccc0076c77138bf83914f7f5c6c6a70dd0fb701e2dad39d7595ff1->enter($__internal_9c964c7d13ccc0076c77138bf83914f7f5c6c6a70dd0fb701e2dad39d7595ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "curso/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c964c7d13ccc0076c77138bf83914f7f5c6c6a70dd0fb701e2dad39d7595ff1->leave($__internal_9c964c7d13ccc0076c77138bf83914f7f5c6c6a70dd0fb701e2dad39d7595ff1_prof);

    }

    // line 3
    public function block_act3($context, array $blocks = array())
    {
        $__internal_87bfdc2d82b22be12b62c9352ed4ceec9dc7464d01d013faff3b1342019ff262 = $this->env->getExtension("native_profiler");
        $__internal_87bfdc2d82b22be12b62c9352ed4ceec9dc7464d01d013faff3b1342019ff262->enter($__internal_87bfdc2d82b22be12b62c9352ed4ceec9dc7464d01d013faff3b1342019ff262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "act3"));

        echo "active";
        
        $__internal_87bfdc2d82b22be12b62c9352ed4ceec9dc7464d01d013faff3b1342019ff262->leave($__internal_87bfdc2d82b22be12b62c9352ed4ceec9dc7464d01d013faff3b1342019ff262_prof);

    }

    // line 5
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_403433a909e325a67d6d4e67f28c07020d82e21aab77b967106c68279d80741b = $this->env->getExtension("native_profiler");
        $__internal_403433a909e325a67d6d4e67f28c07020d82e21aab77b967106c68279d80741b->enter($__internal_403433a909e325a67d6d4e67f28c07020d82e21aab77b967106c68279d80741b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        // line 6
        echo "Editar curso
";
        
        $__internal_403433a909e325a67d6d4e67f28c07020d82e21aab77b967106c68279d80741b->leave($__internal_403433a909e325a67d6d4e67f28c07020d82e21aab77b967106c68279d80741b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebae8a1a052b5e6194bf9afa9792fcaea6c294d160b35eaece1ff273c7b75d42 = $this->env->getExtension("native_profiler");
        $__internal_ebae8a1a052b5e6194bf9afa9792fcaea6c294d160b35eaece1ff273c7b75d42->enter($__internal_ebae8a1a052b5e6194bf9afa9792fcaea6c294d160b35eaece1ff273c7b75d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fechaCreacion", array()), 'label', array("label" => "fechaCreacion"));
        echo "
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fechaCreacion", array()), 'widget', array("attr" => array("class" => "form-control border-input")));
        echo "
      </div>
  </div>
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "horario", array()), 'label', array("label" => "horario"));
        echo "
        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "horario", array()), 'widget', array("attr" => array("class" => "form-control border-input")));
        echo "
      </div>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "observacion", array()), 'label', array("label" => "observacion"));
        echo "
        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "observacion", array()), 'widget', array("attr" => array("class" => "form-control border-input")));
        echo "
      </div>
  </div>
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "aula", array()), 'label', array("label" => "aula"));
        echo "
        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "aula", array()), 'widget', array("attr" => array("class" => "selectpicker form-control border-input")));
        echo "
      </div>
  </div>
</div>
<div class=\"row\">
  <div class=\"col-md-5\">
      <div class=\"form-group\">
        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "profesor", array()), 'label', array("label" => "profesor"));
        echo "
        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "profesor", array()), 'widget', array("attr" => array("class" => "selectpicker form-control border-input")));
        echo "
      </div>
  </div>
</div>
<div class=\"text-center\">
  <input type=\"submit\" class=\"btn btn-info btn-fill btn-wd\"  value=\"Guardar\">
</div>

    ";
        // line 67
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "


    <ul>
            <a class=\"btn\" href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("curso_index");
        echo "\">Regresar</a>
    </ul>
";
        
        $__internal_ebae8a1a052b5e6194bf9afa9792fcaea6c294d160b35eaece1ff273c7b75d42->leave($__internal_ebae8a1a052b5e6194bf9afa9792fcaea6c294d160b35eaece1ff273c7b75d42_prof);

    }

    public function getTemplateName()
    {
        return "curso/edit.html.twig";
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
/* Editar curso*/
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
/*         {{form_label(edit_form.descripcion,'Descripcion')}}*/
/*         {{ form_widget(edit_form.descripcion,{'attr':{'class' : 'form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(edit_form.fechaCreacion,'fechaCreacion')}}*/
/*         {{ form_widget(edit_form.fechaCreacion,{'attr':{'class' : 'form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(edit_form.horario,'horario')}}*/
/*         {{ form_widget(edit_form.horario,{'attr':{'class' : 'form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(edit_form.observacion,'observacion')}}*/
/*         {{ form_widget(edit_form.observacion,{'attr':{'class' : 'form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(edit_form.aula,'aula')}}*/
/*         {{ form_widget(edit_form.aula,{'attr':{'class' : 'selectpicker form-control border-input'}}) }}*/
/*       </div>*/
/*   </div>*/
/* </div>*/
/* <div class="row">*/
/*   <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         {{form_label(edit_form.profesor,'profesor')}}*/
/*         {{ form_widget(edit_form.profesor,{'attr':{'class' : 'selectpicker form-control border-input'}}) }}*/
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
/*             <a class="btn" href="{{ path('curso_index') }}">Regresar</a>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
