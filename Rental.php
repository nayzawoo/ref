<?php

class Rental
{
    private $movie;

    private $daysRented;

    /**
     * Rental constructor.
     *
     * @param Movie $movie
     * @param int   $daysRented
     */
    public function __construct(Movie $movie, $daysRented)
    {
        $this->movie = $movie;
        $this->daysRented = $daysRented;
    }

    /**
     * @return int
     */
    public function getDaysRented()
    {
        return $this->daysRented;
    }

    /**
     * @return Movie
     */
    public function getMovie()
    {
        return $this->movie;
    }

    public function getCharge()
    {
        return $this->getMovie()->getCharge($this->getDaysRented());
    }

    public function getFrequentRenterPoints()
    {
        return $this->getMovie()->getFrequentRenterPoints($this->getDaysRented());
    }
}