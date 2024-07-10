<?php
/* primero se indica la ubicacion del controlador con el siguiente codigo */
namespace App\Controllers;
/* luego se indica la clase que se va a utilizar */
class Productos extends BaseController 
{/* ahora se define una funcion regularmente tiene que ser publica para que se pueda acceder desde la url */
    public function index () 
    {
        /* para enviar datos a la pagina podemos hacerlo por medio de arreglos */
        $data = ['titulo' => 'Catalogo de Productos'];
        /* para llamar a una vista colocamos la siguiente linea */
        echo view('plantilla/header', $data) ;
        echo view('productos/index', $data);
        echo view('plantilla/footer', ['copy' => '2024']) ;
        /* return view('productos/index', $data); */
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