<?php
namespace App\Services;

use Illuminate\Http\Request;

/**
 *  ProductionRequestLogger
 *
 */

class ProductionRequestLogger extends AbstractRequestLogger
{
    /**
     *  @inheritDoc
     */
    protected function generateMessage(): string
    {
	return 'Production request logger';
    }
    
    /**
     *  @inheritDoc
     */
    protected function extractRequestData(Request $request): array
    {
	if (app()->environment('production')) {
	    return [
		'Cache' => $request->header('Cache-Control')
	    ];
	} else {
	    return back();
	}
    }
}
