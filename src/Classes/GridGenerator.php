<?php

namespace guesserApplication\Classes;

class GridGenerator
{
    private $winningSquare;
    private $maxGridSize = 13;
    private $minGridSize = 2;
    private $gridX;
    private $gridY;

    /**
     * GridGenerator constructor.
     * 
     * @param $maxXVal - the desired width of the 'game grid' to be stored and to generate the winning square
     * @param $maxYVal - the desired height of the 'game grid' to be stored and to generate the winning square
     */
    public function __construct(int $maxXVal, int $maxYVal)
    {
        $this->winningSquare = $this->generateWinningSquare($maxXVal, $maxYVal);
        $this->gridX = $maxXVal;
        $this->gridY = $maxYVal;
    }

    /**
     * Randomly generates a 'winning' square from the min and max values provided, will correct input that is
     * too large or too small
     *
     * @param int $maxXVal - the width provided by the user, must be within limits, or will be corrected
     * @param int $maxYVal - the height provided by the user, must be within limits, or will be corrected
     *
     * @return array - the 'coordinates' of the winning square, as an array of two ints
     */
    private function generateWinningSquare(int $maxXVal, int $maxYVal) : array {
        $minGridSize = $this->minGridSize;
        $maxGridSize = $this->maxGridSize;
        $maxXVal = $maxXVal < $minGridSize ? $minGridSize : $maxXVal;
        $maxYVal = $maxYVal < $minGridSize ? $minGridSize : $maxYVal;
        $maxYVal = $maxYVal > $maxGridSize ? $maxGridSize : $maxYVal;
        $maxXVal = $maxXVal > $maxGridSize ? $maxGridSize : $maxXVal;
        $winningSquareX = rand ($minGridSize, $maxXVal);
        $winningSquareY = rand ($minGridSize ,$maxYVal);
        return ['x' => $winningSquareX, 'y' => $winningSquareY];
    }

    /**
     * A public getter for the 'coordinates' (x and y int values, in an array) of the 'target' square
     *
     * @return array
     */
    public function getWinningSquareValue() :array {
        return $this->winningSquare;
    }

    /**
     * A public getter for the 'x' (width value of the generated grid)
     *
     * @return int
     */
    public function getGridX() :int {
        return $this->gridX;
    }

    /**
     * A public getter for the 'y' (height value of the generated grid)
     *
     * @return int
     */
    public function getGridY() :int {
        return $this->gridY;
    }
}