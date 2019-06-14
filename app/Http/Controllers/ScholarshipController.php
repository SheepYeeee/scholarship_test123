<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Route;
use View;
use App\Repositories\SchoolRepository;
use App\Repositories\ScholarshipRepository;


class ScholarshipController extends Controller
{
    protected $scholarshipRepo;
    
	public function __construct(ScholarshipRepository $scholarshipRepo)
    {
        $this->scholarshipRepo = $scholarshipRepo;
    }

    public function getIndex()
    {
        return View::make('btscholarship');
    }

    public function scholarship(){
        $scholarship = $this->scholarshipRepo->getscholarship();
        return $scholarship;
    }

      public function save(Request $request){
        $data = $request->all();
        // $which = $data['crud'];

        // if ($which=='insert'){
        //     $newschool = $this->schoolRepo->save_school($data);
        // }elseif($which=='edit'){
        //     $newschool = $this->schoolRepo->update_school($data);
        // }
        return $data;

    }
}
