<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactUs extends Model{
	protected $table = 'contact_us';

	protected $fillable = [
    	'location_name',
    	'address',
    	'tel',
    	'facebook_url',
    	'email',
    	'fax',
    	'longitude',
    	'latitude',
    ];

    protected $casts = [
        'id' => 'string',
    ];

	protected $dates = ['created_at', 'updated_at'];

	public function getTableName(){
		return $this->table;
	}

	public function getContactUsAll(){
		return \DB::table($this->table)->get();
	}

	public function save_data($data = array(), $id = ''){
		if($id == ''){
			return \DB::table($this->table)->insert($data);
		}else if($id != ''){
			return \DB::table($this->table)->where('id', $id)->update($data);
		}else{
			echo "Error ContactUs";die;
		}
	}
}
?>
