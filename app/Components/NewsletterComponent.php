<?php

declare(strict_types=1);

namespace App\Components;

use App\Model\EManager;
use Nette\Application\UI\Control;
use Nette\Application\UI\Presenter;
use Nette\Bridges\ApplicationLatte\Template;
use Nette\Bridges\ApplicationLatte\TemplateFactory;



final class NewsletterComponent extends Control
{   
    
    private EManager $mailerManager;
    private array $recipients = [];
    private string $subject = 'Novinky z naší aplikace';
    private string $templateFile = 'C:\xampp\htdocs\web\app\Presentation/Mailer/newsletter.latte';

    
    public function __construct(EManager $mailerManager,private TemplateFactory $templateFactory)
    {
        $this->mailerManager = $mailerManager;
        // print_r($this->templateFile);
        // die;
    }

    public function setRecipients(array $recipients): void
    {
        $this->recipients = $recipients;
    }

    public function setSubject(string $subject): void
    {
        $this->subject = $subject;
    }

    public function render(): void
    {   
        $template = $this->templateFactory->createTemplate();
        $template->setFile($this->templateFile);
        $template->render();
    }

    public function send(): void
    {   

        $template = $this->templateFactory->createTemplate();
        $template->setFile($this->templateFile);
        $template->render();

        $content = $template->renderToString();
        
        foreach ($this->recipients as $email) {
            $this->mailerManager->sendEmail($email, $this->subject, $content);
        }
    }
}