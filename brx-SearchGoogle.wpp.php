<?php
/*
  Plugin Name: brx-SearchGoogle
  Plugin URI: http://github.com/chayka/brx-SearchGoogle.git
  Description: Search by google custom search.
  Version: 1.0
  Author: Boris Mossounov
  Author URI: http://facebook.com/mossounov
  License: GPL2
 */
require_once 'application/helpers/WidgetHelper_brx_SearchGoogle.php';
require_once 'application/helpers/HtmlHelper_brx_SearchGoogle.php';
require_once 'application/helpers/OptionHelper_brx_SearchGoogle.php';
class brx_SearchGoogle extends WpPlugin{
    
    protected static $instance = null;
    
    const POST_TYPE_DUMMY = 'dummy';
    const TAXONOMY_DUMMY_TAG = 'dummy-tag';
    
    public static function baseUrl(){
        echo BRX_SEARCHGOOGLE_URL;
    }
    
    public static function init() {
        
        NlsHelper::load('brx_SearchGoogle');

        self::$instance = $plugin = new brx_SearchGoogle(__FILE__, array(
            'search', 
        ));
        
        $plugin->addSupport_ConsolePages();
        
//        $plugin->addSupport_Metaboxes();

        //  Uncomment if you need processing on post create, update, delete    
        //  $plugin->addSupport_PostProcessing();

    }

    public static function getInstance() {
        return self::$instance;
    }

    public function registerCustomPostTypes() {
    }

    public function enableSearch($query){
        return $query;
    }
    
    public function registerTaxonomies(){
    }


    public function registerMetaBoxes() {
        
//        $this->addMetaBox('seo_params',
//            NlsHelper::_( 'SEO Params'),
//            '/metabox/seo-params',
//            'normal',
//            'high');
    }
    
    public function registerResources($minimize = false){
//        $this->registerStyle('brx.SearchGoogle.body', 'brx.SearchGoogle.body.less');
//        $this->registerStyle('brx.SearchGoogle.mainPage', 'brx.SearchGoogle.mainPage.less');
//        $this->registerStyle('brx.SearchGoogle.viewEntry', 'brx.SearchGoogle.viewEntry.less');
//        $this->registerStyle('brx.SearchGoogle.listEntries', 'brx.SearchGoogle.listEntries.less');
//        $this->registerStyle('brx.SearchGoogle.404', 'brx.SearchGoogle.404.less');
//        $this->registerStyle('brx.SearchGoogle.Dummy.view', 'void.Dummy.view.less', array());
//        $this->registerScript('brx.SearchGoogle.Dummy.view', 'void.Dummy.view.view.js', array('backbone-brx', 'brx.SearchGoogle.Dummy.nls'));
//        NlsHelper::registerScriptNls('brx.SearchGoogle.Dummy.nls', 'brx.SearchGoogle.Dummy.view.js');
    }
    
    public function registerActions(){
//        $this->addAction('add_meta_boxes', array('wpp_MCC_v2', 'addMetaBoxStaff') );
    }
    
    public function registerFilters(){
//        $this->addFilter( 'the_search_query', 'enableSearch');
//        remove_filter('the_content', 'prepend_attachment', 10);
    }
    public function registerConsolePages() {
        $this->addConsolePage('Google Search', 'Google Search', 'update_core', 'brx-searchgoogle-plugin-options', '/admin/plugin-options');

    }

    public function registerSidebars() {
        register_sidebar(array(
            'name'=>NlsHelper::_('Google Search'),
            'id'=>'google-search',
//            'before_widget' => '',
//            'after_widget'  => '',
//            'before_title'  => "<!--",
//            'after_title'   => "-->\n"             
        ));
    }

    public static function blockStyles($block = true) {
        
    }
}

add_action('init', array('brx_SearchGoogle', 'init'));
