<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = "status";

    protected $fillable = ["name"];
    
    use HasFactory;

    public function todo(){
        return $this->belongsTo(Todo::class, 'user_id');
    }


}
