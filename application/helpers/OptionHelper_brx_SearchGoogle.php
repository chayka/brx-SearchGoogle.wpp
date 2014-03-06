<?php

class OptionHelper_brx_SearchGoogle {
    public static function getOption($option, $default='', $reload = false){
        $key = 'brx_SearchGoogle.'.$option;
        return get_site_option($key, $default, !$reload);
    }
    
    public static function setOption($option, $value){
        $key = 'brx_SearchGoogle.'.$option;
        return update_site_option($key, $value);
    }
    
}