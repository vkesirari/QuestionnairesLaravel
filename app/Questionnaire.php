<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Questionnaire extends Model
{   
    
    //steps_2 : here you need to use this for fillable
    protected $guarded = [];

    public function path(){
        return url('/questionnaires/'.$this->id);
    } 
    public function publicPath(){
        return url('/surveys/'.$this->id.'-'.Str::slug($this->title));
    }
    //steps_6 : rerlationship
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function questions(){
        return $this->hasMany(Question::class);
    }
    public function surveys(){
        return $this->hasMany(Survey::class);
    }
}
