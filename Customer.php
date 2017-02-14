<?php

class Customer
{
    private $name;

    private $rentals = [];

    /**
     * Customer constructor.
     *
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function addRental(Rental $rental)
    {
        $this->rentals[] = $rental;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    public function statement()
    {
        $totalAmount = 0;
        $frequentRenterPoints = 0;
        $result = "Rental Record for".$this->getName()."\n";

        foreach ($this->rentals as $rental) {
            if ( ! ($rental instanceof Rental)) {
                continue;
            }

            $frequentRenterPoints += $rental->getFrequentRenterPoints();
            $result .= "\t".$rental->getMovie()->getTitle()."\t";
            $result .= $rental->getCharge()."\n";
            $totalAmount += $rental->getCharge();
        }

        $result .= "Amount owed is ".$totalAmount."\n";
        $result .= "You earned ".$frequentRenterPoints." frequent renter points";

        return $result;
    }
}