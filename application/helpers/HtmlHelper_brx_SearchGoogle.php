<?php

/**
 * This helper lets render some specific html pieces outside of MVC logic
 */

class HtmlHelper_brx_SearchGoogle{
    
    /**
     * Get zend view
     * 
     * @return \Zend_View
     */
    public static function getView(){
        $view = new Zend_View();
        $view->setScriptPath(BRX_SEARCHGOOGLE_PATH.'application/views/scripts');
        
        return $view;
    }
    
    /**
     * Render zend view with supplied vars
     * 
     * @param string $path
     * @param array $vars
     * @return string
     */
    public static function renderView($path, $vars = array(), $output = true){
        $view = self::getView();
        foreach($vars as $key=>$val){
            $view->assign($key, $val);
        }
        $res = $view->render($path);
        if($output){
            echo $res;
        }
        return $res;
    }
    
    public static function renderSearchPage($output = true){
        return self::renderView('search/search.phtml', array(
            'seID'=>OptionHelper_brx_SearchGoogle::getOption('se_ID'),
        ), $output);
    }
}

