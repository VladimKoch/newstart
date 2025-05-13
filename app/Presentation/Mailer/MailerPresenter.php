<?php

declare(strict_types=1);

namespace App\Presentation\Mailer;

use Nette;
use Nette\Application\UI\Form;
use App\Components\NewsletterComponent;

final class MailerPresenter extends Nette\Application\UI\Presenter
{
    private NewsletterComponent $newsletterComponent;

    public function __construct(NewsletterComponent $newsletterComponent, private \App\Model\EManager $mailerManager)
    {
        parent::__construct();
        $this->newsletterComponent = $newsletterComponent;
    }

    // public function handleSendNewsletter(): void
    // {
    //     $recipients = [
    //         'vkochan@tiscali.cz',
    //         'vkochanv@gmail.com'
    //     ];
        
    //     $this->newsletterComponent = $this->getComponent('newsletter');
    //     $this->newsletterComponent->setRecipients($recipients);
    //     $this->newsletterComponent->send();

    //     $this->flashMessage('E-maily byly odeslány.', 'success');
    //     $this->redirect('this');
    // }
	

public function createComponentNewsletterForm(): Form
{
    $form = new Form;

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

public function processNewsletterForm(Form $form, array $values): void
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