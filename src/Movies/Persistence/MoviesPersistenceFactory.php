<?php

declare(strict_types=1);

namespace App\Movies\Persistence;

use App\Movies\Persistence\Reader\Movies;

/**
 * Movie persistence factory
 */
class MoviesPersistenceFactory
{
    /**
     * @return Movies
     */
    public static function createMovies(): Movies
    {
        return new Movies();
    }
}