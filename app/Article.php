<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //

    protected $fillable=['title','content','published_at','intro'];

    //set 字段名 Attribute
    public function setPublishedAtAttribute($date){
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d',$date);
    }
    //scope 方法名
    public function scopePublished($query){
        $query->where('published_at','<=',Carbon::now());
    }
}
