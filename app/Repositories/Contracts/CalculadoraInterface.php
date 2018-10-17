<?php

namespace App\Repositories\Contracts;

interface CalculadoraInterface
{
    public function adcao(float $var1, float $var2);

    public function subtracao(float $var1, float $var2);

    public function divisao(float $var1, float $var2);

    public function multiplicacao(float $var1, float $var2);
}
