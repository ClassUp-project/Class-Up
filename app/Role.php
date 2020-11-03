<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Role extends Model
{

    protected $guarded=[];




    public function users(){

        return $this->belongsToMany(\App\User::class,'role_user','role_id');
    }


    public function roleOnClasseStudent()
    {
        return $this->hasMany(\App\ChoixClasseEleve::class,'user_id');
    }

    public function roleOnClasseProf()
    {
        return $this->hasMany(\App\ClasseMatiere::class,'user_id');
    }




}

