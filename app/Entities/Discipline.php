<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

use App\Entities\Scholarship as ScholarshipEloquent;


class Discipline extends Model
{
    protected $table = 'discipline';

	public function scholarship(){
        return $this->belongsTo(ScholarshipEloquent::class); 
    }
}
