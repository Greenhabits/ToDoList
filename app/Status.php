<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
   public function index(Status $status)
{
 return view('statuses.index')->with(['to_do_lists' => $status->getByCategory()]);
}
}
