<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function to_do_lists()   
{
    return $this->hasMany('App\ToDoList');  
}
public function getByCategory(int $limit_count = 5)
{
return $this->to_do_lists()->with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
}