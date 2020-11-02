<?php


class Movie
{
    protected string $title;
    protected string $studio;
    protected string $rating;

    public function __construct(string $title, string $studio, string $rating)
    {
        $this->title = $title;
        $this->studio = $studio;
        $this->rating = $rating;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getRating(): string
    {
        return $this->rating;
    }

    public function getStudio(): string
    {
        return $this->studio;
    }

    public static function GetPG(array $movies): array
    {
        $pgMovies = [];
        foreach ($movies as $movie) {
            if ($movie->rating === 'PG') {
                $pgMovies[] = $movie;
            }
        }

        return $pgMovies;
    }
}