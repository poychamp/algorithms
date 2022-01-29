<?php

namespace Tests\Unit\Services;

use App\Services\SortService;
use Tests\TestCase;

class SortServiceTest extends TestCase
{
    /** @test */
    public function merge_sort()
    {
        $data = [23, 45, 15, 13, 61, 56, 125, 1];

        $this->assertEquals(
            SortService::mergeSort($data),
            [1, 13, 15, 23, 45, 56, 61, 125]
        );
    }
}
