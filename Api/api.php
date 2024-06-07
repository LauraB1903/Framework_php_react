<?php

// include ('../Models/ProductoDAO.php');

// header("Content-Type: application/json");

// $method = $_SERVER['REQUEST_METHOD'];

// $class = new ProductoDAO();

// switch ($method) {
//     case 'GET':
//         $resultado = $class->TraerClases();
//         echo(json_encode($resultado));
//         break;

//     case 'POST':
//         $data = json_decode(file_get_contents('php://input'), true);
//         $id = $data['id'];
//         $nombre = $data['nombre'];
//         $descripcion = $data['descripcion'];
//         $respuesta = $class->agregarClases($id, $nombre, $descripcion);
//         echo(json_encode($respuesta));
//         break;

//     case 'DELETE':
//         $data = json_decode(file_get_contents('php://input'), true);
//         $eliminar = $class->eliminarClases($data['id']);
//         echo(json_encode($eliminar));
//         break;

//     case 'PUT':
//         $data = json_decode(file_get_contents('php://input'), true);
//         $respuesta = $class->actualizarClase($data['id'],$data ['nombre'], $data['descripcion']);
//         echo(json_encode($respuesta));
//         break;

//     default;
//     http_response_code(405);
//     echo json_encode(array("message"=>"Metodo No Permitido"));
//     break;

// }

include ('../Models/ProductoDAO.php');

header("Content-Type: application/json");

header("Access-Control-Allow-Origin: *");

header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");

$method = $_SERVER['REQUEST_METHOD'];

$class = new ProductoDAO();

switch ($method) {
    case 'GET':
        $resultado = $class->TraerClases();
        echo(json_encode($resultado));
        break;

    case 'POST':
        $data = json_decode(file_get_contents('php://input'), true);
        $id = $data['id'];
        $nombre = $data['nombre'];
        $descripcion = $data['descripcion'];
        $respuesta = $class->agregarClases($id, $nombre, $descripcion);
        echo(json_encode($respuesta));
        break;

    case 'DELETE':
        $data = json_decode(file_get_contents('php://input'), true);
        $eliminar = $class->eliminarClases($data['id']);
        echo(json_encode($eliminar));
        break;

    case 'PUT':
        $data = json_decode(file_get_contents('php://input'), true);
        $respuesta = $class->actualizarClase($data['id'],$data ['nombre'], $data['descripcion']);
        echo(json_encode($respuesta));
        break;

    default:
        http_response_code(405);
        echo json_encode(array("message" => "Método No Permitido"));
        break;
}

?>