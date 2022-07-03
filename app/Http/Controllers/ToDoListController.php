<?php

namespace App\Http\Controllers;

use App\ToDoList;
use Illuminate\Http\Request;

class ToDoListController extends Controller
{
   public function index(ToDoList $to_do_lists)
{
    return view('ToDoLists/index')->with(['ToDoLists' => $to_do_lists->getPaginateByLimit()]);
} 
}
?>
