<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Good;

class GoodItems extends Component
{
    public $q;
    public $goods;
    public $newGood = [
        'raw_type' => '',
        'raw_item' => '',
    ];
    public $showModal = false; // This will control the modal visibility

    protected $queryString = ['q'];

    protected $rules = [
        'newGood.raw_type' => 'required|string',
        'newGood.raw_item' => 'required|string',
    ];

    public function render()
    {
        $this->goods = Good::when($this->q, function ($query) {
            $query->where('raw_type', 'like', '%' . $this->q . '%')
                  ->orWhere('raw_item', 'like', '%' . $this->q . '%');
        })->get();

        return view('livewire.good-items');
    }

    public function openModal()
    {
        $this->resetValidation();
        $this->showModal = true;
    }

    public function saveGood()
    {

    $this->validate();

    Good::create($this->newGood);

    $this->newGood = ['raw_type' => '', 'raw_item' => ''];
    $this->showModal = false;

    session()->flash('message', 'Good added successfully.');
}
}
