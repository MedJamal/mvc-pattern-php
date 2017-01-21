<?php

namespace Core\Foundation;

use Core\Routing\Router;

/**
 * Pour créer l'application
 */
class Application
{
    /**
     * @var Router
     */
    private $router;

    /**
     *  Applicationconstructor.
     */
    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    /**
     * Cahrger la liste des routes et exécuter le Routing
     */
    public function run()
    {
        $this->router->run();
    }
}
