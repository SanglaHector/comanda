<?php
require __DIR__ . '/../vendor/autoload.php';
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
//Configuracion base de datos
use Config\Database;
//Controladores 
use Controllers\ClienteController;
use Controllers\EncuestaController;
use Controllers\EstadoController;
use Controllers\LogController;
use Controllers\MesaController;
use Controllers\OperacionController;
use Controllers\PedidoController;
use Controllers\ProductoController;
use Controllers\SectorController;
use Controllers\TicketController;
use Controllers\TipoUsuarioController;
use Controllers\EmpleadoController;
//Enumerados
use Enums\Eestado;

$app = AppFactory::create();
$app->setBasePath("/comanda");
$database = new Database();
//pruebas
$app->get('/hello/{name}', function (Request $request, Response $response, $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");
    return $response;
});
//Empelados
$app->post('/Empleado',EmpleadoController::class.':addOne');
$app->get('/Empleados',EmpleadoController::class.':getAll');

$app->addRoutingMiddleware();
$errorMiddleware = $app->addErrorMiddleware(true, true, true);
$app->run();
