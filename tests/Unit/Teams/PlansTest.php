<?php

namespace Tests\Unit;

use App\Models\Plan;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\CreatesApplication;
use Illuminate\Foundation\Testing\TestCase;

class PlansTest extends TestCase
{
    use CreatesApplication, RefreshDatabase;

    /**
     * Indicates whether the default seeder should run before each test.
     *
     * @var bool
     */
    protected $seed = false;

    /**
     * @test
     *
     * Database has plans.
     *
     * @return void
     */
    public function database_has_plans_table()
    {
        $this->seed();

        $this->assertDatabaseHas('plans', ['name' => 'free']);
    }

    /**
     * @test
     *
     * database has free plan.
     *
     * @return void
     */
    public function function_name()
    {
        $plan = Plan::factory()->free()->create();
        $perms = [
            'inv_count' => 5,
            'usr_count' => 1
        ];


        $this->assertDatabaseHas('plans', [
            'name' => 'free',
        ]);

        $this->assertEquals($plan->permissions, $perms);
        $this->assertEquals($plan->permissions['inv_count'], $perms['inv_count']);
    }
}
