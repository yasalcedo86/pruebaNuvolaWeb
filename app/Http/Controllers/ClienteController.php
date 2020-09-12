<?php

namespace App\Http\Controllers;

use App\clases\Clientes;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    private $clientes;
    public function __construct(Clientes $cliente) {
        $this->clientes = $cliente;
    }

    public function index() {
        $cliente = $this->clientes->getAll();

        return view('clientes', compact('cliente'));
    }

    public function eliminar($id) {
        $cliente = $this->clientes->eliminar($id);

        return redirect('/clientes');
    }

}
