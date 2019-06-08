<?php

require '../../src/functions.php';

use PHPUnit\Framework\Testcase;

class StackTest extends Testcase
{
    public function testWinningGenerationSuccess()
    {
        $inputWidth = 5;
        $inputHeight = 5;
        $expectedWidthMax = 5;
        $expectedHeightMax = 5;
        $case = generateWinningSquare($inputWidth , $inputHeight);
        $this->assertLessThanOrEqual($expectedWidthMax, $case['x']);
        $this->assertGreaterThanOrEqual(1, $case['x']);
        $this->assertLessThanOrEqual($expectedHeightMax, $case['y']);
        $this->assertGreaterThanOrEqual(1, $case['y']);
    }

//    public function testWinningGenerationNegativeFailure()
//    {
//
//    }
}