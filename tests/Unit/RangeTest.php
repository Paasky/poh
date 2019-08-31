<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RangeTest extends TestCase
{
    public function testx2y3Range1()
    {
        $start = (object) ['x' => 2, 'y' => 3];
        $range = 1;
        $validCoords = [
            ['x' => 1, 'y' => 2],
            ['x' => 1, 'y' => 3],
            ['x' => 1, 'y' => 4],
            ['x' => 2, 'y' => 2],
            ['x' => 2, 'y' => 3],
            ['x' => 2, 'y' => 4],
            ['x' => 3, 'y' => 3],
        ];

        $this->tryRange($start, $range, $validCoords);
    }

    public function testx3y4Range1()
    {
        $start = (object) ['x' => 3, 'y' => 4];
        $range = 1;
        $validCoords = [
            ['x' => 2, 'y' => 4],
            ['x' => 3, 'y' => 3],
            ['x' => 3, 'y' => 4],
            ['x' => 3, 'y' => 5],
            ['x' => 4, 'y' => 3],
            ['x' => 4, 'y' => 4],
            ['x' => 4, 'y' => 5],
        ];

        $this->tryRange($start, $range, $validCoords);
    }

    public function testx2y3Range2()
    {
        $start = (object) ['x' => 2, 'y' => 3];
        $range = 2;
        $validCoords = [
            ['x' => 0, 'y' => 2],
            ['x' => 0, 'y' => 3],
            ['x' => 0, 'y' => 4],
            ['x' => 1, 'y' => 1],
            ['x' => 1, 'y' => 2],
            ['x' => 1, 'y' => 3],
            ['x' => 1, 'y' => 4],
            ['x' => 1, 'y' => 5],
            ['x' => 2, 'y' => 1],
            ['x' => 2, 'y' => 2],
            ['x' => 2, 'y' => 3],
            ['x' => 2, 'y' => 4],
            ['x' => 2, 'y' => 5],
            ['x' => 3, 'y' => 1],
            ['x' => 3, 'y' => 2],
            ['x' => 3, 'y' => 3],
            ['x' => 3, 'y' => 4],
            ['x' => 3, 'y' => 5],
            ['x' => 4, 'y' => 3],
        ];

        $this->tryRange($start, $range, $validCoords);
    }

    public function testx3y3Range3()
    {
        $start = (object) ['x' => 3, 'y' => 3];
        $range = 3;
        $validCoords = [
            ['x' => 0, 'y' => 2],
            ['x' => 0, 'y' => 3],
            ['x' => 0, 'y' => 4],
            ['x' => 1, 'y' => 0],
            ['x' => 1, 'y' => 1],
            ['x' => 1, 'y' => 2],
            ['x' => 1, 'y' => 3],
            ['x' => 1, 'y' => 4],
            ['x' => 1, 'y' => 5],
            ['x' => 1, 'y' => 6],
            ['x' => 2, 'y' => 0],
            ['x' => 2, 'y' => 1],
            ['x' => 2, 'y' => 2],
            ['x' => 2, 'y' => 3],
            ['x' => 2, 'y' => 4],
            ['x' => 2, 'y' => 5],
            ['x' => 2, 'y' => 6],
            ['x' => 3, 'y' => 0],
            ['x' => 3, 'y' => 1],
            ['x' => 3, 'y' => 2],
            ['x' => 3, 'y' => 3],
            ['x' => 3, 'y' => 4],
            ['x' => 3, 'y' => 5],
            ['x' => 3, 'y' => 6],
            ['x' => 4, 'y' => 0],
            ['x' => 4, 'y' => 1],
            ['x' => 4, 'y' => 2],
            ['x' => 4, 'y' => 3],
            ['x' => 4, 'y' => 4],
            ['x' => 4, 'y' => 5],
            ['x' => 4, 'y' => 6],
            ['x' => 5, 'y' => 1],
            ['x' => 5, 'y' => 2],
            ['x' => 5, 'y' => 3],
            ['x' => 5, 'y' => 4],
            ['x' => 5, 'y' => 5],
            ['x' => 6, 'y' => 3],
        ];

        $this->tryRange($start, $range, $validCoords);
    }

    private function tryRange($start, $range, $valid)
    {
        $coords = [];
        $yIsEven = $start->y % 2 == 0;

        for ($x = $start->x - $range; $x <= $start->x + $range; $x++) {
            $xDiff = $x - $start->x;
            $xRangeDiff = $range - abs($xDiff);

            for ($y = $start->y - $range; $y <= $start->y + $range; $y++) {
                $yDiff = $y - $start->y;
                $yRangeDiff = $range - abs($yDiff);

                if ($yIsEven) {
                    // left edge of the range
                    if ($xDiff < 0 && $xRangeDiff == 0) {
                        if ($yDiff != 0) {
                            continue;
                        }
                    }
                    // right edge of the range
                    if ($xDiff > 0 && $xRangeDiff == 0) {
                        if (abs($yDiff) > 1) {
                            continue;
                        }
                    }
                } else {
                    // left edge of the range
                    if ($xDiff < 0 && $xRangeDiff == 0) {
                        if (abs($yDiff) > 1) {
                            continue;
                        }
                    }
                    // right edge of the range
                    if ($xDiff > 0 && $xRangeDiff == 0) {
                        if ($yDiff != 0) {
                            continue;
                        }
                    }
                }
/*
                if (!$yIsEven) {
                    if($xDiff*-1 == $range) {
                        $maxYdiff = 1;
                    }
                    if ($xDiff == $range) {
                        $maxYdiff = 0;
                    }
                } else {
                    if($xDiff*-1 == $range) {
                        $maxYdiff = 0;
                    }
                    if ($xDiff == $range) {
                        $maxYdiff = 1;
                    }
                }

                if ($start->x = 3 && $start->y == 4 && $range == 1 && $x ==3 && $y == 3) {
                    dd($x, $y, $xDiff, $yDiff, $maxYdiff ?? null);
                }

                if (isset($maxYdiff) && abs($yDiff) > $maxYdiff) {
                    continue;
                }
*/
                $coords[] = ['x' => $x, 'y' => $y];
            }
        }

        $this::assertEquals($valid, $coords);
    }
}
