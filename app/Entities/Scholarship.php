<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

use App\Entities\County as CountyEloquent;
use App\Entities\Nation as NationEloquent;
use App\Entities\Discipline as DisciplineEloquent;
use App\Entities\Scholarship_identity as Scholarship_identityEloquent

class Scholarship extends Model
{

    protected $table = 'scholarship';

    public function county(){
        return $this->hasMany(countyEloquent::class); 
    }

    public function nation(){
        return $this->hasMany(nationEloquent::class); 
    }

    public function discipline(){
        return $this->hasMany(disciplineEloquent::class); 
    }

    public function scholarship_identity(){
        return $this->hasMany(scholarship_identityEloquent::class); 
    }
}
