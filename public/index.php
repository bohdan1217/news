<?

require __DIR__ . "/../vendor/autoload.php";



$router = new Core\Router();


error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');


$router->add('', ['controller' => 'Main', 'action' => 'index']);
$router->add('news', ['controller' => 'News', 'action' => 'index']);


$router->add('{controller}/{action}/{id:\d+}');


$router->add('{controller}/{action}');

$router->dispatch($_SERVER['QUERY_STRING']);

?>