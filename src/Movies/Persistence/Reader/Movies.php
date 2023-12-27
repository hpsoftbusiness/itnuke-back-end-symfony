<?php

declare(strict_types=1);

namespace App\Movies\Persistence\Reader;

/**
 * Reading Movies from database
 */
class Movies
{
    /**
     * @return string[]
     */
    public function getMovies(): array
    {
        $movies = [
           ['brand' => '360', 'desc' => 'Duty free platform, mvp project'],
           ['brand' => 'Devire', 'desc' => 'Integration with Shopware'],
           ['brand' => 'Omega Code', 'desc' => 'Medical purpose platform'],
           ['brand' => 'British Airwaves', 'desc' => 'Medical purpose platform'],
           ['brand' => 'Medica', 'desc' => 'Medical purpose platform'],
           ['brand' => 'Benefit', 'desc' => 'Medical purpose platform'],
           ['brand' => 'Medicover', 'desc' => 'Medical purpose platform'],
           ['brand' => 'Uniqa', 'desc' => 'Medical purpose platform'],
           ['brand' => 'PZU', 'desc' => 'Application for integration transport services'],
           ['brand' => 'Stradale', 'desc' => 'Medical purpose platform'],
        ];

        //toDo implement reading from database

        return $movies;
    }
}