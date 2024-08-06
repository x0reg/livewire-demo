<?php

namespace App\Livewire\User\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class Register extends Component
{
    #[Title("Đăng kí tài khoản")]
    #[Layout("components.layouts.auth")]


    #[Validate('required|string|min:3|max:250')]
    public $name;

    #[Validate('required|string|min:5|max:20|unique:users,username')]
    public $username;

    #[Validate('required|email|unique:users,email')]
    public $email;

    #[Validate('required|string|min:6|confirmed')]
    public $password;

    public $password_confirmation;


    public function register()
    {
        $this->validate();

        $create = User::create([
            'name' => $this->name,
            'username' => $this->username,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);
        if ($create) {
            showToast("success", "Đăng kí thành công. Bạn có thể sử dụng dịch vụ");
            Auth::login($create);
            return $this->redirectRoute('index', navigate: true);
        }
        return false;
    }
    public function render()
    {
        return view('livewire.user.auth.register');
    }
}
