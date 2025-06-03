<?php
declare(strict_types=1);

namespace App\Presentation\Mailer;

use Nette;
use Nette\Mail\Message;
use Latte\Engine;
use App\Model\MailSender;
use Contributte\FormsBootstrap\BootstrapForm;
use Contributte\FormsBootstrap\Enums;

final class MailerPresenter extends Nette\Application\UI\Presenter
{   

    private $mailSender;

    public function __construct(
		private Nette\Application\LinkGenerator $linkGenerator,
		private Nette\Bridges\ApplicationLatte\TemplateFactory $templateFactory,
		private Nette\Database\Explorer $database,
        MailSender $mailSender
	) {
        $this->mailSender = $mailSender;
	}



    public function handleSend()
				{
					$mailer = new Nette\Mail\SmtpMailer(
                    host: 'smtp.gmail.com',
                    username: 'vkochanv@gmail.com',
                    password: 'bzsj niwz yxhe life',
                    encryption: 'ssl');
						
                    $mail = $this->mailSender->createEmail();		
                    $mailer->send($mail);
				}

	
public function createComponentNewsletterForm(): BootstrapForm
{
    BootstrapForm::switchBootstrapVersion(Enums\BootstrapVersion::V5);
    $form = new BootstrapForm;

    $form->addTextArea('content', 'Obsah newsletteru:')
        ->setRequired('Zadejte obsah newsletteru.');

    $form->addTextArea('recipients', 'E-mailové adresy:')
        ->setRequired('Zadejte alespoň jednu e-mailovou adresu.')
        ->setHtmlAttribute('placeholder', 'Oddělte e-maily čárkou.');

    $form->addText('subject', 'Předmět:')
        ->setDefaultValue('Novinky z naší aplikace')
        ->setRequired('Zadejte předmět.');

    $form->addSubmit('send', 'Odeslat newsletter');

    $form->onSuccess[] = [$this, 'processNewsletterForm'];

    return $form;
}

// protected function createComponentNewsletter(): NewsletterComponent
// {
//     return $this->newsletterComponent->send();
// }

public function processNewsletterForm(BootstrapForm $form, array $values): void
{
    $recipients = array_map('trim', explode(',', $values['recipients']));
    // $newsletter = $this->getComponent('newsletter');
    $this->newsletterComponent->setRecipients($recipients);
    $this->newsletterComponent->setSubject($values['subject']);

    // print_r($values['content']);
    // die;

    // Nastavení obsahu šablony
    $this->template->content = $values['content'];

    // Odeslání newsletteru
    $this->newsletterComponent->send();

    $this->flashMessage('Newsletter byl úspěšně odeslán.', 'success');
    $this->redirect('this');

}

// protected function createComponentNewsletter(): NewsletterComponent
// {
//     return new NewsletterComponent($this->mailerManager);
// }




}