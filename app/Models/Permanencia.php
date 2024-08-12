<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;




class Permanencia extends Model
{
    use HasFactory;
    protected $table = 'permanencia';
    public $timestamps = false;

    public function materia(): BelongsTo
    {
        return $this->belongsTo(Materia::class);
    }

    public function professor(): BelongsTo
    {
        return $this->belongsTo(Professor::class);
    }
}