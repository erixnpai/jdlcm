<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\DashboardController;
use Controllers\LoginController;
use MVC\Router;
$router = new Router();
// $router->get("/", function(){
//     echo "Hola mundo";
// });

$router->get("/", [LoginController::class, "index"]);
$router->post("/login", [LoginController::class, "index"]);



$router->get("/dashboard", [DashboardController::class, "index"]);




// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();