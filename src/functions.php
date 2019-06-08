<?php

function generateWinningSquare(int $maxXVal, int $maxYVal) : array {
    $maxXVal = $maxXVal < 2 ? 2 : $maxXVal;
    $maxYVal = $maxYVal < 2 ? 2 : $maxYVal;
    $winningSquareX = rand (2, $maxXVal);
    $winningSquareY = rand (2 ,$maxYVal);
    return ['x' => $winningSquareX, 'y' => $winningSquareY];
}