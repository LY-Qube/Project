<?php

namespace App\Http\Livewire\User\Access;

use App\Models\Access as AccessModel;
use App\Notifications\UserAccessNotification;
use Illuminate\Support\Str;
use Livewire\Component;

class CreateAccess extends Component
{

    public bool $form;

    public AccessModel $access;

    protected array $rules = [
        'access.email'     => "required|string|email|max:255|unique:users,email|unique:registers,email",
        'access.job_position'   => "required|string|max:255"
    ];

    public function render()
    {
        return view('livewire.user.access.create-access');
    }

    public function mount()
    {
        $this->getAccess();
    }

    private function getAccess()
    {
        $this->access = new AccessModel();
    }

    public function form()
    {
        $this->form = true;
    }

    public function save()
    {

        $this->validate();

        $this->access->creator_id = auth()->id();

        $this->access->token = Str::random(10);

        $this->access->save();

        $this->access->notify(new UserAccessNotification());

        $this->emit('changeDataAccess');

        $this->emit('success', 'New Access is created successfully');

        $this->getAccess();

        $this->form = false;

    }


}
