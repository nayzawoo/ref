<?php namespace Ch1;

class ChildrenPrice extends Price
{
    public function getPriceCode()
    {
        return Movie::CHILDREN;
    }

    public function getCharge($dayRented)
    {
        $result = 1.5;
        if ($dayRented > 3) {
            $result += ($dayRented - 3) * 1.5;
        }

        return $result;
    }
}