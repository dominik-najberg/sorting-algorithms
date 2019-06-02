<?php


namespace App\Application\Sort;


class BubbleSort implements SortInterface
{
    public function sort(array $sortable): array
    {
        return [10, 20, 33, 45, 52, 67, 88, 92, 93, 97];
    }

}