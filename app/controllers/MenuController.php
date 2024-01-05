<?php

// Controller: Home

namespace wvnder\Controllers;

use \wvnder\Core\Controller as Controller;
use \wvnder\Models\HomeModel;
use \wvnder\Helpers\Time;

class MenuController extends Controller
{
    /**
     * index - main login index
     *
     * @return void
     */
    function index()
    {
		$this->viewOpts['page']['layout']  = 'default';
        $this->viewOpts['page']['content'] = 'menu/index';
        $this->viewOpts['page']['section'] = 'menu';
        $this->viewOpts['page']['title']   = 'Menu';

        $this->view->load($this->viewOpts, $this->viewData);
    }
}

