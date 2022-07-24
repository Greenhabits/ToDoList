<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
public function ToDoLists()   
{
    return $this->hasMany('App\ToDoList');  
}
}
