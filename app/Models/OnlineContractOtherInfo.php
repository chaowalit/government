<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OnlineContractOtherInfo extends Model{
	protected $table = 'online_contract_other_info';

	protected $fillable = [
    	'online_contract_other_id',
    	'news_info_name',
    	'floor_at',
    	'doc_at',
    	'file_name',
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
			echo "Error OnlineContractOtherInfo";die;
		}
	}

	public function getOnlineContractOtherInfoAll(){
		return \DB::table($this->table)
            			->join('online_contract_other', $this->table.'.online_contract_other_id', '=', 'online_contract_other.id')

            			->select($this->table.'.*', 'online_contract_other.*', $this->table.'.id as online_contract_other_info_id')
            			->orderBy('updated_at', 'desc')->get();
	}

	public function getDataById($id){
		return \DB::table($this->table)->where('id', $id)->get();
	}

	public function delete_row($id){
		return \DB::table($this->table)->where('id', '=', $id)->delete();
	}
}
?>
