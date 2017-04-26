<?php

use Illuminate\Support\Facades\Cache;

/**
 * 一个基础功能的测试用例。
 *
 * @return void
 */
public function testBasicExample()
{
    Cache::shouldReceive('get')
        ->with('key')
        ->andReturn('value');

    $this->visit('/cache')
        ->see('value');
}