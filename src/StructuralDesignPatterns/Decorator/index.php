<?php


use App\StructuralDesignPatterns\Decorator\Ebook;
use App\StructuralDesignPatterns\Decorator\PrintBook;

require_once __DIR__ . "/../../../vendor/autoload.php";


$PHPBook = new Ebook("Mastering PHP Design Patterns", "Junade Ali", "Some contents.");

echo $PHPBook->getTitle();
echo "<br />";
echo $PHPBook->getAuthor();
echo "<br />";
echo $PHPBook->getContents();
echo "<br />";

$PHPBook = new PrintBook("Mastering PHP Design Patterns", "Junade Ali", "Some contents.");

echo $PHPBook->getText();
