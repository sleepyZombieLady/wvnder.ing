<?php

// Controller: Home

namespace wvnder\Controllers;

use \wvnder\Core\Controller as Controller;
use \wvnder\Models\HomeModel;
use \wvnder\Helpers\Time;

class AboutController extends Controller
{
    /**
     * index - main login index
     *
     * @return void
     */
    function index()
    {
		$this->viewOpts['page']['layout']  = 'default';
        $this->viewOpts['page']['content'] = 'about/index';
        $this->viewOpts['page']['section'] = 'about';
        $this->viewOpts['page']['title']   = 'About';

        $this->view->load($this->viewOpts, $this->viewData);
    }
}

