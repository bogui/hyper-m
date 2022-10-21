<?php

namespace App\Http\Livewire\Teams;

use App\Models\Plan;
use Livewire\Component;

class PlanSelector extends Component
{
    public $plans;

    public function mount()
    {
        $this->plans = Plan::all();
    }

    public function render()
    {
        return view('livewire.teams.plan-selector');
    }
}
