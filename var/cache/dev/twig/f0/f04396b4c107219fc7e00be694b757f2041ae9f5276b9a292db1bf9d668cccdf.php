<?php

/* layout.html.twig */
class __TwigTemplate_3ce4df0301bca05659867ba79288571a37224c4555c6f8d9d0c262899e2fd305 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'act1' => array($this, 'block_act1'),
            'act2' => array($this, 'block_act2'),
            'act3' => array($this, 'block_act3'),
            'act4' => array($this, 'block_act4'),
            'titulo' => array($this, 'block_titulo'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe9ff06b7b8dce8a2ad039250d64e76d338ef49881983f2c75f1dd0cce9cb4c1 = $this->env->getExtension("native_profiler");
        $__internal_fe9ff06b7b8dce8a2ad039250d64e76d338ef49881983f2c75f1dd0cce9cb4c1->enter($__internal_fe9ff06b7b8dce8a2ad039250d64e76d338ef49881983f2c75f1dd0cce9cb4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
\t<meta charset=\"utf-8\" />
\t<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/apple-icon.png"), "html", null, true);
        echo "\">
\t<link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        echo "\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />

\t<title>Glib College</title>

\t<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name=\"viewport\" content=\"width=device-width\" />


    <!-- Bootstrap core CSS     -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- Animation library for notifications   -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

    <!--  Paper Dashboard core CSS    -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/paper-dashboard.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/demo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />


    <!--  Fonts and icons     -->
    <link href=\"http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/themify-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

</head>
<body>

<div class=\"wrapper\">
    <div class=\"sidebar\" data-background-color=\"white\" data-active-color=\"danger\">

    <!--
\t\tTip 1: you can change the color of the sidebar's background using: data-background-color=\"white | black\"
\t\tTip 2: you can change the color of the active button using the data-active-color=\"primary | info | success | warning | danger\"
\t-->

    \t<div class=\"sidebar-wrapper\">

            <div class=\"logo\">
                <a href=\"http://www.creative-tim.com\" class=\"simple-text\">
                    Glib College
                </a>
            </div>
\t\t\t\t\t\t";
        // line 52
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
            // line 53
            echo "            <ul class=\"nav\">
                <li class=\"";
            // line 54
            $this->displayBlock('act1', $context, $blocks);
            echo "\">
                    <a href=\"";
            // line 55
            echo $this->env->getExtension('routing')->getPath("aula_index");
            echo "\">
                        <i class=\"ti-clipboard\"></i>
                        <p>Aulas</p>
                    </a>
                </li>
                <li class=\"";
            // line 60
            $this->displayBlock('act2', $context, $blocks);
            echo "\">
                    <a href=\"";
            // line 61
            echo $this->env->getExtension('routing')->getPath("profesores_index");
            echo "\">
                        <i class=\"ti-user\"></i>
                        <p>Profesores</p>
                    </a>
                </li>
                <li class=\"";
            // line 66
            $this->displayBlock('act3', $context, $blocks);
            echo "\">
                    <a href=\"";
            // line 67
            echo $this->env->getExtension('routing')->getPath("curso_index");
            echo "\">
                        <i class=\"ti-book\"></i>
                        <p>Cursos</p>
                    </a>
                </li>
                <li class=\"";
            // line 72
            $this->displayBlock('act4', $context, $blocks);
            echo "\">
                    <a href=\"";
            // line 73
            echo $this->env->getExtension('routing')->getPath("estudiantes_index");
            echo "\">
                        <i class=\"ti-pencil-alt\"></i>
                        <p>Asignaciones</p>
                    </a>
                </li>


            </ul>
\t\t\t\t\t\t";
        }
        // line 82
        echo "    \t</div>
    </div>

    <div class=\"main-panel\">
        <nav class=\"navbar navbar-default\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar bar1\"></span>
                        <span class=\"icon-bar bar2\"></span>
                        <span class=\"icon-bar bar3\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\"></a>
                </div>
                <div class=\"collapse navbar-collapse\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"dropdown\">
                              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"ti-angle-down\"></i>
                                    <p class=\"notification\"></p>
\t\t\t\t\t\t\t\t\t<p>Opciones</p>

                              </a>
                              <ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 107
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null)) {
            // line 108
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">Entrar</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 110
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Salir</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 112
        echo "                              </ul>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>


        <div class=\"content\">
            <div class=\"container-fluid\">
              <div class=\"row\">
                <div class=\"col-md-12\">
                  <div class=\"card\">
                    <div class=\"header\">
                      <h4 class=\"title\">
                        ";
        // line 129
        $this->displayBlock('titulo', $context, $blocks);
        // line 132
        echo "                      </h4>
                    </div>
                    <div class=\"content\">

                      ";
        // line 136
        $this->displayBlock('body', $context, $blocks);
        // line 139
        echo "                    </div>

                  </div>
                </div>
              </div>
            </div>
        </div>


        <footer class=\"footer\">
            <div class=\"container-fluid\">
                <nav class=\"pull-left\">

                </nav>
                <div class=\"copyright pull-right\">
                    &copy; <script>document.write(new Date().getFullYear())</script>, Glib Software
                </div>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery-1.10.2.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

\t<!--  Checkbox, Radio & Switch Plugins -->
\t<script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/bootstrap-checkbox-radio.js"), "html", null, true);
        echo "\"></script>

\t<!--  Charts Plugin -->
\t<script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/chartist.min.js"), "html", null, true);
        echo "\"></script>

    <!--  Notifications Plugin    -->
    <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/bootstrap-notify.js"), "html", null, true);
        echo "\"></script>

    <!--  Google Maps Plugin    -->
    <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js\"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
\t<script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/paper-dashboard.js"), "html", null, true);
        echo "\"></script>

\t<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
\t<script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/demo.js"), "html", null, true);
        echo "\"></script>



</html>
";
        
        $__internal_fe9ff06b7b8dce8a2ad039250d64e76d338ef49881983f2c75f1dd0cce9cb4c1->leave($__internal_fe9ff06b7b8dce8a2ad039250d64e76d338ef49881983f2c75f1dd0cce9cb4c1_prof);

    }

    // line 54
    public function block_act1($context, array $blocks = array())
    {
        $__internal_e82f9b81efd1e44aeab665b171f5a70805f217e44174157b124e6a8b1018635a = $this->env->getExtension("native_profiler");
        $__internal_e82f9b81efd1e44aeab665b171f5a70805f217e44174157b124e6a8b1018635a->enter($__internal_e82f9b81efd1e44aeab665b171f5a70805f217e44174157b124e6a8b1018635a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "act1"));

        
        $__internal_e82f9b81efd1e44aeab665b171f5a70805f217e44174157b124e6a8b1018635a->leave($__internal_e82f9b81efd1e44aeab665b171f5a70805f217e44174157b124e6a8b1018635a_prof);

    }

    // line 60
    public function block_act2($context, array $blocks = array())
    {
        $__internal_473315410a3d7bfb7e359cc208b10df0314e1dbc5b402a9f9fc0cd6078f223ec = $this->env->getExtension("native_profiler");
        $__internal_473315410a3d7bfb7e359cc208b10df0314e1dbc5b402a9f9fc0cd6078f223ec->enter($__internal_473315410a3d7bfb7e359cc208b10df0314e1dbc5b402a9f9fc0cd6078f223ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "act2"));

        
        $__internal_473315410a3d7bfb7e359cc208b10df0314e1dbc5b402a9f9fc0cd6078f223ec->leave($__internal_473315410a3d7bfb7e359cc208b10df0314e1dbc5b402a9f9fc0cd6078f223ec_prof);

    }

    // line 66
    public function block_act3($context, array $blocks = array())
    {
        $__internal_b1065d33897e10180be7da1f0952258259b8997b3cbaeb0332ce29a2329e1690 = $this->env->getExtension("native_profiler");
        $__internal_b1065d33897e10180be7da1f0952258259b8997b3cbaeb0332ce29a2329e1690->enter($__internal_b1065d33897e10180be7da1f0952258259b8997b3cbaeb0332ce29a2329e1690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "act3"));

        
        $__internal_b1065d33897e10180be7da1f0952258259b8997b3cbaeb0332ce29a2329e1690->leave($__internal_b1065d33897e10180be7da1f0952258259b8997b3cbaeb0332ce29a2329e1690_prof);

    }

    // line 72
    public function block_act4($context, array $blocks = array())
    {
        $__internal_1dde0f81fd0579e9f7fa0e1f6c57fc018d199c3eea2e8a1e8145af21e35cdfff = $this->env->getExtension("native_profiler");
        $__internal_1dde0f81fd0579e9f7fa0e1f6c57fc018d199c3eea2e8a1e8145af21e35cdfff->enter($__internal_1dde0f81fd0579e9f7fa0e1f6c57fc018d199c3eea2e8a1e8145af21e35cdfff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "act4"));

        
        $__internal_1dde0f81fd0579e9f7fa0e1f6c57fc018d199c3eea2e8a1e8145af21e35cdfff->leave($__internal_1dde0f81fd0579e9f7fa0e1f6c57fc018d199c3eea2e8a1e8145af21e35cdfff_prof);

    }

    // line 129
    public function block_titulo($context, array $blocks = array())
    {
        $__internal_f1351f75575d52afedc3906ff814ccf099a386fa41e9054f87c05dcc8c61ef83 = $this->env->getExtension("native_profiler");
        $__internal_f1351f75575d52afedc3906ff814ccf099a386fa41e9054f87c05dcc8c61ef83->enter($__internal_f1351f75575d52afedc3906ff814ccf099a386fa41e9054f87c05dcc8c61ef83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titulo"));

        // line 130
        echo "
                        ";
        
        $__internal_f1351f75575d52afedc3906ff814ccf099a386fa41e9054f87c05dcc8c61ef83->leave($__internal_f1351f75575d52afedc3906ff814ccf099a386fa41e9054f87c05dcc8c61ef83_prof);

    }

    // line 136
    public function block_body($context, array $blocks = array())
    {
        $__internal_d093fb750142c4f09ca3e02020d8835c3c6dc8a709535f86cfdee0d2ed29f39a = $this->env->getExtension("native_profiler");
        $__internal_d093fb750142c4f09ca3e02020d8835c3c6dc8a709535f86cfdee0d2ed29f39a->enter($__internal_d093fb750142c4f09ca3e02020d8835c3c6dc8a709535f86cfdee0d2ed29f39a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 137
        echo "
                      ";
        
        $__internal_d093fb750142c4f09ca3e02020d8835c3c6dc8a709535f86cfdee0d2ed29f39a->leave($__internal_d093fb750142c4f09ca3e02020d8835c3c6dc8a709535f86cfdee0d2ed29f39a_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 137,  366 => 136,  358 => 130,  352 => 129,  341 => 72,  330 => 66,  319 => 60,  308 => 54,  295 => 185,  289 => 182,  280 => 176,  274 => 173,  268 => 170,  262 => 167,  258 => 166,  229 => 139,  227 => 136,  221 => 132,  219 => 129,  200 => 112,  194 => 110,  188 => 108,  186 => 107,  159 => 82,  147 => 73,  143 => 72,  135 => 67,  131 => 66,  123 => 61,  119 => 60,  111 => 55,  107 => 54,  104 => 53,  102 => 52,  79 => 32,  70 => 26,  63 => 22,  57 => 19,  51 => 16,  38 => 6,  34 => 5,  28 => 1,);
    }
}
/* <!doctype html>*/
/* <html lang="en">*/
/* <head>*/
/* 	<meta charset="utf-8" />*/
/* 	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">*/
/* 	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('assets/img/favicon.png')}}">*/
/* 	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />*/
/* */
/* 	<title>Glib College</title>*/
/* */
/* 	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />*/
/*     <meta name="viewport" content="width=device-width" />*/
/* */
/* */
/*     <!-- Bootstrap core CSS     -->*/
/*     <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />*/
/* */
/*     <!-- Animation library for notifications   -->*/
/*     <link href="{{asset('assets/css/animate.min.css')}}" rel="stylesheet"/>*/
/* */
/*     <!--  Paper Dashboard core CSS    -->*/
/*     <link href="{{asset('assets/css/paper-dashboard.css')}}" rel="stylesheet"/>*/
/* */
/* */
/*     <!--  CSS for Demo Purpose, don't include it in your project     -->*/
/*     <link href="{{asset('assets/css/demo.css')}}" rel="stylesheet" />*/
/* */
/* */
/*     <!--  Fonts and icons     -->*/
/*     <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">*/
/*     <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>*/
/*     <link href="{{asset('assets/css/themify-icons.css')}}" rel="stylesheet">*/
/* */
/* </head>*/
/* <body>*/
/* */
/* <div class="wrapper">*/
/*     <div class="sidebar" data-background-color="white" data-active-color="danger">*/
/* */
/*     <!--*/
/* 		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"*/
/* 		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"*/
/* 	-->*/
/* */
/*     	<div class="sidebar-wrapper">*/
/* */
/*             <div class="logo">*/
/*                 <a href="http://www.creative-tim.com" class="simple-text">*/
/*                     Glib College*/
/*                 </a>*/
/*             </div>*/
/* 						{% if app.user != null %}*/
/*             <ul class="nav">*/
/*                 <li class="{% block act1 %}{% endblock %}">*/
/*                     <a href="{{ path('aula_index') }}">*/
/*                         <i class="ti-clipboard"></i>*/
/*                         <p>Aulas</p>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li class="{% block act2 %}{% endblock %}">*/
/*                     <a href="{{ path('profesores_index') }}">*/
/*                         <i class="ti-user"></i>*/
/*                         <p>Profesores</p>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li class="{% block act3 %}{% endblock %}">*/
/*                     <a href="{{ path('curso_index') }}">*/
/*                         <i class="ti-book"></i>*/
/*                         <p>Cursos</p>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li class="{% block act4 %}{% endblock %}">*/
/*                     <a href="{{ path('estudiantes_index') }}">*/
/*                         <i class="ti-pencil-alt"></i>*/
/*                         <p>Asignaciones</p>*/
/*                     </a>*/
/*                 </li>*/
/* */
/* */
/*             </ul>*/
/* 						{% endif %}*/
/*     	</div>*/
/*     </div>*/
/* */
/*     <div class="main-panel">*/
/*         <nav class="navbar navbar-default">*/
/*             <div class="container-fluid">*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                         <span class="icon-bar bar1"></span>*/
/*                         <span class="icon-bar bar2"></span>*/
/*                         <span class="icon-bar bar3"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand" href="#"></a>*/
/*                 </div>*/
/*                 <div class="collapse navbar-collapse">*/
/*                     <ul class="nav navbar-nav navbar-right">*/
/*                         <li class="dropdown">*/
/*                               <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                                     <i class="ti-angle-down"></i>*/
/*                                     <p class="notification"></p>*/
/* 									<p>Opciones</p>*/
/* */
/*                               </a>*/
/*                               <ul class="dropdown-menu">*/
/* 																{% if app.user == null %}*/
/* 																  <li><a href="{{path('login')}}">Entrar</a></li>*/
/* 																{% else %}*/
/* 																	<li><a href="{{path('logout')}}">Salir</a></li>*/
/* 																{% endif %}*/
/*                               </ul>*/
/*                         </li>*/
/* */
/*                     </ul>*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </nav>*/
/* */
/* */
/*         <div class="content">*/
/*             <div class="container-fluid">*/
/*               <div class="row">*/
/*                 <div class="col-md-12">*/
/*                   <div class="card">*/
/*                     <div class="header">*/
/*                       <h4 class="title">*/
/*                         {% block titulo %}*/
/* */
/*                         {% endblock %}*/
/*                       </h4>*/
/*                     </div>*/
/*                     <div class="content">*/
/* */
/*                       {% block body %}*/
/* */
/*                       {% endblock %}*/
/*                     </div>*/
/* */
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/*         <footer class="footer">*/
/*             <div class="container-fluid">*/
/*                 <nav class="pull-left">*/
/* */
/*                 </nav>*/
/*                 <div class="copyright pull-right">*/
/*                     &copy; <script>document.write(new Date().getFullYear())</script>, Glib Software*/
/*                 </div>*/
/*             </div>*/
/*         </footer>*/
/* */
/*     </div>*/
/* </div>*/
/* */
/* */
/* </body>*/
/* */
/*     <!--   Core JS Files   -->*/
/*     <script src="{{asset('assets/js/jquery-1.10.2.js')}}" type="text/javascript"></script>*/
/* 	<script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>*/
/* */
/* 	<!--  Checkbox, Radio & Switch Plugins -->*/
/* 	<script src="{{asset('assets/js/bootstrap-checkbox-radio.js')}}"></script>*/
/* */
/* 	<!--  Charts Plugin -->*/
/* 	<script src="{{asset('assets/js/chartist.min.js')}}"></script>*/
/* */
/*     <!--  Notifications Plugin    -->*/
/*     <script src="{{asset('assets/js/bootstrap-notify.js')}}"></script>*/
/* */
/*     <!--  Google Maps Plugin    -->*/
/*     <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>*/
/* */
/*     <!-- Paper Dashboard Core javascript and methods for Demo purpose -->*/
/* 	<script src="{{asset('assets/js/paper-dashboard.js')}}"></script>*/
/* */
/* 	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->*/
/* 	<script src="{{asset('assets/js/demo.js')}}"></script>*/
/* */
/* */
/* */
/* </html>*/
/* */
