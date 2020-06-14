<?php


namespace MichaelKeiluweit\RandomNumber;


class RandomFloatNumber implements RandomNumberInterface
{
    public function shuffle()
    {
        return mt_rand() / mt_getrandmax();
    }
}
