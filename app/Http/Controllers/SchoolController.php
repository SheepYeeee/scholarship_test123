<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Route;
use View;
use App\Repositories\SchoolRepository;

class SchoolController extends Controller
{
    protected $schoolRepo;

//     public function __construct(\Illuminate\Http\Request $request)
//    {
//        $this->request = $request;
//    }

    public function __construct(SchoolRepository $schoolRepo)
    {
        $this->schoolRepo = $schoolRepo;
    }

    public function getIndex()
    {
        return View::make('btschool');
    }

    public function schools(){
        $school = $this->schoolRepo->getschools();
        return $school;
    }

    public function save(Request $request){
        $data = $request->all();
        $which = $data['crud'];
        
        if ($which=='insert'){
            $newschool = $this->schoolRepo->save_school($data);
            return $newschool;
        }elseif($which=='edit'){
            $newschool = $this->schoolRepo->update_school($data);
            return $newschool;
        }
        

    }
}
