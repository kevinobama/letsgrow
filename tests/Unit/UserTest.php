<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * testDatabase
     *
     * @return void
     */
    public function testDatabase()
    {
        // Make call to application...
        $this->assertDatabaseHas('users', [
            'email' => 'kevinobamatheus@gmail.com'
        ]);

        $this->assertDatabaseMissing('users', [
            'email' => 'barackobama@gmail.com'
        ]);
    }
}
