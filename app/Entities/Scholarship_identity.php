<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

    use App\Entities\Scholarship as ScholarshipEloquent;


class Scholarship_identity extends Model
{
    protected $table = 'scholarship_identity';

	public function scholarship(){
        return $this->belongsTo(ScholarshipEloquent::class); 
    }
}
