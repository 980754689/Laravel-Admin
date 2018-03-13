<?php

namespace App\Admin\Models;

use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    //关联
    public function casetype()
    {
        return $this->belongsTo(Casetypes::class);
    }

    //获取分类信息
    public static function casetypelist(){
    	return Casetypes::where('is_show', '=', 1)->pluck('title', 'id');
    }
   
    //获取分类信息
    public static function type($type_id)
    {
    	return Casetypes::where('id', '=', $type_id)->pluck('title');
    }   


}
