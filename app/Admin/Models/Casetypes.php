<?php

namespace App\Admin\Models;

use Illuminate\Database\Eloquent\Model;

class Casetypes extends Model
{
    public function case()
    {
        return $this->hasMany(Cases::class);
    }

}
