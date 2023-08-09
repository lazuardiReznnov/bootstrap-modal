<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Create extends Component
{
    public $name;
    public $email;
    public $password;
    public function render()
    {
        return view('livewire.user.create');
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $this->resetInput();
        $this->emit('dataUpdated', $user);
    }

    private function resetInput()
    {
        $this->name = null;
        $this->email = null;
        $this->password = null;
    }
}
