<?php

declare(strict_types=1);


namespace App\Model;

use Nette\Mail\Message;
use Nette\Mail\SmtpMailer;
use Nette\Nette\Diagnostics\Debugger;

class EManager
{
	private $host;
	private $username;
	private $password;
	private $secure;
	private $port;



	public function __construct(private SmtpMailer $mailer, private \Nette\DI\Container $container)
	{
		$this->host = $this->container->getParameters('host');
		$this->username = $this->container->getParameters('username');
		$this->password = $this->container->getParameters('password');
		$this->secure = $this->container->getParameters('secure');
		$this->port = $this->container->getParameters('port');
	}

	public function sendEmail(string $to, string $subject, string $body): void
	{	
		$mail = new Message;
		$mail->setFrom('vkochanv@gmail.com', 'My App')
			 ->addTo($to)
			 ->setSubject($subject)
			 ->setBody($body);

		$this->mailer->send($mail);
	}
}