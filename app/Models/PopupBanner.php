<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PopupBanner extends Model{
	protected $table = 'popup_banner';

	protected $fillable = [
		'image_popup',
    	'show_every',
    	'start_date',
    	'end_date',
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
			echo "Error PopupBanner";die;
		}
	}

	public function getPopupBannerAll(){
		return \DB::table($this->table)
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
	public function getPopupBannerAllFN(){
		return \DB::table($this->table)
					->where('active', 1)
					->where('start_date' ,'<', date("Y-m-d H:i:s"))
					->where('end_date' ,'>', date("Y-m-d H:i:s"))
					->orderBy('updated_at', 'desc')
					->orderBy('active', 'desc')
					->limit(1)
					->get();
	}
}
?>
