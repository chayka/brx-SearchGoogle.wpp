<?php

class brx_SearchGoogle_Bootstrap extends WpPluginBootstrap{
    
    const MODULE = 'brx_SearchGoogle';

    public function run(){
        parent::run();
//        WpHelper::getInstance();
        
    }
    
    public function getModuleName() {
        return self::MODULE;
    }
    
    public function setupRouting(){
        $router = parent::setupRouting();
        $router->addRoute('search', new Zend_Controller_Router_Route('search/:q', array('controller' => 'search', 'action'=>'search', 'module'=>self::MODULE, 'q'=>'')));

        //  Uncomment this if you need custom 404 page 
        //  and customize ErrorController->notFound404Action() and it's view
        //  $router->addRoute('not-found-404', new Zend_Controller_Router_Route('not-found-404', array('controller' => 'error', 'action'=>'not-found-404', 'module'=>self::MODULE), array()));        
        
    }


}

