<?php


namespace guesserApplication\Classes;


class GridHtmlCreator
{
    /**
     * A static function to create a valid html grid, as a string, with distances to the winning square calculated, based on
     * a valid GridGenerator object
     *
     * @param GridGenerator $gridGenerator - this must be a valid gridgenerator object
     *
     * @return string - a string of valid html
     */
    static function createHTML(GridGenerator $gridGenerator) {
        $yRows = $gridGenerator->getGridY();
        $xRows = $gridGenerator->getGridX();
        $winY = $gridGenerator->getWinningSquareValue()['y'];
        $winX = $gridGenerator->getWinningSquareValue()['x'];

        $output = '';
        for ($y = 1; $y <= $yRows; $y++) {
            $output .= "<div class='grid-row'>";
            for ($x = 1; $x <= $xRows; $x++) {
                $yDist = abs($y - $winY);
                $xDist = abs($x - $winX);
                $distance = max($yDist, $xDist);

                $output .= "<div class='grid-square grid-square-unclicked' data-dist='" . $distance . "'>X</div>";
            }
            $output .= "</div>";
        }

        return $output;
    }
}