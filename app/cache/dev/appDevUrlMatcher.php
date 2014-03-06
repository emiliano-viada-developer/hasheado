<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
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

        if (0 === strpos($pathinfo, '/css/3c28bd7')) {
            // _assetic_3c28bd7
            if ($pathinfo === '/css/3c28bd7.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '3c28bd7',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_3c28bd7',);
            }

            if (0 === strpos($pathinfo, '/css/3c28bd7_')) {
                if (0 === strpos($pathinfo, '/css/3c28bd7_bootstrap-')) {
                    // _assetic_3c28bd7_0
                    if ($pathinfo === '/css/3c28bd7_bootstrap-classic_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3c28bd7',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_3c28bd7_0',);
                    }

                    // _assetic_3c28bd7_1
                    if ($pathinfo === '/css/3c28bd7_bootstrap-responsive_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3c28bd7',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_3c28bd7_1',);
                    }

                }

                // _assetic_3c28bd7_2
                if ($pathinfo === '/css/3c28bd7_charisma-app_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3c28bd7',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_3c28bd7_2',);
                }

                // _assetic_3c28bd7_3
                if ($pathinfo === '/css/3c28bd7_uniform.default_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3c28bd7',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_3c28bd7_3',);
                }

                // _assetic_3c28bd7_4
                if ($pathinfo === '/css/3c28bd7_chosen_5.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3c28bd7',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_3c28bd7_4',);
                }

                // _assetic_3c28bd7_5
                if ($pathinfo === '/css/3c28bd7_main_6.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3c28bd7',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_3c28bd7_5',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/58800bb')) {
            // _assetic_58800bb
            if ($pathinfo === '/js/58800bb.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '58800bb',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_58800bb',);
            }

            if (0 === strpos($pathinfo, '/js/58800bb_')) {
                if (0 === strpos($pathinfo, '/js/58800bb_bootstrap')) {
                    // _assetic_58800bb_0
                    if ($pathinfo === '/js/58800bb_bootstrap.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '58800bb',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_58800bb_0',);
                    }

                    if (0 === strpos($pathinfo, '/js/58800bb_bootstrap-')) {
                        // _assetic_58800bb_1
                        if ($pathinfo === '/js/58800bb_bootstrap-modal_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '58800bb',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_58800bb_1',);
                        }

                        // _assetic_58800bb_2
                        if ($pathinfo === '/js/58800bb_bootstrap-collapse_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '58800bb',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_58800bb_2',);
                        }

                    }

                }

                // _assetic_58800bb_3
                if ($pathinfo === '/js/58800bb_jquery.chosen.min_4.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '58800bb',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_58800bb_3',);
                }

                // _assetic_58800bb_4
                if ($pathinfo === '/js/58800bb_hasheado-blog-admin_5.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '58800bb',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_58800bb_4',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/73d3c69')) {
                // _assetic_73d3c69
                if ($pathinfo === '/css/73d3c69.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '73d3c69',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_73d3c69',);
                }

                if (0 === strpos($pathinfo, '/css/73d3c69_')) {
                    // _assetic_73d3c69_0
                    if ($pathinfo === '/css/73d3c69_bootstrap-classic_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '73d3c69',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_73d3c69_0',);
                    }

                    // _assetic_73d3c69_1
                    if ($pathinfo === '/css/73d3c69_charisma-app_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '73d3c69',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_73d3c69_1',);
                    }

                    // _assetic_73d3c69_2
                    if ($pathinfo === '/css/73d3c69_bootstrap-responsive.min_3.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '73d3c69',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_73d3c69_2',);
                    }

                    // _assetic_73d3c69_3
                    if ($pathinfo === '/css/73d3c69_main_4.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '73d3c69',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_73d3c69_3',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/css/0d33710')) {
                // _assetic_0d33710
                if ($pathinfo === '/css/0d33710.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0d33710',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_0d33710',);
                }

                if (0 === strpos($pathinfo, '/css/0d33710_')) {
                    if (0 === strpos($pathinfo, '/css/0d33710_bootstrap-')) {
                        // _assetic_0d33710_0
                        if ($pathinfo === '/css/0d33710_bootstrap-responsive.min_1.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '0d33710',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_0d33710_0',);
                        }

                        // _assetic_0d33710_1
                        if ($pathinfo === '/css/0d33710_bootstrap-classic_2.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '0d33710',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_0d33710_1',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/css/0d33710_sh')) {
                        if (0 === strpos($pathinfo, '/css/0d33710_shCore')) {
                            // _assetic_0d33710_2
                            if ($pathinfo === '/css/0d33710_shCore_3.css') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '0d33710',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_0d33710_2',);
                            }

                            // _assetic_0d33710_3
                            if ($pathinfo === '/css/0d33710_shCoreDefault_4.css') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '0d33710',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_0d33710_3',);
                            }

                        }

                        // _assetic_0d33710_4
                        if ($pathinfo === '/css/0d33710_shThemeRDark_5.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '0d33710',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_0d33710_4',);
                        }

                    }

                    // _assetic_0d33710_5
                    if ($pathinfo === '/css/0d33710_main_6.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0d33710',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_0d33710_5',);
                    }

                    // _assetic_0d33710_6
                    if ($pathinfo === '/css/0d33710_spaces_7.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0d33710',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_0d33710_6',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/js/78df32c')) {
            // _assetic_78df32c
            if ($pathinfo === '/js/78df32c.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '78df32c',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_78df32c',);
            }

            if (0 === strpos($pathinfo, '/js/78df32c_')) {
                if (0 === strpos($pathinfo, '/js/78df32c_bootstrap')) {
                    // _assetic_78df32c_0
                    if ($pathinfo === '/js/78df32c_bootstrap.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '78df32c',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_78df32c_0',);
                    }

                    // _assetic_78df32c_1
                    if ($pathinfo === '/js/78df32c_bootstrap-modal_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '78df32c',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_78df32c_1',);
                    }

                }

                if (0 === strpos($pathinfo, '/js/78df32c_sh')) {
                    // _assetic_78df32c_2
                    if ($pathinfo === '/js/78df32c_shCore_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '78df32c',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_78df32c_2',);
                    }

                    if (0 === strpos($pathinfo, '/js/78df32c_shBrush')) {
                        // _assetic_78df32c_3
                        if ($pathinfo === '/js/78df32c_shBrushJScript_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '78df32c',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_78df32c_3',);
                        }

                        // _assetic_78df32c_4
                        if ($pathinfo === '/js/78df32c_shBrushPhp_5.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '78df32c',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_78df32c_4',);
                        }

                        // _assetic_78df32c_5
                        if ($pathinfo === '/js/78df32c_shBrushBash_6.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '78df32c',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_78df32c_5',);
                        }

                        // _assetic_78df32c_6
                        if ($pathinfo === '/js/78df32c_shBrushCss_7.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '78df32c',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_78df32c_6',);
                        }

                        // _assetic_78df32c_7
                        if ($pathinfo === '/js/78df32c_shBrushPlain_8.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '78df32c',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_78df32c_7',);
                        }

                        // _assetic_78df32c_8
                        if ($pathinfo === '/js/78df32c_shBrushSql_9.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '78df32c',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_78df32c_8',);
                        }

                        // _assetic_78df32c_9
                        if ($pathinfo === '/js/78df32c_shBrushXml_10.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '78df32c',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_78df32c_9',);
                        }

                    }

                }

                // _assetic_78df32c_10
                if ($pathinfo === '/js/78df32c_hasheado-blog_11.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '78df32c',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_78df32c_10',);
                }

            }

        }

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

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

        }

        // hasheado_blog_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'hasheado_blog_homepage');
            }

            return array (  '_controller' => 'Hasheado\\BlogBundle\\Controller\\DefaultController::indexAction',  'page' => 1,  '_route' => 'hasheado_blog_homepage',);
        }

        // hasheado_blog_homepage_pagination
        if (0 === strpos($pathinfo, '/page') && preg_match('#^/page(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hasheado_blog_homepage_pagination')), array (  '_controller' => 'Hasheado\\BlogBundle\\Controller\\DefaultController::indexAction',  'page' => 1,));
        }

        // hasheado_blog_post_detail
        if (preg_match('#^/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hasheado_blog_post_detail')), array (  '_controller' => 'Hasheado\\BlogBundle\\Controller\\BlogPostController::postDetailAction',));
        }

        if (0 === strpos($pathinfo, '/c')) {
            // hasheado_blog_comment_post
            if ($pathinfo === '/comment/post') {
                return array (  '_controller' => 'Hasheado\\BlogBundle\\Controller\\DefaultController::commentAction',  '_route' => 'hasheado_blog_comment_post',);
            }

            // hasheado_blog_post_by_category
            if (0 === strpos($pathinfo, '/category') && preg_match('#^/category/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hasheado_blog_post_by_category')), array (  '_controller' => 'Hasheado\\BlogBundle\\Controller\\BlogCategoryController::byCategoryAction',));
            }

        }

        // hasheado_blog_post_archive
        if (0 === strpos($pathinfo, '/archive') && preg_match('#^/archive/(?P<year>[^/]++)/(?P<month>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hasheado_blog_post_archive')), array (  '_controller' => 'Hasheado\\BlogBundle\\Controller\\DefaultController::archiveAction',));
        }

        // hasheado_blog_post_tags
        if (0 === strpos($pathinfo, '/tags') && preg_match('#^/tags/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hasheado_blog_post_tags')), array (  '_controller' => 'Hasheado\\BlogBundle\\Controller\\BlogPostController::byTagAction',));
        }

        // hasheado_blog_search
        if ($pathinfo === '/search/query') {
            return array (  '_controller' => 'Hasheado\\BlogBundle\\Controller\\DefaultController::searchAction',  'page' => 1,  '_route' => 'hasheado_blog_search',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/log')) {
                if (0 === strpos($pathinfo, '/admin/login')) {
                    // hasheado_blog_admin_login
                    if ($pathinfo === '/admin/login') {
                        return array (  '_controller' => 'Hasheado\\BlogBundle\\Controller\\Admin\\SecurityController::loginAction',  '_route' => 'hasheado_blog_admin_login',);
                    }

                    // hasheado_blog_admin_login_check
                    if ($pathinfo === '/admin/login_check') {
                        return array('_route' => 'hasheado_blog_admin_login_check');
                    }

                }

                // hasheado_blog_admin_logout
                if ($pathinfo === '/admin/logout') {
                    return array('_route' => 'hasheado_blog_admin_logout');
                }

            }

            // hasheado_blog_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Hasheado\\BlogBundle\\Controller\\Admin\\DefaultController::indexAction',  '_route' => 'hasheado_blog_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/post')) {
                if (0 === strpos($pathinfo, '/admin/posts')) {
                    // hasheado_blog_admin_post_list
                    if ($pathinfo === '/admin/posts') {
                        return array (  '_controller' => 'Hasheado\\BlogBundle\\Controller\\Admin\\BlogPostController::listAction',  '_route' => 'hasheado_blog_admin_post_list',);
                    }

                    // hasheado_blog_admin_post_pagination
                    if (0 === strpos($pathinfo, '/admin/posts/page') && preg_match('#^/admin/posts/page(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'hasheado_blog_admin_post_pagination')), array (  '_controller' => 'Hasheado\\BlogBundle\\Controller\\Admin\\BlogPostController::listAction',  'page' => 1,));
                    }

                    // hasheado_blog_admin_post_filter
                    if (0 === strpos($pathinfo, '/admin/posts/filter') && preg_match('#^/admin/posts/filter/(?P<field>[^/]++)/(?P<mode>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'hasheado_blog_admin_post_filter')), array (  '_controller' => 'Hasheado\\BlogBundle\\Controller\\Admin\\BlogPostController::filterAction',));
                    }

                }

                // hasheado_blog_admin_post_add
                if ($pathinfo === '/admin/post/add') {
                    return array (  '_controller' => 'Hasheado\\BlogBundle\\Controller\\Admin\\BlogPostController::addAction',  '_route' => 'hasheado_blog_admin_post_add',);
                }

                // hasheado_blog_admin_post_edit
                if (preg_match('#^/admin/post/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hasheado_blog_admin_post_edit')), array (  '_controller' => 'Hasheado\\BlogBundle\\Controller\\Admin\\BlogPostController::editAction',));
                }

                // hasheado_blog_admin_post_delete
                if (preg_match('#^/admin/post/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hasheado_blog_admin_post_delete')), array (  '_controller' => 'Hasheado\\BlogBundle\\Controller\\Admin\\BlogPostController::deleteAction',));
                }

            }

            // hasheado_blog_admin_upload_file
            if ($pathinfo === '/admin/upload') {
                return array (  '_controller' => 'Hasheado\\BlogBundle\\Controller\\Admin\\BlogPostController::uploadAction',  '_route' => 'hasheado_blog_admin_upload_file',);
            }

            if (0 === strpos($pathinfo, '/admin/c')) {
                if (0 === strpos($pathinfo, '/admin/categor')) {
                    if (0 === strpos($pathinfo, '/admin/categories')) {
                        // hasheado_blog_admin_category_list
                        if ($pathinfo === '/admin/categories') {
                            return array (  '_controller' => 'Hasheado\\BlogBundle\\Controller\\Admin\\BlogCategoryController::listAction',  '_route' => 'hasheado_blog_admin_category_list',);
                        }

                        // hasheado_blog_admin_category_pagination
                        if (0 === strpos($pathinfo, '/admin/categories/page') && preg_match('#^/admin/categories/page(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hasheado_blog_admin_category_pagination')), array (  '_controller' => 'Hasheado\\BlogBundle\\Controller\\Admin\\BlogCategoryController::listAction',  'page' => 1,));
                        }

                        // hasheado_blog_admin_category_filter
                        if (0 === strpos($pathinfo, '/admin/categories/filter') && preg_match('#^/admin/categories/filter/(?P<field>[^/]++)/(?P<mode>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hasheado_blog_admin_category_filter')), array (  '_controller' => 'Hasheado\\BlogBundle\\Controller\\Admin\\BlogCategoryController::filterAction',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/category')) {
                        // hasheado_blog_admin_category_add
                        if ($pathinfo === '/admin/category/add') {
                            return array (  '_controller' => 'Hasheado\\BlogBundle\\Controller\\Admin\\BlogCategoryController::addAction',  '_route' => 'hasheado_blog_admin_category_add',);
                        }

                        // hasheado_blog_admin_category_edit
                        if (preg_match('#^/admin/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hasheado_blog_admin_category_edit')), array (  '_controller' => 'Hasheado\\BlogBundle\\Controller\\Admin\\BlogCategoryController::editAction',));
                        }

                        // hasheado_blog_admin_category_delete
                        if (preg_match('#^/admin/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hasheado_blog_admin_category_delete')), array (  '_controller' => 'Hasheado\\BlogBundle\\Controller\\Admin\\BlogCategoryController::deleteAction',));
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/comment')) {
                    if (0 === strpos($pathinfo, '/admin/comments')) {
                        // hasheado_blog_admin_comment_list
                        if ($pathinfo === '/admin/comments') {
                            return array (  '_controller' => 'Hasheado\\BlogBundle\\Controller\\Admin\\BlogCommentController::listAction',  '_route' => 'hasheado_blog_admin_comment_list',);
                        }

                        // hasheado_blog_admin_comment_pagination
                        if (0 === strpos($pathinfo, '/admin/comments/page') && preg_match('#^/admin/comments/page(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hasheado_blog_admin_comment_pagination')), array (  '_controller' => 'Hasheado\\BlogBundle\\Controller\\Admin\\BlogCommentController::listAction',  'page' => 1,));
                        }

                        // hasheado_blog_admin_comment_filter
                        if (0 === strpos($pathinfo, '/admin/comments/filter') && preg_match('#^/admin/comments/filter/(?P<field>[^/]++)/(?P<mode>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hasheado_blog_admin_comment_filter')), array (  '_controller' => 'Hasheado\\BlogBundle\\Controller\\Admin\\BlogCommentController::filterAction',));
                        }

                    }

                    // hasheado_blog_admin_comment_add
                    if ($pathinfo === '/admin/comment/add') {
                        return array (  '_controller' => 'Hasheado\\BlogBundle\\Controller\\Admin\\BlogCommentController::addAction',  '_route' => 'hasheado_blog_admin_comment_add',);
                    }

                    // hasheado_blog_admin_comment_edit
                    if (preg_match('#^/admin/comment/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'hasheado_blog_admin_comment_edit')), array (  '_controller' => 'Hasheado\\BlogBundle\\Controller\\Admin\\BlogCommentController::editAction',));
                    }

                    // hasheado_blog_admin_comment_delete
                    if (preg_match('#^/admin/comment/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'hasheado_blog_admin_comment_delete')), array (  '_controller' => 'Hasheado\\BlogBundle\\Controller\\Admin\\BlogCommentController::deleteAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/tag')) {
                if (0 === strpos($pathinfo, '/admin/tags')) {
                    // hasheado_blog_admin_tag_list
                    if ($pathinfo === '/admin/tags') {
                        return array (  '_controller' => 'Hasheado\\BlogBundle\\Controller\\Admin\\BlogTagController::listAction',  '_route' => 'hasheado_blog_admin_tag_list',);
                    }

                    // hasheado_blog_admin_tag_pagination
                    if (0 === strpos($pathinfo, '/admin/tags/page') && preg_match('#^/admin/tags/page(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'hasheado_blog_admin_tag_pagination')), array (  '_controller' => 'Hasheado\\BlogBundle\\Controller\\Admin\\BlogTagController::listAction',  'page' => 1,));
                    }

                    // hasheado_blog_admin_tag_filter
                    if (0 === strpos($pathinfo, '/admin/tags/filter') && preg_match('#^/admin/tags/filter/(?P<field>[^/]++)/(?P<mode>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'hasheado_blog_admin_tag_filter')), array (  '_controller' => 'Hasheado\\BlogBundle\\Controller\\Admin\\BlogTagController::filterAction',));
                    }

                }

                // hasheado_blog_admin_tag_add
                if ($pathinfo === '/admin/tag/add') {
                    return array (  '_controller' => 'Hasheado\\BlogBundle\\Controller\\Admin\\BlogTagController::addAction',  '_route' => 'hasheado_blog_admin_tag_add',);
                }

                // hasheado_blog_admin_tag_edit
                if (preg_match('#^/admin/tag/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hasheado_blog_admin_tag_edit')), array (  '_controller' => 'Hasheado\\BlogBundle\\Controller\\Admin\\BlogTagController::editAction',));
                }

                // hasheado_blog_admin_tag_delete
                if (preg_match('#^/admin/tag/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'hasheado_blog_admin_tag_delete')), array (  '_controller' => 'Hasheado\\BlogBundle\\Controller\\Admin\\BlogTagController::deleteAction',));
                }

            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
