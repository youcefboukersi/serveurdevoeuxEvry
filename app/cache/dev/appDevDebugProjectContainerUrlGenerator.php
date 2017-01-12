<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevDebugProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'list_form_utilisateur' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Modifier_Users' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::ModUsersAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/ModUsers',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'srvdv_server_admin_suppusers' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::SuppUsersAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/suppUsers',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'form_profile_user' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::EditPofileAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/EditPofile',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'form_profile_user_motDePasse' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::EditPofileMPAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/EditPofileMP',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'list_form_Annee' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::addAnneeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/addAnnee',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Modifier_Annee' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::ModAnneeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/ModAnnee',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'srvdv_server_admin_suppannee' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::SuppAnneeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/suppAnnee',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'list_form_Type' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::addTypeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/addtype',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Modifier_TypeUtilisateur' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::ModTypeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/ModType',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'srvdv_server_admin_supptype' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::SuppTypeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/suppType',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'list_form_filiere' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::addFiliereAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/addFiliere',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Modifier_filiere' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::ModFiliereAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/ModFiliere',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Supprimer_filiere' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::SuppFiliereAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/suppFiliere',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'list_form_typeens' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::addTypeEnsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/TypeEns',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Modifier_TypeEnseignant' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::ModTypeEnsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/ModTypeEns',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'srvdv_server_admin_supptypeens' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::SuppTypeEnsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/suppTypeEns',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'annee_suivante' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AnneeSuivanteController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/anneeSuivante',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'generate_Annee_users' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AnneeSuivanteController::generateUsersAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/generateUsers',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'supprimer_generate_Annee' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AnneeSuivanteController::SupprimerGenerateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/SupprimerGenerate',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_nbr_inscription' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\DefaultController::nombreInscriptionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/home/nombreInscription',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/home/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_ListeUsers' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\DefaultController::ListeUsersAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/home/ListeUsers',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_ListeFilieres' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\DefaultController::ListeFilieresAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/home/ListeFilieres',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ChoixFiliereEns_enseignant' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\EnseignantController::ChoixFiliereEnsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/enseignant/ChoixFiliereEns',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'list_form_inscription_enseignant' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\EnseignantController::InscriptionEnsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/enseignant/inscription',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Modifier_inscription' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\EnseignantController::ModInscriptionEnsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/enseignant/ModInscription',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'form_profile_user_ens' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\EnseignantController::EditPofileAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/enseignant/EditPofile',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'form_profile_user_ens_motDePasse' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\EnseignantController::EditPofileMPAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/enseignant/EditPofileMP',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'srvdv_server_enseignant_suppinscripens' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\EnseignantController::SuppInscripEnsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/enseignant/SuppInscription',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ChoixFiliereEns_responsable' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\ResponsableController::ChoixFiliereEnsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/responsable/ChoixFiliereEns',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'list_form_Matiere' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\ResponsableController::matiereAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/responsable/Matiere',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Modifier_Matiere' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\ResponsableController::ModmatiereAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/responsable/ModMatiere',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'srvdv_server_responsable_suppusers' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\ResponsableController::SuppUsersAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/responsable/SuppMatiere',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'form_profile_user_resp' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\ResponsableController::EditPofileAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/responsable/EditPofile',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'form_profile_user_resp_motDePasse' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\ResponsableController::EditPofileMPAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/responsable/EditPofileMP',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'list_form_inscription' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\ResponsableController::InscriptionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/responsable/inscription',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ModInscription_responsable' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\ResponsableController::ModInscriptionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/responsable/ModInscription',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'srvdv_server_responsable_suppinscrip' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\ResponsableController::SuppInscripAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/responsable/SuppInscription',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Etat_matieres_responsable' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\ResponsableController::EtatMatiereAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/responsable/EtatMatiere',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'modifier_inscription_matieres_etat' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\ResponsableController::inscriptionMatiereMODAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/responsable/inscriptionMatiereModifier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'list_form_inscription_matieres_etat' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\ResponsableController::inscriptionMatiereAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/responsable/inscriptionMatiere',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'supprimer_matiere_inscription' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\ResponsableController::SuppInscriptionMatiereAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/responsable/inscriptionMatiere/SuppInscriptionMatiere',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Connexion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Deconnexion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::indexAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inscription/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inscription/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/inscription/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SRVDV\\ServerBundle\\Controller\\AdminController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inscription/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/changer/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
