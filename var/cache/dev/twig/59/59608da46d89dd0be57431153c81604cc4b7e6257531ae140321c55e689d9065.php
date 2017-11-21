<?php

/* estudiantes/show.html.twig */
class __TwigTemplate_4c053b3e8c884e7af1d6c194624cdb27555a344260ae72ee2e9f9b1b8dec0898 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "estudiantes/show.html.twig", 1);
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
        $__internal_4a084b75367dbe02741da85412fb73bea57bdce74447ee11162b51e64f76ed77 = $this->env->getExtension("native_profiler");
        $__internal_4a084b75367dbe02741da85412fb73bea57bdce74447ee11162b51e64f76ed77->enter($__internal_4a084b75367dbe02741da85412fb73bea57bdce74447ee11162b51e64f76ed77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "estudiantes/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a084b75367dbe02741da85412fb73bea57bdce74447ee11162b51e64f76ed77->leave($__internal_4a084b75367dbe02741da85412fb73bea57bdce74447ee11162b51e64f76ed77_prof);

    }

    // line 3
    public function block_act4($context, array $blocks = array())
    {
        $__internal_8a27463881cf391f67d2cc8edbaa60e80c860dfaf925a7e41b01e36b098d876f = $this->env->getExtension("native_profiler");
        $__internal_8a27463881cf391f67d2cc8edbaa60e80c860dfaf925a7e41b01e36b098d876f->enter($__internal_8a27463881cf391f67d2cc8edbaa60e80c860dfaf925a7e41b01e36b098d876f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "act4"));

        echo "active";
        
        $__internal_8a27463881cf391f67d2cc8edbaa60e80c860dfaf925a7e41b01e36b098d876f->leave($__internal_8a27463881cf391f67d2cc8edbaa60e80c860dfaf925a7e41b01e36b098d876f_prof);

    }

    // line 5
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_876611736dbe5717ddf966e0e35a0a89e032ec0416ad25981016ac0b765db6ce = $this->env->getExtension("native_profiler");
        $__internal_876611736dbe5717ddf966e0e35a0a89e032ec0416ad25981016ac0b765db6ce->enter($__internal_876611736dbe5717ddf966e0e35a0a89e032ec0416ad25981016ac0b765db6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        // line 6
        echo "Detalle de asignacion
";
        
        $__internal_876611736dbe5717ddf966e0e35a0a89e032ec0416ad25981016ac0b765db6ce->leave($__internal_876611736dbe5717ddf966e0e35a0a89e032ec0416ad25981016ac0b765db6ce_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_15fa747b10a994865f284e0da4dfd669fd7fff378c7fb0cae115088ff41abf0d = $this->env->getExtension("native_profiler");
        $__internal_15fa747b10a994865f284e0da4dfd669fd7fff378c7fb0cae115088ff41abf0d->enter($__internal_15fa747b10a994865f284e0da4dfd669fd7fff378c7fb0cae115088ff41abf0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    <table class=\"table table-striped\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Apellido</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "apellido", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Edad</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "edad", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechanacimiento</th>
                <td>";
        // line 31
        if ($this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "fechaNacimiento", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "fechaNacimiento", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Carnet</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "carnet", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telefono</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "telefono", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Direccion</th>
                <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "direccion", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>

            <a class=\"btn\" href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("estudiantes_index");
        echo "\">Regresar</a>

            <a class=\"btn btn-warning\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estudiantes_edit", array("id" => $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "id", array()))), "html", null, true);
        echo "\">Edit</a>

        <li>
            ";
        // line 55
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_15fa747b10a994865f284e0da4dfd669fd7fff378c7fb0cae115088ff41abf0d->leave($__internal_15fa747b10a994865f284e0da4dfd669fd7fff378c7fb0cae115088ff41abf0d_prof);

    }

    public function getTemplateName()
    {
        return "estudiantes/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 57,  147 => 55,  141 => 52,  136 => 50,  126 => 43,  119 => 39,  112 => 35,  103 => 31,  96 => 27,  89 => 23,  82 => 19,  75 => 15,  68 => 10,  62 => 9,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block act4 %}active{% endblock %}*/
/* */
/* {% block titulo %}*/
/* Detalle de asignacion*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     <table class="table table-striped">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ estudiante.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <td>{{ estudiante.nombre }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Apellido</th>*/
/*                 <td>{{ estudiante.apellido }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Edad</th>*/
/*                 <td>{{ estudiante.edad }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fechanacimiento</th>*/
/*                 <td>{% if estudiante.fechaNacimiento %}{{ estudiante.fechaNacimiento|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Carnet</th>*/
/*                 <td>{{ estudiante.carnet }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Telefono</th>*/
/*                 <td>{{ estudiante.telefono }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Direccion</th>*/
/*                 <td>{{ estudiante.direccion }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/* */
/*             <a class="btn" href="{{ path('estudiantes_index') }}">Regresar</a>*/
/* */
/*             <a class="btn btn-warning" href="{{ path('estudiantes_edit', { 'id': estudiante.id }) }}">Edit</a>*/
/* */
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
