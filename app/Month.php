<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Month extends Model
{
    public function ToDoList()
{
return $this->hasMany('App\ToDoList');
}
}