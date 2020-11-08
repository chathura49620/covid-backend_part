<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'link', 'description', 'user_id',
    ];

    //relationship for connect users to post
    public function user(){
        return $this->hasOne('App\User','id','user_id');
    }
}
