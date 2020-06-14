<?php


namespace MichaelKeiluweit\RandomNumber;


class RandomIntegerNumber implements RandomNumberInterface
{
    public function shuffle()
    {
        return rand(0, PHP_INT_MAX);
    }
}
