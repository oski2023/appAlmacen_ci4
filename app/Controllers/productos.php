<?php
/* primero se indica la ubicacion del controlador con el siguiente codigo */
namespace App\Controllers;
/* luego se indica la clase que se va a utilizar */
class Productos extends BaseController 
{/* ahora se define una funcion regularmente tiene que ser publica para que se pueda acceder desde la url */
    public function index ()
    {

        echo '<h1> Controller Productos</h1>';

    }

    public function show ()
    {

        return '<h3>Detalles del Producto</h3>';

    }
}

?>