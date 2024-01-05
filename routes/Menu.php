<?php

// GET / -- the food & drinks menu!
$base->get("/menu", function () {
    $controller = new wvnder\Controllers\MenuController;
    return $controller->{'index'}();
});
