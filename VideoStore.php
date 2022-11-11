<?php

class VideoStore
{
    private array $inventory = [];

    public function __construct()
    {
    }

    public function setInventory(Video $movie): void
    {
        $this->inventory[$movie->getTitle()] = $movie;
    }

    public function check(Video $movie, string $userSelection){
        if ($userSelection === Video::CHECKED_IN){
            $movie->setStatus($userSelection);
        } else {
            $movie->setStatus($userSelection);
        }
    }

    public function rate(int $rating, Video $movie){
        $movie->setUserRating($rating);
    }

    public function getInventory(): array
    {
        return $this->inventory;
    }
}