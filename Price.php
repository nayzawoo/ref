<?php

abstract class Price
{
    abstract public function getPriceCode();

    abstract public function getCharge($dayRented);

    public function getFrequentRenterPoints($dayRented)
    {
        if ($this->getPriceCode() == Movie::NEW_RELEASE && $dayRented > 1) {
            return 2;
        }

        return 1;
    }
}