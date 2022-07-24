<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Date;

class DateController extends Controller
{
    public function index(Date $date)
{
 return view('dates.index')->with(['to_do_lists' => $date->getByCategory()]);
}
}