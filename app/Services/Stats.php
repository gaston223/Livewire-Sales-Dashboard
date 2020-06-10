<?php


namespace App\Services;


class Stats
{
    public static function newOrders(): int
    {
        return rand(5, 100);
    }

    public static function salesAmount(): int
    {
        return rand(2996, 3167);
    }

    public static function satisfactions(): int
    {
        return rand(95, 100);
    }

}
