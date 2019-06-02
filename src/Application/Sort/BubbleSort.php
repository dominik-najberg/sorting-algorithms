<?php


namespace App\Application\Sort;


class BubbleSort implements SortInterface
{
    public function sort(array &$sortable)
    {
        $arrayLength = count($sortable);

        for ($i = 0; $i < $arrayLength; $i++) {
            $swapped = false;
            for ($j = 0; $j < $arrayLength - $i - 1; $j++) {
                if ($sortable[$j] > $sortable[$j + 1]) {
                    // PHP > 7.1 swap array elements
                    [$sortable[$j], $sortable[$j + 1]] = [$sortable[$j + 1], $sortable[$j]];
                    $swapped = true;
                }
            }
            if (false === $swapped) {
                break;
            }
        }
    }

}