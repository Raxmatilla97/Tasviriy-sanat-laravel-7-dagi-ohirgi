<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Mavqe;
class Teacher extends Model
{
 protected $table = 'teachers';

 protected $fillable = 
        [
            'ism',
            'familya',
            'sharif',
            'tugilgan_yil',
            'tugilgan_joy',
            'yashash_manzil',
            'pass_ser',
            'pass_nom',
            'jinsi',
            'tell',
            'uy_teli',
            'mavqe_id',
            'user_id'
            
        ];

        public function users()
        {
            return $this->belongsTo(User::class, 'user_id');
        }

        public function mavqe()
        {
            return $this->belongsTo(Mavqe::class, 'mavqe_id');
        }

        
}
