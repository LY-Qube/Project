<?php

namespace App\Http\Livewire\User\Setting;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Account extends Component
{

    /**
     * @var User user
     */
    public User $user;

    /**
     * @var string $password
     */
    public string $password;

    /**
     * @var array[]
     */
    protected array $rules = [
        "password"                          => "required_with:user.newPassword|string|min:8|max:255",
        "user.newPassword"                  => "required_with:password|string|min:8|max:255|confirmed",
        "user.newPassword_confirmation"     => "required_with:password|string|min:8|max:255",
        'user.job_position'                 => "required|string|max:255|min:1"
    ];

    public function render(): View
    {
        return view('livewire.user.setting.account');
    }

    public function mount()
    {
        $this->user = auth()->user();
        $this->password = '';
    }

    public function save()
    {
        $this->validate();

        $this->changePassword();
    }

    private function changePassword()
    {
        if (!empty($this->password)) {
            $correct = app('hash')->check($this->password, $this->user->password);
            if ($correct) {
                $this->user->password = bcrypt($this->user->newPassword);
                auth()->user()->update([
                    'job_position' => $this->user->job_position,
                    'password' => bcrypt($this->user->newPassword)
                ]);
                $this->emit('changeData', $this->user);
                $this->emptyValues();
                $this->emit('success', 'your account data is updated successfully');
            } else {
                $this->addError('password', 'Your Current Password is not correct');
            }

        } else {
            $this->emptyValues();

            auth()->user()->update([
                'job_position' => $this->user->job_position,
            ]);

            $this->emit('success', 'your account data is updated successfully');

            $this->emit('changeData', $this->user);
        }

    }

    private function emptyValues()
    {
        $this->user->newPassword = '';
        $this->user->newPassword_confirmation = '';
        $this->password = '';
    }

}
