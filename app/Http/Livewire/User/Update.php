<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class Update extends Component
{
    public $name;
    public $email;
    public $userId;

    protected $listeners = [
        'getUser' => 'showUser',
    ];

    public function render()
    {
        return view('livewire.user.update');
    }

    public function showUser($user)
    {
        $this->name = $user['name'];
        $this->email = $user['email'];
        $this->userId = $user['id'];
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        if ($this->userId) {
            $user = User::find($this->userId);

            if ($this->email != $user->email && $this->name != $user->name) {
                $this->validate([
                    'name' => 'required|unique:users',
                    'email' => 'required|unique:users',
                ]);
            }
            $user->update([
                'name' => $this->name,
                'email' => $this->email,
            ]);
            $this->resetInput();
            $this->emit('dataUpdated', $user);
        }
    }

    private function resetInput()
    {
        $this->name = null;
        $this->email = null;
    }
}
