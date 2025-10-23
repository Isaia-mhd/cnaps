<?php

namespace App\Livewire;

use Livewire\Component;

class Login extends Component
{
    public $eye = true;
    public function viewPass()
    {
        $this->eye = !$this->eye;
    }
    public function render()
    {
        return view('livewire.login');
    }
}
