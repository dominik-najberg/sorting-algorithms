<?php


namespace App\Application\Sort;


class SelectionSort implements SortInterface
{
    public function sort(array &$sortable)
    {
        $arrayLength = count($sortable);

        for ($i = 0; $i < $arrayLength; $i++) {
            $min = $i;
            for ($j = $i + 1; $j < $arrayLength; $j++) {
                if ($sortable[$j] < $sortable[$min]) {
                    $min = $j;
                }
            }
            if ($min !== $i) {
                [$sortable[$i], $sortable[$min]] = [$sortable[$min], $sortable[$i]];
            }
        }
    }
}