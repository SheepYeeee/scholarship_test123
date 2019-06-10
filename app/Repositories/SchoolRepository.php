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
use Illuminate\Support\Facades\Redirect;
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
        $Private = $data['isPrivate'];
        if ($Private=='公立'){
            $isPrivate='0';
        }elseif($isPrivate=='私立'){
            $Private='1';
        }
        $schoolCode = $data['schoolCode'];
        $collegeName = $data['collegeName'];
        $departmentName = $data['departmentName'];
        $educationSystemName = $data['educationSystemName'];

        //判斷有沒有school
        
        $isSchool = DB::table('school')->where('schoolName',$schoolName)->get();
        if ($isSchool == '[]'){
            DB::table('school')->insert(
                ['schoolName' => $schoolName,'isPrivate'=>$isPrivate,'schoolCode'=>$schoolCode]
            );
            $schoolid = DB::table('school')->where('schoolName',$schoolName)->pluck('schoolId');
        }else{
            $schoolid = DB::table('school')->where('schoolName',$schoolName)->pluck('schoolId');
        }
        

        //判斷有沒有college
        
        $isCollege = DB::table('college')->where('collegeName',$collegeName)->where('schoolId',$schoolid)->get();
        if ($isCollege->isEmpty()){ 
            DB::table('college')->insert(
                ['collegeName' => $collegeName,'schoolId' => substr($schoolid,1,1)]
            );
            $collegeid = DB::table('college')->where('schoolId',$schoolid)->pluck('collegeId');
        }else{
            $collegeid = DB::table('college')->where('schoolId',$schoolid)->where('collegeName',$collegeName)->pluck('collegeId');
        }
        
        

        //判斷有沒有education_system
        
        $isEducation = DB::table('education_system')->where('educationSystemName',$educationSystemName)->get();
        if ($isEducation == '[]'){
            DB::table('education_system')->insert(
                ['educationSystemName' => $educationSystemName]
            );
            $educationid = DB::table('education_system')->where('educationSystemName',$educationSystemName)->pluck('educationSystemId');
        }else{
            $educationid = DB::table('education_system')->where('educationSystemName',$educationSystemName)->pluck('educationSystemId');
        }
        

        //判斷department是否已存在
        $isDepartment = DB::table('department')->where('departmentName',$departmentName)->where('collegeId',substr($collegeid,1,1))
                        ->where('schoolId',$schoolid)->where('educationSystemId',$educationid)->get();
        if ($isDepartment == '[]'){
            DB::table('department')->insert(
                ['departmentName' => $departmentName,'schoolId' => substr($schoolid,1,1),'collegeId' => substr($collegeid,1,1),'educationSystemId' => substr($educationid,1,1)]
            );
            return Redirect::back()->withErrors(['新增成功', '該筆資料已存在']);
        }else{
            return Redirect::back()->withErrors(['新增失敗', '成功新增']);;
        }

        

    }



}
