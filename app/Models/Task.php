<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'to_do_list_id', 'completed'];

    public function toDoList()
    {
        return $this->belongsTo(TodoList::class);
    }
}
