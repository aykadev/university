<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function programs(): HasMany
    {
        return $this->hasMany(Program::class);
    }   

    public function requirements(): HasMany
    {
        return $this->hasMany(requirement::class);
    }
}
