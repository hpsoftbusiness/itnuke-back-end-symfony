<?php

declare(strict_types=1);

namespace App\Movies\Business\Recommendator;

use App\Movies\Business\Recommendator\Strategy\MultipleWords;
use App\Movies\Business\Recommendator\Strategy\Random;
use App\Movies\Business\Recommendator\Strategy\Component;
use App\Movies\Business\Recommendator\Strategy\StartingWith;

/**
 *
 */
class Recommendator
{
    /**
     * @param string $recommendationType
     * @param array $movies
     *
     * @return array
     */
    public function recommend(string $recommendationType, array $movies): array
    {
        switch ($recommendationType) {
            case "random-titles":
                $strategy = new Random();
                break;
            case "starting-with":
                $strategy = new StartingWith();
                break;
            case "multiple-words":
                $strategy = new MultipleWords();
                break;
            default:
                $strategy = new Random();
        }

        $recommendationComponent = new Component($strategy);

        return $recommendationComponent->recommend($movies);
    }
}