<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

        elseif (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/admin')) {
                if (0 === strpos($pathinfo, '/admin/abonnements')) {
                    // abonnements_index
                    if ('/admin/abonnements' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_abonnements_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($rawPathinfo.'/', 'abonnements_index');
                        }

                        return array (  '_controller' => 'Souk\\BackBundle\\Controller\\AbonnementsController::indexAction',  '_route' => 'abonnements_index',);
                    }
                    not_abonnements_index:

                    // abonnements_show
                    if (preg_match('#^/admin/abonnements/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_abonnements_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'abonnements_show')), array (  '_controller' => 'Souk\\BackBundle\\Controller\\AbonnementsController::showAction',));
                    }
                    not_abonnements_show:

                    // abonnements_new
                    if ('/admin/abonnements/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_abonnements_new;
                        }

                        return array (  '_controller' => 'Souk\\BackBundle\\Controller\\AbonnementsController::newAction',  '_route' => 'abonnements_new',);
                    }
                    not_abonnements_new:

                    // abonnements_edit
                    if (preg_match('#^/admin/abonnements/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_abonnements_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'abonnements_edit')), array (  '_controller' => 'Souk\\BackBundle\\Controller\\AbonnementsController::editAction',));
                    }
                    not_abonnements_edit:

                    // abonnements_delete
                    if (preg_match('#^/admin/abonnements/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_abonnements_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'abonnements_delete')), array (  '_controller' => 'Souk\\BackBundle\\Controller\\AbonnementsController::deleteAction',));
                    }
                    not_abonnements_delete:

                    // abonnements_demandes
                    if ('/admin/abonnements/demandes' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_abonnements_demandes;
                        }

                        return array (  '_controller' => 'Souk\\BackBundle\\Controller\\AbonnementsController::demandesAction',  '_route' => 'abonnements_demandes',);
                    }
                    not_abonnements_demandes:

                    // abonnements_valider
                    if (preg_match('#^/admin/abonnements/(?P<id>[^/]++)/(?P<nb>[^/]++)/valider$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_abonnements_valider;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'abonnements_valider')), array (  '_controller' => 'Souk\\BackBundle\\Controller\\AbonnementsController::validerAction',));
                    }
                    not_abonnements_valider:

                }

                // back_homepage
                if ('/admin' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'back_homepage');
                    }

                    return array (  '_controller' => 'Souk\\BackBundle\\Controller\\DefaultController::indexAction',  '_route' => 'back_homepage',);
                }

                if (0 === strpos($pathinfo, '/admin/reclamations')) {
                    // admin_reclamations_index
                    if ('/admin/reclamations' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_admin_reclamations_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($rawPathinfo.'/', 'admin_reclamations_index');
                        }

                        return array (  '_controller' => 'Souk\\BackBundle\\Controller\\AdminReclamationsController::indexAction',  '_route' => 'admin_reclamations_index',);
                    }
                    not_admin_reclamations_index:

                    // admin_reclamations_edit
                    if (preg_match('#^/admin/reclamations/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_admin_reclamations_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_reclamations_edit')), array (  '_controller' => 'Souk\\BackBundle\\Controller\\AdminReclamationsController::editAction',));
                    }
                    not_admin_reclamations_edit:

                    // admin_reclamations_refuser
                    if (preg_match('#^/admin/reclamations/(?P<id>[^/]++)/refuser$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_admin_reclamations_refuser;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_reclamations_refuser')), array (  '_controller' => 'Souk\\BackBundle\\Controller\\AdminReclamationsController::refuserAction',));
                    }
                    not_admin_reclamations_refuser:

                    // admin_reclamations_accepter
                    if (preg_match('#^/admin/reclamations/(?P<id>[^/]++)/accepter$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_admin_reclamations_accepter;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_reclamations_accepter')), array (  '_controller' => 'Souk\\BackBundle\\Controller\\AdminReclamationsController::accepterAction',));
                    }
                    not_admin_reclamations_accepter:

                }

                // index
                if ('/admin/signals' === $pathinfo) {
                    return array (  '_controller' => 'Souk\\BackBundle\\Controller\\SignalsController::indexAction',  '_route' => 'index',);
                }

                // stats_index
                if ('/admin/stats' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'stats_index');
                    }

                    return array (  '_controller' => 'Souk\\BackBundle\\Controller\\StatsController::indexAction',  '_route' => 'stats_index',);
                }

                // show
                if (0 === strpos($pathinfo, '/admin/viewEv') && preg_match('#^/admin/viewEv/(?P<evennement>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'show')), array (  '_controller' => 'Souk\\BackBundle\\Controller\\SignalsController::showAction',));
                }

                // consulter
                if (0 === strpos($pathinfo, '/admin/viewAnc') && preg_match('#^/admin/viewAnc/(?P<annonce>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'consulter')), array (  '_controller' => 'Souk\\BackBundle\\Controller\\SignalsController::consulterAction',));
                }

                // delete_ev
                if (0 === strpos($pathinfo, '/admin/deleteEv') && preg_match('#^/admin/deleteEv/(?P<evennement>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_ev')), array (  '_controller' => 'Souk\\BackBundle\\Controller\\SignalsController::deleteEvAction',));
                }

                // delete_anc
                if (0 === strpos($pathinfo, '/admin/deleteAnc') && preg_match('#^/admin/deleteAnc/(?P<annonce>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_anc')), array (  '_controller' => 'Souk\\BackBundle\\Controller\\SignalsController::deleteAncAction',));
                }

                if (0 === strpos($pathinfo, '/admin/admin/categories')) {
                    // categories_index
                    if ('/admin/admin/categories' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_categories_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($rawPathinfo.'/', 'categories_index');
                        }

                        return array (  '_controller' => 'Souk\\BackBundle\\Controller\\CategoriesController::indexAction',  '_route' => 'categories_index',);
                    }
                    not_categories_index:

                    // categories_new
                    if ('/admin/admin/categories/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_categories_new;
                        }

                        return array (  '_controller' => 'Souk\\BackBundle\\Controller\\CategoriesController::newAction',  '_route' => 'categories_new',);
                    }
                    not_categories_new:

                    // categories_edit
                    if (preg_match('#^/admin/admin/categories/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_categories_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'categories_edit')), array (  '_controller' => 'Souk\\BackBundle\\Controller\\CategoriesController::editAction',));
                    }
                    not_categories_edit:

                    // categories_delete
                    if (preg_match('#^/admin/admin/categories/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_categories_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'categories_delete')), array (  '_controller' => 'Souk\\BackBundle\\Controller\\CategoriesController::deleteAction',));
                    }
                    not_categories_delete:

                }

            }

            elseif (0 === strpos($pathinfo, '/abonnements')) {
                // abonnements_com_index
                if ('/abonnements' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_abonnements_com_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'abonnements_com_index');
                    }

                    return array (  '_controller' => 'Souk\\FrontBundle\\Controller\\ComAbonnementsController::indexAction',  '_route' => 'abonnements_com_index',);
                }
                not_abonnements_com_index:

                // abonnements_com_new
                if ('/abonnements/new' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_abonnements_com_new;
                    }

                    return array (  '_controller' => 'Souk\\FrontBundle\\Controller\\ComAbonnementsController::newAction',  '_route' => 'abonnements_com_new',);
                }
                not_abonnements_com_new:

                // abonnements_com_show
                if (0 === strpos($pathinfo, '/abonnements/show') && preg_match('#^/abonnements/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_abonnements_com_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'abonnements_com_show')), array (  '_controller' => 'Souk\\FrontBundle\\Controller\\ComAbonnementsController::showAction',));
                }
                not_abonnements_com_show:

                // abonnements_com_export
                if ('/abonnements/export' === $pathinfo) {
                    return array (  '_controller' => 'Souk\\FrontBundle\\Controller\\ComAbonnementsController::exportAction',  '_route' => 'abonnements_com_export',);
                }

            }

            elseif (0 === strpos($pathinfo, '/annonces')) {
                if (0 === strpos($pathinfo, '/annonces/newAnnonce')) {
                    // annonces_new
                    if ('/annonces/newAnnonce' === $pathinfo) {
                        return array (  '_controller' => 'Souk\\FrontBundle\\Controller\\AnnoncesController::newAnnonceAction',  '_route' => 'annonces_new',);
                    }

                    // image_new
                    if (0 === strpos($pathinfo, '/annonces/newAnnonce/newImage') && preg_match('#^/annonces/newAnnonce/newImage/(?P<annonce>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'image_new')), array (  '_controller' => 'Souk\\FrontBundle\\Controller\\ImageController::newImageAction',));
                    }

                }

                // annonces_edit
                if (0 === strpos($pathinfo, '/annonces/editAnnonce') && preg_match('#^/annonces/editAnnonce/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'annonces_edit')), array (  '_controller' => 'Souk\\FrontBundle\\Controller\\AnnoncesController::editAnnonceAction',));
                }

                // annonces_delete
                if (0 === strpos($pathinfo, '/annonces/deleteAnnonce') && preg_match('#^/annonces/deleteAnnonce/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'annonces_delete')), array (  '_controller' => 'Souk\\FrontBundle\\Controller\\AnnoncesController::deleteAnnonceAction',));
                }

                // commercial_annonces_index
                if ('/annonces/listeannoncesComm' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_commercial_annonces_index;
                    }

                    return array (  '_controller' => 'Souk\\FrontBundle\\Controller\\AnnoncesController::indexCommercialAction',  '_route' => 'commercial_annonces_index',);
                }
                not_commercial_annonces_index:

                // client_annonces_index
                if ('/annonces' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_client_annonces_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'client_annonces_index');
                    }

                    return array (  '_controller' => 'Souk\\FrontBundle\\Controller\\AnnoncesController::indexAction',  '_route' => 'client_annonces_index',);
                }
                not_client_annonces_index:

                // annonces_index_by_categorie
                if (preg_match('#^/annonces/(?P<categorie>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_annonces_index_by_categorie;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'annonces_index_by_categorie')), array (  'categorie_controller' => 'FrontBundle:Annonces:indexbyCategorie',));
                }
                not_annonces_index_by_categorie:

                // annonces_show
                if (preg_match('#^/annonces/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_annonces_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'annonces_show')), array (  '_controller' => 'Souk\\FrontBundle\\Controller\\AnnoncesController::showAction',));
                }
                not_annonces_show:

                // commentairesAnc_new
                if (0 === strpos($pathinfo, '/annonces/annonce') && preg_match('#^/annonces/annonce/(?P<annonce>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentairesAnc_new')), array (  '_controller' => 'Souk\\FrontBundle\\Controller\\AnnoncesController::newAction',));
                }

                // commentairesAnc_delete
                if (0 === strpos($pathinfo, '/annonces/delete_com') && preg_match('#^/annonces/delete_com/(?P<com>[^/]++)/(?P<annonce>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentairesAnc_delete')), array (  '_controller' => 'Souk\\FrontBundle\\Controller\\AnnoncesController::deleteComAncAction',));
                }

                // commentairesAnc_edit
                if (0 === strpos($pathinfo, '/annonces/edit_com') && preg_match('#^/annonces/edit_com/(?P<com>[^/]++)/(?P<annonce>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentairesAnc_edit')), array (  '_controller' => 'Souk\\FrontBundle\\Controller\\AnnoncesController::editAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/api')) {
                // api_homepage
                if ('/api' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'api_homepage');
                    }

                    return array (  '_controller' => 'Souk\\ApiBundle\\Controller\\DefaultController::indexAction',  '_route' => 'api_homepage',);
                }

                // get_User
                if (0 === strpos($pathinfo, '/api/user') && preg_match('#^/api/user/(?P<login>[^/]++)/(?P<password>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_User')), array (  '_controller' => 'Souk\\ApiBundle\\Controller\\UserApiController::getUserAction',));
                }

                if (0 === strpos($pathinfo, '/api/comm')) {
                    if (0 === strpos($pathinfo, '/api/commandes')) {
                        // liste_commandes
                        if (0 === strpos($pathinfo, '/api/commandes/liste') && preg_match('#^/api/commandes/liste/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'liste_commandes')), array (  '_controller' => 'Souk\\ApiBundle\\Controller\\CommandesApiController::listeAction',));
                        }

                        // create_commande
                        if (0 === strpos($pathinfo, '/api/commandes/new') && preg_match('#^/api/commandes/new/(?P<annonce>[^/]++)/(?P<date>[^/]++)/(?P<quantite>[^/]++)/(?P<client>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'create_commande')), array (  '_controller' => 'Souk\\ApiBundle\\Controller\\CommandesApiController::createAction',));
                        }

                        // annuler_commande
                        if (0 === strpos($pathinfo, '/api/commandes/annuler') && preg_match('#^/api/commandes/annuler/(?P<com>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'annuler_commande')), array (  '_controller' => 'Souk\\ApiBundle\\Controller\\CommandesApiController::annulerAction',));
                        }

                        // modifier_commande
                        if (0 === strpos($pathinfo, '/api/commandes/modifier') && preg_match('#^/api/commandes/modifier/(?P<com>[^/]++)/(?P<date>[^/]++)/(?P<quantite>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier_commande')), array (  '_controller' => 'Souk\\ApiBundle\\Controller\\CommandesApiController::modifAction',));
                        }

                        // confirmer_commande
                        if (0 === strpos($pathinfo, '/api/commandes/confirmer') && preg_match('#^/api/commandes/confirmer/(?P<com>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'confirmer_commande')), array (  '_controller' => 'Souk\\ApiBundle\\Controller\\CommandesApiController::confirmerAction',));
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/api/commentaire/commentaireAnc')) {
                        // liste_commentaireAnc
                        if (preg_match('#^/api/commentaire/commentaireAnc/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'liste_commentaireAnc')), array (  '_controller' => 'Souk\\ApiBundle\\Controller\\CommentaireAncApiController::listeComAncAction',));
                        }

                        // create_commentaireAnc
                        if (0 === strpos($pathinfo, '/api/commentaire/commentaireAnc/new') && preg_match('#^/api/commentaire/commentaireAnc/new/(?P<annonce>[^/]++)/(?P<contenu>[^/]++)/(?P<client>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'create_commentaireAnc')), array (  '_controller' => 'Souk\\ApiBundle\\Controller\\CommentaireAncApiController::createComAncAction',));
                        }

                        // update_commentaireAnc
                        if (0 === strpos($pathinfo, '/api/commentaire/commentaireAnc/update') && preg_match('#^/api/commentaire/commentaireAnc/update/(?P<comAnc>[^/]++)/(?P<contenu>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_commentaireAnc')), array (  '_controller' => 'Souk\\ApiBundle\\Controller\\CommentaireAncApiController::modifComAncAction',));
                        }

                        // delete_commentaireAnc
                        if (0 === strpos($pathinfo, '/api/commentaire/commentaireAnc/delete') && preg_match('#^/api/commentaire/commentaireAnc/delete/(?P<comAnc>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_commentaireAnc')), array (  '_controller' => 'Souk\\ApiBundle\\Controller\\CommentaireAncApiController::deleteAncAction',));
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/api/commentaire/commentaireEvs')) {
                        // liste_commentaireEvs
                        if (preg_match('#^/api/commentaire/commentaireEvs/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'liste_commentaireEvs')), array (  '_controller' => 'Souk\\ApiBundle\\Controller\\CommentaireEvsApiController::listeComEvsAction',));
                        }

                        // create_commentaireEvs
                        if (0 === strpos($pathinfo, '/api/commentaire/commentaireEvs/new') && preg_match('#^/api/commentaire/commentaireEvs/new/(?P<evennement>[^/]++)/(?P<contenu>[^/]++)/(?P<client>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'create_commentaireEvs')), array (  '_controller' => 'Souk\\ApiBundle\\Controller\\CommentaireEvsApiController::createComEvsAction',));
                        }

                        // update_commentaireEvs
                        if (0 === strpos($pathinfo, '/api/commentaire/commentaireEvs/updete') && preg_match('#^/api/commentaire/commentaireEvs/updete/(?P<comEvs>[^/]++)/(?P<contenu>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_commentaireEvs')), array (  '_controller' => 'Souk\\ApiBundle\\Controller\\CommentaireEvsApiController::modifComEvsAction',));
                        }

                        // delete_commentaireEvs
                        if (0 === strpos($pathinfo, '/api/commentaire/commentaireEvs/delete') && preg_match('#^/api/commentaire/commentaireEvs/delete/(?P<comEvs>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_commentaireEvs')), array (  '_controller' => 'Souk\\ApiBundle\\Controller\\CommentaireEvsApiController::deleteComEvsAction',));
                        }

                    }

                }

                // api_Annonces
                if ('/api/annonces/all' === $pathinfo) {
                    return array (  '_controller' => 'Souk\\ApiBundle\\Controller\\AnnoncesApiController::getAllAnnoncesAction',  '_route' => 'api_Annonces',);
                }

                // get_Annonce
                if (0 === strpos($pathinfo, '/api/annonces/AnnoncesById') && preg_match('#^/api/annonces/AnnoncesById/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_Annonce')), array (  '_controller' => 'Souk\\ApiBundle\\Controller\\AnnoncesApiController::GetAnnonceByIdAction',));
                }

                // liste_reclamations
                if (0 === strpos($pathinfo, '/api/reclamations/reclamations/liste') && preg_match('#^/api/reclamations/reclamations/liste(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'liste_reclamations')), array (  '_controller' => 'Souk\\ApiBundle\\Controller\\ReclamationApiController::listeRecAction',));
                }

                // new_reclamations
                if (0 === strpos($pathinfo, '/api/reclamations/reclamations/newR') && preg_match('#^/api/reclamations/reclamations/newR/(?P<contenu>[^/]++)/(?P<commercial>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'new_reclamations')), array (  '_controller' => 'Souk\\ApiBundle\\Controller\\ReclamationApiController::newRecAction',));
                }

                // get_All_Annonces
                if ('/api/evenements/allEvents' === $pathinfo) {
                    return array (  '_controller' => 'Souk\\ApiBundle\\Controller\\AnnoncesApiController::getEventsAction',  '_route' => 'get_All_Annonces',);
                }

            }

        }

        // user_homepage
        if ('/user' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'user_homepage');
            }

            return array (  '_controller' => 'Souk\\UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'user_homepage',);
        }

        // front_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'front_homepage');
            }

            return array (  '_controller' => 'Souk\\FrontBundle\\Controller\\DefaultController::indexAction',  '_route' => 'front_homepage',);
        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/reservations')) {
                // reservation_index
                if ('/reservations' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_reservation_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'reservation_index');
                    }

                    return array (  '_controller' => 'Souk\\FrontBundle\\Controller\\ReservationController::indexAction',  '_route' => 'reservation_index',);
                }
                not_reservation_index:

                // reservation_show
                if (preg_match('#^/reservations/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_reservation_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservation_show')), array (  '_controller' => 'Souk\\FrontBundle\\Controller\\ReservationController::showAction',));
                }
                not_reservation_show:

                // reservation_new
                if ('/reservations/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_reservation_new;
                    }

                    return array (  '_controller' => 'Souk\\FrontBundle\\Controller\\ReservationController::newAction',  '_route' => 'reservation_new',);
                }
                not_reservation_new:

                // reservation_edit
                if (preg_match('#^/reservations/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_reservation_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservation_edit')), array (  '_controller' => 'Souk\\FrontBundle\\Controller\\ReservationController::editAction',));
                }
                not_reservation_edit:

                // reservation_delete
                if (preg_match('#^/reservations/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_reservation_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservation_delete')), array (  '_controller' => 'Souk\\FrontBundle\\Controller\\ReservationController::deleteAction',));
                }
                not_reservation_delete:

            }

            elseif (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ('/resetting/request' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                }
                not_fos_user_resetting_reset:

                // fos_user_resetting_send_email
                if ('/resetting/send-email' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/resetting/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

            }

            elseif (0 === strpos($pathinfo, '/reclamations')) {
                // reclamations_index
                if ('/reclamations' === $trimmedPathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_reclamations_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'reclamations_index');
                    }

                    return array (  '_controller' => 'Souk\\FrontBundle\\Controller\\ReclamationsController::indexAction',  '_route' => 'reclamations_index',);
                }
                not_reclamations_index:

                // reclamations_show
                if (preg_match('#^/reclamations/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_reclamations_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reclamations_show')), array (  '_controller' => 'Souk\\FrontBundle\\Controller\\ReclamationsController::showAction',));
                }
                not_reclamations_show:

                // reclamations_new
                if ('/reclamations/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_reclamations_new;
                    }

                    return array (  '_controller' => 'Souk\\FrontBundle\\Controller\\ReclamationsController::newAction',  '_route' => 'reclamations_new',);
                }
                not_reclamations_new:

                // reclamations_edit
                if (preg_match('#^/reclamations/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_reclamations_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reclamations_edit')), array (  '_controller' => 'Souk\\FrontBundle\\Controller\\ReclamationsController::editAction',));
                }
                not_reclamations_edit:

                // reclamations_delete
                if (preg_match('#^/reclamations/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_reclamations_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reclamations_delete')), array (  '_controller' => 'Souk\\FrontBundle\\Controller\\ReclamationsController::deleteAction',));
                }
                not_reclamations_delete:

            }

            elseif (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if ('/register' === $trimmedPathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                // fos_user_registration_check_email
                if ('/register/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ('/register/confirmed' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fos_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    }
                    not_fos_user_registration_confirmed:

                }

            }

        }

        elseif (0 === strpos($pathinfo, '/commandes')) {
            // commandes_index
            if ('/commandes' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_commandes_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'commandes_index');
                }

                return array (  '_controller' => 'Souk\\FrontBundle\\Controller\\CommandesController::indexAction',  '_route' => 'commandes_index',);
            }
            not_commandes_index:

            // commandes_show
            if (preg_match('#^/commandes/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_commandes_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'commandes_show')), array (  '_controller' => 'Souk\\FrontBundle\\Controller\\CommandesController::showAction',));
            }
            not_commandes_show:

            // commandes_new
            if (0 === strpos($pathinfo, '/commandes/new') && preg_match('#^/commandes/new/(?P<annonce>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_commandes_new;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'commandes_new')), array (  '_controller' => 'Souk\\FrontBundle\\Controller\\CommandesController::newAction',));
            }
            not_commandes_new:

            // commandes_edit
            if (preg_match('#^/commandes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_commandes_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'commandes_edit')), array (  '_controller' => 'Souk\\FrontBundle\\Controller\\CommandesController::editAction',));
            }
            not_commandes_edit:

            // commandes_modif
            if ('/commandes/modif' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_commandes_modif;
                }

                return array (  '_controller' => 'Souk\\FrontBundle\\Controller\\CommandesController::modifierAction',  '_route' => 'commandes_modif',);
            }
            not_commandes_modif:

            // commandes_valid
            if (preg_match('#^/commandes/(?P<id>[^/]++)/valid$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_commandes_valid;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'commandes_valid')), array (  '_controller' => 'Souk\\FrontBundle\\Controller\\CommandesController::validAction',));
            }
            not_commandes_valid:

            // commandes_delete
            if (preg_match('#^/commandes/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_commandes_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'commandes_delete')), array (  '_controller' => 'Souk\\FrontBundle\\Controller\\CommandesController::deleteAction',));
            }
            not_commandes_delete:

        }

        // pdf_show
        if (0 === strpos($pathinfo, '/pdf') && preg_match('#^/pdf/(?P<commande>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pdf_show')), array (  '_controller' => 'Souk\\FrontBundle\\Controller\\PDFController::pdfshowAction',));
        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_login;
                }

                return array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_security_check;
                }

                return array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/messages')) {
            // fos_message_inbox
            if ('/messages' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'fos_message_inbox');
                }

                return array (  '_controller' => 'Souk\\FrontBundle\\Controller\\MessageController::inboxAction',  '_route' => 'fos_message_inbox',);
            }

            // fos_message_sent
            if ('/messages/sent' === $pathinfo) {
                return array (  '_controller' => 'Souk\\FrontBundle\\Controller\\MessageController::sentAction',  '_route' => 'fos_message_sent',);
            }

            // fos_message_search
            if ('/messages/search' === $pathinfo) {
                return array (  '_controller' => 'Souk\\FrontBundle\\Controller\\MessageController::searchAction',  '_route' => 'fos_message_search',);
            }

            // fos_message_deleted
            if ('/messages/deleted' === $pathinfo) {
                return array (  '_controller' => 'Souk\\FrontBundle\\Controller\\MessageController::deletedAction',  '_route' => 'fos_message_deleted',);
            }

            // fos_message_thread_new
            if ('/messages/new' === $pathinfo) {
                return array (  '_controller' => 'Souk\\FrontBundle\\Controller\\MessageController::newThreadAction',  '_route' => 'fos_message_thread_new',);
            }

            // fos_message_thread_delete
            if (preg_match('#^/messages/(?P<threadId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($requestMethod, array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_fos_message_thread_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_message_thread_delete')), array (  '_controller' => 'Souk\\FrontBundle\\Controller\\MessageController::deleteAction',));
            }
            not_fos_message_thread_delete:

            // fos_message_thread_undelete
            if (preg_match('#^/messages/(?P<threadId>[^/]++)/undelete$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_message_thread_undelete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_message_thread_undelete')), array (  '_controller' => 'Souk\\FrontBundle\\Controller\\MessageController::undeleteAction',));
            }
            not_fos_message_thread_undelete:

            // fos_message_thread_view
            if (preg_match('#^/messages/(?P<threadId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_message_thread_view')), array (  '_controller' => 'Souk\\FrontBundle\\Controller\\MessageController::threadAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/evennements')) {
            // evennements_index
            if ('/evennements' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_evennements_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'evennements_index');
                }

                return array (  '_controller' => 'Souk\\FrontBundle\\Controller\\EvennementsController::indexAction',  '_route' => 'evennements_index',);
            }
            not_evennements_index:

            // evennements_parts
            if (preg_match('#^/evennements/(?P<id>[^/]++)/particiapants$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_evennements_parts;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evennements_parts')), array (  '_controller' => 'Souk\\FrontBundle\\Controller\\EvennementsController::listeParAction',));
            }
            not_evennements_parts:

            // evennements_show
            if (preg_match('#^/evennements/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evennements_show')), array (  '_controller' => 'Souk\\FrontBundle\\Controller\\EvennementsController::showAction',));
            }

            // evennements_new
            if ('/evennements/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_evennements_new;
                }

                return array (  '_controller' => 'Souk\\FrontBundle\\Controller\\EvennementsController::newAction',  '_route' => 'evennements_new',);
            }
            not_evennements_new:

            // evennements_edit
            if (preg_match('#^/evennements/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_evennements_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evennements_edit')), array (  '_controller' => 'Souk\\FrontBundle\\Controller\\EvennementsController::editAction',));
            }
            not_evennements_edit:

            // evennements_delete
            if (preg_match('#^/evennements/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_evennements_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evennements_delete')), array (  '_controller' => 'Souk\\FrontBundle\\Controller\\EvennementsController::deleteAction',));
            }
            not_evennements_delete:

            // commentairesEvs_new
            if (0 === strpos($pathinfo, '/evennements/new_com') && preg_match('#^/evennements/new_com/(?P<evennement>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentairesEvs_new')), array (  '_controller' => 'Souk\\FrontBundle\\Controller\\EvennementsController::newEvsAction',));
            }

            // commentairesEvs_delete
            if (0 === strpos($pathinfo, '/evennements/delete_com_Evs') && preg_match('#^/evennements/delete_com_Evs/(?P<evennement>[^/]++)/(?P<com>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentairesEvs_delete')), array (  '_controller' => 'Souk\\FrontBundle\\Controller\\EvennementsController::deleteComEvsAction',));
            }

            // commentairesEvs_Edit
            if (0 === strpos($pathinfo, '/evennements/edit_com_Evs') && preg_match('#^/evennements/edit_com_Evs/(?P<com>[^/]++)/(?P<evennement>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentairesEvs_Edit')), array (  '_controller' => 'Souk\\FrontBundle\\Controller\\EvennementsController::editComEvsAction',));
            }

            if (0 === strpos($pathinfo, '/evennements/commentaire')) {
                // all
                if ('/evennements/commentaire/all' === $pathinfo) {
                    return array (  '_controller' => 'Souk\\FrontBundle\\Controller\\EvennementsController::allAction',  '_route' => 'all',);
                }

                // find_commentaire
                if (0 === strpos($pathinfo, '/evennements/commentaire/find') && preg_match('#^/evennements/commentaire/find/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'find_commentaire')), array (  '_controller' => 'Souk\\FrontBundle\\Controller\\EvennementsController::findAction',));
                }

                // create_commentaire
                if (0 === strpos($pathinfo, '/evennements/commentaire/new_Evs') && preg_match('#^/evennements/commentaire/new_Evs/(?P<evennement>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'create_commentaire')), array (  '_controller' => 'Souk\\FrontBundle\\Controller\\EvennementsController::newEvsSAction',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/signals')) {
            if (0 === strpos($pathinfo, '/signalsAnc/signalsAnc')) {
                // signalsAnc_all
                if (preg_match('#^/signalsAnc/signalsAnc/(?P<annonce>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'signalsAnc_all')), array (  '_controller' => 'BackBundle:SignalsAnc:all',));
                }

                // signalsAncN_new
                if (0 === strpos($pathinfo, '/signalsAnc/signalsAncN') && preg_match('#^/signalsAnc/signalsAncN/(?P<annonce>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'signalsAncN_new')), array (  '_controller' => 'Souk\\FrontBundle\\Controller\\SignalsAncController::newAction',));
                }

            }

            // signalEvs_delete
            if (0 === strpos($pathinfo, '/signalsAnc/delete_sig_Evs') && preg_match('#^/signalsAnc/delete_sig_Evs/(?P<signalAnc>[^/]++)/(?P<sig>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'signalEvs_delete')), array (  '_controller' => 'BackBundle:SignalsAnc:delete',));
            }

            if (0 === strpos($pathinfo, '/signalsEvs/signalsEvs')) {
                // signalsEvs_all
                if (preg_match('#^/signalsEvs/signalsEvs/(?P<evennement>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'signalsEvs_all')), array (  '_controller' => 'BackBundle:SignalsEvs:all',));
                }

                // signalsEvsN_new
                if (0 === strpos($pathinfo, '/signalsEvs/signalsEvsN') && preg_match('#^/signalsEvs/signalsEvsN/(?P<evennement>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'signalsEvsN_new')), array (  '_controller' => 'Souk\\FrontBundle\\Controller\\SignalsEvsController::newAction',));
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
