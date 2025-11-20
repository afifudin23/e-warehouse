<?php

namespace App\Livewire\Superadmin\Category;

use App\Models\Category;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public string $paginate = "10";
    public string $search = "";
    protected string $paginationTheme = "bootstrap";
    public string $id, $name;

    public function render(): View
    {
        $data = array(
            "title" => "Categories",
            "categories" => Category::where(function ($query) {
                $query->whereRaw("LOWER(name) LIKE ?", ['%' . strtolower($this->search) . '%']);
            })->orderBy('name', 'ASC')->paginate($this->paginate)

        );
        return view('livewire.superadmin.category.index', $data);
    }

    public function create(): void
    {
        $this->resetValidation();
        $this->reset(["name"]);
    }

    public function store(): void
    {
        $this->validate(["name" => "required|string"]);

        Category::create(["name" => $this->name]);

        $this->dispatch("create-category-success");
    }

    public function edit(string $id): void
    {
        $this->reset(["name"]);
        $user = Category::findOrFail($id);

        $this->id = $id;
        $this->name = $user->name;
    }

    public function update(string $id): void
    {
        $user = Category::findOrFail($id);
        $this->validate(["name" => "required|string"]);

        $data = ["name" => $this->name];
        $user->update($data);

        $this->dispatch("edit-category-success");
    }

    public function delete(string $id): void
    {
        $user = Category::findOrFail($id);

        $this->id = $id;
        $this->name = $user->name;
    }

    public function destroy(string $id): void
    {
        $user = Category::findOrFail($id);
        $user->delete();

        $this->dispatch("delete-category-success");
    }
}
