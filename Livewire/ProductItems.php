<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductItems extends Component
{
    public $products;

    public function mount()
    {
        $this->products = Product::all();
    }

    public function render()
    {
        return view('livewire.product-items');
    }
}
