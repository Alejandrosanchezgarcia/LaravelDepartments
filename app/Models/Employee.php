<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $fillable = [
        'id',
        'nombre_emp',
        'email',
        'nombre_depart'
    ];

    public function pertenece()
    {
        return $this->belongsTo(Department::class, 'nombre_depart', 'id');
    }
}
