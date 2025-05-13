<?php

declare(strict_types=1);

namespace App\Presentation\Admin;

use Nette;


final class AdminPresenter extends Nette\Application\UI\Presenter
{   

    public function renderDefault()
    {
        
    }

    protected function startup(): void
    {
        parent::startup();

        if (!$this->getUser()->isLoggedIn()) {
            $this->flashMessage('Pro vstup do administrace se musíte přihlásit.');
            $this->redirect('Sign:login');
        }

        if (!$this->getUser()->isInRole('admin')) {
            $this->flashMessage('Nemáte oprávnění pro přístup do této sekce.');
            $this->redirect('Home:');
        }
    }

}   