<?php

namespace App\Movies\Business;

use App\Movies\Business\Recommendator\Recommendator;

/**
 *
 */
class MoviesBusinessFactory
{
    /**
     * @return Recommendator
     */
    public static function createRecommendator()
    {
        return new Recommendator();
    }
}