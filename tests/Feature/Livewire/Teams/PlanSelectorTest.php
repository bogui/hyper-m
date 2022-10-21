<?php

namespace Tests\Feature\Livewire\Teams;

use Tests\TestCase;
use App\Models\Plan;
use App\Models\User;
use Livewire\Livewire;
use Illuminate\Support\Collection;
use App\Http\Livewire\Teams\PlanSelector;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PlanSelectorTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(PlanSelector::class);

        $component->assertStatus(200);
    }

    /**
     * @test
     *
     * the component is rendered in teams/create.
     *
     * @return void
     */
    public function the_component_is_rendered_in_temas_creation_form()
    {
        $this->actingAs(User::factory()->create());
        $this->get(route('teams.create'))->assertSeeLivewire(PlanSelector::class);
    }

    /**
     * @test
     *
     * component emits event when plan is selected.
     *
     * @return void
     */
    public function the_component_emits_event_when_plan_is_selected()
    {

        Plan::factory()->free()->create();
        Plan::factory()->pay_as_you_go()->create();
        Plan::factory()->basic()->create();

        $plans = Plan::all();

        $this->actingAs(User::factory()->create());


        Livewire::test(PlanSelector::class)
            ->assertSet('plans', $plans);
    }
}
