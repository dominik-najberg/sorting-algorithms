<?php


namespace App\Tests\Application\Sort;


use App\Application\Sort\InsertionSort;
use App\Application\Sort\SortInterface;

class InsertionSortTest extends AbstractSorterTest
{
    protected function createSorter(): SortInterface
    {
        return new InsertionSort();
    }

}