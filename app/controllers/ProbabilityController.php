<?php
    /**
     * @author     William Betts   <william@phpbakery.com>
     * @copyright  PHPBakery (c) 2013
     * @version    1.0 Alpha
     * @package    PHPBakery\mtgprobability.com
     * @subpackage
     */

    class ProbabilityController extends BaseController
    {
        public function index()
        {
            $deckSize      = null;
            $searchCard    = null;
            $numberOfTurns = null;
            $found         = false;
            $errorMessage  = null;

            if (Input::has('decksize') === true)
            {
                $deckSize = Input::get('decksize');
                $found    = true;

                if ($deckSize <= 0)
                {
                    $errorMessage = 'The deck size must be bigger than 0.<br />';
                }
            }

            if (Input::has('cardcopies'))
            {
                $searchCard = Input::get('cardcopies');
                $found      = true;


            }

            if (Input::has('maxturns'))
            {
                $numberOfTurns = Input::get('maxturns');
                $found         = true;
            }

            if ((is_null($deckSize) || is_null($searchCard) || is_null($numberOfTurns)) && $found === false)
            {
                return View::make('about');
            }
            elseif (((is_null($deckSize) || is_null($searchCard) || is_null($numberOfTurns)) && $found === true) || !is_null($errorMessage))
            {
                if (is_null($errorMessage))
                {
                    $errorMessage = 'One of the fields was left blank.';
                }

                return View::make('probability')->with('error', $errorMessage)
                    ->with('deckSize', $deckSize)
                    ->with('searchCard', $searchCard)
                    ->with('numberOfTurns', $numberOfTurns);
            }
            else
            {
                $tableData[0] = HyperGeometricDist::getPercentage($deckSize, $searchCard, 7, $numberOfTurns, 1);

                $tableData[1] = HyperGeometricDist::getPercentage($deckSize, $searchCard, 8, $numberOfTurns, 1);

                return View::make('probability')->with('tableData', $tableData)
                    ->with('deckSize', $deckSize)
                    ->with('searchCard', $searchCard)
                    ->with('numberOfTurns', $numberOfTurns);
            }
        }
    }