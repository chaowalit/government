<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QwcBranch extends Model{
	protected $table = 'qwc_branch';

	protected $fillable = [
    	'url_branch',
    ];

    protected $casts = [
        'id' => 'string',
    ];

	protected $dates = ['deleted_at'];

	public function getTableName(){
		return $this->table;
	}

	public function getQwcBranchAll(){
		return \DB::table($this->table)->where('deleted_at', NULL)->get();
	}
}
?>
