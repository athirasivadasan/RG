<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Roles extends Model
{
    use HasFactory;

    use SoftDeletes;

	function insert($id, $added_by, $request){
		$request->validate([
			'name' => 'required|max:36',
			'status' => 'required|numeric|digits:1',
		]);

		$this->id = $id;
		if($added_by){
			$this->added_by = $added_by;
		}
		$this->name = $request->name;
		$this->status = $request->status;
		$this->save();

		if($this){
			return 'success';
		}else{
			return 'error';
		}
	}

	function user(){
		return $this->belongsTo('App\Models\User', 'added_by')->select('id', 'name');
	}
}
