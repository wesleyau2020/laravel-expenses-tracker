<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;

class LogController extends Controller
{
    // Display a listing of logs
    public function index()
    {
        // Retrieve logs with pagination 
        $logs = Log::latest()->paginate(10);

        return view('logs.index', compact('logs'));
    }

    public function show($id)
    {
        // Find the log by ID
        $log = Log::findOrFail($id);

        return view('logs.show', compact('log'));
    }
}
