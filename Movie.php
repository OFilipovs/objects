<?php

class Movie
{
    public string $title;
    public string $studio;
    public string $rating;

    public function __construct(string $title, string $studio, string $rating)
    {
        $this->title = $title;
        $this->studio = $studio;
        $this->rating = $rating;
    }

    public function getPG(array $movies): array{
        // use Class as type - array of base type
        $array = [];
        foreach ($movies as $movie){
            if ($movie->rating === "PG"){
                $array[] = $movie->title;
            }
        }

        return $array;
    }
}