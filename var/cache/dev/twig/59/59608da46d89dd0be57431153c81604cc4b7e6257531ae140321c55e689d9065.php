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
        $__internal_645b4d491ac32a219dfb0ad3133e3092501db0b67412d87b68bd6809ae379b4d = $this->env->getExtension("native_profiler");
        $__internal_645b4d491ac32a219dfb0ad3133e3092501db0b67412d87b68bd6809ae379b4d->enter($__internal_645b4d491ac32a219dfb0ad3133e3092501db0b67412d87b68bd6809ae379b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "estudiantes/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_645b4d491ac32a219dfb0ad3133e3092501db0b67412d87b68bd6809ae379b4d->leave($__internal_645b4d491ac32a219dfb0ad3133e3092501db0b67412d87b68bd6809ae379b4d_prof);

    }

    // line 3
    public function block_act4($context, array $blocks = array())
    {
        $__internal_4ce32ca84abc4686e628204a54cc88bd13b287ed77ee598ffb81dc1d2840b717 = $this->env->getExtension("native_profiler");
        $__internal_4ce32ca84abc4686e628204a54cc88bd13b287ed77ee598ffb81dc1d2840b717->enter($__internal_4ce32ca84abc4686e628204a54cc88bd13b287ed77ee598ffb81dc1d2840b717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "act4"));

        echo "active";
        
        $__internal_4ce32ca84abc4686e628204a54cc88bd13b287ed77ee598ffb81dc1d2840b717->leave($__internal_4ce32ca84abc4686e628204a54cc88bd13b287ed77ee598ffb81dc1d2840b717_prof);

    }

    // line 5
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_d9ed52da5d7b8a051095997502b5f0be6cb5330dd9168978f4d120a70571ef7c = $this->env->getExtension("native_profiler");
        $__internal_d9ed52da5d7b8a051095997502b5f0be6cb5330dd9168978f4d120a70571ef7c->enter($__internal_d9ed52da5d7b8a051095997502b5f0be6cb5330dd9168978f4d120a70571ef7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        // line 6
        echo "Detalle de asignacion
";
        
        $__internal_d9ed52da5d7b8a051095997502b5f0be6cb5330dd9168978f4d120a70571ef7c->leave($__internal_d9ed52da5d7b8a051095997502b5f0be6cb5330dd9168978f4d120a70571ef7c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_417a7a04408a442afa6a33a7d19330ddfb618043059a1e9cf4da9d3f4446b466 = $this->env->getExtension("native_profiler");
        $__internal_417a7a04408a442afa6a33a7d19330ddfb618043059a1e9cf4da9d3f4446b466->enter($__internal_417a7a04408a442afa6a33a7d19330ddfb618043059a1e9cf4da9d3f4446b466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <tr>
                <th>Cursos</th>
                <td>
                  ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "cursos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            // line 49
            echo "                  <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "nombre", array()), "html", null, true);
            echo "</li>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                </td>
            </tr>
        </tbody>
    </table>



    <ul>

            <a class=\"btn\" href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("estudiantes_index");
        echo "\">Regresar</a>

            <a class=\"btn btn-warning\" href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("estudiantes_edit", array("id" => $this->getAttribute((isset($context["estudiante"]) ? $context["estudiante"] : $this->getContext($context, "estudiante")), "id", array()))), "html", null, true);
        echo "\">Edit</a>

            <li>
                ";
        // line 65
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                    <input class=\"btn btn-danger\" type=\"submit\" value=\"Delete\">
                ";
        // line 67
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
            </li>
    </ul>
";
        
        $__internal_417a7a04408a442afa6a33a7d19330ddfb618043059a1e9cf4da9d3f4446b466->leave($__internal_417a7a04408a442afa6a33a7d19330ddfb618043059a1e9cf4da9d3f4446b466_prof);

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
        return array (  174 => 67,  169 => 65,  163 => 62,  158 => 60,  147 => 51,  138 => 49,  134 => 48,  126 => 43,  119 => 39,  112 => 35,  103 => 31,  96 => 27,  89 => 23,  82 => 19,  75 => 15,  68 => 10,  62 => 9,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
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
/*             <tr>*/
/*                 <th>Cursos</th>*/
/*                 <td>*/
/*                   {% for curso in estudiante.cursos %}*/
/*                   <li>{{curso.nombre}}</li>*/
/*                   {% endfor %}*/
/*                 </td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/* */
/* */
/*     <ul>*/
/* */
/*             <a class="btn" href="{{ path('estudiantes_index') }}">Regresar</a>*/
/* */
/*             <a class="btn btn-warning" href="{{ path('estudiantes_edit', { 'id': estudiante.id }) }}">Edit</a>*/
/* */
/*             <li>*/
/*                 {{ form_start(delete_form) }}*/
/*                     <input class="btn btn-danger" type="submit" value="Delete">*/
/*                 {{ form_end(delete_form) }}*/
/*             </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
