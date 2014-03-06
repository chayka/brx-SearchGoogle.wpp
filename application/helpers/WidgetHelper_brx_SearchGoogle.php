<?php

class WidgetHelper_brx_SearchGoogle extends WidgetHelper{
    
    public static function renderWidget($data, $tpl, $js, $css = null) {
        parent::addScriptPath(BRX_SEARCHGOOGLE_APPLICATION_PATH.'/views/scripts');
        return parent::renderWidget($data, $tpl, $js, $css);
    }
    
    public static function renderDummy($user){
        return self::renderWidget(array('user'=>$user), 'widgets/brx.SearchGoogle.Dummy.view.phtml', 'brx.SearchGoogle.Dummy.view');
    }

    public static function renderDummyForm($user){
        return self::renderWidget(array('user'=>$user), 'widgets/brx.SearchGoogle.DummyForm.view.phtml', 'brx.SearchGoogle.DummyForm.view');
    }
}
