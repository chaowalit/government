<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StaffStructureInfo extends Model{
	protected $table = 'staff_structure_info';

	protected $fillable = [
		'staff_structure_id',
    	'full_name',
    	'position',
    	'img_profile',
    	'order_number',
    	'row_number',
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
			echo "Error StaffStructureInfo";die;
		}
	}

	public function getStaffStructureInfoAll(){
		return \DB::table($this->table)
            			->join('staff_structure', $this->table.'.staff_structure_id', '=', 'staff_structure.id')

            			->select($this->table.'.*', 'staff_structure.*', $this->table.'.id as staff_structure_info_id')
            			->orderBy('order_number', 'asc')
            			->orderBy('updated_at', 'desc')->get();
	}

	public function getDataById($id){
		return \DB::table($this->table)->where('id', $id)->get();
	}

	public function delete_row($id){
		return \DB::table($this->table)->where('id', '=', $id)->delete();
	}

	public function getDataByStaffStructureId($id){
		return \DB::table($this->table)->where('staff_structure_id', $id)->get();
	}
}
?>
