<?php

require_once '../../../vendor/autoload.php';

use PHPUnit\Framework\Testcase;

class GridGeneratorTest extends Testcase
{
    public function testWinningGenerationSuccess()
    {
        $inputWidth = 5;
        $inputHeight = 5;
        $expectedWidthMax = 5;
        $expectedHeightMax = 5;
        $case = generateWinningSquare($inputWidth , $inputHeight);
        $this->assertLessThanOrEqual($expectedWidthMax, $case['x']);
        $this->assertGreaterThanOrEqual(2, $case['x']);
        $this->assertLessThanOrEqual($expectedHeightMax, $case['y']);
        $this->assertGreaterThanOrEqual(2, $case['y']);
    }

    public function testWinningGenerationNegativeFailure()
    {
        $inputWidth = -1;
        $inputHeight = 2;
        $expected = 2;
        $case = generateWinningSquare($inputWidth , $inputHeight);
        $this->assertEquals($expected, $case['x']);
    }

    public function testWinningGenerationTooLargeFailure()
    {

    }
}