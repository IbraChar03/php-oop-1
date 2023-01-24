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
    public $genresType;
    public function __construct($name, $dateRelease, $genresType)
    {
        $this->name = $name;
        $this->dateRelease = $dateRelease;
        $this->genresType = $genresType;
    }
    public function getGenres()
    {
        $str = "";
        foreach ($this as $genresType => $genreType) {
            $str .= $genreType->genre;

        }
        return $str;
    }

    public function getHtml()
    {
        return "<h1>" . $this->name . "(" . $this->dateRelease . ")" . $this->getGenres() . "</h1>";
        // $this->genreType->genre
    }
}

$genre1 = new GenreType("Thriller");
$genre2 = new GenreType("Horror");
$genres1 = [$genre1, $genre2];

$movie1 = new Movie("Avengers", "2022-05-03", $genres1);

echo $movie1->getHtml();