<?php

// GET / -- this is the public homepage everyone sees
$base->get("/", function () {
    $controller = new wvnder\Controllers\HomeController;
    return $controller->{'index'}();
});
