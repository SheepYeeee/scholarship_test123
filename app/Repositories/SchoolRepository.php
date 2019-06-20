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
                  ->join('education_system','department.educationSystemId','=','education_system.educationSystemId','left outer')
                  ->join('college','department.collegeId','=','college.collegeId','left outer')
                  ->get();
        return $result;
    }



    //新增
    public function save_school($data)
    {   
        function set_str($string)
            {
                return str_replace(["[","]"],["",""],$string);
            }
        $schoolName = $data['schoolName'];

        $Private = $data['isPrivate'];
        if ($Private=='公立'){
            $isPrivate='0';
        }elseif($Private=='私立'){
            $isPrivate='1';
        }
        $schoolCode = $data['schoolCode'];
        $collegeName = $data['collegeName'];
        $departmentName = $data['departmentName'];
        $educationSystemName = $data['educationSystemName'];

        //判斷有沒有school
        
        $isSchool = DB::table('school')->where('schoolName',$schoolName)->get();
        if ($isSchool == '[]'){  
            DB::table('school')->insert(
                ['schoolName'=>$schoolName,'isPrivate'=>$isPrivate,'schoolCode'=>$schoolCode]);
            $schoolid = DB::table('school')->where('schoolName',$schoolName)->pluck('schoolId');
        }else{
            $schoolid = DB::table('school')->where('schoolName',$schoolName)->pluck('schoolId');
        }
        

        //判斷有沒有college
        
        $isCollege = DB::table('college')->where('collegeName',$collegeName)->where('schoolId',$schoolid)->get();
        if ($isCollege== '[]'){ 
            DB::table('college')->insert(
                ['collegeName' => $collegeName,'schoolId' =>set_str($schoolid)]
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
        $isDepartment = DB::table('department')->where('departmentName',$departmentName)->where('collegeId',set_str($collegeid))
                        ->where('schoolId',$schoolid)->where('educationSystemId',$educationid)->get();
        if ($isDepartment == '[]'){
            DB::table('department')->insert(
                ['departmentName' => $departmentName,'schoolId' => set_str($schoolid),'collegeId' => set_str($collegeid),'educationSystemId' => set_str($educationid)]
            );
            return Redirect::back()->withErrors(['新增成功', '該筆資料已存在']);
        }else{
            return Redirect::back()->withErrors(['新增失敗','該筆資料已存在']);;
        }

        

    }

    //編輯
    public function update_school($data)
    {
             function set_str($string)
            {
                return str_replace(["[","]"],["",""],$string);
            }

        $schoolName = $data['schoolName'];
        $old_schoolName = $data['old_schoolName'];
        $isPrivate = $data['isPrivate'];
        if ($isPrivate=='公立'){
            $isPrivate='0';
        }elseif($isPrivate=='私立'){
            $isPrivate='1';
        }
        $schoolCode = $data['schoolCode'];
        $collegeName = $data['collegeName'];
        $old_collegeName = $data['old_collegeName'];
        $departmentName = $data['departmentName'];
        $old_departmentName = $data['old_departmentName'];
        $educationSystemName = $data['educationSystemName'];
        $old_schoolid = $data['schoolId'];

        $old_schoolid = DB::table('school')->where('schoolName',$old_schoolName)->pluck('schoolId');
        $collegeId = DB::table('college')->where('schoolId',$old_schoolid)->where('collegeName',$old_collegeName)->pluck('collegeId');
       
        $isEducation = DB::table('education_system')->where('educationSystemName',$educationSystemName)->get();
        if ($isEducation == '[]'){
            DB::table('education_system')->insert(
                ['educationSystemName' => $educationSystemName]
            );
            $departmentid = DB::table('department')
                            ->where('departmentName',$old_departmentName)
                            ->where('collegeId',set_str($collegeId))
                            ->where('schoolId',set_str($old_schoolid))
                            ->pluck('departmentId');

        }else{
             $departmentid = DB::table('department')->where('departmentName',$old_departmentName)
                        ->where('collegeId',set_str($collegeId))
                        ->where('schoolId',set_str($old_schoolid))
                        ->pluck('departmentId');
        }
         //return $collegeId.' / '.$old_schoolid.' / '.$old_departmentName.' / '.$departmentid;
         $educationid = DB::table('education_system')->where('educationSystemName',$educationSystemName)->pluck('educationSystemId');



        //校名
            $isSchool = DB::table('school')->where('schoolName',$schoolName)->get();
           if ($isSchool == '[]'){  
                DB::table('school')->insert(
                    ['schoolName'=>$schoolName,'isPrivate'=>$isPrivate,'schoolCode'=>$schoolCode]);
                $schoolid = DB::table('school')->where('schoolName',$schoolName)->pluck('schoolId');
            }else{
                $schoolid = DB::table('school')->where('schoolName',$schoolName)->pluck('schoolId');
            }
       

         //學院
            $isCollege = DB::table('college')->where('collegeName',$collegeName)->where('schoolId',$schoolid)->get();
            if ($isCollege== '[]'){ 
                DB::table('college')->insert(
                    ['collegeName'=>$collegeName,'schoolId'=>set_str($schoolid)]
                );
                $collegeid = DB::table('college')->where('schoolId',set_str($schoolid))->where('collegeName',$collegeName)->pluck('collegeId');
            }else{
                $collegeid = DB::table('college')->where('schoolId',set_str($schoolid))->where('collegeName',$collegeName)->pluck('collegeId');

            }
          

            DB::table('department')
                    ->where('departmentId',set_str($departmentid))
                    ->update(['collegeId'=> set_str($collegeid),'schoolId'=>set_str($schoolid)]);

            //編輯學制從現有學制中挑出新學制的ID(若無則新增)，編輯department表中的educationSystemId，學制表本身不動
            DB::table('department')
                ->where('departmentId',$departmentid)
                ->update(['departmentName' => $departmentName,'educationSystemId'=>set_str($educationid)]);

            return Redirect::back()->withErrors(['編輯成功', '該筆資料已編輯']);
    }
    

}
