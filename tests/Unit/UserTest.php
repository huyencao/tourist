<?php

namespace Tests\Unit;

use Tests\TestCase;
use Faker\Factory;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Models\User;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCreate()
    {
        $faker = Factory::create();
        $data = [
            'username' => $faker->username,
            'email' => $faker->unique()->safeEmail,
            'avatar_id' => rand(1, 10),
            'password' => bcrypt('realestate'),
            'role' => rand(1, 3),
            'fullname' => $faker->name,
            'remember_token' => md5(uniqid()),
        ];
        $user = User::create($data);
        $this->assertEquals(1, $this->count($user));
    }

    public function testUpdate()
    {
        $faker = Factory::create();
        $data = [
            'username' => $faker->username,
            'email' => $faker->unique()->safeEmail,
            'avatar_id' => rand(1, 10),
            'password' => bcrypt('realestate'),
            'role' => rand(1, 3),
            'fullname' => $faker->name,
            'remember_token' => md5(uniqid()),
        ];
        $user = User::create($data);
        $user_updated = $user->update(['fullname' => 'Fullname Updated']);
        $this->assertEquals(true, $user_updated);
    }

    public function testDetele()
    {
        $faker = Factory::create();
        $data = [
            'username' => $faker->username,
            'email' => $faker->unique()->safeEmail,
            'avatar_id' => rand(1, 10),
            'password' => bcrypt('realestate'),
            'role' => rand(1, 3),
            'fullname' => $faker->name,
            'remember_token' => md5(uniqid()),
        ];
        $user = User::create($data);
        $result = $user->delete($user->id);
        $this->assertEquals(true, $result);
    }
}
