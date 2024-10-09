<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', // Nombre del rol
    ];
    
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function isRole(string $roleName): bool
    {
        return $this->name === $roleName;
    }
}
