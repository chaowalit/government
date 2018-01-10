<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OtherLink extends Model{
	protected $table = 'other_link';

	protected $fillable = [
		'title',
    	'post_date',
    	'file_path',
    	'active',
    ];

    protected $casts = [
        'id' => 'string',
    ];

	protected $dates = ['created_at', 'updated_at'];

	public function getTableName(){
		return $this->table;
	}

	public function save_data($data = array(), $id = ''){
		if($id == ''){
			return \DB::table($this->table)->insert($data);
		}else if($id != ''){
			return \DB::table($this->table)->where('id', $id)->update($data);
		}else{
			echo "Error OtherLink";die;
		}
	}

	public function getOtherLinkAll(){
		return \DB::table($this->table)
					->orderBy('post_date', 'desc')
					->orderBy('updated_at', 'desc')
					->orderBy('active', 'desc')
					->get();
	}

	public function getDataById($id){
		return \DB::table($this->table)->where('id', $id)->get();
	}

	public function delete_row($id){
		return \DB::table($this->table)->where('id', '=', $id)->delete();
	}
	//---------------------------------------------------------------------
	public function getOtherLinkAllFN(){
		return \DB::table($this->table)
					->where('active', 1)
					->orderBy('post_date', 'desc')
					->orderBy('updated_at', 'desc')
					->get();
	}
}
?>
