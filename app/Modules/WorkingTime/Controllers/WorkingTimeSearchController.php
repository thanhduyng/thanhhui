<?php

namespace App\Modules\WorkingTime\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class WorkingTimeSearchController extends Controller
{

    function index(Request $request)
    {
        $title = 3;

        $workReportNo = DB::table('t_work_report_h')
            ->pluck('work_report_no', 'work_report_no');
        $workUserCd = DB::table('t_work_report_h')
            ->pluck('work_user_cd', 'work_report_no');
        DB::enableQueryLog();
        $userNmJ = DB::table('m_user')
            ->pluck('user_nm_j', 'user_cd');
        // dd(DB::getQueryLog());

        $Data = DB::table('t_work_report_h as h')
            ->join('t_work_report_d as d', 'd.work_report_no', '=', 'h.work_report_no')
            ->join('m_user as m', 'm.user_cd', '=', 'h.work_user_cd')
            ->select('h.work_report_no', 'd.manufacture_no', 'h.work_date', 'h.work_user_cd', 'd.work_hour_div', 'm.user_nm_j')
            ->paginate(10);
        return view('WorkingTime::WorkingTimeSearch.index', compact(['title', 'Data', 'workReportNo', 'workUserCd', 'userNmJ']));
    }

    public function search(Request $request)
    {
        // $work_report_no = $_POST['work_report_no'];
        // $work_user_cd = $_POST['work_user_cd'];
        // $user_nm_j = $_POST['user_nm_j'];
        $work_date = $_POST['work_date'];
        $work_dateto = $_POST['work_dateto'];
        // $manufacture_no = $_POST['manufacture_no'];

        $Data = DB::table('t_work_report_h as h')
            // ->where('h.work_report_no', 'LIKE', "%" . $work_report_no . "%")
            // ->where('h.work_user_cd', 'LIKE', "%" . $work_user_cd . "%")
            // ->where('m.user_nm_j', 'LIKE', "%" . $user_nm_j . "%")
            ->where('h.work_date', '>=',$work_date)
            ->where('h.work_date', '<=',$work_dateto)
            // ->where('d.manufacture_no', 'LIKE', "%" . $manufacture_no . "%")
            ->join('t_work_report_d as d', 'd.work_report_no', '=', 'h.work_report_no')
            ->join('m_user as m', 'm.user_cd', '=', 'h.work_user_cd')
            ->select('h.work_report_no', 'd.manufacture_no', 'h.work_date', 'h.work_user_cd', 'd.work_hour_div', 'm.user_nm_j')
            ->get();
        return Response()->json($Data);
    }
}
