<?php

namespace App\Http\Controllers;

use App\ToDoList;
use App\Http\Requests\ToDoListRequest; 
use App\Category;
use App\Date;
use App\Status;

class ToDoListController extends Controller
{
   public function index(ToDoList $to_do_lists)
{
    return view('ToDoLists/index')-> with(['to_do_lists' => $to_do_lists->getPaginateByLimit()]);
} 
public function show(ToDoList $to_do_lists)
{
    return view('ToDoLists/show')->with(['to_do_lists' => $to_do_lists]);
}
public function create(Category $category,Date $date,Status $status)
{
     return view('ToDoLists/create')->with(['categories' => $category->get()]);;
     return view('ToDoLists/create')->with(['dates' => $date->get()]);;
      return view('ToDoLists/create')->with(['statuses' => $status->get()]);;
}
 public function store(ToDoList $to_do_lists, ToDoListRequest $request) // 引数をRequest->PostRequestにする
{
        $input = $request['to_do_lists'];
        $to_do_lists->fill($input)->save();
        return redirect('/ToDoLists/' . $to_do_lists->id);
}
public function edit(ToDoList $to_do_lists)
{
    return view('ToDoLists/edit')->with(['to_do_lists' => $to_do_lists]);
}
public function update(ToDoListRequest $request, ToDoList $to_do_lists)
{
    $input_to_do_lists = $request['to_do_lists'];
    $to_do_lists->fill($input_to_do_lists)->save();
    $to_do_lists->status_id = $request->status_id = number('1');

    return redirect('/ToDoLists/' . $to_do_lists->id);
    return redirect('/ToDoLists/' . $to_do_lists->status_id);
}
 public function end(ToDoList $to_do_lists)
{
    return view('ToDoLists/end')->with(['to_do_lists' => $to_do_lists->getPaginateByLimit()]);
} 

public function delete(ToDoList $to_do_lists)
{
    $to_do_lists->delete();
    return redirect('/');
}
}
?>
