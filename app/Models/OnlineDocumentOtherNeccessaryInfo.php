<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OnlineDocumentOtherNeccessaryInfo extends Model{
	protected $table = 'online_document_other_neccessary_info';

	protected $fillable = [
    	'online_document_other_neccessary_id',
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
			echo "Error OnlineDocumentOtherNeccessaryInfo";die;
		}
	}

	public function getOnlineDocumentOtherNeccessaryInfoAll(){
		return \DB::table($this->table)
            			->join('online_document_other_neccessary', $this->table.'.online_document_other_neccessary_id', '=', 'online_document_other_neccessary.id')

            			->select($this->table.'.*', 'online_document_other_neccessary.*', $this->table.'.id as online_document_other_neccessary_info_id')
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
