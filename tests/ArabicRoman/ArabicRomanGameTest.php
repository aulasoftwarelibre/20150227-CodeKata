<?php

use aulasl\ArabicRoman\ArabicRomanGame;

class ArabicRomanGameTest extends \PHPUnit_Framework_TestCase
{
    public static function validExamples()
    {
        return array(
            array( '1I', 1 ),
            array( '2I', 2 ),
            array( '2V', 10 ),
            array( '2V2I', 12 ),
            array( '3M1D2C', 3700 ),
            array( '2I3I2X9V1X', -16 ),
        );
    }

    /**
     * @dataProvider validExamples
     */
    public function testValidExamples($example, $expected)
    {
        $this->assertEquals($expected, ArabicRomanGame::play($example));
    }
}