<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'full_name',
        'position',
        'address',
        'email',
        'password',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getTableName(){
        return 'users';
    }

    public function getUserAll(){
        return \DB::table($this->getTableName())
                    ->orderBy('updated_at', 'desc')
                    ->limit(1)
                    ->get();
    }

    public function save_data($data = array(), $id = ''){
        if($id == ''){
            return \DB::table($this->getTableName())->insert($data);
        }else if($id != ''){
            return \DB::table($this->getTableName())->where('id', $id)->update($data);
        }else{
            echo "Error Otop";die;
        }
    }
}
