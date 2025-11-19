<?php

namespace App\Livewire\Superadmin\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $paginate = "10";
    public $search = "";
    protected $paginationTheme = "bootstrap";

    public function render()
    {
        $data = array(
            "title" => "Data Users",
            "users" => User::where(function ($query) {
                $query->whereRaw("LOWER(name) LIKE ?", ['%' . strtolower($this->search) . '%'])
                    ->orWhereRaw("LOWER(email) LIKE ?", ['%' . strtolower($this->search) . '%']);
            })->orderBy('role', 'DESC')->paginate($this->paginate)

        );
        return view('livewire.superadmin.user.index', $data);
    }
}
