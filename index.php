<?php
class GenreType
{
    public $genre;
    public function __construct($genre)
    {
        $this->genre = $genre;
    }
}
class Movie
{
    public $name;
    public $dateRelease;

    public $genreType;
    public function __construct($name, $dateRelease, $genreType)
    {
        $this->name = $name;
        $this->dateRelease = $dateRelease;
        $this->genreType = $genreType;
    }
    public function getHtml()
    {
        return "<h1>" . $this->name . "(" . $this->dateRelease . ")" . $this->genreType->genre . "</h1>";
    }
}

$genre1 = new GenreType("thriller");

$movie1 = new Movie("Avengers", "2022-05-03", $genre1);

echo $movie1->getHtml();