<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
    protected $fillable = ['user_id', 'post_id', 'comment', 'status', 'replied_comment', 'parent_id'];

    public function user_info(){
        return $this->hasOne('App\User','id','user_id');
    }

    public function post_info(){
        return $this->hasOne('App\Models\Post','id','post_id');
    }

    public static function getAllComments(){
        return PostComment::with(['user_info', 'post_info'])->orderBy('id','DESC')->paginate(10);
    }
}
