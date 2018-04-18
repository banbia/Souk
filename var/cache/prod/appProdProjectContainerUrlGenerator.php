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
        'back_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Souk\\BackBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Souk\\UserBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'front_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reclamations_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\ReclamationsController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/reclamations/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reclamations_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\ReclamationsController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/reclamations',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reclamations_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\ReclamationsController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/reclamations/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reclamations_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BackBundle:Reclamations:edit',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/reclamations',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reclamations_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\ReclamationsController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/reclamations',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'commandes_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\CommandesController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/commandes/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'commandes_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\CommandesController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/commandes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'commandes_new' => array (  0 =>   array (    0 => 'annonce',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\CommandesController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'annonce',    ),    1 =>     array (      0 => 'text',      1 => '/commandes/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'commandes_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\CommandesController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/commandes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'commandes_valid' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\CommandesController::validAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/commandes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'commandes_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\CommandesController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/commandes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'abonnements_com_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FrontBundle:Abonnements:new',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/abonnements/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'evennements_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\EvennementsController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/evennements/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'evennements_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\EvennementsController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/evennements',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'evennements_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\EvennementsController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/evennements/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'evennements_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\EvennementsController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/evennements',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'evennements_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\EvennementsController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/evennements',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
        'commentairesEvs_new' => array (  0 =>   array (    0 => 'evennement',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\CommentaireEvsController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'evennement',    ),    1 =>     array (      0 => 'text',      1 => '/commentairesEvs/evennement',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'commentairesEvs_delete' => array (  0 =>   array (    0 => 'evennement',    1 => 'com',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\CommentaireEvsController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'com',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'evennement',    ),    2 =>     array (      0 => 'text',      1 => '/commentairesEvs/delete_com_Evs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'commentairesEvs_Edit' => array (  0 =>   array (    0 => 'com',    1 => 'evennement',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\CommentaireEvsController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'evennement',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'com',    ),    2 =>     array (      0 => 'text',      1 => '/commentairesEvs/edit_com_Evs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'annonces_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Souk\\BackBundle\\Controller\\AnnoncesController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/commercial/annonces/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'annonces_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Souk\\BackBundle\\Controller\\AnnoncesController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/commercial/annonces',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'annonces_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Souk\\BackBundle\\Controller\\AnnoncesController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/commercial/annonces/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'annonces_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Souk\\BackBundle\\Controller\\AnnoncesController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/commercial/annonces',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'annonces_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Souk\\BackBundle\\Controller\\AnnoncesController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/commercial/annonces',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'client_annonces_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\AnnoncesController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/annonces/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'client_annonces_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\AnnoncesController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/annonces',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'commentairesAnc_new' => array (  0 =>   array (    0 => 'annonce',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\AnnoncesController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'annonce',    ),    1 =>     array (      0 => 'text',      1 => '/annonces/annonce',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'commentairesAnc_delete' => array (  0 =>   array (    0 => 'com',    1 => 'annonce',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\AnnoncesController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'annonce',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'com',    ),    2 =>     array (      0 => 'text',      1 => '/annonces/delete_com',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'commentairesAnc_Edit' => array (  0 =>   array (    0 => 'com',    1 => 'annonce',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\AnnoncesController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'annonce',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'com',    ),    2 =>     array (      0 => 'text',      1 => '/annonces/edit_com',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'all' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\AnnoncesController::allAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/annonces/commentaire/all',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'find_commentaire' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\AnnoncesController::findAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/annonces/commentaire/find',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'create_commentaire' => array (  0 =>   array (    0 => 'annonce',  ),  1 =>   array (    '_controller' => 'Souk\\FrontBundle\\Controller\\AnnoncesController::newAncAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'annonce',    ),    1 =>     array (      0 => 'text',      1 => '/annonces/commentaire/new_Anc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_message_inbox' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::inboxAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/messages/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_message_sent' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::sentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/messages/sent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_message_deleted' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::deletedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/messages/deleted',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_message_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/messages/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_message_thread_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::newThreadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/messages/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_message_thread_delete' => array (  0 =>   array (    0 => 'threadId',  ),  1 =>   array (    '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'threadId',    ),    2 =>     array (      0 => 'text',      1 => '/messages',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_message_thread_undelete' => array (  0 =>   array (    0 => 'threadId',  ),  1 =>   array (    '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::undeleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/undelete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'threadId',    ),    2 =>     array (      0 => 'text',      1 => '/messages',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_message_thread_view' => array (  0 =>   array (    0 => 'threadId',  ),  1 =>   array (    '_controller' => 'FOS\\MessageBundle\\Controller\\MessageController::threadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'threadId',    ),    1 =>     array (      0 => 'text',      1 => '/messages',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
