<?php

namespace App\Repositories;


use App\CalculadoraModelo1;
use App\Repositories\Contracts\CalculadoraInterface;

class CalculadoraRepositoryModelo1 implements CalculadoraInterface
{
    private $model;

    /**
     * CalculadoraRepositoryModelo1 constructor.
     */
    public function __construct(CalculadoraModelo1 $calculadora)
    {
        $this->model = $calculadora;
    }

    public function adcao(float $var1, float $var2)
    {
        return $this->model->soma($var1, $var2);
    }

    public function subtracao(float $var1, float $var2)
    {
        // TODO: Implement subtracao() method.
    }

    public function divisao(float $var1, float $var2)
    {
        // TODO: Implement divisao() method.
    }

    public function multiplicacao(float $var1, float $var2)
    {
        // TODO: Implement multiplicacao() method.
    }


}