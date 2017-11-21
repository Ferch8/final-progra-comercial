<?php

/* estudiantes/index.html.twig */
class __TwigTemplate_0ea712ac66a9de8773affbf9500a3402c9dfef3e26be2dc02e99035c273360cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "estudiantes/index.html.twig", 1);
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
        $__internal_fcfb225c1c0a84ffcdb4e03ae0d8b712013f50a23a9190d58ab0ee3d359620c0 = $this->env->getExtension("native_profiler");
        $__internal_fcfb225c1c0a84ffcdb4e03ae0d8b712013f50a23a9190d58ab0ee3d359620c0->enter($__internal_fcfb225c1c0a84ffcdb4e03ae0d8b712013f50a23a9190d58ab0ee3d359620c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "estudiantes/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcfb225c1c0a84ffcdb4e03ae0d8b712013f50a23a9190d58ab0ee3d359620c0->leave($__internal_fcfb225c1c0a84ffcdb4e03ae0d8b712013f50a23a9190d58ab0ee3d359620c0_prof);

    }

    // line 3
    public function block_act4($context, array $blocks = array())
    {
        $__internal_3d06b5ba3fcdd47e839f4963e5d05d74c6df114a72cae81d2d36c12f54124029 = $this->env->getExtension("native_profiler");
        $__internal_3d06b5ba3fcdd47e839f4963e5d05d74c6df114a72cae81d2d36c12f54124029->enter($__internal_3d06b5ba3fcdd47e839f4963e5d05d74c6df114a72cae81d2d36c12f54124029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "act4"));

        echo "active";
        
        $__internal_3d06b5ba3fcdd47e839f4963e5d05d74c6df114a72cae81d2d36c12f54124029->leave($__internal_3d06b5ba3fcdd47e839f4963e5d05d74c6df114a72cae81d2d36c12f54124029_prof);

    }

    // line 5
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_8aacb7f45462dc8e335739045cbcf69c1b36cc246a285f16570a27d97e4150e4 = $this->env->getExtension("native_profiler");
        $__internal_8aacb7f45462dc8e335739045cbcf69c1b36cc246a285f16570a27d97e4150e4->enter($__internal_8aacb7f45462dc8e335739045cbcf69c1b36cc246a285f16570a27d97e4150e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        // line 6
        echo "Listado de estudiantes
";
        
        $__internal_8aacb7f45462dc8e335739045cbcf69c1b36cc246a285f16570a27d97e4150e4->leave($__internal_8aacb7f45462dc8e335739045cbcf69c1b36cc246a285f16570a27d97e4150e4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_983b5c83a92af8202e12c74cf1da5cc08a74db30f880c57e8e7eb9b54a61be3f = $this->env->getExtension("native_profiler");
        $__internal_983b5c83a92af8202e12c74cf1da5cc08a74db30f880c57e8e7eb9b54a61be3f->enter($__internal_983b5c83a92af8202e12c74cf1da5cc08a74db30f880c57e8e7eb9b54a61be3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<ul>
        <a class=\"btn btn-success\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("estudiantes_new");
        echo "\">Agregar estudiante</a>
</ul>
<div class=\"table-responsive table-full-width\">
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Fechanacimiento</th>
                <th>Carnet</th>
                <th>Telefono</th>
                <th>Direccion</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["estudiantes"]) ? $context["estudiantes"] : $this->getContext($context, "estudiantes")));
        foreach ($context['_seq'] as $context["_key"] => $context["estudiante"]) {
            // line 29
            echo "            <tr>
              <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["estudiante"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["estudiante"], "apellido", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["estudiante"], "edad", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            if ($this->getAttribute($context["estudiante"], "fechaNacimiento", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["estudiante"], "fechaNacimiento", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["estudiante"], "carnet", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["estudiante"], "telefono", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["estudiante"], "direccion", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                            <a class=\"btn btn-info\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estudiantes_show", array("id" => $this->getAttribute($context["estudiante"], "id", array()))), "html", null, true);
            echo "\">show</a>
                            <a class=\"btn btn-warning\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estudiantes_edit", array("id" => $this->getAttribute($context["estudiante"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['estudiante'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>


";
        
        $__internal_983b5c83a92af8202e12c74cf1da5cc08a74db30f880c57e8e7eb9b54a61be3f->leave($__internal_983b5c83a92af8202e12c74cf1da5cc08a74db30f880c57e8e7eb9b54a61be3f_prof);

    }

    public function getTemplateName()
    {
        return "estudiantes/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 45,  134 => 40,  130 => 39,  124 => 36,  120 => 35,  116 => 34,  110 => 33,  106 => 32,  102 => 31,  98 => 30,  95 => 29,  91 => 28,  71 => 11,  68 => 10,  62 => 9,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block act4 %}active{% endblock %}*/
/* */
/* {% block titulo %}*/
/* Listado de estudiantes*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <ul>*/
/*         <a class="btn btn-success" href="{{ path('estudiantes_new') }}">Agregar estudiante</a>*/
/* </ul>*/
/* <div class="table-responsive table-full-width">*/
/*     <table class="table table-striped">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <th>Apellido</th>*/
/*                 <th>Edad</th>*/
/*                 <th>Fechanacimiento</th>*/
/*                 <th>Carnet</th>*/
/*                 <th>Telefono</th>*/
/*                 <th>Direccion</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for estudiante in estudiantes %}*/
/*             <tr>*/
/*               <td>{{ estudiante.nombre }}</td>*/
/*                 <td>{{ estudiante.apellido }}</td>*/
/*                 <td>{{ estudiante.edad }}</td>*/
/*                 <td>{% if estudiante.fechaNacimiento %}{{ estudiante.fechaNacimiento|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{{ estudiante.carnet }}</td>*/
/*                 <td>{{ estudiante.telefono }}</td>*/
/*                 <td>{{ estudiante.direccion }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                             <a class="btn btn-info" href="{{ path('estudiantes_show', { 'id': estudiante.id }) }}">show</a>*/
/*                             <a class="btn btn-warning" href="{{ path('estudiantes_edit', { 'id': estudiante.id }) }}">edit</a>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/* */
/* {% endblock %}*/
/* */
