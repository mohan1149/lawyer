<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CaseLevelController extends Controller
{
    //

    public function getCaseLevels(){
        try {
            
        } catch (\Exception $e) {
            return abort(500,"ISE");
        }
    }
}
