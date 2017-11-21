<?php

/* curso/show.html.twig */
class __TwigTemplate_90131be6c491ff62bfb7045a9fb4d67eb484d63723e74741cd89cf7c24d9b537 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "curso/show.html.twig", 1);
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
        $__internal_7103a26ddaaed9d5d0dbe57ea3b39518ed9e61cd6c6ab89f43438d4d66b780d1 = $this->env->getExtension("native_profiler");
        $__internal_7103a26ddaaed9d5d0dbe57ea3b39518ed9e61cd6c6ab89f43438d4d66b780d1->enter($__internal_7103a26ddaaed9d5d0dbe57ea3b39518ed9e61cd6c6ab89f43438d4d66b780d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "curso/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7103a26ddaaed9d5d0dbe57ea3b39518ed9e61cd6c6ab89f43438d4d66b780d1->leave($__internal_7103a26ddaaed9d5d0dbe57ea3b39518ed9e61cd6c6ab89f43438d4d66b780d1_prof);

    }

    // line 3
    public function block_act3($context, array $blocks = array())
    {
        $__internal_6b4fbd46b8dbff1247e210c19bb4217d5711ade76ee6d1f297d9ffc1664cc7e5 = $this->env->getExtension("native_profiler");
        $__internal_6b4fbd46b8dbff1247e210c19bb4217d5711ade76ee6d1f297d9ffc1664cc7e5->enter($__internal_6b4fbd46b8dbff1247e210c19bb4217d5711ade76ee6d1f297d9ffc1664cc7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "act3"));

        echo "active";
        
        $__internal_6b4fbd46b8dbff1247e210c19bb4217d5711ade76ee6d1f297d9ffc1664cc7e5->leave($__internal_6b4fbd46b8dbff1247e210c19bb4217d5711ade76ee6d1f297d9ffc1664cc7e5_prof);

    }

    // line 5
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_6f2b16f8ccd1de3a09a8bccf83cc4e69d09e7007f30a7aedc33836d110affae8 = $this->env->getExtension("native_profiler");
        $__internal_6f2b16f8ccd1de3a09a8bccf83cc4e69d09e7007f30a7aedc33836d110affae8->enter($__internal_6f2b16f8ccd1de3a09a8bccf83cc4e69d09e7007f30a7aedc33836d110affae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        // line 6
        echo "Detalle de curso
";
        
        $__internal_6f2b16f8ccd1de3a09a8bccf83cc4e69d09e7007f30a7aedc33836d110affae8->leave($__internal_6f2b16f8ccd1de3a09a8bccf83cc4e69d09e7007f30a7aedc33836d110affae8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d11037bbf81995175f40b5090cfc07fa78a99f266f283fb0c131cebf6bd35ba0 = $this->env->getExtension("native_profiler");
        $__internal_d11037bbf81995175f40b5090cfc07fa78a99f266f283fb0c131cebf6bd35ba0->enter($__internal_d11037bbf81995175f40b5090cfc07fa78a99f266f283fb0c131cebf6bd35ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    <table class=\"table table-striped\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curso"]) ? $context["curso"] : $this->getContext($context, "curso")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curso"]) ? $context["curso"] : $this->getContext($context, "curso")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descripcion</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curso"]) ? $context["curso"] : $this->getContext($context, "curso")), "descripcion", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechacreacion</th>
                <td>";
        // line 27
        if ($this->getAttribute((isset($context["curso"]) ? $context["curso"] : $this->getContext($context, "curso")), "fechaCreacion", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["curso"]) ? $context["curso"] : $this->getContext($context, "curso")), "fechaCreacion", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Horario</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curso"]) ? $context["curso"] : $this->getContext($context, "curso")), "horario", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Observacion</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["curso"]) ? $context["curso"] : $this->getContext($context, "curso")), "observacion", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>

            <a class=\"btn\" href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("curso_index");
        echo "\">Regresar</a>
            <a class=\"btn btn-warning\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("curso_edit", array("id" => $this->getAttribute((isset($context["curso"]) ? $context["curso"] : $this->getContext($context, "curso")), "id", array()))), "html", null, true);
        echo "\">Edit</a>

    </ul>
";
        
        $__internal_d11037bbf81995175f40b5090cfc07fa78a99f266f283fb0c131cebf6bd35ba0->leave($__internal_d11037bbf81995175f40b5090cfc07fa78a99f266f283fb0c131cebf6bd35ba0_prof);

    }

    public function getTemplateName()
    {
        return "curso/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 43,  122 => 42,  112 => 35,  105 => 31,  96 => 27,  89 => 23,  82 => 19,  75 => 15,  68 => 10,  62 => 9,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block act3 %}active{% endblock %}*/
/* */
/* {% block titulo %}*/
/* Detalle de curso*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     <table class="table table-striped">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ curso.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <td>{{ curso.nombre }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Descripcion</th>*/
/*                 <td>{{ curso.descripcion }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fechacreacion</th>*/
/*                 <td>{% if curso.fechaCreacion %}{{ curso.fechaCreacion|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Horario</th>*/
/*                 <td>{{ curso.horario }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Observacion</th>*/
/*                 <td>{{ curso.observacion }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/* */
/*             <a class="btn" href="{{ path('curso_index') }}">Regresar</a>*/
/*             <a class="btn btn-warning" href="{{ path('curso_edit', { 'id': curso.id }) }}">Edit</a>*/
/* */
/*     </ul>*/
/* {% endblock %}*/
/* */
