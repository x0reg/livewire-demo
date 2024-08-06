<?php

namespace App\Livewire\User\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    #[Title("Đăng Nhập")]

    #[Layout('components.layouts.auth')]

    #[Validate('required')]
    public $usernameOrEmail;

    #[Validate('required')]
    public $password;

    public $remember_me;
    public function login()
    {
        $this->validate();
        $remember = $this->remember_me ? true : false;
        $dataLogin = $this->usernameOrEmail;
        $fieldType = filter_var($dataLogin, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $user = User::where($fieldType, $dataLogin)
            ->first();
        if ($user) {
            $check = Auth::attempt([
                $fieldType => $dataLogin,
                'password' => $this->password
            ], $remember);
            if ($check) {
                showToast("success", "Đăng Nhập Thành Công");
                return $this->redirectRoute("index", navigate: true);
            }
            return showToast("error", "Đăng nhập thất bại. Thông tin đăng nhập không chính xác");
        }
        return showToast("warning", "Đăng nhập thất bại. Thông tin đăng nhập không hợp lệ!");
    }
    public function render()
    {
        return view('livewire.user.auth.login');
    }
}
