<?php

declare(strict_types=1);

namespace App\Movies\Business;

/**
 * Movies facade interface
 */
interface MoviesFacadeInterface
{
    /**
     * @param string $recommendationType
     *
     * @return mixed
     */
    public function getRecommendation(string $recommendationType): mixed;
}