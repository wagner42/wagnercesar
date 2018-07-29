<?php

namespace App\Http\Controllers;

use App\Log;
use Illuminate\Http\Request;

class LogController extends Controller
{

    public function createLog(Request $request) {
        $log = Log::create($request->all());
        return response()->json($log);
    }

    public function showLog() {
        $logs = Log::all();
        return response()->json($logs);
    }

    public function index() {
        echo "by Wagner.";
    }

}