<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

use App\Entities\Scholarship as ScholarshipEloquent;


class Nation extends Model
{
    protected $table = 'nation';

	public function scholarship(){
        return $this->belongsTo(ScholarshipEloquent::class); 
    }
}
