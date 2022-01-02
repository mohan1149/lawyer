<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Model\CourtCase;


class CaseLevelController extends Controller
{
    //

    public function getCaseLevels(){
        try {
            $level1 = DB::table('court_cases')->where('case_level',1)->get();
            $level2 = DB::table('court_cases')->where('case_level',2)->get();
            $level3 = DB::table('court_cases')->where('case_level',3)->get();
            $level4 = DB::table('court_cases')->where('case_level',4)->get();
            $level5 = DB::table('court_cases')->where('case_level',5)->get();
            $level6 = DB::table('court_cases')->where('case_level',6)->get();
            $data = [
                'l1'=>$level1,
                'l2'=>$level2,
                'l3'=>$level3,
                'l4'=>$level4,
                'l5'=>$level5,
                'l6'=>$level6,  
            ];
            return view('admin.levels.index',['data'=>$data]);
        } catch (\Exception $e) {
            return abort(500,"ISE");
        }
    }

    public function viewCaseLevel(Request $request){
        try {
            $case_id = $request['id'];
            $level = $request['level'];
            $case = DB::table('court_cases as case')
            ->leftJoin('case_levels as level','level.case_id','=','case.id')
            ->join('case_statuses as status','status.id','=','case.case_status')
            ->join('courts','courts.id','=','case.court')
            ->join('case_types as type','type.id','=','case.case_sub_type')
            ->join('advocate_clients as client','client.id','=','case.advo_client_id')
            ->where('case.id',$case_id)
            ->where('level.level_id',$level)
            ->first();
            return view('admin.levels.view',['case'=>$case]);
        } catch (\Exception $e) {
            return abort(500,'IES');
        }
    }

    public function saveLevel(Request $request){
        try {
            $case_id = $request['id'];
            $level = $request['level'];
            $floor = $request['floor'];
            $room  = $request['room'];
            $expert = $request['expert'];
            $secratery = $request['secretary'];
            $pre_req  = $request['prev_request'];
            $pre_res = $request['pre_response'];
            $next_req = $request['next_request'];
            $next_res = $request['next_response'];
            $notes = $request['notes'];
            $options = [
                'floor'=>$floor,
                'room'=>$room,
                'secretary'=>$secratery,
                'expert'=>$expert,
                'prev_request'=>$pre_req,
                'pre_response'=>$pre_res,
                'next_request'=>$next_req,
                'next_response'=>$next_res,
                'level_notes'=>$notes,
            ];
            if($floor == "") {
                unset($options['floor']);
            }
            if($room == "") {
                unset($options['room']);
            }
            if($expert == ""){
                unset($options['expert']);
            }
            if($secratery == ""){
                unset($options['secretary']);
            }
            if($pre_req == ""){
                unset($options['prev_request']);
            }
            if($pre_res == ""){
                unset($options['pre_response']);
            }
            if($next_req == ""){
                unset($options['next_request']);
            }
            if($next_res == ""){
                unset($options['next_response']);
            }
            if($notes == ""){
                unset($options['level_notes']);
            }
            DB::table('case_levels')
                ->where('case_id',$case_id)
                ->where('level_id',$level)
                ->update($options);
            return redirect('/admin/case/levels');
        } catch (\Exception $e) {
            return $e->getMessage();
            return abort(500,'IES');
        }
    }

    public function updateLevel(Request $request){
        try {
            $case_id = $request['case_id'];
            $level = $request['up_level'];
            $case = CourtCase::find($case_id);
            $case->case_level = $level;
            $case->save();
            DB::table('case_levels')->insert([
                'case_id'=>$case_id,
                'level_id'=>$level,
            ]);
            return redirect('/admin/case/levels');
        } catch (\Exception $e) {
            return abort(500,'IES');
        }
    }

    public function levelHistory(Request $request){
        try {
            $case_id = $request['id'];
            $levels = DB::table('case_levels')
                ->where('case_id',$case_id)
                //->orderBy('level_id','ASC')
                ->get();
            return view('admin.levels.history',['levels'=>$levels]);
        } catch (\Exception $e) {
            return abort(500,'IES');
        }
    }
}
