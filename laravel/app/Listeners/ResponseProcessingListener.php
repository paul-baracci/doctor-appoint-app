<?php
namespace App\Listeners;

use App\Event\ResponseSent;
use Illuminate\Cache\Repository;

/**
 * ResponseProcessingListener
 */
class ResponseProcessingListener
{   
    private Repository $cache;

    /**
     *
     * ResponseProcessingListener Constructor
     *
     * @param Repository $cache;
     */
    public function __construct(Repository $cache)
    {
	$this->cache = $cache;
    }
    public function handle(ResponseSent $event): void
    {
	$value = $this->cache->get('statuses', []);
	$code = $event->code;

	$value[$code] = ($value[$code] ?? 0) +1;

	/**
	 * Egor showed this example, but mentioed there are better ways of doing it.
	 */

	$this->cache->set('statuses', $value);
    }
}
