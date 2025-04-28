<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        // Pasamos el título específico para esta página (opcional)
        $data['page_title'] = 'Inicio - Pacú Iberá';
        return view('principal', $data); // Carga la vista principal.php
    }

    // Nuevo método para "Quiénes Somos"
    public function quienesSomos(): string
    {
        $data['page_title'] = 'Quiénes Somos - Pacú Iberá';
        return view('quienes_somos', $data); // Carga la vista quienes_somos.php
    }

    // Nuevo método para "Comercialización"
    public function comercializacion(): string
    {
        $data['page_title'] = 'Comercialización - Pacú Iberá';
        return view('comercializacion', $data); // Carga la vista comercializacion.php
    }

    // Nuevo método para "Contacto"
    public function contacto(): string
    {
        $data['page_title'] = 'Contacto - Pacú Iberá';
        return view('contacto', $data); // Carga la vista contacto.php
    }

    // Nuevo método para "Términos y Usos"
    public function terminosYUsos(): string
    {
        $data['page_title'] = 'Términos y Usos - Pacú Iberá';
        return view('terminos_y_usos', $data); // Carga la vista terminos_y_usos.php
    }

    public function enConstruccion()
{
    $data['page_title'] = 'Página en Construcción';
    return view('en_construccion', $data);
}

}