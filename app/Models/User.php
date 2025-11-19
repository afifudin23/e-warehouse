<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasUuids, HasFactory;

    protected $fillable = [
        "name",
        "email",
        "password",
        "role",
    ];

    protected $hidden = [
        "password",
        "remember_token",
    ];
}
