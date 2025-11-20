<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Livewire\Component;

class Login extends Component
{
    public string $email, $password;

//    public function mount()
//    {
//        if (auth()->check()) {
//            return redirect()->route('dashboard');
//        }
//    }

    public function render(): View
    {
        return view('livewire.auth.login');
    }

    public function login()
    {
        $this->validate([
            "email" => "required",
            "password" => "required"
        ]);

        $user = User::where("email", $this->email)->first();
        if (!$user || !Hash::check($this->password, $user->password)) {
            $this->addError('errors', 'Email or password is incorrect');
            $this->reset("email", "password");
            return;
        }
        auth()->login($user);
        return redirect()->to("/superadmin/users");
    }

    public function logout(): RedirectResponse
    {
        auth()->logout();
        return redirect()->to("/auth/login");
    }
}
