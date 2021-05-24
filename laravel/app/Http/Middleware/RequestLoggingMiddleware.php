<?php
namespace App\Http\Middleware;

use App\Services\RequestLoggerInterface;
use Illuminate\Support\Facades\Log;
use Closure;

/**
 * RequestLoggingMiddleware.
 *
 */
class RequestLoggingMiddleware
{
    private RequestLoggerInterface $requestLogger;

    public function __construct(RequestLoggerInterface $requestLogger)
    {
	$this->requestLogger = $requestLogger;
    }
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
	$this->requestLogger->logRequest($request);

	$response = $next($request);

	if (app()->environment('local')) {
	    $log = [
		'URI' => $request->getUri(),
		'METHOR' => $request->getUri(),
		'REQUEST_BODY' => $request->getUri(),
		'RESPONSE' => $request->getUri(),
	    ]; 
	    
	    Log::info(json_encode($log));
	}

	return $response;
    }


}
