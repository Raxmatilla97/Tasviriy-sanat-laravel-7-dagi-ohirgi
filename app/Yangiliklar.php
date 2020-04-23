<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Yangiliklar extends Model
{
    
    protected $fillable = [
    	'title',
    	'slug'
    ];


    public function user(){

    	return $this->hasOne(User:class, 'user_id');
    }
}
