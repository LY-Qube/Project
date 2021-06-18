<?php

namespace App\Http\Livewire\Layouts;

use Livewire\Component;

class AlertSuccess extends Component
{
    public string $message;

    protected $listeners = ['success'];

    public function render()
    {
        return view('livewire.layouts.alert-success');
    }

    public function success(string $message)
    {
        $this->message = $message;
    }
}
