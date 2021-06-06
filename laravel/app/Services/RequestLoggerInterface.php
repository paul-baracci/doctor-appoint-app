<?php
namespace App\Services;

use Illuminate\Http\Request;
/**
 * RequestLoggerInterface.
 */

interface RequestLoggerInterface
{   
    /**
     * log Request data
     *
     * @param Request $request
     */
    public function logRequest(Request $request):void;
}
