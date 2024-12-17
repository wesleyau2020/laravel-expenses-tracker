<?php

namespace App\Services;

use App\Models\Log;
use Illuminate\Support\Facades\Auth;

class LogService
{
    /**
     * Log an action to the database
     *
     * @param string $logType
     * @param string $message
     * @return void
     */
    public function createLog(string $logType, string $message)
    {
        Log::create([
            'user_id' => Auth::id(),
            'log_type' => $logType,
            'message' => $message,
        ]);
    }
}
