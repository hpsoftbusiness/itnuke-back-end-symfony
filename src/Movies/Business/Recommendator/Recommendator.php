<?php

declare(strict_types=1);

namespace App\Movies\Business\Recommendator;

use App\Movies\Business\Recommendator\Strategy\MultipleWordsRecommendation;
use App\Movies\Business\Recommendator\Strategy\RandomRecommendation;
use App\Movies\Business\Recommendator\Strategy\RecommendationComponent;
use App\Movies\Business\Recommendator\Strategy\StartingWithRecommendation;

/**
 *
 */
class Recommendator
{
    /**
     * @param string $recommendationType
     */
    public function recommend(string $recommendationType, array $movies)
    {
        switch ($recommendationType) {
            case "random-titles":
                $strategy = new RandomRecommendation();
                break;
            case "starting-with":
                $strategy = new StartingWithRecommendation();
                break;
            case "multiple-words":
                $strategy = new MultipleWordsRecommendation();
                break;
            default:
                $strategy = new RandomRecommendation();
        }

        $recommendationComponent = new RecommendationComponent($strategy);

        return $recommendationComponent->recommend($movies);
    }
}