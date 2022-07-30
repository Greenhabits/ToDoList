<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusController extends Controller
{
public function index(Status $status)
{
    return view('statuses.index')->with(['statuses' => $status->getByStatus()]);
}
}
