<?php


namespace App\Tests\Application\Sort;


use App\Application\Sort\BubbleSort;
use App\Application\Sort\SortInterface;

class BubbleSortTest extends AbstractSorterTest
{
    protected function createSorter(): SortInterface
    {
        return new BubbleSort();
    }
}