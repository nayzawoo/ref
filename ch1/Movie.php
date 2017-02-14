<?php namespace Ch1;

class Movie
{
    const CHILDREN = 2;
    const REGULAR = 0;
    const NEW_RELEASE = 1;

    private $title;

    /**
     * @var Price $price
     */
    private $price;

    public function __construct($title, $priceCode)
    {
        $this->title = $title;
        $this->setPriceCode($priceCode);
    }

    public function getPriceCode()
    {
        return $this->price->getPriceCode();
    }

    /**
     * @param mixed $priceCode
     *
     * @throws Exception
     */
    public function setPriceCode($priceCode)
    {
        switch ($priceCode) {
            case static::NEW_RELEASE:
                $this->price = new NewReleasePrice();
                break;
            case static::REGULAR:
                $this->price = new RegularPrice();
                break;
            case static::CHILDREN:
                $this->price = new ChildrenPrice();
                break;
            default:
                throw new Exception("Incorrect Price Code");
        }
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    public function getCharge($dayRented)
    {
        return $this->price->getCharge($dayRented);
    }

    public function getFrequentRenterPoints($dayRented)
    {
        return $this->price->getFrequentRenterPoints($dayRented);
    }
}