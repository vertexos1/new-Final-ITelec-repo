<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Livewire;

class AdminDashboard extends Component
{
    public function render()
    {
        return view('livewire.admin-dashboard')
        ->layout('admin-layout');
    }
}
