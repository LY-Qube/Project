<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithFileUploads;

class UserCardProfile extends Component
{
    use WithFileUploads;


    /**
     * @var string|null
     */
    public ?string $active;

    protected $listeners = ['changeData'];

    public User $user;

    public $image;

    public $submit;


    public function changeData(User $user)
    {
        $this->user = $user;
    }

    public function render(): View
    {
        return view('livewire.user.user-card-profile');
    }

    public function mount()
    {
        $this->active = \Route::currentRouteName();
        $this->user = auth()->user();
    }


}
