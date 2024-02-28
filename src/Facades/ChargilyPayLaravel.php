<?php

namespace KaraOdin\ChargilyPayLaravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \KaraOdin\ChargilyPayLaravel\ChargilyPayLaravel
 */
class ChargilyPayLaravel extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \KaraOdin\ChargilyPayLaravel\ChargilyPayLaravel::class;
    }
}
