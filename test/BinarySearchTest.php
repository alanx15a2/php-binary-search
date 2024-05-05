<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

final class BinarySearchTest extends TestCase
{
    #[DataProvider('dataProvider')]
    public function testSearch($array, $target, $output)
    {
        $this->assertEquals($output, array_search_binary($array, $target));
    }

    public static function dataProvider() : array 
    {
        return [
            [[1,2,3,4,5,6], 3, 2],
            [[1,2,3,4,5,6], 1, 0],
            [[1,2,3,4,5,6], 7, -1],
            [[1,3,5,7,9], 2, -1],
            [[1,2,3,4,5,6], 0, -1],
            [['a','c','e','h','j'], 'c', 1],
        ];
    }
}
