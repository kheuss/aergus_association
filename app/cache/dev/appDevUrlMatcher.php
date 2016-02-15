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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/aergus/admin')) {
            if (0 === strpos($pathinfo, '/aergus/admin/ressortissant')) {
                // aergus_association_ressortissant_home
                if (rtrim($pathinfo, '/') === '/aergus/admin/ressortissant') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'aergus_association_ressortissant_home');
                    }

                    return array (  '_controller' => 'AERGUS\\associationBundle\\Controller\\AdminRessortissantsController::indexAction',  '_route' => 'aergus_association_ressortissant_home',);
                }

                if (0 === strpos($pathinfo, '/aergus/admin/ressortissant/ajouter')) {
                    // aergus_association_ressortissant_ajouter
                    if ($pathinfo === '/aergus/admin/ressortissant/ajouter') {
                        return array (  '_controller' => 'AERGUS\\associationBundle\\Controller\\AdminRessortissantsController::ajouterAction',  '_route' => 'aergus_association_ressortissant_ajouter',);
                    }

                    // aergus_association_ressortissant_ajouter_liste
                    if ($pathinfo === '/aergus/admin/ressortissant/ajouter/liste') {
                        return array (  '_controller' => 'AERGUS\\associationBundle\\Controller\\AdminRessortissantsController::ajouterListeAction',  '_route' => 'aergus_association_ressortissant_ajouter_liste',);
                    }

                }

                // aergus_association_ressortissant_delete
                if (0 === strpos($pathinfo, '/aergus/admin/ressortissant/delete') && preg_match('#^/aergus/admin/ressortissant/delete/(?P<nom>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'aergus_association_ressortissant_delete')), array (  '_controller' => 'AERGUS\\associationBundle\\Controller\\AdminRessortissantsController::supprimerAction',));
                }

                // aergus_association_ressortissant_edit
                if (0 === strpos($pathinfo, '/aergus/admin/ressortissant/edit') && preg_match('#^/aergus/admin/ressortissant/edit/(?P<nom>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'aergus_association_ressortissant_edit')), array (  '_controller' => 'AERGUS\\associationBundle\\Controller\\AdminRessortissantsController::modifierAction',));
                }

                // aergus_association_ressortissant_modifier_confirmer
                if ($pathinfo === '/aergus/admin/ressortissant/modifier/confirmer') {
                    return array (  '_controller' => 'AERGUS\\associationBundle\\Controller\\AdminRessortissantsController::modifierConfirmerAction',  '_route' => 'aergus_association_ressortissant_modifier_confirmer',);
                }

                // aergus_association_ressortissant_afficher
                if (0 === strpos($pathinfo, '/aergus/admin/ressortissant/details') && preg_match('#^/aergus/admin/ressortissant/details/(?P<nom>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'aergus_association_ressortissant_afficher')), array (  '_controller' => 'AERGUS\\associationBundle\\Controller\\AdminRessortissantsController::afficherAction',));
                }

                // aergus_association_ressortissant_cocher_restaurer
                if ($pathinfo === '/aergus/admin/ressortissant/cocher-restaurer') {
                    return array (  '_controller' => 'AERGUS\\associationBundle\\Controller\\AdminRessortissantsController::cocherRestaurerAction',  '_route' => 'aergus_association_ressortissant_cocher_restaurer',);
                }

                // aergus_association_ressortissant_restaurer
                if ($pathinfo === '/aergus/admin/ressortissant/restaurer') {
                    return array (  '_controller' => 'AERGUS\\associationBundle\\Controller\\AdminRessortissantsController::restaurerAction',  '_route' => 'aergus_association_ressortissant_restaurer',);
                }

                // aergus_association_ressortissant_supprimer_multiple
                if ($pathinfo === '/aergus/admin/ressortissant/supprimer-tous') {
                    return array (  '_controller' => 'AERGUS\\associationBundle\\Controller\\AdminRessortissantsController::supprimerMultipleAction',  '_route' => 'aergus_association_ressortissant_supprimer_multiple',);
                }

            }

            if (0 === strpos($pathinfo, '/aergus/admin/orientation/ufr')) {
                // aergus_association_ufr_home
                if (rtrim($pathinfo, '/') === '/aergus/admin/orientation/ufr') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'aergus_association_ufr_home');
                    }

                    return array (  '_controller' => 'AERGUS\\associationBundle\\Controller\\AdminOrientationController::indexAction',  '_route' => 'aergus_association_ufr_home',);
                }

                // liste
                if (preg_match('#^/aergus/admin/orientation/ufr/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'liste')), array (  '_controller' => 'AERGUS\\associationBundle\\Controller\\AdminOrientationController::listeAction',));
                }

                if (0 === strpos($pathinfo, '/aergus/admin/orientation/ufr/delete')) {
                    // aergus_association_ufr_delete
                    if (preg_match('#^/aergus/admin/orientation/ufr/delete/(?P<libelle>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'aergus_association_ufr_delete')), array (  '_controller' => 'AERGUS\\associationBundle\\Controller\\AdminOrientationController::supprimerUfrAction',));
                    }

                    // aergus_association_ufr_delete_confirmed
                    if (preg_match('#^/aergus/admin/orientation/ufr/delete/(?P<libelle>[^/]++)/confirmed$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'aergus_association_ufr_delete_confirmed')), array (  '_controller' => 'AERGUS\\associationBundle\\Controller\\AdminOrientationController::supprimerConfirmedUfrAction',));
                    }

                }

                // addSection
                if (preg_match('#^/aergus/admin/orientation/ufr/(?P<id>\\d+)/ajouter/section$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'addSection')), array (  '_controller' => 'AERGUS\\associationBundle\\Controller\\AdminOrientationController::addSectionAction',));
                }

                // ajouter
                if ($pathinfo === '/aergus/admin/orientation/ufr/ajouter') {
                    return array (  '_controller' => 'AERGUS\\associationBundle\\Controller\\AdminOrientationController::ajouterAction',  '_route' => 'ajouter',);
                }

                if (0 === strpos($pathinfo, '/aergus/admin/orientation/ufr/modifier')) {
                    // aergus_association_ufr_modifier
                    if (preg_match('#^/aergus/admin/orientation/ufr/modifier/(?P<libelle>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'aergus_association_ufr_modifier')), array (  '_controller' => 'AERGUS\\associationBundle\\Controller\\AdminOrientationController::modifierUfrAction',));
                    }

                    // aergus_association_ufr_modifier_confirm
                    if ($pathinfo === '/aergus/admin/orientation/ufr/modifier') {
                        return array (  '_controller' => 'AERGUS\\associationBundle\\Controller\\AdminOrientationController::modifierConfirmUfrAction',  '_route' => 'aergus_association_ufr_modifier_confirm',);
                    }

                }

                if (0 === strpos($pathinfo, '/aergus/admin/orientation/ufr/section')) {
                    if (0 === strpos($pathinfo, '/aergus/admin/orientation/ufr/section/modifier')) {
                        // aergus_association_ufr_section_modifier
                        if (preg_match('#^/aergus/admin/orientation/ufr/section/modifier/(?P<libelle>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'aergus_association_ufr_section_modifier')), array (  '_controller' => 'AERGUS\\associationBundle\\Controller\\AdminOrientationController::modifierUfrSectionAction',));
                        }

                        // aergus_association_ufr_section_modifier_confirm
                        if ($pathinfo === '/aergus/admin/orientation/ufr/section/modifier') {
                            return array (  '_controller' => 'AERGUS\\associationBundle\\Controller\\AdminOrientationController::modifierConfirmUfrSectionAction',  '_route' => 'aergus_association_ufr_section_modifier_confirm',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/aergus/admin/orientation/ufr/section/delete')) {
                        // aergus_association_ufr_section_delete
                        if (preg_match('#^/aergus/admin/orientation/ufr/section/delete/(?P<libelle>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'aergus_association_ufr_section_delete')), array (  '_controller' => 'AERGUS\\associationBundle\\Controller\\AdminOrientationController::supprimerUfrSectionAction',));
                        }

                        // aergus_association_ufr_section_delete_confirmed
                        if (preg_match('#^/aergus/admin/orientation/ufr/section/delete/(?P<libelle>[^/]++)/confirmed$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'aergus_association_ufr_section_delete_confirmed')), array (  '_controller' => 'AERGUS\\associationBundle\\Controller\\AdminOrientationController::supprimerConfirmedUfrSectionAction',));
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/aergus/admin/adresse')) {
                // aergus_association_residence_home
                if (rtrim($pathinfo, '/') === '/aergus/admin/adresse') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'aergus_association_residence_home');
                    }

                    return array (  '_controller' => 'AERGUS\\associationBundle\\Controller\\AdminResidenceController::indexAction',  '_route' => 'aergus_association_residence_home',);
                }

                // aergus_association_residence_ajouter_village
                if ($pathinfo === '/aergus/admin/adresse/village/ajouter') {
                    return array (  '_controller' => 'AERGUS\\associationBundle\\Controller\\AdminResidenceController::ajouterVillageAction',  '_route' => 'aergus_association_residence_ajouter_village',);
                }

                // aergus_association_residence_ajouter_block
                if ($pathinfo === '/aergus/admin/adresse/block/ajouter') {
                    return array (  '_controller' => 'AERGUS\\associationBundle\\Controller\\AdminResidenceController::ajouterBlockAction',  '_route' => 'aergus_association_residence_ajouter_block',);
                }

                if (0 === strpos($pathinfo, '/aergus/admin/adresse/delete')) {
                    // aergus_association_residence_supprimer_village
                    if (0 === strpos($pathinfo, '/aergus/admin/adresse/delete/village') && preg_match('#^/aergus/admin/adresse/delete/village/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'aergus_association_residence_supprimer_village')), array (  '_controller' => 'AERGUS\\associationBundle\\Controller\\AdminResidenceController::deleteVillageAction',));
                    }

                    // aergus_association_residence_supprimer_block
                    if (0 === strpos($pathinfo, '/aergus/admin/adresse/delete/block') && preg_match('#^/aergus/admin/adresse/delete/block/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'aergus_association_residence_supprimer_block')), array (  '_controller' => 'AERGUS\\associationBundle\\Controller\\AdminResidenceController::deleteBlockAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/aergus/admin/bureau')) {
                // aergus_association_bureau_home
                if (rtrim($pathinfo, '/') === '/aergus/admin/bureau') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'aergus_association_bureau_home');
                    }

                    return array (  '_controller' => 'AERGUS\\associationBundle\\Controller\\AdminBureauController::indexAction',  '_route' => 'aergus_association_bureau_home',);
                }

                if (0 === strpos($pathinfo, '/aergus/admin/bureau/ajouter-')) {
                    // aergus_association_bureau_ajouter_programme
                    if ($pathinfo === '/aergus/admin/bureau/ajouter-programme') {
                        return array (  '_controller' => 'AERGUS\\associationBundle\\Controller\\AdminBureauController::ajouterProgrammeAction',  '_route' => 'aergus_association_bureau_ajouter_programme',);
                    }

                    // aergus_association_bureau_ajouter
                    if ($pathinfo === '/aergus/admin/bureau/ajouter-bureau') {
                        return array (  '_controller' => 'AERGUS\\associationBundle\\Controller\\AdminBureauController::ajouterBureauAction',  '_route' => 'aergus_association_bureau_ajouter',);
                    }

                }

                // aergus_association_bureau_supprimer
                if (0 === strpos($pathinfo, '/aergus/admin/bureau/supprimer-bureau') && preg_match('#^/aergus/admin/bureau/supprimer\\-bureau/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'aergus_association_bureau_supprimer')), array (  '_controller' => 'AERGUS\\associationBundle\\Controller\\AdminBureauController::supprimerBureauAction',));
                }

                // aergus_association_bureau_modifier
                if (0 === strpos($pathinfo, '/aergus/admin/bureau/modifier-bureau') && preg_match('#^/aergus/admin/bureau/modifier\\-bureau/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'aergus_association_bureau_modifier')), array (  '_controller' => 'AERGUS\\associationBundle\\Controller\\AdminBureauController::modifierBureauAction',));
                }

                // aergus_association_fonction_ajouter
                if ($pathinfo === '/aergus/admin/bureau/ajouter-fonction') {
                    return array (  '_controller' => 'AERGUS\\associationBundle\\Controller\\AdminBureauController::ajouterFonctionAction',  '_route' => 'aergus_association_fonction_ajouter',);
                }

                // aergus_association_fonction_supprimer
                if (0 === strpos($pathinfo, '/aergus/admin/bureau/supprimer-fonction') && preg_match('#^/aergus/admin/bureau/supprimer\\-fonction/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'aergus_association_fonction_supprimer')), array (  '_controller' => 'AERGUS\\associationBundle\\Controller\\AdminBureauController::supprimerFonctionAction',));
                }

                // aergus_association_fonction_modifier
                if (0 === strpos($pathinfo, '/aergus/admin/bureau/modifier-fonction') && preg_match('#^/aergus/admin/bureau/modifier\\-fonction/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'aergus_association_fonction_modifier')), array (  '_controller' => 'AERGUS\\associationBundle\\Controller\\AdminBureauController::modifierFonctionAction',));
                }

                // aergus_association_niveau_ajouter
                if ($pathinfo === '/aergus/admin/bureau/ajouter-niveau') {
                    return array (  '_controller' => 'AERGUS\\associationBundle\\Controller\\AdminBureauController::ajouterNiveauAction',  '_route' => 'aergus_association_niveau_ajouter',);
                }

                // aergus_association_niveau_supprimer
                if (0 === strpos($pathinfo, '/aergus/admin/bureau/supprimer-niveau') && preg_match('#^/aergus/admin/bureau/supprimer\\-niveau/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'aergus_association_niveau_supprimer')), array (  '_controller' => 'AERGUS\\associationBundle\\Controller\\AdminBureauController::supprimerNiveauAction',));
                }

                // aergus_association_niveau_modifier
                if (0 === strpos($pathinfo, '/aergus/admin/bureau/modifier-niveau') && preg_match('#^/aergus/admin/bureau/modifier\\-niveau/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'aergus_association_niveau_modifier')), array (  '_controller' => 'AERGUS\\associationBundle\\Controller\\AdminBureauController::modifierNiveauAction',));
                }

            }

            if (0 === strpos($pathinfo, '/aergus/admin/membre')) {
                // aergus_association_admin_membre_home
                if (preg_match('#^/aergus/admin/membre/(?P<bureau>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'aergus_association_admin_membre_home')), array (  '_controller' => 'AERGUS\\associationBundle\\Controller\\AdminMembreController::indexAction',));
                }

                // aergus_association_admin_membre_ajouter
                if (preg_match('#^/aergus/admin/membre/(?P<bureau>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'aergus_association_admin_membre_ajouter')), array (  '_controller' => 'AERGUS\\associationBundle\\Controller\\AdminMembreController::ajouterAction',));
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
