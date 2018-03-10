<?php

namespace App\Admin\Models;

use Illuminate\Database\Eloquent\Model;

class Newtypes extends Model
{
	//关闭自动更新创建时间和修改时间
	// public $timestamps = false;

    public function news()
    {
        return $this->hasOne(News::class);
    }
    
}
