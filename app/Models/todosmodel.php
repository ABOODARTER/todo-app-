<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todosmodel extends Model
{
    protected $table = 'todos' ;
    use HasFactory;
    protected $attributes = [
        'completed' =>false,
    ];
}
