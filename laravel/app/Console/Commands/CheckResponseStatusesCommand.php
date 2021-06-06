<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Psr\SimpleCache\CacheInterface;

class CheckResponseStatusesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:responses:status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check response statuses';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(CacheInterface $cache)
    {
	$cache->set('statuses', [200 => 5, 204 => 3, 50 => 69]);
	$statuses = $cache->get('statuses', []);
	$this->output->table(array_keys($statuses), [array_values($statuses)]);

	foreach ($statuses as $code => $number) {
	    $message = sprintf('%d uses %d', $code, $number);
	    if ($code > 199 && $code < 250) {
		$this->output->info($message);
	    
	    } else {
		$this->output->note('unknown type ' . $message );
	    }
	}
    }
}
