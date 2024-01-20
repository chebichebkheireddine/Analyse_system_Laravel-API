<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analyse extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "analyses";
    public function lab() {
        return $this->belongsTo(Lab::class);
    }
}
