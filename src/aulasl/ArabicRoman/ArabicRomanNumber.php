<?php

namespace aulasl\ArabicRoman;


class ArabicRomanNumber
{
    private $value;

    private $roman;

    private $romanValues = array (
        "I" => "1",
        "V" => "5",
        "X" => "10",
        "L" => "50",
        "C" => "100",
        "D" => "500",
        "M" => "1000",
    );

    function __construct($number)
    {
        if (
            2 !== strlen( $number ) ||
            ! is_numeric( $number[0] ) ||
            ! isset( $this->romanValues[ $number[1] ] )
        ) {
            throw new \InvalidArgumentException( "El número no es válido: " . $number );
        }

        $this->roman = $this->romanValues[ $number[1] ];
        $this->value = $number[0] * $this->roman;
    }

    function getValue()
    {
        return $this->value;
    }

    function getRoman()
    {
        return $this->roman;
    }

    function compare(ArabicRomanNumber $number)
    {
        return $this->roman >= $number->getRoman() ? 1 : -1;
    }
}