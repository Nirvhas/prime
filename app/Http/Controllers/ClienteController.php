<?php

namespace App\Http\Controllers;

class ClienteController
{
    function index()
    {
        
        return view('ListarCliente');
    }

    function new()
    {
        
        return view('NuevoCliente');
    }

    function edit()
    {
        
        return view('EditarCliente');
    }
}
