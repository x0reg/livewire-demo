<?php

namespace App\Livewire\User\Layouts;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Navbar extends Component
{
    public function render()
    {
        return view('livewire.user.layouts.navbar');
    }
}
