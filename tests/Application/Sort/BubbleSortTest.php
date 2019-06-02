<?php


namespace App\Tests\Application\Sort;


use App\Application\Sort\BubbleSort;
use Symfony\Bundle\FrameworkBundle\Tests\TestCase;

class BubbleSortTest extends TestCase
{
    /**
     * @dataProvider sortDataProvider
     */
    public function testSort($sortable, $expected)
    {
        $sorter = new BubbleSort();
        $sorter->sort($sortable);

        $this->assertEquals($expected, $sortable);
    }

    public function sortDataProvider()
    {
        return [
            [[20, 45, 93, 67, 10, 97, 52, 88, 33, 92], [10, 20, 33, 45, 52, 67, 88, 92, 93, 97]],
            [[1, 32, 93, 67, 10, 123, 52, 88, 33, 92], [1, 10, 32, 33, 52, 67, 88, 92, 93, 123]],
            [[123, 89, 77, 67, 48, 42, 32, 28, 13, 9], [9, 13, 28, 32, 42, 48, 67, 77, 89, 123]],
        ];
    }
}