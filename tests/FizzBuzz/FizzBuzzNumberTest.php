<?php

use aulasl\FizzBuzz\FizzBuzzNumber;

class FizzBuzzNumberTest extends PHPUnit_Framework_TestCase
{
    private $fb;

    public static function fizzAndBuzz()
    {
        return array(
            array(1, 1),
            array(2, 2),
            array(3, 'F'),
            array(5, 'B'),
            array(15, 'FB'),
            array(53, 53),
        );
    }

    /**
     * @before
     */
    public function configure()
    {
        $this->fb = new FizzBuzzNumber( 3, 5 );
    }

    /**
     * @dataProvider fizzAndBuzz
     */
    public function testFizzAndBuzzCollection($number, $expected)
    {
        $this->assertEquals( $expected, $this->fb->answer( $number ) );
    }

}