<?php
namespace App\Services;

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
