<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Route;
use View;
use App\Repositories\SchoolRepository;

class SearchController extends Controller
{
    public function __construct(SchoolRepository $schoolRepo)
    {
        $this->schoolRepo = $schoolRepo;
    }

    public function getIndex()
    {
        return View::make('search');
    }
}
