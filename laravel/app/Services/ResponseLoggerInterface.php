<?php
namespace App\Services;

use Symfony\Component\HttpFoundation\Response;

/**
 * ResponseLoggerInterface.
 */

interface ResponseLoggerInterface
{   
    /**
     * log Response data
     *
     * @param Response $response
     */
    public function logResponse(Response $response): void;
}
