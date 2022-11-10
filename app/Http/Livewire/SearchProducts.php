<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class SearchProducts extends Component
{

    public $searchWord = '';
    public $products = [];
    public $searchResults = [];

    public function render()
    {
        return view('livewire.search-products');
    }

    public function search()
    {
        if (empty($this->searchWord)) {
            $this->searchResults = [];
        } else {
            $this->searchResults = Product::where('name', 'LIKE', '%' . $this->searchWord . '%')
                ->orWhere('price', 'LIKE', '%' . $this->searchWord . '%')->orWhere('description', 'LIKE', '%' . $this->searchWord . '%')
                ->orWhere('product_code', 'LIKE', '%' . $this->searchWord . '%')->get();

        }

    }
}

