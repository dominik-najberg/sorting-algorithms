<?php


namespace App\Tests\Application\Sort;


use App\Application\Sort\SortInterface;
use PHPUnit\Framework\TestCase;

abstract class AbstractSorterTest extends TestCase
{
    /** @var SortInterface */
    protected $sorterUnderTest;

    /**
     * @dataProvider sortDataProvider
     */
    public function testSort($sortable, $expected)
    {
        $this->sorterUnderTest->sort($sortable);

        $this->assertEquals($expected, $sortable);
    }

    public function sortDataProvider()
    {
        return [
            [[20, 45, 93, 67, 10, 97, 52, 88, 33, 92], [10, 20, 33, 45, 52, 67, 88, 92, 93, 97]],
            [[1, 32, 93, 67, 10, 123, 52, 88, 33, 92], [1, 10, 32, 33, 52, 67, 88, 92, 93, 123]],
            [[123, 89, 77, 67, 48, 42, 32, 28, 13, 9], [9, 13, 28, 32, 42, 48, 67, 77, 89, 123]],
        ];
    }

    protected function setUp()
    {
        $this->sorterUnderTest = $this->createSorter();
    }

    abstract protected function createSorter(): SortInterface;
}