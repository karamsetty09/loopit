<?php

namespace Tests\Unit;
use App\Models\User;
use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

class UserNameTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function check_user_name()
    {
        //
        factory(User::class)->create();

        $user = User::first();

        $this->assertInternalType("string",$user->model);
        $this->assertTrue(true);
    }
    
}
