<?php

// GET / -- this is the public homepage everyone sees
$base->get("/about", function () {
    $controller = new wvnder\Controllers\AboutController;
    return $controller->{'index'}();
});
