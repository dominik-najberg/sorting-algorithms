<?php


namespace App\Tests\Application\Sort;


use App\Application\Sort\SelectionSort;
use App\Application\Sort\SortInterface;

class SelectionSortTest extends AbstractSorterTest
{
    protected function createSorter(): SortInterface
    {
        return new SelectionSort();
    }
}