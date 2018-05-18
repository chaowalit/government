<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Survey extends Model{
	protected $table = 'survey';

	protected $fillable = [
		'sex',
		'age',
    	'career',
    	'data_info_do',
    	'data_info_at9',
    	'data_info_other',
    	'easy_data',
    	'correct_data',
    	'use_data',
    	'people_service',
    	'location_easy_use',
    	'overview_data',
    	'comments_open_data',
    	'comments_other',
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
			echo "Error Survey";die;
		}
	}

	public function getSurveyAll(){
		return \DB::table($this->table)
					//->orderBy('post_date', 'desc')
					->orderBy('updated_at', 'desc')
					//->orderBy('active', 'desc')
					->get();
	}

	public function getDataById($id){
		return \DB::table($this->table)->where('id', $id)->get();
	}

	public function delete_row($id){
		return \DB::table($this->table)->where('id', '=', $id)->delete();
	}
	//---------------------------------------------------------------------
	public function getSurveyFN($limit = 20){
		return \DB::table($this->table)
					//->where('active', 1)
					//->orderBy('post_date', 'desc')
					->orderBy('updated_at', 'desc')
					//->limit($limit)
					->get();
	}
}
?>
