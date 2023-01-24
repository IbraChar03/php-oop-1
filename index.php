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
    public array $genresType;
    public function __construct($name, $dateRelease, $genresType)
    {
        $this->name = $name;
        $this->dateRelease = $dateRelease;
        $this->genresType = is_array($genresType) ? $genresType : [$genresType];
    }
    public function getGenres()
    {
        $str = "";

        foreach ($this->genresType as $genreType) {
            $str .= $genreType->genre . " ";

        }

        return $str;
    }

    public function getHtml()
    {
        return "<h1>" . $this->name . "(" . $this->dateRelease . ")" . $this->getGenres() . "</h1>";

    }
}

$genre1 = new GenreType("Thriller");
$genre2 = new GenreType("Horror");
$genre3 = new GenreType("Action");
var_dump($genre3);

$genres1 = [$genre1, $genre2];

$movie1 = new Movie("Avengers", "2022-05-03", $genres1);
$movie2 = new Movie("Superman", "2020-05-03", $genre3);
$movies = [$movie1, $movie2];

foreach ($movies as $movie) {
    echo $movie->getHtml();
}