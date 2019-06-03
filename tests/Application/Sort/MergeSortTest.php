<?php


namespace App\Tests\Application\Sort;


use App\Application\Sort\MergeSort;
use App\Application\Sort\SortInterface;

class MergeSortTest extends AbstractSorterTest
{
    protected function createSorter(): SortInterface
    {
        return new MergeSort();
    }
}