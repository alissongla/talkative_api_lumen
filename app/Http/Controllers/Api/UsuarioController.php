<?php

namespace App\Http\Controllers\Api;

use app\Models\Usuario;

class UsuarioController extends Controller{
    public function index(){
        return ['status' => true];
    }
}