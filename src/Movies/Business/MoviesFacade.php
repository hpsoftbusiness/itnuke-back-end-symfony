<?php

declare(strict_types=1);

namespace App\Movies\Business;

use App\Movies\Business\Recommendator\Recommendator;
use App\Movies\Persistence\MoviesPersistenceFactory;

/**
 *
 */
class MoviesFacade implements MoviesFacadeInterface
{
    /**
     * @param string $recommendationType
     *
     * @return mixed|string
     */
    public function getRecommendation(string $recommendationType)
    {
        $movies = MoviesPersistenceFactory::createMovies()->getMovies();
        return MoviesBusinessFactory::createRecommendator()->recommend($recommendationType, $movies);
    }
}