<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // app_home
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'app_home',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        if (0 === strpos($pathinfo, '/profesores')) {
            // profesores_index
            if (rtrim($pathinfo, '/') === '/profesores') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_profesores_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'profesores_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ProfesoresController::indexAction',  '_route' => 'profesores_index',);
            }
            not_profesores_index:

            // profesores_new
            if ($pathinfo === '/profesores/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_profesores_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ProfesoresController::newAction',  '_route' => 'profesores_new',);
            }
            not_profesores_new:

            // profesores_show
            if (preg_match('#^/profesores/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_profesores_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'profesores_show')), array (  '_controller' => 'AppBundle\\Controller\\ProfesoresController::showAction',));
            }
            not_profesores_show:

            // profesores_edit
            if (preg_match('#^/profesores/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_profesores_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'profesores_edit')), array (  '_controller' => 'AppBundle\\Controller\\ProfesoresController::editAction',));
            }
            not_profesores_edit:

            // profesores_delete
            if (preg_match('#^/profesores/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_profesores_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'profesores_delete')), array (  '_controller' => 'AppBundle\\Controller\\ProfesoresController::deleteAction',));
            }
            not_profesores_delete:

        }

        if (0 === strpos($pathinfo, '/user')) {
            // user_index
            if (rtrim($pathinfo, '/') === '/user') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UserController::indexAction',  '_route' => 'user_index',);
            }
            not_user_index:

            // user_new
            if ($pathinfo === '/user/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }
            not_user_new:

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'AppBundle\\Controller\\UserController::showAction',));
            }
            not_user_show:

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'AppBundle\\Controller\\UserController::editAction',));
            }
            not_user_edit:

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'AppBundle\\Controller\\UserController::deleteAction',));
            }
            not_user_delete:

        }

        if (0 === strpos($pathinfo, '/curso')) {
            // curso_index
            if (rtrim($pathinfo, '/') === '/curso') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_curso_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'curso_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CursoController::indexAction',  '_route' => 'curso_index',);
            }
            not_curso_index:

            // curso_show
            if (preg_match('#^/curso/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_curso_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'curso_show')), array (  '_controller' => 'AppBundle\\Controller\\CursoController::showAction',));
            }
            not_curso_show:

            // curso_new
            if ($pathinfo === '/curso/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_curso_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CursoController::newAction',  '_route' => 'curso_new',);
            }
            not_curso_new:

            // curso_edit
            if (preg_match('#^/curso/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_curso_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'curso_edit')), array (  '_controller' => 'AppBundle\\Controller\\CursoController::editAction',));
            }
            not_curso_edit:

            // curso_delete
            if (preg_match('#^/curso/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_curso_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'curso_delete')), array (  '_controller' => 'AppBundle\\Controller\\CursoController::deleteAction',));
            }
            not_curso_delete:

        }

        if (0 === strpos($pathinfo, '/estudiantes')) {
            // estudiantes_index
            if (rtrim($pathinfo, '/') === '/estudiantes') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_estudiantes_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'estudiantes_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\EstudiantesController::indexAction',  '_route' => 'estudiantes_index',);
            }
            not_estudiantes_index:

            // estudiantes_show
            if (preg_match('#^/estudiantes/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_estudiantes_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estudiantes_show')), array (  '_controller' => 'AppBundle\\Controller\\EstudiantesController::showAction',));
            }
            not_estudiantes_show:

            // estudiantes_new
            if ($pathinfo === '/estudiantes/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_estudiantes_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\EstudiantesController::newAction',  '_route' => 'estudiantes_new',);
            }
            not_estudiantes_new:

            // estudiantes_edit
            if (preg_match('#^/estudiantes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_estudiantes_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estudiantes_edit')), array (  '_controller' => 'AppBundle\\Controller\\EstudiantesController::editAction',));
            }
            not_estudiantes_edit:

            // estudiantes_delete
            if (preg_match('#^/estudiantes/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_estudiantes_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estudiantes_delete')), array (  '_controller' => 'AppBundle\\Controller\\EstudiantesController::deleteAction',));
            }
            not_estudiantes_delete:

        }

        if (0 === strpos($pathinfo, '/aula')) {
            // aula_index
            if (rtrim($pathinfo, '/') === '/aula') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_aula_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'aula_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AulaController::indexAction',  '_route' => 'aula_index',);
            }
            not_aula_index:

            // aula_show
            if (preg_match('#^/aula/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_aula_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'aula_show')), array (  '_controller' => 'AppBundle\\Controller\\AulaController::showAction',));
            }
            not_aula_show:

            // aula_new
            if ($pathinfo === '/aula/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_aula_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AulaController::newAction',  '_route' => 'aula_new',);
            }
            not_aula_new:

            // aula_edit
            if (preg_match('#^/aula/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_aula_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'aula_edit')), array (  '_controller' => 'AppBundle\\Controller\\AulaController::editAction',));
            }
            not_aula_edit:

            // aula_delete
            if (preg_match('#^/aula/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_aula_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'aula_delete')), array (  '_controller' => 'AppBundle\\Controller\\AulaController::deleteAction',));
            }
            not_aula_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
