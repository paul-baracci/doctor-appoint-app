<?php

namespace App\Event;

/**
 * ResposeSent
 */
class ResponseSent
{
    public int $code;

    /**
     * ResponseSent constructor.
     *
     * @param int $code
     */
    public function __construct(int $code)
    {
	$this->code = $code;
    }
}

