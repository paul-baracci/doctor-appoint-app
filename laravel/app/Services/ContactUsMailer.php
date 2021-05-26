<?php
namespace App\Services;

use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Mail\Message;
use Psr\Log\LoggerInterface;
use App\Http\Controllers\ContactFormController;

class ContactUsMailer
{
    private const DESTINATION_EMAIL = 'support@augmented.com';

    private Mailer $mailer;

    private LoggerInterface $logger;
    
    /**
     * ContactUsMailer constructor
     *
     * @param Mailer $mailer
     * @param LoggerInterface $logger	
     */
   
    public function __construct(Mailer $mailer, LoggerInterface $logger)
    {
	$this->mailer = $mailer;
	$this->logger = $logger;
    }

    /**
     * Send Contact us email.
     *
     * @param array $input
     */
    public function send(array $input): void
    {
	[
	    'fname' => $name,
	    'email' => $email,
	    'subject' => $subject,
	    'content' => $content
	] = $input;

    	$this->mailer->send('emails.email',
    	    [
		'name' => $name,
		'email' => $email,
		'content' => $content
	    ],
    		function (Message $message) use ($subject) {
	        $message->to(self::DESTINATION_EMAIL);
		$message->from('no-reply@augmented.com');
    		$message->subject($subject);
		}
	);

    $this->logger->info('Contact us message send to' . self::DESTINATION_EMAIL);
    }
}
