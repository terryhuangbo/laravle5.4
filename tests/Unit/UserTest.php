<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        //请求方法Post/Get；返回值必须为json格式；可以带参数
        $response = $this->json('Post', 'hb/json', ['name' => 'Sally']);
//        $response = $this->json('Get', 'hb/json', ['name' => 'Sally']);

        //返回值包含   'code' => 200,
//        $response
//            ->assertStatus(200)
//            ->assertJson([
//                'code' => 200,
//            ]);

        //返回值等于   'code' => 200,
        $response
            ->assertStatus(200)
            ->assertExactJson([
                'code' => 200,
                'msg' => 'success',
            ]);



    }
}
