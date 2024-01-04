<?php
namespace wvnder\Core;

class View
{
    /**
     * load a view using specific view options and view data
     * @method  load
     * @param   array   $viewOpts   options to be used
     * @param   array   $viewData   data objects to be used
     * @return  void
     */
    function load($viewOpts = [], $viewData = [])
    {
        // assign data variables to easy named ones
        if (!empty($viewData)) {
            foreach ($viewData as $var => $value) {
                $$var = $value;
            }
        }

        if (!empty($viewOpts['page']['layout'])) {
            include(views . '/_layouts/' . $viewOpts['page']['layout'] . '.php');
        } else {
            include(views . '/content/' . $viewOpts['page']['content'] . '.php');
        }
    }
}
