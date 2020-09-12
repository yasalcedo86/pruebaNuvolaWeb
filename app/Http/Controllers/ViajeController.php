<?php

namespace App\Http\Controllers;

use App\clases\Viajes;
use Illuminate\Http\Request;

class ViajeController extends Controller
{
    private $viajes;
    public function __construct(Viajes $viaje) {
        $this->viajes = $viaje;
    }

    public function index() {
        $viajes = $this->viajes->getAll();

        return view('viajes', ['viajes' => $viajes, 'unico' => false]);
    }

    public function getByEmail($email) {
        $viajes = $this->viajes->getByEmail($email);

        return view('viajes', ['viajes' => $viajes, 'unico' => true]);
    }
}
