<?php

declare(strict_types=1);

namespace App\Tests;

use App\Movies\Business\Recommendator\Strategy\MultipleWords;
use App\Movies\Business\Recommendator\Strategy\Random;
use App\Movies\Business\Recommendator\Strategy\StartingWith;
use PHPUnit\Framework\TestCase;

/**
 *
 */
class RecommendationTest extends TestCase
{
    public const movies = [
        "Pulp Fiction",
        "Incepcja",
        "Skazani na Shawshank",
        "Dwunastu gniewnych ludzi",
        "Ojciec chrzestny",
        "Django",
        "Matrix",
        "Leon zawodowiec",
        "Siedem",
        "Nietykalni",
        "Władca Pierścieni: Powrót króla",
        "Fight Club",
        "Forrest Gump",
        "Chłopaki nie płaczą",
        "Gladiator",
        "Człowiek z blizną",
        "Pianista",
        "Doktor Strange",
        "Szeregowiec Ryan",
        "Lot nad kukułczym gniazdem",
        "Wielki Gatsby",
        "Avengers: Wojna bez granic",
        "Życie jest piękne",
        "Pożegnanie z Afryką",
        "Szczęki",
        "Milczenie owiec",
        "Dzień świra",
        "Blade Runner",
        "Labirynt",
        "Król Lew",
        "La La Land",
        "Whiplash",
        "Wyspa tajemnic",
        "Django",
        "American Beauty",
        "Szósty zmysł",
        "Gwiezdne wojny: Nowa nadzieja",
        "Mroczny Rycerz",
        "Władca Pierścieni: Drużyna Pierścienia",
        "Harry Potter i Kamień Filozoficzny",
        "Green Mile",
        "Iniemamocni",
        "Shrek",
        "Mad Max: Na drodze gniewu",
        "Terminator 2: Dzień sądu",
        "Piraci z Karaibów: Klątwa Czarnej Perły",
        "Truman Show",
        "Skazany na bluesa",
        "Infiltracja",
        "Gran Torino",
        "Spotlight",
        "Mroczna wieża",
        "Rocky",
        "Casino Royale",
        "Drive",
        "Piękny umysł",
        "Władca Pierścieni: Dwie wieże",
        "Zielona mila",
        "Requiem dla snu",
        "Forest Gump",
        "Requiem dla snu",
        "Milczenie owiec",
        "Czarnobyl",
        "Breaking Bad",
        "Nędznicy",
        "Seksmisja",
        "Pachnidło",
        "Nagi instynkt",
        "Zjawa",
        "Igrzyska śmierci",
        "Kiler",
        "Siedem dusz",
        "Dzień świra",
        "Upadek",
        "Lśnienie",
        "Pan życia i śmierci",
        "Gladiator",
        "Granica",
        "Hobbit: Niezwykła podróż",
        "Pachnidło: Historia mordercy",
        "Wielki Gatsby",
        "Titanic",
        "Sin City",
        "Przeminęło z wiatrem",
        "Królowa śniegu",
    ];

    /**
     * @return void
     */
    public function testRandomStrategy(): void
    {
        $strategy = new Random();
        $recommendations = $strategy->recommend(self::movies);
        $this->assertCount(3, $recommendations);

        $this->assertGreaterThanOrEqual(3, strlen($recommendations[0]));
        $this->assertGreaterThanOrEqual(3, strlen($recommendations[1]));
        $this->assertGreaterThanOrEqual(3, strlen($recommendations[2]));

        $this->assertContains($recommendations[0], self::movies);
        $this->assertContains($recommendations[1], self::movies);
        $this->assertContains($recommendations[2], self::movies);
    }

    /**
     * @return void
     */
    public function testStartingWithStrategy(): void
    {
        $strategy = new StartingWith();
        $recommendations = $strategy->recommend(self::movies);

        foreach ($recommendations as $recommendation)
        {
            $this->assertStringStartsWith('W', $recommendation);
            $this->assertThat(strlen($recommendation) % 2, $this->equalTo(0), 'The word does not have an even length.');
        }
    }

    /**
     * @return void
     */
    public function testMultipleWordsStrategy(): void
    {
        $strategy = new MultipleWords();
        $recommendations = $strategy->recommend(self::movies);

        foreach ($recommendations as $recommendation)
        {
            $this->assertGreaterThanOrEqual(2, str_word_count($recommendation), 'The word does not have more than one word');
        }
    }
}