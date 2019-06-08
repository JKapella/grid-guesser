<?php

function generateWinningSquare(int $maxXVal, int $maxYVal) : array {
    $winningSquareX = rand (1, $maxXVal);
    $winningSquareY = rand (1 ,$maxYVal);
    return ['x' => $winningSquareX, 'y' => $winningSquareY];
}