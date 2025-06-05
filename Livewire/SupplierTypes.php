<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Supplier;

class SupplierTypes extends Component
{
    public $suppliers;
    public $first_name, $last_name, $email, $address, $mobile1, $mobile2, $product_name, $payment_type;
    public $showModal = false;

    public function mount()
    {
        $this->suppliers = Supplier::all();
    }

    public function render()
    {
        return view('livewire.supplier-types');
    }

    public function saveSupplier()
    {
        $this->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'mobile1' => 'required|string|max:15',
            'mobile2' => 'required|string|max:15',
            'product_name' => 'required|string|max:255',
            'payment_type' => 'required|string|max:255',
        ]);

        Supplier::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'address' => $this->address,
            'mobile1' => $this->mobile1,
            'mobile2' => $this->mobile2,
            'product_name' => $this->product_name,
            'payment_type' => $this->payment_type,
        ]);

        $this->resetInputFields();
        $this->suppliers = Supplier::all();
        $this->showModal = false;
    }

    private function resetInputFields()
    {
        $this->first_name = '';
        $this->last_name = '';
        $this->email = '';
        $this->address = '';
        $this->mobile1 = '';
        $this->mobile2 = '';
        $this->product_name = '';
        $this->payment_type = '';
    }
}

