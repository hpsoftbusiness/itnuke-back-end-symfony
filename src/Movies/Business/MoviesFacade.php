<?php

declare(strict_types=1);

namespace App\Movies\Business;

use App\Movies\Persistence\MoviesPersistenceFactory;

/**
 * Facade for business layer
 */
class MoviesFacade implements MoviesFacadeInterface
{
    /**
     * @param string $recommendationType
     *
     * @return mixed|string
     */
    public function getRecommendation(string $recommendationType): mixed
    {
        $movies = MoviesPersistenceFactory::createMovies()->getMovies();
        return MoviesBusinessFactory::createRecommendator()->recommend($recommendationType, $movies);
    }
}