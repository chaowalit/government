<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SlideBanner extends Model{
	protected $table = 'slide_banner';

	protected $fillable = [
    	'img_banner',
    	'text1',
    	'text2',
    	'order_number',
    	'active',
    ];

    protected $casts = [
        'id' => 'string',
    ];

	protected $dates = ['created_at', 'updated_at'];

	public function getTableName(){
		return $this->table;
	}

	public function getSlideBannerAll(){
		return \DB::table($this->table)
					->orderBy('active', 'desc')
					->orderBy('order_number', 'asc')
					->orderBy('updated_at', 'desc')
					->get();
	}

	public function save_data($data = array(), $id = ''){
		if($id == ''){
			return \DB::table($this->table)->insert($data);
		}else if($id != ''){
			return \DB::table($this->table)->where('id', $id)->update($data);
		}else{
			echo "Error SlideBanner";die;
		}
	}

	public function delete_row($id){
		return \DB::table($this->table)->where('id', '=', $id)->delete();
	}

	public function getDataById($id){
		return \DB::table($this->table)->where('id', $id)->get();
	}
	//--------------------------- Front End --------------------------//
	public function getSlideBannerAllFn(){
		return \DB::table($this->table)->where('active', 1)
					->orderBy('active', 'desc')
					->orderBy('order_number', 'asc')
					->orderBy('updated_at', 'desc')
					->get();
	}
}
?>
