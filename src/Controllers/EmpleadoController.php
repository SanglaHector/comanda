<?php
namespace Controllers;

use Interfaces\IDatabase;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Models\Empleado;

class EmpleadoController implements IDatabase
{
    function addOne(Request $request, Response $response, $args)
    {
        $response->getBody()->write('Agrego uno');
        $usuario = new Empleado();
        $usuario->id = 1;
        $usuario->id_tipo = 1;
        $usuario->id_sector = 1;
        $usuario->nombre = 'Hector';
        $usuario->apellido = "Sangla";
        $usuario->mail = "sanglahector@gmail.com";
        $usuario->clave = "12345678";
        $usuario->id_log = 1;
        $usuario->id_estado = 1;
        $usuario->save();
        return $response;
    }
    function getOne(Request $request, Response $response, $args)
    {
    }
    function getAll(Request $request, Response $response, $args)
    {
        $users = Empleado::all([
            'id',
            'id_tipo',
            'id_sector',
            'nombre',
            'apellido',
            'mail',
            'clave',
            'id_log',
            'id_estado'
        ]);

        $response->getBody()->write(json_encode($users));
        return $response;
    }
    function deleteOne(Request $request, Response $response, $args)
    {
    }
    function deleteAll(Request $request, Response $response, $args)
    {
    }
    function updateOne(Request $request, Response $response, $args)
    {
    }
    function updateAll(Request $request, Response $response, $args)
    {
    }
}