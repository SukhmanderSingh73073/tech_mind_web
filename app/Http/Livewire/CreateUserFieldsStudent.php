<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateUserFieldsStudent extends Component
{
    public string $role = 'User';
    public function render()
    {
        return view('livewire.create-user-fields-student');
    }
}
