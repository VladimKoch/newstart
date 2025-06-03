<?php

declare(strict_types=1);


namespace App\Model;

use Nette;
use Latte\Engine;

class MailSender
{
	public function __construct(
		private Nette\Application\LinkGenerator $linkGenerator,
		private Nette\Bridges\ApplicationLatte\TemplateFactory $templateFactory,
		private Nette\Database\Explorer $database
	) {
	}

	private function createTemplate(): Nette\Application\UI\Template
	{
		$template = $this->templateFactory->createTemplate();
		$template->getLatte()->addProvider('uiControl', $this->linkGenerator);
		return $template;
	}

	public function createEmail(): Nette\Mail\Message
	{   

		$mails = $this->database->table('mailer')->fetchAll();

		// print_r($mails['mails']);
		// die;


        $latte = new Engine;
        $params = ['orderId' => 123];


        $mail = new Nette\Mail\Message;
        $mail->setFrom('Vlaďa <vkochanv@gmail.com>')
	        ->addTo('vkochan@tiscali.cz')
	        ->setHtmlBody($latte->renderToString('../app/Presentation/Mailer/email.latte', $params));

			
		// ...
		return $mail;
	}

	
}