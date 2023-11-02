<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $username = "admin";
    public $password = "admin";
    public User $user;

    public function mount()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }
    }

    public function render()
    {
        return view('livewire.login')->layout('components.layouts.login');
    }
    protected $rules = [
        'username' => 'required',
        'password' => 'required',
    ];
    protected $messages = [
        'username.required' => 'Tài khoản không được trống',
        'password.required' => 'Mật khẩu không được trống',
    ];

    public function login()
    {
        $this->validate();
        if (Auth::attempt(['username' => $this->username, 'password' => $this->password])) {
            return redirect()->route('home');
        }
        $this->addError('username', 'Tài khoản khồng tồn tại');
    }
}
