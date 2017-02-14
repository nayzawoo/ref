<?php namespace Ch1;

class NewReleasePrice extends Price
{
    public function getPriceCode()
    {
        return Movie::NEW_RELEASE;
    }

    public function getCharge($dayRented)
    {
        return $dayRented * 3;
    }
}