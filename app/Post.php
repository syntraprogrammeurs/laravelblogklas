<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    //
    protected $fillable = [
        'title','body','user_id','category_id','photo_id'
    ];

    public function user(){
        return $this->belongsTo('App\user');
    }
    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function photo(){
        return $this->belongsTo('App\Photo');
    }
    public function comments(){
        return $this->hasMany('App\PostComment');
    }
}
