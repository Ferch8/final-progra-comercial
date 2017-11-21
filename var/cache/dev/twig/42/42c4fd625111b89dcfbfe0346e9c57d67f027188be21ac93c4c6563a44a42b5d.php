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
        $__internal_be74960a408f81dac6897e4e5221ef784234e24bde67336c428c7fbd66677c5c = $this->env->getExtension("native_profiler");
        $__internal_be74960a408f81dac6897e4e5221ef784234e24bde67336c428c7fbd66677c5c->enter($__internal_be74960a408f81dac6897e4e5221ef784234e24bde67336c428c7fbd66677c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "aula/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be74960a408f81dac6897e4e5221ef784234e24bde67336c428c7fbd66677c5c->leave($__internal_be74960a408f81dac6897e4e5221ef784234e24bde67336c428c7fbd66677c5c_prof);

    }

    // line 3
    public function block_act1($context, array $blocks = array())
    {
        $__internal_ce7b68ee7be16a27af7e1f1f1a78aef0831e9bedba0f70c301efddabda9798cb = $this->env->getExtension("native_profiler");
        $__internal_ce7b68ee7be16a27af7e1f1f1a78aef0831e9bedba0f70c301efddabda9798cb->enter($__internal_ce7b68ee7be16a27af7e1f1f1a78aef0831e9bedba0f70c301efddabda9798cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "act1"));

        echo "active";
        
        $__internal_ce7b68ee7be16a27af7e1f1f1a78aef0831e9bedba0f70c301efddabda9798cb->leave($__internal_ce7b68ee7be16a27af7e1f1f1a78aef0831e9bedba0f70c301efddabda9798cb_prof);

    }

    // line 5
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_b83f52c15f4fecfdc6e34a0fb5bb31a3ce723a5a1da32e6e13af0f6427f9dc7d = $this->env->getExtension("native_profiler");
        $__internal_b83f52c15f4fecfdc6e34a0fb5bb31a3ce723a5a1da32e6e13af0f6427f9dc7d->enter($__internal_b83f52c15f4fecfdc6e34a0fb5bb31a3ce723a5a1da32e6e13af0f6427f9dc7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        // line 6
        echo "Detalle de aula
";
        
        $__internal_b83f52c15f4fecfdc6e34a0fb5bb31a3ce723a5a1da32e6e13af0f6427f9dc7d->leave($__internal_b83f52c15f4fecfdc6e34a0fb5bb31a3ce723a5a1da32e6e13af0f6427f9dc7d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5de6b7c356f9c78dc893bad4eaac13d27255ee6d2fcbf7df347ac9020d26c7d2 = $this->env->getExtension("native_profiler");
        $__internal_5de6b7c356f9c78dc893bad4eaac13d27255ee6d2fcbf7df347ac9020d26c7d2->enter($__internal_5de6b7c356f9c78dc893bad4eaac13d27255ee6d2fcbf7df347ac9020d26c7d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    </ul>
";
        
        $__internal_5de6b7c356f9c78dc893bad4eaac13d27255ee6d2fcbf7df347ac9020d26c7d2->leave($__internal_5de6b7c356f9c78dc893bad4eaac13d27255ee6d2fcbf7df347ac9020d26c7d2_prof);

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
        return array (  116 => 38,  112 => 37,  103 => 31,  96 => 27,  89 => 23,  82 => 19,  75 => 15,  68 => 10,  62 => 9,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
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
/*     </ul>*/
/* {% endblock %}*/
/* */
