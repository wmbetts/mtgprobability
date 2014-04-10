<?php
    /**
     * @author     William Betts   <william@phpbakery.com>
     * @copyright  PHPBakery (c) 2013
     * @version    1.0 Alpha
     * @package    PHPBakery\mtgprobability.com
     * @subpackage
     */

    class HyperGeometricDist
    {
        public static function getPercentage($deckSize, $searchCards, $cardsDrawn, $turns, $numberMatched = 0)
        {
            $retArray = array();

            for ($i = 1; $i <= $turns; ++$i)
            {
                $retArray[$i] = round((self::__combination($searchCards, $numberMatched) * (self::__combination($deckSize - $searchCards, $cardsDrawn - $numberMatched) / self::__combination($deckSize, $cardsDrawn)) * 100), 2);
                ++$cardsDrawn;
            }

            return $retArray;
        }

        private static function __combination($firstNumber, $secondNumber)
        {
            if ($secondNumber == 0)
            {
                $retVal = 1;
            }
            else
            {
                $retVal = self::__factorial($firstNumber, $secondNumber) / self::__factorial($secondNumber);
            }

            return $retVal;
        }

        private static function __factorial($number, $length = 0)
        {
            $total  = 1;
            $length = ($length > 0) ? ($number - $length) : 0;

            for ($i = $number; $i > $length; --$i)
            {
                $total *= $i;
            }

            return $total;
        }
    }