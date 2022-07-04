<?php

namespace App\Http\Controllers;

use App\ToDoList;
use App\Http\Requests\ToDoListRequest; 
use App\Category;

class ToDoListController extends Controller
{
   public function index(ToDoList $todolists)
{
    return view('ToDoLists/index')->with(['ToDoLists' => $todolists->getPaginateByLimit()]);
} 
public function show(ToDoList $todolists)
{
    return view('ToDoLists/show')->with(['todolists' => $todolists]);
}
public function create(Category $category)
{
    return view('ToDoLists/create')->with(['categories' => $category->get()]);;
}
 public function store(ToDoList $todolists, ToDoListRequest $request) // 引数をRequest->PostRequestにする
{
        $input = $request['todolists'];
        $todolists->fill($input)->save();
        return redirect('/ToDoLists/' . $todolists->id);
}
public function edit(ToDoList $todolists)
{
    return view('ToDoLists/edit')->with(['todolists' => $todolists]);
}
public function update(ToDoListRequest $request, ToDoList $todolists)
{
    $input_todolists = $request['todolists'];
    $todolists->fill($input_todolists)->save();

    return redirect('/ToDoLists/' . $todolists->id);
}
public function delete(ToDoList $todolists)
{
    $todolists->delete();
    return redirect('/');
}
}
?>
