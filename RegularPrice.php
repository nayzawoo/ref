<?php

class RegularPrice extends Price
{
    public function getPriceCode()
    {
        return Movie::REGULAR;
    }

    public function getCharge($dayRented)
    {
        $result = 2;
        if ($dayRented > 2) {
            $result += ($dayRented - 2) * 1.5;
        }
        return $result;
    }
}