<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

use App\Entities\Scholarship as ScholarshipEloquent;

class County extends Model
{
    protected $table = 'county';

    public function scholarship(){
        return $this->belongsTo(ScholarshipEloquent::class); //一個學校可以有多個學院
    }
}


?>
