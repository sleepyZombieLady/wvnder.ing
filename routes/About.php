<?php

// GET / -- this is the about us page!
$base->get("/about", function () {
    $controller = new wvnder\Controllers\AboutController;
    return $controller->{'index'}();
});
