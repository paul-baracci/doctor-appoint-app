<?php
namespace App\Services;

use Illuminate\Http\Request;

/**
 *  MyRequestLogger
 *
 */

class MyRequestLogger extends AbstractRequestLogger
{
    /**
     *  @inheritDoc
     */
    protected function generateMessage(): string
    {
	return 'My first logger message, hope it works.'; 
    }
    
    /**
     *  @inheritDoc
     */
    protected function extractRequestData(Request $request): array
    {
	return ['test' => 'it works!'];
    }
}
