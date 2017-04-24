<?php

namespace Tests\Browser;

use App\User;
use Laravel\Dusk\Browser;
use Tests\Browser\Pages\Login;
use Tests\Browser\Pages\Test;
use Tests\DuskTestCase;
use Laravel\Dusk\Chrome;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{
//    use DatabaseMigrations;

    /**
     * A basic browser test example.
     *
     * @group basic
     * @return void
     */
    public function testBasicExample()
    {
        $user = factory(User::class)->create([
            'email' => 'taylor@laravel.com',
        ]);

        $this->browse(function (Browser $browser) use ($user) {
//            $browser->visit('/login')
//                ->type('email', $user->email)
//                ->type('password', 'secret')
//                ->press('Login')
//                ->assertPathIs('/laravel5.4/public/home');
//
//        });

//        $this->browse(function (Browser $first, Browser $second) {
//            $first->loginAs(User::find(1))
//                ->visit('/home')
//                ->waitForText('Message');
//
//            $second->loginAs(User::find(2))
//                ->visit('/home')
//                ->waitForText('Message')
//                ->type('message', 'Hey Taylor')
//                ->press('Send');
//
//            $first->waitForText('Hey Taylor')
//                ->assertDontSee('Jeffrey Way');
//        });


//        $this->browse(function (Browser $browser) {
//            $browser->visit('/test')
//                ->clickLink("点击我")
            ;
//
////            $value = $browser->text(".hbpara");
////            $value = $browser->value("#hbinput", '111111');
//
////            $browser->select('car', 'audi');
////            $browser->check('vehicle', 'Car');
//
//            $browser->attach('pic', '');

//            $browser->with('#div2', function ($dom) {
//                $dom->assertSee('test1');
//            });

            $browser->visit(new Test())
                ->createPlaylist('My Playlist')
                ->assertSee('test2');
//
        });







    }
}