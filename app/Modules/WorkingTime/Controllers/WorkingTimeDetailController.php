<?php

namespace App\Modules\WorkingTime\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkingTimeDetailController extends Controller
{
    public function index(Request $request){

        return view('WorkingTime::WorkingTimeDetail.index');
    }
}

