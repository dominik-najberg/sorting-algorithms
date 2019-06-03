<?php


namespace App\Application\Sort;


class MergeSort implements SortInterface
{
    public function sort(array &$sortable): void
    {
        $sortable = $this->doSort($sortable);
    }

    private function doSort(array $sortable): array
    {
        $arrayLength = count($sortable);
        $halfLength = (int)$arrayLength / 2;

        if ($arrayLength == 1) {
            return $sortable;
        }

        $left = $this->doSort(array_slice($sortable, 0, $halfLength));
        $right = $this->doSort(array_slice($sortable, $halfLength));

        return $this->merge($left, $right);
    }

    private function merge(array $left, array $right): array
    {
        $combined = [];
        $countLeft = count($left);
        $countRight = count($right);
        $leftIndex = $rightIndex = 0;

        while ($leftIndex < $countLeft && $rightIndex < $countRight) {
            if ($left[$leftIndex] > $right[$rightIndex]) {
                $combined[] = $right[$rightIndex];
                $rightIndex++;
            } else {
                $combined[] = $left[$leftIndex];
                $leftIndex++;
            }
        }

        while ($leftIndex < $countLeft) {
            $combined[] = $left[$leftIndex];
            $leftIndex++;
        }

        while ($rightIndex < $countRight) {
            $combined[] = $right[$rightIndex];
            $rightIndex++;
        }

        return $combined;
    }

}