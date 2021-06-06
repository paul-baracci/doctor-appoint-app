<?php
namespace App\Services;

use Symfony\Component\HttpFoundation\Response;
use Psr\Log\LoggerInterface;
use Illuminate\Events\Dispatcher;


/**
 * AbstractResponseLogger
 */

abstract class AbstractResponseLogger implements ResponseLoggerInterface
{
    private LoggerInterface $logger;
    protected Dispatcher $dispatcher;
    
    /**
     * AbstractResponseLogger constructor
     *
     * @param LoggerInterface $logger
     * @param Dispatcher $dispatcher
     */
    public function __construct(LoggerInterface $logger, Dispatcher $dispatcher)
    {
	$this->logger = $logger;
	$this->dispatcher = $dispatcher;
    }
    
    /**
     * log Response
     *
     * @param Response $response
     */
    public function logResponse(Response $response): void
    {
	$this->logger->info($this->generateResponseMessage($response), $this->extractResponseData($response));
	$this->handleFinishedRequestEvent($response);
    }
    
    /**
     * Provide/generate logging Message
     * 
     * @param Response $response
     * @return string
     */
    protected function generateResponseMessage(Response $response): string
    {
	if ($response->isSuccessful()) {
	    return 'the response was succesful';
	} else {
	    return 'the response was unsuccesful';
	}
    }

    /**
     * Extract required ResponseData
     *
     * @param Response $response
     *
     * @return array
     */
        
    abstract protected function extractResponseData(Response $response): array; 
    
    /**
     * Handle finished request event.
     *
     * @param Response $response
     *
     * @return array
     */
        
    abstract protected function handleFinishedRequestEvent(Response $response): void; 
}
