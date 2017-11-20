<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OnlineDataSection9Info extends Model{
	protected $table = 'online_data_section_9_info';

	protected $fillable = [
    	'online_data_section_9_id',
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
			echo "Error OnlineDataSection9Info";die;
		}
	}

	public function getOnlineDataSection9InfoAll(){
		return \DB::table($this->table)
            			->join('online_data_section_9', $this->table.'.online_data_section_9_id', '=', 'online_data_section_9.id')

            			->select($this->table.'.*', 'online_data_section_9.*', $this->table.'.id as online_data_section_9_info_id')
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
