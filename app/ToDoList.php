<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ToDoList extends Model
{
   use SoftDeletes;
   
   protected $fillable = [
    'title',
    'body',
    'category_id',
     'date_id',
     'status_id'
];
    protected $dates = [
        'date_id',
    ];
    function getPaginateByLimit(int $limit_count = 5)
{
    return $this::with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    return $this::with('date')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    return $this::with('status')->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
public function category()
{
    return $this->belongsTo('App\Category');
}
public function date()
{
    return $this->belongsTo('App\Date');
}
public function status()
{
    return $this->belongsTo('App\Status');
}
}
