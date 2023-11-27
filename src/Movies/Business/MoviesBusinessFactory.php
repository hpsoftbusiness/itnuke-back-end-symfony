<?php

declare(strict_types=1);

namespace App\Movies\Business;

use App\Movies\Business\Recommendator\Recommendator;

/**
 * Business factory
 */
class MoviesBusinessFactory
{
    /**
     * @return Recommendator
     */
    public static function createRecommendator(): Recommendator
    {
        return new Recommendator();
    }
}