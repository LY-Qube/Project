<?php

namespace App\Http\Livewire\User\Access;

use App\Models\Access as AccessModel;
use App\Notifications\UserAccessNotification;
use Livewire\Component;

class ListAccess extends Component
{
    public $accesses;

    protected $listeners = ['changeDataAccess'];

    public function render()
    {
        return view('livewire.user.access.list-access');
    }

    public function mount()
    {
        $this->getAll();
    }

    public function changeDataAccess()
    {
        $this->getAll();
    }

    private function getAll()
    {
        $this->accesses = AccessModel::orderBy('id','desc')->get();
    }

    public function delete(int $id)
    {
        $access = AccessModel::find($id);
        if ($access) {
            $access->delete();
            $this->emit('success', 'Access is deleted Successfully');
            $this->getAll();
        }
    }

    public function resend(int $id)
    {
        $access = AccessModel::find($id);
        if ($access) {
            $access->notify(new UserAccessNotification());
            $this->emit('success', 'Email is resented Successfully to ' . $access->email);
        }
    }
}
