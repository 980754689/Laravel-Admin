<?php

namespace App\Admin\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
	//关闭自动更新创建时间和修改时间
	// public $timestamps = false;
	
    public function newtype()
    {
        return $this->belongsTo(Newtypes::class);
    }

    //获取分类信息
    public static function new_type(){
    	return Newtypes::where('is_show', '=', 1)->pluck('title', 'id');
    }

    //获取分类信息
    public static function type($type_id){
        return Newtypes::where('id', '=', $type_id)->pluck('title');
    }

}


