<?php


namespace App\Application\Sort;


class BubbleSort implements SortInterface
{
    /**
     * $swapped - if after a sorting loop nothing has been sorted, there is no need for more sorting
     * $newBound - shorten the loop to the last successful swap
     */
    public function sort(array &$sortable)
    {
        $arrayLength = count($sortable);
        $bound = $arrayLength - 1;

        for ($i = 0; $i < $arrayLength; $i++) {
            $swapped = false;
            $newBound = 0;
            for ($j = 0; $j < $bound; $j++) {
                if ($sortable[$j] > $sortable[$j + 1]) {
                    // PHP > 7.1 swap array elements
                    [$sortable[$j], $sortable[$j + 1]] = [$sortable[$j + 1], $sortable[$j]];
                    $swapped = true;
                    $newBound = $j;
                }
            }
            $bound = $newBound;
            if (false === $swapped) {
                break;
            }
        }
    }

}