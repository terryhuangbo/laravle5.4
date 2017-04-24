<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DbTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * 基本的功能测试示例。
     *
     * @group db
     * @return void
     */
    public function testBasicExample()
    {
        $response = $this->get('/');

        $factory->define(App\User::class, function (Faker\Generator $faker) {
            static $password;

            return [
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => $password ?: $password = bcrypt('secret'),
                'remember_token' => str_random(10),
            ];
        });

        // ...
    }
}