
<?php


require_once 'Config/config.php';
require_once 'Autoloader.php';

use App\Autoloader;
use App\Service\Router;
use App\Controller\HomeController; // not created yet
use App\Controller\ArticleController; // not created yet

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

    $router->get('/admin/article', function () {
        echo (new ArticleController)->invoke();
    });

    $router->get('/admin/article/add', function () {
        echo (new ArticleController)->addArticle();
    });

    $router->post('/admin/article/add', function () {
        echo (new ArticleController)->addArticle();
    });


    $router->run();
} catch (Exception $e) {
    die('Error: ' . $e);
}
