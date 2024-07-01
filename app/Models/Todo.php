<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rules\Enum;

class Todo extends Model
{
    use HasFactory;
    protected $table = 'todos';
    protected $fillable = ['name', 'status', 'user_id', 'status_id'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function status(){
        return $this->belongsTo(Status::class, 'user_id');
    }
}

