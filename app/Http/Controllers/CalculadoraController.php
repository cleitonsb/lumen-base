<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\CalculadoraInterface;

class CalculadoraController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {

        echo 'Hi';
        echo $this->soma();
    }

    public function adicao(CalculadoraInterface $calculadora)
    {
        //$calculadora = app(CalculadoraInterface::class);
        echo ($calculadora->adcao(5,10));
    }


    //
}
