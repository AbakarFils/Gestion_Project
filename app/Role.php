<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable=[
    	'name',
    ];
    // un role a plusieurs user
    public function users()
    {
        return $this->hasMany('App\User');
    }
}
