<?php

namespace App\Http\Controllers;

use App\HoldAudit;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index() {
        $records = HoldAudit::take(5)->get();
        return view('demo', ['records' => $records]);
    }

}
