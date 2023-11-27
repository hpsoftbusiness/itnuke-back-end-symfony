<?php

declare(strict_types=1);

namespace App\Movies\Business\Recommendator\Strategy;

/**
 * Sort using chosen strategy
 */
class Component
{
    /**
     * @var Strategy
     */
    protected Strategy $recommendationStrategy;

    /**
     * @param Strategy $recommendStrategy
     */
    public function __construct(Strategy $recommendStrategy)
    {
        $this->recommendationStrategy = $recommendStrategy;
    }

    /**
     * @param array $movies
     *
     * @return array
     */
    public function recommend(array $movies): array
    {
        return $this->recommendationStrategy->recommend($movies);
    }
}