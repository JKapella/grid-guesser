<?php

namespace guesserApplication\Classes;

class GridGenerator
{
    private $winningSquare;
    private $maxGridSize = 50;

    public function __construct($maxXVal, $maxYVal)
    {
        $this->winningSquare = $this->generateWinningSquare($maxXVal, $maxYVal);
    }

    private function generateWinningSquare(int $maxXVal, int $maxYVal) : array {
        $maxXVal = $maxXVal < 2 ? 2 : $maxXVal;
        $maxYVal = $maxYVal < 2 ? 2 : $maxYVal;
        $maxYVal = $maxYVal > $this->maxGridSize ? $this->maxGridSize : $maxYVal;
        $maxXVal = $maxXVal > $this->maxGridSize ? $this->maxGridSize : $maxXVal;
        $winningSquareX = rand (2, $maxXVal);
        $winningSquareY = rand (2 ,$maxYVal);
        return ['x' => $winningSquareX, 'y' => $winningSquareY];
    }

    public function getWinningSquareValue() {
        return $this->winningSquare;
    }
}