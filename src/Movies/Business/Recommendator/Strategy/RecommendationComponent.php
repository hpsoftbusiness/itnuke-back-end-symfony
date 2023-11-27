<?php

namespace App\Movies\Business\Recommendator\Strategy;

class RecommendationComponent
{
    protected $recommendationStrategy;

    public function __construct(RecommendStrategy $recommendStrategy)
    {
        $this->recommendationStrategy = $recommendStrategy;
    }

    public function recommend(array $movies)
    {
        return $this->recommendationStrategy->recommend($movies);
    }
}