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
    }

    //新增
    public function save_school($data)
    {   
        $schoolName = $data['schoolName'];
        $collegeName = $data['collegeName'];
        $departmentName = $data['departmentName'];
        $educationSystemName = $data['educationSystemName'];
        
        //判斷有沒有school
        $isSchool = DB::select('select * from school where schoolName = ?', $schoolName);
        if ($isSchool == ''){
            DB::insert('insert into school (schoolName) values (?)', $schoolName);}
        $schoolid = DB::select('select schoolId from school where schoolName = ?',$schoolName);

        //判斷有沒有college
        $isCollege = DB::select('select * from college where collegeName = ? and schoolId = ?',[$collegeName,$schoolid]);
        if ($isCollege == ''){
            DB::insert('insert into college (collegeName,schoolId) values (?,?)',[$collegeName,$schoolid]);}
        $collegeid = DB::select('select collegeId from college where collegeName = ? and schoolId = ?',[$collegeName,$schoolid]);

        //判斷有沒有education_system
        $isEducation = DB::select('select * from education_system where educationSystemName = ?',$educationSystemName);
        if ($isEducation == ''){
            DB::insert('insert into education_system (educationSystemName) values (?)',$educationSystemName);
        }
        $educationid = DB::select('select educationSystemId from education_system where educationSystemName = ?',$educationSystemName);

        //判斷department是否已存在
        $isDepartment = DB::select('select * from department where departmenteName = ? and collegelId = ? and schoolId =? and educationSystemId =?',[$departmenteName,$collegeid,$schoolid,$educationid]);
        if ($isDepartment == ''){
            DB::insert('insert into department (departmentName,schoolId,collegeId,educationSystemId) values (?,?,?,?)',[$departmentName,$schoolid,$collegeid,$educationid]);
        }else{
            return Redirect::back()->withErrors(['警告!!', '該筆資料已存在']);
        }

        $result = DB::table('department')
                  ->join('school','department.schoolId','=','school.schoolId','left outer')
                  ->join('college','department.collegeId','=','college.collegeId','left outer')
                  ->join('education_system','department.educationSystemId','=','education_system.educationSystemId','left outer')
                  ->get();
        return $result;
    }



}
