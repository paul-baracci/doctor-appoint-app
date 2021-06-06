<?php

namespace App\Services;

use App\Event\ResponseSent;
use Symfony\Component\HttpFoundation\Response;

/**
 * DebugResponseLogger
 */
class DebugResponseLogger extends AbstractResponseLogger
{
    
    /**
     * @inheritDoc
     */
    protected function extractResponseData(Response $response): array
    {
	return [
	    'date' => $response->getDate()->format(DATE_ATOM),
	    'code' => $response->getStatusCode(),
	];	
    }


    /**
     * @inheritDoc
     */
    protected function handleFinishedRequestEvent(Response $response): void
    {
	$this->dispatcher->dispatch(new ResponseSent($response->getStatusCode()));	
    }
}
