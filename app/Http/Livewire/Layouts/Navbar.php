<?php

namespace App\Http\Livewire\Layouts;

use App\Models\User;
use Livewire\Component;

class Navbar extends Component
{
    public User $user;

    protected $listeners = ['changeData'];

    public function render()
    {
        return view('livewire.layouts.navbar');
    }

    public function mount()
    {
        $this->user = auth()->user();
    }

    public function changeData(User $user)
    {
        $this->user = $user;
    }
}
