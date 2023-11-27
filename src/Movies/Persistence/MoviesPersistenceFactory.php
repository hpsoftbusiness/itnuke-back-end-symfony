<?php

namespace App\Movies\Persistence;

use App\Movies\Persistence\Reader\Movies;

class MoviesPersistenceFactory
{
    public static function createMovies()
    {
        return new Movies();
    }
}