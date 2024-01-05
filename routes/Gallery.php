<?php

// GET / -- this is the gallery page!
$base->get("/gallery", function () {
    $controller = new wvnder\Controllers\GalleryController;
    return $controller->{'index'}();
});
