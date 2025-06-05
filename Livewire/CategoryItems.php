<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;

class CategoryItems extends Component
{
    public $categories;
    public $s = '';

    public $confirmingItemDeletion = false;
    public $confirmingItemAdd = false;

    // Separate variable for form input, not categories list
    public $newCategory = [
        'good_item' => '',
        'items' => '',
        'quantity' => '',
        'units' => '',
    ];

    protected $rules = [
        'newCategory.good_item' => 'required|string',
        'newCategory.items' => 'required|string',
        'newCategory.quantity' => 'required|numeric',
        'newCategory.units' => 'required|string',
    ];

    public function render()
    {
        $this->categories = Category::with('good')->get();

        $this->categories = Category::query()
            ->when($this->s, function($query) {
                $query->where('items', 'like', '%' . $this->s . '%');
            })
            ->get();

        return view('livewire.category-items');
    }

    public function confirmItemDeletion($id)
    {
        $this->confirmingItemDeletion = $id;
    }

    public function deleteItem($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        $this->confirmingItemDeletion = false;
    }

    public function confirmItemAdd()
    {
        $this->confirmingItemAdd = true;
    }

    public function saveItem()
    {
        $this->validate();

        auth()->user()->categories()->create($this->newCategory);

        $this->confirmingItemAdd = false;
        $this->reset('newCategory');
    }
}

