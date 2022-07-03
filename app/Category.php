<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function ToDoList()   
{
    return $this->hasMany('App\ToDoList');  
}
}
