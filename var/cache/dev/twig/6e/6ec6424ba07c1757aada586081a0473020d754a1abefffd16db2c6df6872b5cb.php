<?php

/* user/login.html.twig */
class __TwigTemplate_15b2b412780ac17854337180c9e14a852d9ee76cf2e2d35092a29ed0e3f8478a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "user/login.html.twig", 1);
        $this->blocks = array(
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
        $__internal_5e96b7d62663eacd7b2c6c7f7537c58c5c5fb4b28ae66d1c4f60f29489806da6 = $this->env->getExtension("native_profiler");
        $__internal_5e96b7d62663eacd7b2c6c7f7537c58c5c5fb4b28ae66d1c4f60f29489806da6->enter($__internal_5e96b7d62663eacd7b2c6c7f7537c58c5c5fb4b28ae66d1c4f60f29489806da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e96b7d62663eacd7b2c6c7f7537c58c5c5fb4b28ae66d1c4f60f29489806da6->leave($__internal_5e96b7d62663eacd7b2c6c7f7537c58c5c5fb4b28ae66d1c4f60f29489806da6_prof);

    }

    // line 2
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_765d5bc90cd7976543fb37503757c5bb2511709186de1a5dc767df4844d42677 = $this->env->getExtension("native_profiler");
        $__internal_765d5bc90cd7976543fb37503757c5bb2511709186de1a5dc767df4844d42677->enter($__internal_765d5bc90cd7976543fb37503757c5bb2511709186de1a5dc767df4844d42677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        // line 3
        echo "Ingresar
";
        
        $__internal_765d5bc90cd7976543fb37503757c5bb2511709186de1a5dc767df4844d42677->leave($__internal_765d5bc90cd7976543fb37503757c5bb2511709186de1a5dc767df4844d42677_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7417537b9e53b1418a01a4f70d78d090d57806716ac831a7092727e58743494 = $this->env->getExtension("native_profiler");
        $__internal_a7417537b9e53b1418a01a4f70d78d090d57806716ac831a7092727e58743494->enter($__internal_a7417537b9e53b1418a01a4f70d78d090d57806716ac831a7092727e58743494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "

<div class=\"col-md-offset-4\">
  <div class=\"row\">
    <div class=\"col-md-5\">
      ";
        // line 12
        if ((twig_length_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) > 0)) {
            // line 13
            echo "      <div class=\"alert alert-danger display-hide\">
        <button class=\"close\" data-close=\"alert\"></button>
        <span>
        Datos erróneos. Por favor, inténtelo otra vez. </span>
      </div>
      ";
        }
        // line 19
        echo "    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-md-offset-2\">
      <label for=\"\">Login</label>
    </div>
  </div>

<form class=\"\" action=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
  <div class=\"row\">
    <div class=\"col-md-5\">
      <div class=\"form-group\">
        <label for=\"\">Username</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control border-input\" />
      </div>
    </div>
  </div>
  <div class=\"row\">
    <div class=\"col-md-5\">
      <div class=\"form-group\">
        <label for=\"\">Password</label>
        <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control border-input\">
      </div>
    </div>
  </div>

<div class=\"row\">
  <div class=\"col-md-offset-1\">
    <input type=\"submit\" value=\"Entrar\" class=\"btn btn-info btn-fill btn-wd\">
    <input type=\"hidden\" name=\"_target_path\" value=\"/home\">
  </div>
</div>

<div class=\"clearfix\">
</div>

</form>

</div>

";
        
        $__internal_a7417537b9e53b1418a01a4f70d78d090d57806716ac831a7092727e58743494->leave($__internal_a7417537b9e53b1418a01a4f70d78d090d57806716ac831a7092727e58743494_prof);

    }

    public function getTemplateName()
    {
        return "user/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 33,  83 => 28,  72 => 19,  64 => 13,  62 => 12,  55 => 7,  49 => 6,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* {% block titulo %}*/
/* Ingresar*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* <div class="col-md-offset-4">*/
/*   <div class="row">*/
/*     <div class="col-md-5">*/
/*       {% if error|length > 0 %}*/
/*       <div class="alert alert-danger display-hide">*/
/*         <button class="close" data-close="alert"></button>*/
/*         <span>*/
/*         Datos erróneos. Por favor, inténtelo otra vez. </span>*/
/*       </div>*/
/*       {% endif %}*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="row">*/
/*     <div class="col-md-offset-2">*/
/*       <label for="">Login</label>*/
/*     </div>*/
/*   </div>*/
/* */
/* <form class="" action="{{path('login_check')}}" method="post">*/
/*   <div class="row">*/
/*     <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         <label for="">Username</label>*/
/*         <input type="text" id="username" name="_username" value="{{last_username}}" class="form-control border-input" />*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <div class="row">*/
/*     <div class="col-md-5">*/
/*       <div class="form-group">*/
/*         <label for="">Password</label>*/
/*         <input type="password" id="password" name="_password" class="form-control border-input">*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/* <div class="row">*/
/*   <div class="col-md-offset-1">*/
/*     <input type="submit" value="Entrar" class="btn btn-info btn-fill btn-wd">*/
/*     <input type="hidden" name="_target_path" value="/home">*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="clearfix">*/
/* </div>*/
/* */
/* </form>*/
/* */
/* </div>*/
/* */
/* {% endblock %}*/
/* */
