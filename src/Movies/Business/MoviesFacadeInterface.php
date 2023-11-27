<?php

declare(strict_types=1);

namespace App\Movies\Business;

/**
 *
 */
interface MoviesFacadeInterface
{
    /**
     * @param string $recommendationType
     *
     * @return mixed
     */
    public function getRecommendation(string $recommendationType);
}