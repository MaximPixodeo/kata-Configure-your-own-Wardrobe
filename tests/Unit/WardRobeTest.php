<?php
declare(strict_types = 1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Wall;

class WardRobeTest extends TestCase
{
    public $wall;
    
    public function setUp(): void
    {
        $this->wall = new Wall(250);
    }

    // public function testWallLength(): void
    // {
    //     $this->assertEquals(250, $this->wall->totalLength());
    // }

    // public function testCombinationWithSingleElement50(): void
    // {
    //     $this->assertEquals(5, $this->wall->getOneCombinationElement(50));
    // }

    // public function testCombinationWithSignleElement75(): void
    // {
    //     $this->assertEquals(3.3333333333333335, $this->wall->getOneCombinationElement(75));
    // }

    // public function testCombinationWith75and50ShouldReturnOneCombination() :void
    // {

    //     $singleElementsPossibleCombinations =  [
    //                                                 [5 => 50],
    //                                             ];

    //     $this->assertEquals($singleElementsPossibleCombinations, $this->wall->calculate([50,75]));
    // }

    // public function testCombinationWith100and50ShouldReturnOneCombination() :void
    // {

    //     $singleElementsPossibleCombinations =  [
    //                                                 [5 => 50],
    //                                                 [10 => 25],
    //                                             ];

    //     $this->assertEquals($singleElementsPossibleCombinations, $this->wall->calculate([50,25]));
    // }

    public function testCombinationWith50and75()
    {
        $singleElementsPossibleCombinations =  [
            [5 => 50],
            [
                2 => 50,
                2 => 75,
            ],
        ];

        $this->assertEquals($singleElementsPossibleCombinations, $this->wall->calculate([50,75]));
    }

    // public function test()
    // {
    //     $singleElementsPossibleCombinations =  [
    //         [
    //             5 => 50
    //         ],
    //         [
    //             2 => 50,
    //             2 => 75,
    //         ],
    //         [
    //             2 => 100,
    //             1 => 50,
    //         ],
    //         [
    //             1 => 100,
    //             2 => 75,
    //         ],
    //     ];

    //     $this->assertEquals($singleElementsPossibleCombinations, $this->wall->calculate([50, 75, 100, 120]));
    // }
}

    // $possibleCombinations = [
    //                             [5 => 50],
    //                             [2 => 50, 2 => 75]
    //                         ];

// 50cm => 59 USD
// 75cm => 62 USD
// 100cm => 90 USD
// 120cm => 111 USD