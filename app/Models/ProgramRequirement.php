<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramRequirement extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'program_rewuirements',
    ];

    public function program():BelongsTo 
    {
        return $this->belongsTo(Program::class);
    }

    public function requirements(): BelongsTo 
    {
        return $this->belongsTo(Requirement::class);
    }
}
