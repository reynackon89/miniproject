<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class TestUsers extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertUser()
    {

        $user = new User();
        $user->name = 'Reyn';
        $user->email = 'google@google.com';
        $user->password = 'hellothere123';

        $this->assertTrue($user->save());
    }

    public function testDelete()
    {

        $user = new User();
        $user->name = 'Reyn';
        $user->email = 'google@google.com';
        $user->password = 'hellothere123';

        $this->assertTrue($user->delete());
    }


}
