<?php

namespace App\Http\Controllers;

use App\HoldAudit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller
{
    public function index() {

        $records = DB::table('szrhold_audit')
            ->join('SPRIDEN', 'szrhold_audit.HOLD_PIDM', '=', 'SPRIDEN.SPRIDEN_PIDM')
            ->join('szbuniq', 'SPRIDEN.SPRIDEN_id', '=', 'szbuniq.SZBUNIQ_BANNER_ID')
            ->where('szbuniq.SZBUNIQ_UNIQUE_ID', '=', strtoupper(cas()->getCurrentUser()))
            ->get();


        return view('demo', ['records' => $records]);
    }

}
