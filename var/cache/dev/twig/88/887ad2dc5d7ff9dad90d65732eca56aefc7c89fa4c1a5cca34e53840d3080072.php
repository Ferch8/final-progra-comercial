<?php

/* curso/index.html.twig */
class __TwigTemplate_6727b501d31ebb24f20d4a8ca008705e4ce377dfc26f6ab7eb90f7858de7ee07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "curso/index.html.twig", 1);
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
        $__internal_b3405df395b6db85324733ccdb07749c8ec4613d5b922567dead3c3a0c1e04bc = $this->env->getExtension("native_profiler");
        $__internal_b3405df395b6db85324733ccdb07749c8ec4613d5b922567dead3c3a0c1e04bc->enter($__internal_b3405df395b6db85324733ccdb07749c8ec4613d5b922567dead3c3a0c1e04bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "curso/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3405df395b6db85324733ccdb07749c8ec4613d5b922567dead3c3a0c1e04bc->leave($__internal_b3405df395b6db85324733ccdb07749c8ec4613d5b922567dead3c3a0c1e04bc_prof);

    }

    // line 3
    public function block_act3($context, array $blocks = array())
    {
        $__internal_8cb5fa963388012fd1ad8adcc75d895766417dc2f35825ce366417ed42cc5917 = $this->env->getExtension("native_profiler");
        $__internal_8cb5fa963388012fd1ad8adcc75d895766417dc2f35825ce366417ed42cc5917->enter($__internal_8cb5fa963388012fd1ad8adcc75d895766417dc2f35825ce366417ed42cc5917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "act3"));

        echo "active";
        
        $__internal_8cb5fa963388012fd1ad8adcc75d895766417dc2f35825ce366417ed42cc5917->leave($__internal_8cb5fa963388012fd1ad8adcc75d895766417dc2f35825ce366417ed42cc5917_prof);

    }

    // line 5
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_fc85bfe656455376295f51acadaf7427fd71aabb4973c6bfd9331d3f39b0c88e = $this->env->getExtension("native_profiler");
        $__internal_fc85bfe656455376295f51acadaf7427fd71aabb4973c6bfd9331d3f39b0c88e->enter($__internal_fc85bfe656455376295f51acadaf7427fd71aabb4973c6bfd9331d3f39b0c88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        // line 6
        echo "Listado de cursos
";
        
        $__internal_fc85bfe656455376295f51acadaf7427fd71aabb4973c6bfd9331d3f39b0c88e->leave($__internal_fc85bfe656455376295f51acadaf7427fd71aabb4973c6bfd9331d3f39b0c88e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9447e825cb1697ab8ee72fea45df9f1f1f7527f3eb3255f57f435945cf0a37b8 = $this->env->getExtension("native_profiler");
        $__internal_9447e825cb1697ab8ee72fea45df9f1f1f7527f3eb3255f57f435945cf0a37b8->enter($__internal_9447e825cb1697ab8ee72fea45df9f1f1f7527f3eb3255f57f435945cf0a37b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<ul>
        <a class=\"btn btn-success\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("curso_new");
        echo "\">Agregar curso</a>
</ul>
<div class=\"table-responsive table-full-width\">
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Fechacreacion</th>
                <th>Horario</th>
                <th>Observacion</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cursos"]) ? $context["cursos"] : $this->getContext($context, "cursos")));
        foreach ($context['_seq'] as $context["_key"] => $context["curso"]) {
            // line 27
            echo "            <tr>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "descripcion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            if ($this->getAttribute($context["curso"], "fechaCreacion", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["curso"], "fechaCreacion", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "horario", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["curso"], "observacion", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                            <a class=\"btn btn-info\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("curso_show", array("id" => $this->getAttribute($context["curso"], "id", array()))), "html", null, true);
            echo "\">Ver</a>
                            <a class=\"btn btn-warning\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("curso_edit", array("id" => $this->getAttribute($context["curso"], "id", array()))), "html", null, true);
            echo "\">Editar</a>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

</div>
";
        
        $__internal_9447e825cb1697ab8ee72fea45df9f1f1f7527f3eb3255f57f435945cf0a37b8->leave($__internal_9447e825cb1697ab8ee72fea45df9f1f1f7527f3eb3255f57f435945cf0a37b8_prof);

    }

    public function getTemplateName()
    {
        return "curso/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 41,  124 => 36,  120 => 35,  114 => 32,  110 => 31,  104 => 30,  100 => 29,  96 => 28,  93 => 27,  89 => 26,  71 => 11,  68 => 10,  62 => 9,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block act3 %}active{% endblock %}*/
/* */
/* {% block titulo %}*/
/* Listado de cursos*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <ul>*/
/*         <a class="btn btn-success" href="{{ path('curso_new') }}">Agregar curso</a>*/
/* </ul>*/
/* <div class="table-responsive table-full-width">*/
/*     <table class="table table-striped">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <th>Descripcion</th>*/
/*                 <th>Fechacreacion</th>*/
/*                 <th>Horario</th>*/
/*                 <th>Observacion</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for curso in cursos %}*/
/*             <tr>*/
/*                 <td>{{ curso.nombre }}</td>*/
/*                 <td>{{ curso.descripcion }}</td>*/
/*                 <td>{% if curso.fechaCreacion %}{{ curso.fechaCreacion|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{{ curso.horario }}</td>*/
/*                 <td>{{ curso.observacion }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                             <a class="btn btn-info" href="{{ path('curso_show', { 'id': curso.id }) }}">Ver</a>*/
/*                             <a class="btn btn-warning" href="{{ path('curso_edit', { 'id': curso.id }) }}">Editar</a>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/* </div>*/
/* {% endblock %}*/
/* */
