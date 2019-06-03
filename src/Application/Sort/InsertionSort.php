<?php


namespace App\Application\Sort;

/*
 * Insertion sort is based on inserting numbers in their respective places that are to the left of those
 * currently placed. The algorithm starts with the second element of the object. We compare if the element
 * to the left is less than the one or not. If it is, we are moving the left element to the right
 * and we are placing the lower value in the first position. Next, we proceed to the next element
 * and we compare it to the ones on the left in order to move them and place the element being checked.
 *
 * More info: https://en.wikipedia.org/wiki/Insertion_sort
 */

class InsertionSort implements SortInterface
{
    public function sort(array &$sortable): void
    {
        $arrayLength = count($sortable);

        for ($i = 1; $i < $arrayLength; $i++) {
            $currentKey = $sortable[$i];
            $j = $i - 1;
            while ($j >= 0 && $currentKey < $sortable[$j]) {
                $sortable[$j + 1] = $sortable[$j];
                $j--;
            }
            $sortable[$j + 1] = $currentKey;
        }
    }
}