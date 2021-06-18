<?php

namespace App\Http\Livewire\Layouts;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Sidebar extends Component
{
    public User $user;

    public string $active;

    protected $listeners = ['changeData'];

    public function render(): View
    {
        return view('livewire.layouts.sidebar');
    }

    public function mount()
    {
        $this->active = \Route::currentRouteName();
        $this->user = auth()->user();
    }

    public function changeData(User $user)
    {
        $this->user = $user;
    }
}
