<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GraphiqueStudent extends Model
{
    protected $guarded = [];




    public function customer(){

        return $this->hasMany(\App\Customer::class);
    }


    public function matiereCustomer(){

        return $this->hasMany(\App\MatiereCustomers::class);
    }

    public function matiere(){

        return $this->hasMany(\App\Matiere::class);
    }

    public function user(){

        return $this->hasMany(\App\User::class);
    }

    public function grapToProf()
    {
        return $this->hasMany(\App\ClasseMatiere::class,'user_id','id','classe');
    }

    public function graphToEleve()
    {
        return $this->hasMany(\App\ChoixClasseEleve::class,'user_id','id','classe_eleve');
    }
}
