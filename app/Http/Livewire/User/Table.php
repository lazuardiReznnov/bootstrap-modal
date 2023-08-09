<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $statusUpdate = false;

    protected $listeners = [
        'dataStored' => 'handleStored',
        'dataUpdated' => 'handleUpdated',
    ];

    public $search = '';

    public function render()
    {
        return view('livewire.user.table', [
            'datas' => User::latest()
                ->where('name', 'like', '%' . $this->search . '%')
                ->paginate(2),
        ]);
    }

    public function getUser($id)
    {
        $this->statusUpdate = true;

        $user = User::find($id);
        $this->emit('getUser', $user);
    }

    public function destroy($id)
    {
        if ($id) {
            $data = User::find($id);
            $data->delete();
            session()->flash('success', 'Data Has Been Deleted');
        }
    }
    public function handleStored($datas)
    {
        session()->flash('success', 'Data Has Been Added');
    }

    public function handleUpdated($datas)
    {
        session()->flash('success', 'Data Has Been Updated');
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
