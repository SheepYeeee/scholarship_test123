<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Route;
use View;
use App\Entities\School;
use App\Entities\College;
use App\Entities\Department;
use App\Entities\Education_System;

class SchoolRepository
{
    // public function getschools()
    // {
    //     $result = School::all();
    //     return $result;
    // }

    public function getschools()
    {
        $result = DB::table('department')
                  ->join('school','department.schoolId','=','school.schoolId','left outer')
                  ->join('college','department.collegeId','=','college.collegeId','left outer')
                  ->join('education_system','department.educationSystemId','=','education_system.educationSystemId','left outer')
                  ->get();
        return $result;
        // 測試
    }



}
