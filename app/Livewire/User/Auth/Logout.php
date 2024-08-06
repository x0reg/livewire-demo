<?php

namespace App\Livewire\User\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Logout extends Component
{

    public function logout()
    {
        Auth::logout();
        showToast("success", "Đặng xuất thành công");
        return $this->redirectRoute('login', navigate: true);
    }
    public function render()
    {
        return view('livewire.user.auth.logout');
    }
}
