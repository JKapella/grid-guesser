<?php

require_once '../../../vendor/autoload.php';

use PHPUnit\Framework\Testcase;

class GridGeneratorTest extends Testcase
{
    public function testWinningGenerationSuccess()
    {
        $input = 5;
        $expected = 5;
        $grid = new \guesserApplication\Classes\GridGenerator($input, $input);
        $winningSquare = $grid->getWinningSquareValue();
        $this->assertLessThanOrEqual($expected, $winningSquare['x']);
        $this->assertGreaterThanOrEqual(2, $winningSquare['x']);
        $this->assertLessThanOrEqual($expected, $winningSquare['y']);
        $this->assertGreaterThanOrEqual(2, $winningSquare['y']);
    }

//    public function testWinningGenerationNegativeFailure()
//    {
//        $inputWidth = -1;
//        $inputHeight = 2;
//        $expected = 2;
//        $case = generateWinningSquare($inputWidth , $inputHeight);
//        $this->assertEquals($expected, $case['x']);
//    }
//
//    public function testWinningGenerationTooLargeFailure()
//    {
//
//    }
}