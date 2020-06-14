<?php


namespace MichaelKeiluweit\RandomNumber;


interface RandomNumberInterface
{
    /**
     * Return a number. Integer or float.
     * @return int|float
     */
    public function shuffle();
}
