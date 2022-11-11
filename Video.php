<?php

class Video
{

    private string $title;
    private string $status;
    private array $userRating = [0, 0];
    public const CHECKED_OUT = "checked out";
    public const CHECKED_IN = "checked in";

    public const ALL_STATUSES = [
        Video::CHECKED_IN => "Checked in.",
        Video::CHECKED_OUT => "Checked out."
    ];

    public function __construct(string $title)
    {
        $this->title = $title;
        $this->setStatus(Video::CHECKED_IN);
    }


    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setUserRating(int $userRating): void
    {
        $this->userRating[0] += $userRating;
        $this->userRating[1]++;
    }

    public function getUserRating(): float
    {
        return $this->userRating[0] / $this->userRating[1];
    }

    public function getStatus(): string
    {
        return $this->status;
    }

}