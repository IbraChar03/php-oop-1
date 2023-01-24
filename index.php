<?php
class Movie
{
    public $name;
    public $dateRelease;
    public function __construct($name, $dateRelease)
    {
        $this->name = $name;

        $this->dateRelease = $dateRelease;

    }
    public function getHtml()
    {
        return "<h1>" . $this->name . "</h1>";
    }
}
$movie1 = new Movie("Avengers", "2022-05-03");
var_dump($movie1);

echo $movie->getHtml();