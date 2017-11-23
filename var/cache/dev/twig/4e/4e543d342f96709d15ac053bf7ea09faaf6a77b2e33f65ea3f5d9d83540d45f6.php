<?php

/* profesores/show.html.twig */
class __TwigTemplate_7e8daba504a51eb4bbad6e183ed2c73ca291de17333bb4df4f1f674d9c2befcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "profesores/show.html.twig", 1);
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
        $__internal_d03f4f1ee96a7bcd7e55c9c9448f81419d34192df40e6b9dbf93f2e542453106 = $this->env->getExtension("native_profiler");
        $__internal_d03f4f1ee96a7bcd7e55c9c9448f81419d34192df40e6b9dbf93f2e542453106->enter($__internal_d03f4f1ee96a7bcd7e55c9c9448f81419d34192df40e6b9dbf93f2e542453106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profesores/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d03f4f1ee96a7bcd7e55c9c9448f81419d34192df40e6b9dbf93f2e542453106->leave($__internal_d03f4f1ee96a7bcd7e55c9c9448f81419d34192df40e6b9dbf93f2e542453106_prof);

    }

    // line 3
    public function block_act2($context, array $blocks = array())
    {
        $__internal_05524fc744f48ce2b5ad9557bf234bd3006b8b3d1071d817011c9b9195e20298 = $this->env->getExtension("native_profiler");
        $__internal_05524fc744f48ce2b5ad9557bf234bd3006b8b3d1071d817011c9b9195e20298->enter($__internal_05524fc744f48ce2b5ad9557bf234bd3006b8b3d1071d817011c9b9195e20298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "act2"));

        echo "active";
        
        $__internal_05524fc744f48ce2b5ad9557bf234bd3006b8b3d1071d817011c9b9195e20298->leave($__internal_05524fc744f48ce2b5ad9557bf234bd3006b8b3d1071d817011c9b9195e20298_prof);

    }

    // line 5
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_aa2fd171d46fbf7223d3b73ea9032ac9b831aa627ff6f59bdb7c2efdad27f672 = $this->env->getExtension("native_profiler");
        $__internal_aa2fd171d46fbf7223d3b73ea9032ac9b831aa627ff6f59bdb7c2efdad27f672->enter($__internal_aa2fd171d46fbf7223d3b73ea9032ac9b831aa627ff6f59bdb7c2efdad27f672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        // line 6
        echo "Detalle de profesor
";
        
        $__internal_aa2fd171d46fbf7223d3b73ea9032ac9b831aa627ff6f59bdb7c2efdad27f672->leave($__internal_aa2fd171d46fbf7223d3b73ea9032ac9b831aa627ff6f59bdb7c2efdad27f672_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c40f146d94ab11271cb339814d8adbc6ba0ced5da1350312c67b25e7407b67d = $this->env->getExtension("native_profiler");
        $__internal_0c40f146d94ab11271cb339814d8adbc6ba0ced5da1350312c67b25e7407b67d->enter($__internal_0c40f146d94ab11271cb339814d8adbc6ba0ced5da1350312c67b25e7407b67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    <table class=\"table table-striped\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profesore"]) ? $context["profesore"] : $this->getContext($context, "profesore")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profesore"]) ? $context["profesore"] : $this->getContext($context, "profesore")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Apellidos</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profesore"]) ? $context["profesore"] : $this->getContext($context, "profesore")), "apellidos", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Edad</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profesore"]) ? $context["profesore"] : $this->getContext($context, "profesore")), "edad", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechanacimiento</th>
                <td>";
        // line 31
        if ($this->getAttribute((isset($context["profesore"]) ? $context["profesore"] : $this->getContext($context, "profesore")), "fechaNacimiento", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["profesore"]) ? $context["profesore"] : $this->getContext($context, "profesore")), "fechaNacimiento", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Telefono</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profesore"]) ? $context["profesore"] : $this->getContext($context, "profesore")), "telefono", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Direccion</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profesore"]) ? $context["profesore"] : $this->getContext($context, "profesore")), "direccion", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profesore"]) ? $context["profesore"] : $this->getContext($context, "profesore")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Profesion</th>
                <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profesore"]) ? $context["profesore"] : $this->getContext($context, "profesore")), "profesion", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>

            <a class=\"btn\" href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("profesores_index");
        echo "\">Regresar</a>

            <a class=\"btn btn-warning\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profesores_edit", array("id" => $this->getAttribute((isset($context["profesore"]) ? $context["profesore"] : $this->getContext($context, "profesore")), "id", array()))), "html", null, true);
        echo "\">Editar</a>
            <li>
                ";
        // line 58
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                    <input class=\"btn btn-danger\" type=\"submit\" value=\"Delete\">
                ";
        // line 60
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
            </li>
    </ul>
";
        
        $__internal_0c40f146d94ab11271cb339814d8adbc6ba0ced5da1350312c67b25e7407b67d->leave($__internal_0c40f146d94ab11271cb339814d8adbc6ba0ced5da1350312c67b25e7407b67d_prof);

    }

    public function getTemplateName()
    {
        return "profesores/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 60,  153 => 58,  148 => 56,  143 => 54,  133 => 47,  126 => 43,  119 => 39,  112 => 35,  103 => 31,  96 => 27,  89 => 23,  82 => 19,  75 => 15,  68 => 10,  62 => 9,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block act2 %}active{% endblock %}*/
/* */
/* {% block titulo %}*/
/* Detalle de profesor*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     <table class="table table-striped">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ profesore.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <td>{{ profesore.nombre }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Apellidos</th>*/
/*                 <td>{{ profesore.apellidos }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Edad</th>*/
/*                 <td>{{ profesore.edad }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fechanacimiento</th>*/
/*                 <td>{% if profesore.fechaNacimiento %}{{ profesore.fechaNacimiento|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Telefono</th>*/
/*                 <td>{{ profesore.telefono }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Direccion</th>*/
/*                 <td>{{ profesore.direccion }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Email</th>*/
/*                 <td>{{ profesore.email }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Profesion</th>*/
/*                 <td>{{ profesore.profesion }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/* */
/*             <a class="btn" href="{{ path('profesores_index') }}">Regresar</a>*/
/* */
/*             <a class="btn btn-warning" href="{{ path('profesores_edit', { 'id': profesore.id }) }}">Editar</a>*/
/*             <li>*/
/*                 {{ form_start(delete_form) }}*/
/*                     <input class="btn btn-danger" type="submit" value="Delete">*/
/*                 {{ form_end(delete_form) }}*/
/*             </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
