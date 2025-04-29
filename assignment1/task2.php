<?php

class Book
{
    private $title;
    private $author;

    public function __construct($title, $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    public function getSummary()
    {
        return "<b>Title:</b> " . $this->title . ", <b>Author:</b> " . $this->author;
    }
}
$b1 = new Book("Gulliver's Travels", "Jonathan Swift");
echo $b1->getSummary();
