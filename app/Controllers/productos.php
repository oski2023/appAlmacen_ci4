<?php
/* primero se indica la ubicacion del controlador con el siguiente codigo */
namespace App\Controllers;
/* luego se indica la clase que se va a utilizar */
class Productos extends BaseController 
{/* ahora se define una funcion regularmente tiene que ser publica para que se pueda acceder desde la url */
    public function index () 
    {
        echo '<h1> Controller Productos</h1>';
        print_r($this->session); /* este es igual a cuando hacemos en forma nativa el session_start desde php */     
    }

    public function show ($id) 
    {
        return '<h3>Detalles del Producto ' .$id. '</h3>';
    }

    public function cat ($categoria,$id) 
    {
        return '<h3>El nombre de la categoria es: ' .$categoria. '<br> Producto: ' .$id. '</h3>';
    }
}

?>