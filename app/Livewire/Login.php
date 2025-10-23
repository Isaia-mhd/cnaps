<?php

namespace App\Livewire;

use App\Models\User;
use Auth;
use Hash;
use Illuminate\Validation\Rules\Password;
use Livewire\Component;

class Login extends Component
{
    public $eye = true;
    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => ['required']
    ];
    protected $messages = [
        'email.required' => 'L\'adresse e-mail est obligatoire.',
        'email.email' => 'Veuillez entrer une adresse email valide',
        'password.required' => 'Le mot de passe est obligatoire.',
    ];
    public function viewPass()
    {
        $this->eye = !$this->eye;
    }

    public function authenticate()
    {
        $this->validate();

        $admin = User::where('email', $this->email)->first();
        if ($admin && Hash::check($this->password, $admin->password)) {
            Auth::login($admin);
            session()->flash('success', 'Connexion reussie.');
            $this->reset();
        } else{
            session()->flash('error', 'Identifiants incorrect.');
            $this->reset();
        }

    }
    public function render()
    {
        return view('livewire.login');
    }
}
