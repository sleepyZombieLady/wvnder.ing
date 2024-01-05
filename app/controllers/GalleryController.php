<?php

// Controller: Home

namespace wvnder\Controllers;

use \wvnder\Core\Controller as Controller;
use \wvnder\Models\HomeModel;
use \wvnder\Helpers\Time;

class GalleryController extends Controller
{
    /**
     * index - main login index
     *
     * @return void
     */
    function index()
    {
		$this->viewOpts['page']['layout']  = 'default';
        $this->viewOpts['page']['content'] = 'gallery/index';
        $this->viewOpts['page']['section'] = 'gallery';
        $this->viewOpts['page']['title']   = 'Gallery';

        $this->view->load($this->viewOpts, $this->viewData);
    }
}

