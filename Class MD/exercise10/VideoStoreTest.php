<?php

require_once 'Video.php';
require_once 'VideoStore.php';

$videos = [
    [
        'title' => 'The Matrix',
        'like' => false
    ],
    [
        'title' => 'Godfather II',
        'like' => true
    ],
    [
        'title' => 'Star Wars Episode IV: A New Hope',
        'like' => true
    ]
];

$videoStore = new VideoStore();

foreach ($videos as $video) {
    $videoStore->addVideo(new Video($video['title']));
    $videoStore->setRating($video['title'], $video['like']);
}
foreach ($videoStore->getInventory() as $video) {
    $videoStore->checkOut($video);
    if ($video->getTitle() === 'Godfather II') {
        $info = $videoStore->getInventory();
        foreach ($info as $item) {
            echo 'Video Title: ' . $item->getTitle() . PHP_EOL;
            echo 'Is checked out: ' . $item->getCheckedOut() . PHP_EOL;
            echo 'Video Rating: ' . $item->getRating() . '%' . PHP_EOL;

            echo PHP_EOL;
        }
    }
}
foreach ($videoStore->getInventory() as $video) {
    $videoStore->returnVideo($video);
}
