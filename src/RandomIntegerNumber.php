<?php


namespace MichaelKeiluweit\RandomIntegerNumber;


class RandomIntegerNumber implements RandomIntegerNumberInterface
{
    public function shuffle(): int
    {
        return rand(0, PHP_INT_MAX);
    }
}
