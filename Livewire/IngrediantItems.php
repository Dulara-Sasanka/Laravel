<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Ingrediant;

class IngrediantItems extends Component
{
    public $ingrediants;

    public function mount()
    {
        $this-> ingrediants = Ingrediant::all();
    }

    public function render()
    {
        return view('livewire.ingrediant-items');
    }
}
