<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'city', 'salary', 'positionId'
    ];

    public function position() {
        return $this->belongsTo(Position::class, 'positionId');
    }
}
