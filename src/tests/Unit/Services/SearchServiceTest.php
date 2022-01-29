<?php

namespace Tests\Unit\Services;


use App\Services\SearchService;
use Tests\TestCase;

class SearchServiceTest extends TestCase
{
    /** @test */
    public function binary_search_idx()
    {
        $haystack = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21];

        $idx = SearchService::binarySearchIdx(19, $haystack);

        $this->assertEquals(
            18,
            $idx
        );
    }

    /** @test */
    public function binary_search_idx_not_found()
    {
        $haystack = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21];

        $idx = SearchService::binarySearchIdx(25, $haystack);

        $this->assertEquals(
            -1,
            $idx
        );
    }
}
