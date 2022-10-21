<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Component
{
    public $has_teams;

    public function mount()
    {
        $this->has_teams = Auth::user()->hasTeams();
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}