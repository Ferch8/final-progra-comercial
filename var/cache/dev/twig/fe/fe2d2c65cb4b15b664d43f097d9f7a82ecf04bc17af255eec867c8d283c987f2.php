<?php

/* aula/index.html.twig */
class __TwigTemplate_3030fbcf1a2ad0036ce2d688c6d4b40546861f51ec0700708c094e3217cfd67b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "aula/index.html.twig", 1);
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
        $__internal_47c9739f77ed888ddaa892e94170407d9c37329061fb89b91db9b1aa88c9f6d5 = $this->env->getExtension("native_profiler");
        $__internal_47c9739f77ed888ddaa892e94170407d9c37329061fb89b91db9b1aa88c9f6d5->enter($__internal_47c9739f77ed888ddaa892e94170407d9c37329061fb89b91db9b1aa88c9f6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "aula/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47c9739f77ed888ddaa892e94170407d9c37329061fb89b91db9b1aa88c9f6d5->leave($__internal_47c9739f77ed888ddaa892e94170407d9c37329061fb89b91db9b1aa88c9f6d5_prof);

    }

    // line 2
    public function block_act1($context, array $blocks = array())
    {
        $__internal_1afc15338b9d3fa8dd2789f81198b8283918456c510447889e44201e55f69589 = $this->env->getExtension("native_profiler");
        $__internal_1afc15338b9d3fa8dd2789f81198b8283918456c510447889e44201e55f69589->enter($__internal_1afc15338b9d3fa8dd2789f81198b8283918456c510447889e44201e55f69589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "act1"));

        echo "active";
        
        $__internal_1afc15338b9d3fa8dd2789f81198b8283918456c510447889e44201e55f69589->leave($__internal_1afc15338b9d3fa8dd2789f81198b8283918456c510447889e44201e55f69589_prof);

    }

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_ea7e31b7eee218c4be4493355e9c428f1983adc40f50e024a75b530a8165f934 = $this->env->getExtension("native_profiler");
        $__internal_ea7e31b7eee218c4be4493355e9c428f1983adc40f50e024a75b530a8165f934->enter($__internal_ea7e31b7eee218c4be4493355e9c428f1983adc40f50e024a75b530a8165f934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        // line 4
        echo "Listado de aulas
";
        
        $__internal_ea7e31b7eee218c4be4493355e9c428f1983adc40f50e024a75b530a8165f934->leave($__internal_ea7e31b7eee218c4be4493355e9c428f1983adc40f50e024a75b530a8165f934_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_06cb5a02ea4da060540c000eac24d79838ce84ca208242dc914379ec5f91e54b = $this->env->getExtension("native_profiler");
        $__internal_06cb5a02ea4da060540c000eac24d79838ce84ca208242dc914379ec5f91e54b->enter($__internal_06cb5a02ea4da060540c000eac24d79838ce84ca208242dc914379ec5f91e54b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<ul>
        <a class=\"btn btn-success\" href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("aula_new");
        echo "\">Agregar aula</a>
</ul>
<div class=\"table-responsive table-full-width\">
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Edificio</th>
                <th>Encargado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["aulas"]) ? $context["aulas"] : $this->getContext($context, "aulas")));
        foreach ($context['_seq'] as $context["_key"] => $context["aula"]) {
            // line 24
            echo "            <tr>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["aula"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["aula"], "descripcion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["aula"], "edificio", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["aula"], "encargado", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                            <a class=\"btn btn-info\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aula_show", array("id" => $this->getAttribute($context["aula"], "id", array()))), "html", null, true);
            echo "\">Ver</a>
                            <a class=\"btn btn-warning\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("aula_edit", array("id" => $this->getAttribute($context["aula"], "id", array()))), "html", null, true);
            echo "\">Editar</a>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>
  </div>
";
        
        $__internal_06cb5a02ea4da060540c000eac24d79838ce84ca208242dc914379ec5f91e54b->leave($__internal_06cb5a02ea4da060540c000eac24d79838ce84ca208242dc914379ec5f91e54b_prof);

    }

    public function getTemplateName()
    {
        return "aula/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 37,  117 => 32,  113 => 31,  107 => 28,  103 => 27,  99 => 26,  95 => 25,  92 => 24,  88 => 23,  71 => 9,  68 => 8,  62 => 7,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* {% block act1 %}active{% endblock %}*/
/* {% block titulo %}*/
/* Listado de aulas*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <ul>*/
/*         <a class="btn btn-success" href="{{ path('aula_new') }}">Agregar aula</a>*/
/* </ul>*/
/* <div class="table-responsive table-full-width">*/
/*     <table class="table table-striped">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <th>Descripcion</th>*/
/*                 <th>Edificio</th>*/
/*                 <th>Encargado</th>*/
/*                 <th>Acciones</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for aula in aulas %}*/
/*             <tr>*/
/*                 <td>{{ aula.nombre }}</td>*/
/*                 <td>{{ aula.descripcion }}</td>*/
/*                 <td>{{ aula.edificio }}</td>*/
/*                 <td>{{ aula.encargado }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                             <a class="btn btn-info" href="{{ path('aula_show', { 'id': aula.id }) }}">Ver</a>*/
/*                             <a class="btn btn-warning" href="{{ path('aula_edit', { 'id': aula.id }) }}">Editar</a>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*   </div>*/
/* {% endblock %}*/
/* */
