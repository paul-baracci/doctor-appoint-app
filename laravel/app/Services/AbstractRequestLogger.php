<?php
namespace App\Services;

use Illuminate\Http\Request;
use Psr\Log\LoggerInterface;


/**
 * AbstractRequestLogger
 */

abstract class AbstractRequestLogger implements RequestLoggerInterface
{
    private LoggerInterface $logger;

    /**
     * AbstractRequestLogger constructor
     *
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
	$this->logger = $logger;
    }
    
    /**
     * log Request
     *
     * @param Request $request
     */
    public function logRequest(Request $request): void
    {
	$this->logger->info($this->generateMessage(), $this->extractRequestData($request));
    }
    
    /**
     * Provide/generate logging Message
     *
     * @return string
     */
    protected function generateMessage(): string
    {
	return 'Request processed';
    }
    
    /**
     * Extract required Request Data
     *
     * @param Request $request
     *
     * @return array
     */
        
    abstract protected function extractRequestData(Request $request): array; 
}
