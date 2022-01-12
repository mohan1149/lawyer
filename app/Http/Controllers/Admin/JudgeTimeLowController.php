<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class JudgeTimeLowController extends Controller
{
    //

    public function index(){
        try {
            $times = DB::table('tudgement_time_lows')->get();
            return view('admin.time_lows.index',['times'=>$times]);
        } catch (\Exception $e) {
            return abort(500,'ISE');
        }
    }

    public function create(){
        try {
            return view('admin.time_lows.create');
        } catch (\Exception $e) {
            return abort(500,'ISE');
        }
    }

    public function store(Request $request){
        try {
            $days = $request['days'];
            $case_level = $request['case_level'];
            DB::table('tudgement_time_lows')->insert([
                'number_days'=>$days,
                'case_level'=>$case_level
            ]);
            return redirect('/admin/judge-time-low');
        } catch (\Exception $e) {
            return abort(500,'ISE');
        }
    }

    public function destroy($id){
        try {
            DB::table('tudgement_time_lows')->where('jtlid',$id)->delete();
            return response()->json(['success'=>true], 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 200);
        }
    }
}
