<?php

namespace App\Livewire\Superadmin\User;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public string $paginate = "10";
    public string $search = "";
    protected string $paginationTheme = "bootstrap";
    public string $id, $name, $email, $password, $password_confirmation, $role;

    public function render(): View
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

    public function create(): void
    {
        $this->resetValidation();
        $this->reset(["name", "role", "email", "password", "password_confirmation"]);
    }

    public function store(): void
    {
        $this->validate([
            "name" => "required|string",
            "role" => "required|string",
            "email" => "required|email|unique:users,email",
            "password" => "required|string|confirmed",
            "password_confirmation" => "required|string|same:password",
        ]);

        User::create([
            "name" => $this->name,
            "role" => $this->role,
            "email" => $this->email,
            "password" => Hash::make($this->password),
        ]);

        $this->dispatch("create-user-success");
    }

    public function edit(string $id): void
    {
        $this->reset(["name", "role", "email", "password", "password_confirmation"]);
        $user = User::findOrFail($id);

        $this->id = $id;
        $this->name = $user->name;
        $this->role = $user->role;
        $this->email = $user->email;
    }

    public function update(string $id): void
    {
        $user = User::findOrFail($id);
        $this->validate([
            "name" => "required|string",
            "role" => "required|string",
            "email" => "required|email|unique:users,email," . $id,
            "password" => "nullable|string|confirmed",
            "password_confirmation" => "nullable|string|same:password",
        ]);

        $data = [
            "name" => $this->name,
            "role" => $this->role,
            "email" => $this->email,
        ];
        if (!empty($this->password)) {
            $data["password"] = Hash::make($this->password);
        }
        $user->update($data);

        $this->dispatch("edit-user-success");
    }

    public function delete(string $id): void
    {
        $user = User::findOrFail($id);

        $this->id = $id;
        $this->name = $user->name;
        $this->role = $user->role;
        $this->email = $user->email;
    }

    public function destroy(string $id): void
    {
        $user = User::findOrFail($id);
        $user->delete();

        $this->dispatch("delete-user-success");
    }
}
