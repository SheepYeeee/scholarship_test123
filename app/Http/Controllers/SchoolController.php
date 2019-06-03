<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Route;
use View;
use App\Repositories\SchoolRepository;

class SchoolController extends Controller
{
    protected $schoolRepo;

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
        // return $school;
        return $school;
    }
}
