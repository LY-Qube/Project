<?php

namespace App\Http\Livewire\User\Setting;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Information extends Component
{
    /**
     * @var \App\Models\Information $information
     */
    public \App\Models\Information $information;

    /**
     * @var User $user
     */
    public User  $user;

    /**
     * @var string[] $rules
     */
    protected $rules = [
        'user.last_name'        => "required|string|max:255",
        'user.first_name'       => "required|string|max:255",
        'information.phone'     => "required|string|min:10|max:10",
        'information.address'   => "required|string|max:255",
        'information.city'      => "required|string|max:255",
    ];

    public function render(): View
    {
        return view('livewire.user.setting.information');
    }

    public function mount()
    {
        $this->user = auth()->user();
        $this->information = $this->user->information;
    }

    public function save()
    {
        $this->validate();

        auth()->user()->update([
            'last_name' => $this->user->last_name,
            'first_name' => $this->user->first_name
        ]);

        $this->information->save();

        $this->emit('changeData',$this->user);

        $this->emit('success', 'Your data is updated');
    }


}
