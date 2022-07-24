<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Status;

class StatusController extends Controller
{
    public function index(Status $status)
{
 return view('statuses.index')->with(['to_do_lists' => $status->getByCategory()]);
}
}