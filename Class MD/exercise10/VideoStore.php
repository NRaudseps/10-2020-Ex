<?php


class VideoStore
{
    protected array $inventory;

    public function addVideo(Video $video): void
    {
        $this->inventory[] = $video;
    }

    public function checkOut(Video $video): void
    {
        $index = array_search($video, $this->inventory);
        $this->inventory[$index]->checkedOut();
    }

    public function returnVideo(Video $video): void
    {
        $index = array_search($video, $this->inventory);
        $this->inventory[$index]->returned();
    }

    public function setRating(string $videoTitle, int $userRating): void
    {
        foreach ($this->inventory as $video) {
            if ($video->getTitle() === $videoTitle) {
                $video->receiveRating($userRating);
            }
        }
    }

    public function getInventory(): array
    {
        return $this->inventory;
    }
}