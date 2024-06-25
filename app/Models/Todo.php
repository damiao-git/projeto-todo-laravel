<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rules\Enum;

class Todo extends Model
{
    use HasFactory;
    protected $table = 'todos';
    protected $fillable = ['tarefa', 'classificacao'];
}

