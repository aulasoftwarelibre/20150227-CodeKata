<?php

namespace aulasl\FizzBuzz;

class FizzBuzzGame
{
    public static function play($fizz, $buzz, $limit)
    {
        $solution = '';
        $fb = new FizzBuzzNumber( $fizz, $buzz );

        for( $i = 0; $i < $limit; $i ++ ) {
            $solution .=  $fb->answer($i) . " ";
        }

        return $solution;
    }
}
