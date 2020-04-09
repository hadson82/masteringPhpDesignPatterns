<?php

use App\StructuralDesignPatterns\Composite\Playlist;
use App\StructuralDesignPatterns\Composite\Song;

require_once __DIR__ . "/../../../vendor/autoload.php";


$songOne = new Song('Let It Be');
$songTwo = new Song('Riders from the Storm');
$songThree = new Song('Carry');
$playListOne = new Playlist();
$playListTwo = new Playlist();
$playListThree = new Playlist();
$playListTwo->addSong($songOne);
$playListTwo->addSong($songTwo);
$playListThree->addSong($songThree);
$playListOne->addSong($playListTwo);
$playListOne->addSong($playListThree);
$playListOne->play();
echo"<br />";
$playListTwo->play();
echo"<br />";
$playListThree->play();
