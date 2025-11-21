<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public int $totalProducts, $totalCategories, $totalSuperadmins, $totalAdmins;

    public function render()
    {
        $this->totalProducts = Product::count();
        $this->totalCategories = Category::count();
        $this->totalSuperadmins = User::where("role", "superadmin")->count();
        $this->totalAdmins = User::where("role", "admin")->count();
        return view('livewire.dashboard');
    }
}
