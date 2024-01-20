<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analyse extends Model
{
    use HasFactory;
    protected $table = "analyse";
    public function lab() {
        return $this->belongsTo(Lab::class);
    }
}
