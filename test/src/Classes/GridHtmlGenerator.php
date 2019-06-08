<?php

require_once '../../../vendor/autoload.php';

use PHPUnit\Framework\Testcase;

class GridHtmlGeneratorTest extends Testcase
{
    public function testHtmlGenerationSuccess()
    {
        $grid = $this->createMock(\guesserApplication\Classes\GridGenerator::class);
        $grid->method('getWinningSquareValue')
            ->willReturn(['y' => 2,'x' => 2]);
        $grid->method('getGridY')
            ->willReturn(2);
        $grid->method('getGridX')
            ->willReturn(2);
        $expected = "<div class='grid-row'><div class='grid-square grid-square-unclicked' data-dist='1'>X</div><div class='grid-square grid-square-unclicked' data-dist='1'>X</div></div><div class='grid-row'><div class='grid-square grid-square-unclicked' data-dist='1'>X</div><div class='grid-square grid-square-unclicked' data-dist='0'>X</div></div>";
        $case = \guesserApplication\Classes\GridHtmlCreator::createHTML($grid);
        $this->assertEquals($expected, $case);
    }
}