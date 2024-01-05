<?php

// Controller: Home

namespace wvnder\Controllers;

use \wvnder\Core\Controller as Controller;
use \wvnder\Models\HomeModel;
use \wvnder\Helpers\Time;

class HomeController extends Controller
{
    /**
     * index - main login index
     *
     * @return void
     */
    function index()
    {
		$this->viewOpts['page']['layout']  = 'default';
        $this->viewOpts['page']['content'] = 'home/index';
        $this->viewOpts['page']['section'] = 'home';
        $this->viewOpts['page']['title']   = 'Home';

        $this->view->load($this->viewOpts, $this->viewData);
    }
}

