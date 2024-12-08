<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class Products extends Component
{
    public $products, $module_name, $page_title, $sub_title, $current_view, $edit_product, $readonly;

    public $id;
    public $name;
    public $description;
    public $price;
    public $quantity;
    public $status;

    protected $listeners = ['delete_product'];
    public function __construct() {
        $this->module_name = 'Product';
        $this->page_title = 'Products';
        $this->sub_title = 'Manage Products';
        $this->current_view = 'livewire.products.index';
        $this->edit_product = false;
        $this->readonly = false;
    }

    protected $rules = [
        'name' => 'required',
        'description' => 'required',
        'price' => 'required',
        'quantity' => 'required',
    ];

    protected $messages = [
        'name.required' => 'Product name is required.',
        'description.required' => 'description is required.',
        'price.required' => 'Product price is required.',
        'quantity.required' => 'Product quantity is required.',
    ];

    public function mount()
    {
        $this->loadProducts();
    }
    private function loadProducts()
    {
        $this->products = Product::where('status', true)->get();
    }

    public function render()
    { 
        return view($this->current_view);
    }

    public function create_product()
    {
        $this->current_view = 'livewire.products.form';
        $this->reinitialize_js();
    }

    public function reset_component()
    {
        $this->current_view = 'livewire.products.index';
        $this->edit_product = false;
        $this->readonly = false;
        $this->reinitialize_js();
    }

    public function reinitialize_js()
    {
        $this->dispatch('reinitialize_library');
    }

    public function save_product()
    {
        $validatedData = $this->validate();
        Product::create($validatedData);
        $this->reset();
        $this->loadProducts(); 
        $this->reinitialize_js();
    }

    public function get_product($product_id, $edit = false)
    {
        $product = Product::findOrFail($product_id);
        $this->id = $product->id;
        $this->name = $product->name;
        $this->description = $product->description;
        $this->quantity = $product->quantity;
        $this->price = $product->price;

        $this->current_view = 'livewire.products.form';
        if ($edit == true) {
            $this->edit_product = true;
        }else{
            $this->readonly = true;
        }
    }

    public function update_product() { 
        $validatedData = $this->validate();
        $product = Product::find($this->id);
        $product->update([
            'name' => $this->name,
            'description' => $this->description,
            'quantity' => $this->quantity,
            'price' => $this->price,
        ]);
        $this->edit_product = false;
        $this->reset();
        $this->loadProducts();
        $this->reinitialize_js();
    }

    public function delete_product($data)
    {        
        $product_id = $data['product_id'];
        if ($product_id) {
            Product::whereId($product_id)->delete();
            $this->reset();
            $this->loadProducts();
            $this->reinitialize_js();
        }
    }

    public function confirmDelete($productId)
    {
        $this->dispatch('confirm-delete', ['product_id' => $productId]);
    }

    
}
