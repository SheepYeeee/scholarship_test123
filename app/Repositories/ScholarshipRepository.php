<?php

namespace App\Repositories;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Route;
use View;
use App\Entities\School;
use App\Entities\College;
use App\Entities\Department;
use App\Entities\Education_System;
use App\Entities\County;
use App\Entities\Discipline;
use App\Entities\Identity;
use App\Entities\Nation;
use App\Entities\Scholarship;
use App\Entities\Scholarship_identity;
use Illuminate\Support\Facades\Redirect;


class ScholarshipRepository
{
    // public function getschools()
    // {
    //     $result = School::all();
    //     return $result;
    // }

    public function getscholarship()
    {
        $result = DB::table('scholarship')
                  
                  ->get();
        return $result;
    }
  }
  ?>