<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nombre_depart'
    ];
    public function tieneVarios()
    {
        return $this->hasMany(Employee::class);
    }
}
