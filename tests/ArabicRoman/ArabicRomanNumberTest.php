<?php

use aulasl\ArabicRoman\ArabicRomanNumber;

class ArabicRomanNumberTest extends PHPUnit_Framework_TestCase
{
    public static function validNumbers()
    {
        return array(
            array( '1I', 1 ),
            array( '1V', 5 ),
            array( '1X', 10 ),
            array( '1L', 50 ),
            array( '1C', 100 ),
            array( '1D', 500 ),
            array( '1M', 1000 ),
        );
    }

    public static function invalidNumbers()
    {
        return array(
            array( '11I'),
            array( 'I1' ),
            array( '1' ),
            array( 'II' ),
            array( '11' ),
            array( '0P' ),
        );
    }

    /**
     * @dataProvider validNumbers
     */
    public function testBasicNumbers($number, $expected)
    {
        $romanarabic = new ArabicRomanNumber( $number );
        $this->assertEquals( $expected, $romanarabic->getValue());
    }

    /**
     * @dataProvider invalidNumbers
     * @expectedException InvalidArgumentException
     */
    public function testInvalidNumbers($number)
    {
        $romanarabic = new ArabicRomanNumber($number);
    }

}