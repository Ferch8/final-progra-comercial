<?php

/* profesores/index.html.twig */
class __TwigTemplate_f0e79fffd8cb07474f3d58c1fbcdd86fffe4e98dc17e25c27cfb545c1be61177 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "profesores/index.html.twig", 1);
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
        $__internal_2d5e52465d20acbb5832f5c212233f47e0277b9903d026ca9f95c327451fe663 = $this->env->getExtension("native_profiler");
        $__internal_2d5e52465d20acbb5832f5c212233f47e0277b9903d026ca9f95c327451fe663->enter($__internal_2d5e52465d20acbb5832f5c212233f47e0277b9903d026ca9f95c327451fe663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profesores/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d5e52465d20acbb5832f5c212233f47e0277b9903d026ca9f95c327451fe663->leave($__internal_2d5e52465d20acbb5832f5c212233f47e0277b9903d026ca9f95c327451fe663_prof);

    }

    // line 3
    public function block_act2($context, array $blocks = array())
    {
        $__internal_46f2e0ca6c836dda49031bf53682ba76b46a8974eff8578168cf4f5eec7ba0ba = $this->env->getExtension("native_profiler");
        $__internal_46f2e0ca6c836dda49031bf53682ba76b46a8974eff8578168cf4f5eec7ba0ba->enter($__internal_46f2e0ca6c836dda49031bf53682ba76b46a8974eff8578168cf4f5eec7ba0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "act2"));

        echo "active";
        
        $__internal_46f2e0ca6c836dda49031bf53682ba76b46a8974eff8578168cf4f5eec7ba0ba->leave($__internal_46f2e0ca6c836dda49031bf53682ba76b46a8974eff8578168cf4f5eec7ba0ba_prof);

    }

    // line 5
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_49d375dac5d584efaf7bb129961fdc5c2d5625f37760ae143f794e827261e6ea = $this->env->getExtension("native_profiler");
        $__internal_49d375dac5d584efaf7bb129961fdc5c2d5625f37760ae143f794e827261e6ea->enter($__internal_49d375dac5d584efaf7bb129961fdc5c2d5625f37760ae143f794e827261e6ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        // line 6
        echo "Listado de profesores
";
        
        $__internal_49d375dac5d584efaf7bb129961fdc5c2d5625f37760ae143f794e827261e6ea->leave($__internal_49d375dac5d584efaf7bb129961fdc5c2d5625f37760ae143f794e827261e6ea_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b0d959580f6f90f4a54114f800fd79ebdbeb5e0db528f853dbb664e0f61cad4 = $this->env->getExtension("native_profiler");
        $__internal_4b0d959580f6f90f4a54114f800fd79ebdbeb5e0db528f853dbb664e0f61cad4->enter($__internal_4b0d959580f6f90f4a54114f800fd79ebdbeb5e0db528f853dbb664e0f61cad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<ul>
        <a class=\"btn btn-success\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("profesores_new");
        echo "\">Agregar profesor</a>
</ul>
<div class=\"table-responsive table-full-width\">
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Edad</th>
                <th>Fechanacimiento</th>
                <th>Telefono</th>
                <th>Direccion</th>
                <th>Email</th>
                <th>Profesion</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["profesores"]) ? $context["profesores"] : $this->getContext($context, "profesores")));
        foreach ($context['_seq'] as $context["_key"] => $context["profesore"]) {
            // line 30
            echo "            <tr>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["profesore"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["profesore"], "apellidos", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["profesore"], "edad", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            if ($this->getAttribute($context["profesore"], "fechaNacimiento", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["profesore"], "fechaNacimiento", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["profesore"], "telefono", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["profesore"], "direccion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["profesore"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["profesore"], "profesion", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                            <a class=\"btn btn-info\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profesores_show", array("id" => $this->getAttribute($context["profesore"], "id", array()))), "html", null, true);
            echo "\">Ver</a>
                            <a class=\"btn btn-warning\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profesores_edit", array("id" => $this->getAttribute($context["profesore"], "id", array()))), "html", null, true);
            echo "\">Editar</a>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profesore'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>
</div>

";
        
        $__internal_4b0d959580f6f90f4a54114f800fd79ebdbeb5e0db528f853dbb664e0f61cad4->leave($__internal_4b0d959580f6f90f4a54114f800fd79ebdbeb5e0db528f853dbb664e0f61cad4_prof);

    }

    public function getTemplateName()
    {
        return "profesores/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 47,  139 => 42,  135 => 41,  129 => 38,  125 => 37,  121 => 36,  117 => 35,  111 => 34,  107 => 33,  103 => 32,  99 => 31,  96 => 30,  92 => 29,  71 => 11,  68 => 10,  62 => 9,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block act2 %}active{% endblock %}*/
/* */
/* {% block titulo %}*/
/* Listado de profesores*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <ul>*/
/*         <a class="btn btn-success" href="{{ path('profesores_new') }}">Agregar profesor</a>*/
/* </ul>*/
/* <div class="table-responsive table-full-width">*/
/*     <table class="table table-striped">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <th>Apellidos</th>*/
/*                 <th>Edad</th>*/
/*                 <th>Fechanacimiento</th>*/
/*                 <th>Telefono</th>*/
/*                 <th>Direccion</th>*/
/*                 <th>Email</th>*/
/*                 <th>Profesion</th>*/
/*                 <th>Opciones</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for profesore in profesores %}*/
/*             <tr>*/
/*                 <td>{{ profesore.nombre }}</td>*/
/*                 <td>{{ profesore.apellidos }}</td>*/
/*                 <td>{{ profesore.edad }}</td>*/
/*                 <td>{% if profesore.fechaNacimiento %}{{ profesore.fechaNacimiento|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{{ profesore.telefono }}</td>*/
/*                 <td>{{ profesore.direccion }}</td>*/
/*                 <td>{{ profesore.email }}</td>*/
/*                 <td>{{ profesore.profesion }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                             <a class="btn btn-info" href="{{ path('profesores_show', { 'id': profesore.id }) }}">Ver</a>*/
/*                             <a class="btn btn-warning" href="{{ path('profesores_edit', { 'id': profesore.id }) }}">Editar</a>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
