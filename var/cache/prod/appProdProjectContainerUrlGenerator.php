<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'abonnements_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Souk\\BackBundle\\Controller\\AbonnementsController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/abonnements/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'abonnements_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Souk\\BackBundle\\Controller\\AbonnementsController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/abonnements',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'abonnements_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Souk\\BackBundle\\Controller\\AbonnementsController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/abonnements/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'abonnements_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Souk\\BackBundle\\Controller\\AbonnementsController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/abonnements',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'abonnements_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Souk\\BackBundle\\Controller\\AbonnementsController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/abonnements',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'abonnements_demandes' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Souk\\BackBundle\\Controller\\AbonnementsController::demandesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/abonnements/demandes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'abonnements_valider' => array (  0 =>   array (    0 => 'id',    1 => 'nb',  ),  1 =>   array (    '_controller' => 'Souk\\BackBundle\\Controller\\AbonnementsController::validerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/valider',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'nb',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    3 =>     array (      0 => 'text',      1 => '/admin/abonnements',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'back_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Souk\\BackBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_reclamations_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Souk\\BackBundle\\Controller\\AdminReclamationsController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/reclamations/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_reclamations_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Souk\\BackBundle\\Controller\\AdminReclamationsController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/reclamations',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_reclamations_refuser' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Souk\\BackBundle\\Controller\\AdminReclamationsController::refuserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/refuser',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/reclamations',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_reclamations_accepter' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Souk\\BackBundle\\Controller\\AdminReclamationsController::accepterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/accepter',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/reclamations',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Souk\\BackBundle\\Controller\\SignalsController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/signals',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'show' => array (  0 =>   array (    0 => 'evennement',  ),  1 =>   array (    '_controller' => 'Souk\\BackBundle\\Controller\\SignalsController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'evennement',    ),    1 =>     array (      0 => 'text',      1 => '/admin/viewEv',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'consulter' => array (  0 =>   array (    0 => 'annonce',  ),  1 =>   array (    '_controller' => 'Souk\\BackBundle\\Controller\\SignalsController::consulterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'annonce',    ),    1 =>     array (      0 => 'text',      1 => '/admin/viewAnc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_ev' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Souk\\BackBundle\\Controller\\SignalsController::deleteEvAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/deleteEv',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_anc' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Souk\\BackBundle\\Controller\\SignalsController::deleteAncAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/deleteAnc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Souk\\UserBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'front_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'liste_commandes' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\CommandesController::listeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/api/mobile/liste',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'create_commande' => array (  0 =>   array (    0 => 'annonce',    1 => 'date',    2 => 'quantite',    3 => 'client',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\CommandesController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'client',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'quantite',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'date',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'annonce',    ),    4 =>     array (      0 => 'text',      1 => '/api/mobile',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reclamations_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\ReclamationsController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/reclamations/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reclamations_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\ReclamationsController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/api/reclamations',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reclamations_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\ReclamationsController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/reclamations/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reclamations_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\ReclamationsController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/api/reclamations',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reclamations_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\ReclamationsController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/api/reclamations',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'commandes_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\CommandesController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/commandes/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'commandes_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\CommandesController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/api/commandes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'commandes_new' => array (  0 =>   array (    0 => 'annonce',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\CommandesController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'annonce',    ),    1 =>     array (      0 => 'text',      1 => '/api/commandes/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'commandes_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\CommandesController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/api/commandes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'commandes_valid' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\CommandesController::validAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/valid',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/api/commandes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'commandes_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\CommandesController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/api/commandes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'abonnements_com_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FrontBundle:Abonnements:new',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/abonnements/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.security.controller:loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.security.controller:checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.security.controller:logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.profile.controller:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.profile.controller:editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.registration.controller:registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.registration.controller:checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'fos_user.registration.controller:confirmAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.registration.controller:confirmedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.resetting.controller:requestAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.resetting.controller:sendEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.resetting.controller:checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'fos_user.resetting.controller:resetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.change_password.controller:changePasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'client_annonces_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\AnnoncesController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/annonces/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'annonces_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\AnnoncesController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/annonces',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'commentairesAnc_new' => array (  0 =>   array (    0 => 'annonce',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\AnnoncesController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'annonce',    ),    1 =>     array (      0 => 'text',      1 => '/annonces/annonce',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'commentairesAnc_delete' => array (  0 =>   array (    0 => 'com',    1 => 'annonce',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\AnnoncesController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'annonce',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'com',    ),    2 =>     array (      0 => 'text',      1 => '/annonces/delete_com',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'commentairesAnc_Edit' => array (  0 =>   array (    0 => 'com',    1 => 'annonce',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\AnnoncesController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'annonce',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'com',    ),    2 =>     array (      0 => 'text',      1 => '/annonces/edit_com',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categories_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Souk\\BackBundle\\Controller\\CategoriesController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/categories/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categories_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Souk\\BackBundle\\Controller\\CategoriesController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/categories/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categories_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Souk\\BackBundle\\Controller\\CategoriesController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/categories',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categories_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Souk\\BackBundle\\Controller\\CategoriesController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/categories',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'evennements_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\EvennementsController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/evennements/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'evennements_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\EvennementsController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/evennements',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'evennements_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\EvennementsController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/evennements/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'evennements_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\EvennementsController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/evennements',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'evennements_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\EvennementsController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/evennements',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'commentairesEvs_new' => array (  0 =>   array (    0 => 'evennement',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\EvennementsController::newEvsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'evennement',    ),    1 =>     array (      0 => 'text',      1 => '/evennements/new_com',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'commentairesEvs_delete' => array (  0 =>   array (    0 => 'evennement',    1 => 'com',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\EvennementsController::deleteComEvsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'com',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'evennement',    ),    2 =>     array (      0 => 'text',      1 => '/evennements/delete_com_Evs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'commentairesEvs_Edit' => array (  0 =>   array (    0 => 'com',    1 => 'evennement',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\EvennementsController::editComEvsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'evennement',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'com',    ),    2 =>     array (      0 => 'text',      1 => '/evennements/edit_com_Evs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'all' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\EvennementsController::allAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/evennements/commentaire/all',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'find_commentaire' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\EvennementsController::findAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/evennements/commentaire/find',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'create_commentaire' => array (  0 =>   array (    0 => 'evennement',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\EvennementsController::newEvsSAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'evennement',    ),    1 =>     array (      0 => 'text',      1 => '/evennements/commentaire/new_Evs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'signalsAnc_all' => array (  0 =>   array (    0 => 'annonce',  ),  1 =>   array (    '_controller' => 'Souk\\BackBundle\\Controller\\SignalsAncController::allAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'annonce',    ),    1 =>     array (      0 => 'text',      1 => '/signalsAnc/signalsAnc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'signalEvs_delete' => array (  0 =>   array (    0 => 'signalAnc',    1 => 'sig',  ),  1 =>   array (    '_controller' => 'Souk\\BackBundle\\Controller\\SignalsAncController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'sig',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'signalAnc',    ),    2 =>     array (      0 => 'text',      1 => '/signalsAnc/delete_sig_Evs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'signalsEvs_all' => array (  0 =>   array (    0 => 'evennement',  ),  1 =>   array (    '_controller' => 'Souk\\BackBundle\\Controller\\SignalsEvsController::allAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'evennement',    ),    1 =>     array (      0 => 'text',      1 => '/signalsEvs/signalsEvs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'signalsEvsN_new' => array (  0 =>   array (    0 => 'evennement',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\SignalsEvsController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'evennement',    ),    1 =>     array (      0 => 'text',      1 => '/signalsEvs/signalsEvsN',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'signalsAncN_new' => array (  0 =>   array (    0 => 'annonce',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\SignalsAncController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'annonce',    ),    1 =>     array (      0 => 'text',      1 => '/signalsAnc/signalsAncN',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_message_inbox' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\MessageController::inboxAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/messages/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_message_sent' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\MessageController::sentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/messages/sent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_message_deleted' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\MessageController::deletedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/messages/deleted',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_message_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\MessageController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/messages/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_message_thread_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\MessageController::newThreadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/messages/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_message_thread_delete' => array (  0 =>   array (    0 => 'threadId',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\MessageController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'threadId',    ),    2 =>     array (      0 => 'text',      1 => '/messages',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_message_thread_undelete' => array (  0 =>   array (    0 => 'threadId',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\MessageController::undeleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/undelete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'threadId',    ),    2 =>     array (      0 => 'text',      1 => '/messages',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_message_thread_view' => array (  0 =>   array (    0 => 'threadId',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\MessageController::threadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'threadId',    ),    1 =>     array (      0 => 'text',      1 => '/messages',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
