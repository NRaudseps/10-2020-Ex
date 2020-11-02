<?php


class Video
{
    protected string $title;
    protected bool $checkedOut;
    protected ?array $ratings;
    protected ?float $rating = 0;// 1 - Like; 0 - dislike

    public function __construct(string $title, ?bool $checkedOut = false, ?array $ratings = null)
    {
        $this->title = $title;
        $this->checkedOut = $checkedOut;
        $this->ratings = $ratings;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function checkedOut(): void
    {
        $this->checkedOut = true;
    }

    public function returned(): void
    {
        $this->checkedOut = false;
    }

    public function receiveRating(int $submission): void
    {
        ($submission) ? $submission = 1 : $submission = 0;
        $this->ratings[] = $submission;
        $this->rating = number_format(array_sum($this->ratings) / count($this->ratings), 2);
    }

    public function getRating(): float
    {
        return $this->rating * 100;
    }

    public function getCheckedOut(): string
    {
        return ($this->checkedOut) ? 'true' : 'false';
    }
}