<?php

namespace App\Model;

use DB;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
	function getAll($table)
	{
		$getData = DB::select("select * from $table");
		return $getData;
	}
}
