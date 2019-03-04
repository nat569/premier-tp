<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/contact')) {
            // contact_index
            if ('/contact' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\ContactController::index',  '_route' => 'contact_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_contact_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'contact_index'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_contact_index;
                }

                return $ret;
            }
            not_contact_index:

            // contact_new
            if ('/contact/new' === $pathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\ContactController::new',  '_route' => 'contact_new',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_contact_new;
                }

                return $ret;
            }
            not_contact_new:

            // contact_show
            if (preg_match('#^/contact/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'contact_show')), array (  '_controller' => 'App\\Controller\\ContactController::show',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_contact_show;
                }

                return $ret;
            }
            not_contact_show:

            // contact_edit
            if (preg_match('#^/contact/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'contact_edit')), array (  '_controller' => 'App\\Controller\\ContactController::edit',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_contact_edit;
                }

                return $ret;
            }
            not_contact_edit:

            // contact_delete
            if (preg_match('#^/contact/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'contact_delete')), array (  '_controller' => 'App\\Controller\\ContactController::delete',));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_contact_delete;
                }

                return $ret;
            }
            not_contact_delete:

        }

        elseif (0 === strpos($pathinfo, '/admin')) {
            // app_default_admin
            if ('/admin' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\DefaultController::adminAction',  '_route' => 'app_default_admin',);
            }

            // ROLE_ADMIN
            if ('/admin' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\DefaultController::adminAction',  '_route' => 'ROLE_ADMIN',);
            }

        }

        elseif (0 === strpos($pathinfo, '/api')) {
            // api_entrypoint
            if (preg_match('#^/api(?:/(?P<index>index)(?:\\.(?P<_format>[^/]++))?)?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_entrypoint')), array (  '_controller' => 'api_platform.action.entrypoint',  '_format' => '',  '_api_respond' => '1',  'index' => 'index',));
            }

            // api_doc
            if (0 === strpos($pathinfo, '/api/docs') && preg_match('#^/api/docs(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_doc')), array (  '_controller' => 'api_platform.action.documentation',  '_api_respond' => '1',  '_format' => '',));
            }

            // api_jsonld_context
            if (0 === strpos($pathinfo, '/api/contexts') && preg_match('#^/api/contexts/(?P<shortName>.+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_jsonld_context')), array (  '_controller' => 'api_platform.jsonld.action.context',  '_api_respond' => '1',  '_format' => 'jsonld',));
            }

            if (0 === strpos($pathinfo, '/api/experiences')) {
                // api_experiences_get_collection
                if (preg_match('#^/api/experiences(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_experiences_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Experience',  '_api_collection_operation_name' => 'get',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_experiences_get_collection;
                    }

                    return $ret;
                }
                not_api_experiences_get_collection:

                // api_experiences_post_collection
                if (preg_match('#^/api/experiences(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_experiences_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Experience',  '_api_collection_operation_name' => 'post',));
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_api_experiences_post_collection;
                    }

                    return $ret;
                }
                not_api_experiences_post_collection:

                // api_experiences_get_item
                if (preg_match('#^/api/experiences/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_experiences_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Experience',  '_api_item_operation_name' => 'get',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_experiences_get_item;
                    }

                    return $ret;
                }
                not_api_experiences_get_item:

                // api_experiences_delete_item
                if (preg_match('#^/api/experiences/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_experiences_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Experience',  '_api_item_operation_name' => 'delete',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_api_experiences_delete_item;
                    }

                    return $ret;
                }
                not_api_experiences_delete_item:

                // api_experiences_put_item
                if (preg_match('#^/api/experiences/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_experiences_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Experience',  '_api_item_operation_name' => 'put',));
                    if (!in_array($requestMethod, array('PUT'))) {
                        $allow = array_merge($allow, array('PUT'));
                        goto not_api_experiences_put_item;
                    }

                    return $ret;
                }
                not_api_experiences_put_item:

            }

            elseif (0 === strpos($pathinfo, '/api/loisirs')) {
                // api_loisirs_get_collection
                if (preg_match('#^/api/loisirs(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_loisirs_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Loisir',  '_api_collection_operation_name' => 'get',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_loisirs_get_collection;
                    }

                    return $ret;
                }
                not_api_loisirs_get_collection:

                // api_loisirs_post_collection
                if (preg_match('#^/api/loisirs(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_loisirs_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Loisir',  '_api_collection_operation_name' => 'post',));
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_api_loisirs_post_collection;
                    }

                    return $ret;
                }
                not_api_loisirs_post_collection:

                // api_loisirs_get_item
                if (preg_match('#^/api/loisirs/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_loisirs_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Loisir',  '_api_item_operation_name' => 'get',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_loisirs_get_item;
                    }

                    return $ret;
                }
                not_api_loisirs_get_item:

                // api_loisirs_delete_item
                if (preg_match('#^/api/loisirs/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_loisirs_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Loisir',  '_api_item_operation_name' => 'delete',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_api_loisirs_delete_item;
                    }

                    return $ret;
                }
                not_api_loisirs_delete_item:

                // api_loisirs_put_item
                if (preg_match('#^/api/loisirs/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_loisirs_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Loisir',  '_api_item_operation_name' => 'put',));
                    if (!in_array($requestMethod, array('PUT'))) {
                        $allow = array_merge($allow, array('PUT'));
                        goto not_api_loisirs_put_item;
                    }

                    return $ret;
                }
                not_api_loisirs_put_item:

            }

            elseif (0 === strpos($pathinfo, '/api/formations')) {
                // api_formations_get_collection
                if (preg_match('#^/api/formations(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_formations_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Formation',  '_api_collection_operation_name' => 'get',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_formations_get_collection;
                    }

                    return $ret;
                }
                not_api_formations_get_collection:

                // api_formations_post_collection
                if (preg_match('#^/api/formations(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_formations_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Formation',  '_api_collection_operation_name' => 'post',));
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_api_formations_post_collection;
                    }

                    return $ret;
                }
                not_api_formations_post_collection:

                // api_formations_get_item
                if (preg_match('#^/api/formations/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_formations_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Formation',  '_api_item_operation_name' => 'get',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_formations_get_item;
                    }

                    return $ret;
                }
                not_api_formations_get_item:

                // api_formations_delete_item
                if (preg_match('#^/api/formations/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_formations_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Formation',  '_api_item_operation_name' => 'delete',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_api_formations_delete_item;
                    }

                    return $ret;
                }
                not_api_formations_delete_item:

                // api_formations_put_item
                if (preg_match('#^/api/formations/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_formations_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Formation',  '_api_item_operation_name' => 'put',));
                    if (!in_array($requestMethod, array('PUT'))) {
                        $allow = array_merge($allow, array('PUT'));
                        goto not_api_formations_put_item;
                    }

                    return $ret;
                }
                not_api_formations_put_item:

            }

        }

        // _twig_error_test
        if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
        }

        if (0 === strpos($pathinfo, '/toto')) {
            // app_lucky_number
            if ('/toto' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\AleaController::number',  '_route' => 'app_lucky_number',);
            }

            if (0 === strpos($pathinfo, '/toto/save')) {
                // app_create_formation
                if ('/toto/save/formation' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\FormationController::sauvegarder',  '_route' => 'app_create_formation',);
                }

                // app_create_experience
                if ('/toto/save/experience' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\ExperienceController::sauvegarder',  '_route' => 'app_create_experience',);
                }

                // app_create_loisir
                if ('/toto/save/loisir' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\LoisirController::sauvegarder',  '_route' => 'app_create_loisir',);
                }

            }

            elseif (0 === strpos($pathinfo, '/toto/create')) {
                // app_create_formationType
                if ('/toto/create/formation' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\FormationController::create',  '_route' => 'app_create_formationType',);
                }

                // app_create_experienceType
                if ('/toto/create/experience' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\ExperienceController::create',  '_route' => 'app_create_experienceType',);
                }

                // app_create_loisirType
                if ('/toto/create/loisir' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\LoisirController::create',  '_route' => 'app_create_loisirType',);
                }

            }

            elseif (0 === strpos($pathinfo, '/toto/valid')) {
                // valid_formation
                if ('/toto/valid/formation' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\FormationController::valid',  '_route' => 'valid_formation',);
                }

                // valid_experience
                if ('/toto/valid/experience' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\ExperienceController::valid',  '_route' => 'valid_experience',);
                }

                // valid_loisir
                if ('/toto/valid/loisir' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\LoisirController::valid',  '_route' => 'valid_loisir',);
                }

            }

            elseif (0 === strpos($pathinfo, '/toto/edit')) {
                // edit_formation
                if (0 === strpos($pathinfo, '/toto/edit/formation') && preg_match('#^/toto/edit/formation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_formation')), array (  '_controller' => 'App\\Controller\\FormationController::edit',));
                }

                // edit_experience
                if (0 === strpos($pathinfo, '/toto/edit/experience') && preg_match('#^/toto/edit/experience/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_experience')), array (  '_controller' => 'App\\Controller\\ExperienceController::edit',));
                }

                // edit_loisir
                if (0 === strpos($pathinfo, '/toto/edit/loisir') && preg_match('#^/toto/edit/loisir/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_loisir')), array (  '_controller' => 'App\\Controller\\LoisirController::edit',));
                }

            }

            elseif (0 === strpos($pathinfo, '/toto/delete')) {
                // delete_formation
                if (0 === strpos($pathinfo, '/toto/delete/formation') && preg_match('#^/toto/delete/formation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_formation')), array (  '_controller' => 'App\\Controller\\FormationController::delete',));
                }

                // delete_experience
                if (0 === strpos($pathinfo, '/toto/delete/experience') && preg_match('#^/toto/delete/experience/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_experience')), array (  '_controller' => 'App\\Controller\\ExperienceController::delete',));
                }

                // delete_loisir
                if (0 === strpos($pathinfo, '/toto/delete/loisir') && preg_match('#^/toto/delete/loisir/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_loisir')), array (  '_controller' => 'App\\Controller\\LoisirController::delete',));
                }

            }

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
