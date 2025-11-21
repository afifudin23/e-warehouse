<?php

namespace App\Livewire\Admin\Product;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public string $paginate = "10";
    public string $search = "";
    protected string $paginationTheme = "bootstrap";
    public string $id, $category_id, $category_name, $name, $price;
    public Collection $categories;

    public function mount(): void
    {
        $this->categories = Category::orderBy('name')->get();
    }

    public function render(): View
    {
        $data = array(
            "title" => "Product Items",
            "products" => Product::where(function ($query) {
                $query->whereRaw("LOWER(name) LIKE ?", ['%' . strtolower($this->search) . '%']);
            })->orderBy('name', 'DESC')->paginate($this->paginate)

        );
        return view('livewire.superadmin.product.index', $data);
    }

    public function create(): void
    {
        $this->resetValidation();
        $this->reset(["category_id", "name", "price"]);
    }

    public function store(): void
    {
        $this->validate([
            "name" => "required|string",
            "price" => "required|string",
            "category_id" => "required|exists:categories,id",
        ]);

        Product::create([
            "category_id" => $this->category_id,
            "name" => $this->name,
            "price" => $this->price,
        ]);

        $this->dispatch("create-product-success");
    }

    public function edit(string $id): void
    {
        $this->reset(["category_id", "name", "price"]);
        $product = Product::findOrFail($id);

        $this->id = $id;
        $this->name = $product->name;
        $this->price = $product->price;
        $this->category_id = $product->category_id;
    }

    public function update(string $id): void
    {
        $product = Product::findOrFail($id);
        $this->validate([
            "name" => "required|string",
            "price" => "required|string",
            "category_id" => "required|exists:categories,id",
        ]);

        $data = [
            "category_id" => $this->category_id,
            "name" => $this->name,
            "price" => $this->price,
        ];
        $product->update($data);

        $this->dispatch("edit-product-success");
    }

    public function delete(string $id): void
    {
        $product = Product::findOrFail($id);

        $this->id = $id;
        $this->name = $product->name;
        $this->price = $product->price;
        $this->category_name = $product->category->name;
    }

    public function destroy(string $id): void
    {
        $product = Product::findOrFail($id);
        $product->delete();

        $this->dispatch("delete-product-success");
    }
}
