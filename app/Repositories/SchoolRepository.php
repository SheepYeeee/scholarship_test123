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
        $collegeName = $data['collegeName'];
        $departmentName = $data['departmentName'];
        $educationSystemName = $data['educationSystemName'];

        //判斷有沒有school
        // $isSchool = DB::select('select * from school where schoolName = ?', $schoolName);
        $isSchool = DB::table('school')->where('schoolName',$schoolName)->get();
        if (!$isSchool){
            // DB::insert('insert into school (schoolName) values (?)', $schoolName);
            DB::table('school')->insert(
                array('schoolName' => $schoolName)
            )->save();
        }
        // $schoolid = DB::select('select schoolId from school where schoolName = ?',$schoolName);
        $schoolid = DB::table('school')->where('schoolName',$schoolName)->pluck('schoolId');
        // $schoolid = var_dump($schoolid);

        //判斷有沒有college
        // $isCollege = DB::select('select * from college where collegeName = ? and schoolId = ?',[$collegeName,$schoolid]);
        $isCollege = DB::table('college')->where('collegeName',$collegeName)->where('schoolId',$schoolid)->get();
        if (!$isCollege){
            // DB::insert('insert into college (collegeName,schoolId) values (?,?)',[$collegeName,$schoolid]);
            DB::table('college')->insert(
                array('collegeName' => $collegeName,'schoolId' => $schoolid)
            )->save();
        }
        // $collegeid = DB::select('select collegeId from college where collegeName = ? and schoolId = ?',[$collegeName,$schoolid]);
        $collegeid = DB::table('college')->where('collegeName',$collegeName)->where('schoolId',$schoolid)->pluck('collegeId');;
        // $collegeid = var_dump($collegeid);


        //判斷有沒有education_system
        // $isEducation = DB::select('select * from education_system where educationSystemName = ?',$educationSystemName);
        $isEducation = DB::table('education_system')->where('educationSystemName',$educationSystemName)->get();
        if (!$isEducation){
            // DB::insert('insert into education_system (educationSystemName) values (?)',$educationSystemName);
            DB::table('education_system')->insert(
                array('educationSystemId' => $educationSystemName)
            )->save();
        }
        // $educationid = DB::select('select educationSystemId from education_system where educationSystemName = ?',$educationSystemName);
        $educationid = DB::table('education_system')->where('educationSystemName',$educationSystemName)->pluck('educationSystemId');;
        // $educationid = var_dump($educationid);

        //判斷department是否已存在
        // $isDepartment = DB::select('select * from department where departmenteName = ? and collegelId = ? and schoolId =? and educationSystemId =?',[$departmenteName,$collegeid,$schoolid,$educationid]);
        $isDepartment = DB::table('department')->where('departmenteName',$departmentName)->where('collegelId',$collegeid)->where('schoolId',$schoolid)->where('educationSystemId',$educationid)->get();
        if (!$isDepartment){
            // DB::insert('insert into department (departmentName,schoolId,collegeId,educationSystemId) values (?,?,?,?)',[$departmentName,$schoolid,$collegeid,$educationid]);
            DB::table('department')->insert(
                array('departmentName' => $departmentName,'schoolId' => $schoolid,'collegeId' => $collegeid,'educationSystemId' => $educationid)
            )->save();
            return Redirect::back()->withErrors(['成功!!', '該筆資料已存在']);;
        }else{
            return Redirect::back()->withErrors(['警告!!', '該筆資料已存在']);
        }

        

    }



}
