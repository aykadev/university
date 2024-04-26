<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public $timestamps = true;


    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }

    public function program(): HasMany
    {
        return $this->hasMany(Program::class);
    }

    public function requirement():HasMany
    {
        return $this->hasMany(Requirement::class);
    }
}