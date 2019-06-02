<?php


namespace App\Tests\Application\Sort;


use App\Application\Sort\BubbleSort;
use Symfony\Bundle\FrameworkBundle\Tests\TestCase;

class BubbleSortTest extends TestCase
{
    public function testSort()
    {
        $sortable = [20, 45, 93, 67, 10, 97, 52, 88, 33, 92];
        $expected = [10, 20, 33, 45, 52, 67, 88, 92, 93, 97];
        $sorter = new BubbleSort();

        $this->assertEquals($expected, $sorter->sort($sortable));
    }
}