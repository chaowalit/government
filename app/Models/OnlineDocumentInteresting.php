<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OnlineDocumentInteresting extends Model{
	protected $table = 'online_document_interesting';

	protected $fillable = [
    	'sub_menu_name',
    	'order_by',
    	'active',
    ];

    protected $casts = [
        'id' => 'string',
    ];

	protected $dates = ['created_at'];

	public function getTableName(){
		return $this->table;
	}

	public function getInfoOnlineDocumentInterestingAll(){
		return \DB::table($this->table)->where('active', 1)->orderBy('order_by', 'asc')->get();
	}

	//--------------------------------------------------------------
	public function getDataById($id){
		return \DB::table($this->table)->where('id', $id)->get();
	}
	public function getInfoOnlineDocumentInterestingAllForAdmin(){
		return \DB::table($this->table)->orderBy('order_by', 'asc')->get();
	}

	public function save_data($data = array(), $id = ''){
		if($id == ''){
			return \DB::table($this->table)->insert($data);
		}else if($id != ''){
			return \DB::table($this->table)->where('id', $id)->update($data);
		}else{
			echo "Error OnlineDocumentInteresting";die;
		}
	}
	public function delete_row($id){
		return \DB::table($this->table)->where('id', '=', $id)->delete();
	}
}
?>
