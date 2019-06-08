<?php

namespace guesserApplication\Classes;

class GridGenerator
{
    private $winningSquare;
    private $maxGridSize = 50;
    private $minGridSize = 2;
    private $gridX;
    private $gridY;

    public function __construct($maxXVal, $maxYVal)
    {
        $this->winningSquare = $this->generateWinningSquare($maxXVal, $maxYVal);
        $this->gridX = $maxXVal;
        $this->gridY = $maxYVal;
    }

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

    public function getWinningSquareValue() {
        return $this->winningSquare;
    }
}