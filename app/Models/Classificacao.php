<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classificacao extends Model
{
    protected $table = "classificacao";

    protected $fillable = ["classificacao"];
    
    use HasFactory;
}
