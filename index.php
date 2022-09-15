
<?php


require_once 'Config/config.php';
require_once 'Autoloader.php';

use App\Autoloader;
use App\Service\Router;
use App\Controller\HomeController; // not created yet

Autoloader::$folderList =
    [
        "App/Model/",
        "App/Controller/",
        "App/Repository/",
        "App/Service/",
        "App/Form/"
    ];
Autoloader::register();

session_start();

try {

    $router = new Router($_GET['url']);

    $router->get('/', function () {
        echo (new HomeController)->invoke();
    });

    $router->run();
} catch (Exception $e) {
    die('Error: ' . $e);
}
