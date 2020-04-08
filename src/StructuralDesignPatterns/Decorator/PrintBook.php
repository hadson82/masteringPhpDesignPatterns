<?php


namespace App\StructuralDesignPatterns\Decorator;


class PrintBook implements Book
{
    public $eBook;

    public function __construct(string $title, string $author, string $contents)
    {
        $this->eBook = new Ebook($title, $author, $contents);
    }

    public function getTitle(): string
    {
        return $this->eBook->getTitle();
    }

    public function getAuthor(): string
    {
        return $this->eBook->getAuthor();
    }

    public function getContents(): string
    {
        return $this->eBook->getContents();
    }

    public function getText(): string
    {
        $contents = $this->eBook->getTitle()." by " .
            $this->eBook-$this->getAuthor();
        $contents .= "<br />";
        $contents .= $this->eBook->getContents();

        return $contents;
    }
}