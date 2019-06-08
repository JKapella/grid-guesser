<?php

function generateWinningSquare(int $maxXVal, int $maxYVal) : array {
    $winningSquareX = rand (2, $maxXVal);
    $winningSquareY = rand (2 ,$maxYVal);
    return ['x' => $winningSquareX, 'y' => $winningSquareY];
}