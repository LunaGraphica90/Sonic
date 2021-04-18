<?php

namespace Sonic\Controllers;

use Sonic\Models\Heroes;

class MainController extends CoreController
{
    public function home()
    {
        $heroes = new Heroes();
        $hero = $heroes->findForHome();

        $this->show('index', [
            'hero' => $hero,
        ]);
    }

    public function creator()
    {
        $this->show('creator');
    }

    public function error404()
    {
        http_response_code(404);
        echo '404, non trouvée';
    }
}