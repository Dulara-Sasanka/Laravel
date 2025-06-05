<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class UserTypes extends Component
{
    public $form = [];
    
    public $users;
        public $showModal = false;

    public function addNewUser()
    {
        $this->dispatchBrowserEvent('showModal');
    }

    public function save()
    {
        $validateData = Validator::make($this->form, [
            'first_name' => 'required',
            'last_Name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'mobile1' => 'required',
            'mobile2' => 'required',
        ])->validate();

        User::create($validateData);

        $this->showModal = true;

    }

    public function mount() 
    {
        $this->users = User::all();
    }
    public function render()
    {
        return view('livewire.user-types');
    }
}
