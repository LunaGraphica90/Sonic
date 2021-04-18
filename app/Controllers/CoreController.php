<?php

namespace Sonic\Controllers;

use Sonic\Models\Heroes;

class CoreController
{
    protected function show($viewName, $viewData = [])
    {

        global $router;


        $viewData['urlPrefix'] = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['BASE_URI'] . '/';

        $heroes = new Heroes();
        $viewData['index'] = $heroes->findForHome();

        extract($viewData);

        require __DIR__ . '/../views/header.tpl.php';
        require __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require __DIR__ . '/../views/footer.tpl.php';
    }
}