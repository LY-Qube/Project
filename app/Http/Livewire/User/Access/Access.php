<?php

namespace App\Http\Livewire\User\Access;

use App\Models\Access as AccessModel;
use Livewire\Component;

class Access extends Component
{
    public AccessModel $access;

    public function render()
    {
        return view('livewire.user.access.access');
    }

}
