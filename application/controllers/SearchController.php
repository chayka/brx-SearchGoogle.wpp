<?php
class brx_SearchGoogle_SearchController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function searchAction()
    {
        $query = InputHelper::getParam('q');
        $this->view->query = $query;
        $this->view->seID = OptionHelper_brx_SearchGoogle::getOption('se_ID');
        HtmlHelper::setSidebarId('google-search');
    }


}

