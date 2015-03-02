<?php

namespace aulasl\ArabicRoman;


class ArabicRomanGame
{
    public static function play($message)
    {
        preg_match_all("/[0-9][A-Z]/", $message, $matches);
        $numbers = $matches[0];

        $total = 0;

        $nextArabicRomanNumber = new ArabicRomanNumber($numbers[0]);

        for ($i = 0; $i < count($numbers) - 1; $i++) {
            $arabicRomanNumber = $nextArabicRomanNumber;
            $nextArabicRomanNumber = new ArabicRomanNumber($numbers[$i + 1]);
            if ($arabicRomanNumber->compare($nextArabicRomanNumber) > 0) {
                $total += $arabicRomanNumber->getValue();
            } else {
                $total -= $arabicRomanNumber->getValue();
            }
        }
        $total += $nextArabicRomanNumber->getValue();

        return $total;
    }
}