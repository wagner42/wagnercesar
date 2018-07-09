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

    public function index() {
        $logs = Log::all();
        return response()->json($logs);
    }

}