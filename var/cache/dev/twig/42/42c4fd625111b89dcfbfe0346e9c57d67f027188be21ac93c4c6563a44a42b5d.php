<?php

/* aula/show.html.twig */
class __TwigTemplate_e2207b830c5903a185a6186f22a2bfb3912f9a7a49f510f9f343954aba389bad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "aula/show.html.twig", 1);
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
        $__internal_c08febaece371d6704a282b6bf16bee5fceb49f51de644d043cd1ec44ab0282c = $this->env->getExtension("native_profiler");
        $__internal_c08febaece371d6704a282b6bf16bee5fceb49f51de644d043cd1ec44ab0282c->enter($__internal_c08febaece371d6704a282b6bf16bee5fceb49f51de644d043cd1ec44ab0282c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "aula/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c08febaece371d6704a282b6bf16bee5fceb49f51de644d043cd1ec44ab0282c->leave($__internal_c08febaece371d6704a282b6bf16bee5fceb49f51de644d043cd1ec44ab0282c_prof);

    }

    // line 3
    public function block_act1($context, array $blocks = array())
    {
        $__internal_51ea53b7c13f6c467cced5cfd9a9d9dfa98a8e10a3d98fbe49d77f1fe8f5e92d = $this->env->getExtension("native_profiler");
        $__internal_51ea53b7c13f6c467cced5cfd9a9d9dfa98a8e10a3d98fbe49d77f1fe8f5e92d->enter($__internal_51ea53b7c13f6c467cced5cfd9a9d9dfa98a8e10a3d98fbe49d77f1fe8f5e92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "act1"));

        echo "active";
        
        $__internal_51ea53b7c13f6c467cced5cfd9a9d9dfa98a8e10a3d98fbe49d77f1fe8f5e92d->leave($__internal_51ea53b7c13f6c467cced5cfd9a9d9dfa98a8e10a3d98fbe49d77f1fe8f5e92d_prof);

    }

    // line 5
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_1aa826164543bdf28281da806cd6cf23a909ec0b6b2484fc3d37d6e7a99a7e70 = $this->env->getExtension("native_profiler");
        $__internal_1aa826164543bdf28281da806cd6cf23a909ec0b6b2484fc3d37d6e7a99a7e70->enter($__internal_1aa826164543bdf28281da806cd6cf23a909ec0b6b2484fc3d37d6e7a99a7e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        // line 6
        echo "Detalle de aula
";
        
        $__internal_1aa826164543bdf28281da806cd6cf23a909ec0b6b2484fc3d37d6e7a99a7e70->leave($__internal_1aa826164543bdf28281da806cd6cf23a909ec0b6b2484fc3d37d6e7a99a7e70_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec67767767f91e6921d495a7a6eb34672758fa123aa8767b25c12d11da37c4ce = $this->env->getExtension("native_profiler");
        $__internal_ec67767767f91e6921d495a7a6eb34672758fa123aa8767b25c12d11da37c4ce->enter($__internal_ec67767767f91e6921d495a7a6eb34672758fa123aa8767b25c12d11da37c4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    <table class=\"table table-striped\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descripcion</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "descripcion", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Edificio</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "edificio", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Encargado</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "encargado", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
            <a class=\"btn\" href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("aula_index");
        echo "\">Regresar</a>
            <a class=\"btn btn-warning\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aula_edit", array("id" => $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "id", array()))), "html", null, true);
        echo "\">Editar</a>
            <li>
                ";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                    <input class=\"btn btn-danger\" type=\"submit\" value=\"Delete\">
                ";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
            </li>
    </ul>
";
        
        $__internal_ec67767767f91e6921d495a7a6eb34672758fa123aa8767b25c12d11da37c4ce->leave($__internal_ec67767767f91e6921d495a7a6eb34672758fa123aa8767b25c12d11da37c4ce_prof);

    }

    public function getTemplateName()
    {
        return "aula/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 42,  121 => 40,  116 => 38,  112 => 37,  103 => 31,  96 => 27,  89 => 23,  82 => 19,  75 => 15,  68 => 10,  62 => 9,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block act1 %}active{% endblock %}*/
/* */
/* {% block titulo %}*/
/* Detalle de aula*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     <table class="table table-striped">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ aula.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <td>{{ aula.nombre }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Descripcion</th>*/
/*                 <td>{{ aula.descripcion }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Edificio</th>*/
/*                 <td>{{ aula.edificio }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Encargado</th>*/
/*                 <td>{{ aula.encargado }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*             <a class="btn" href="{{ path('aula_index') }}">Regresar</a>*/
/*             <a class="btn btn-warning" href="{{ path('aula_edit', { 'id': aula.id }) }}">Editar</a>*/
/*             <li>*/
/*                 {{ form_start(delete_form) }}*/
/*                     <input class="btn btn-danger" type="submit" value="Delete">*/
/*                 {{ form_end(delete_form) }}*/
/*             </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
