<?php
namespace App\Presentation\Table;

use Nette;
use Nette\Application\UI\Form;
use Nette\Database\UniqueConstraintViolationException;
use Contributte\FormsBootstrap\BootstrapForm;
use Contributte\FormsBootstrap\Enums;
use DateTime;

final class TablePresenter extends Nette\Application\UI\Presenter
{   

    private $moveDir;

    public function __construct(private \Nette\Database\Explorer $database,
                                 private \Nette\Security\User $user,
                                 private \App\Model\UserManager $userManager,
                                 private \App\Model\Auth $auth,
                                 private \Nette\DI\Container $container)
    {
        $this->moveDir = $this->container->getParameter('moveDir');
    }


    public function createComponentEventForm()
    {
        BootstrapForm::switchBootstrapVersion(Enums\BootstrapVersion::V5);
        $form = new BootstrapForm;

        $form->addText('name','Název akce:')->setRequired();
        $form->addTextArea('description','Popis akce:')
            ->setRequired();

        $form->addUpload('image','Obrázek akce:')
            ->setRequired()
            ->addRule(Form::Image, 'Soubor musí být obrázek.');
        
        $form->addBootstrapDateTime('date','Datum a Čas začátku akce:')->setRequired();

        $form->addSubmit('send','Uložit')
        ->onClick[] = [$this, 'eventFormSucceeded'];

        return $form;

    }

    public function eventFormSucceeded(Nette\Forms\Controls\Button $button, $data)
    {   
        // print_r($data->image);
        // die;
        // Zpracování formuláře
        // Uložení dat do databáze nebo jiná logika
        // Například:
        // $date = $data->date; // DateTimeImmutable
        // $time = $data->time; // string jako "14:30"
        
        // print_r($time);
        // die;

        // Rozdělení času a spojení s datem
        // [$hour, $minute] = explode(':', $time);
        // $datetime = $date->setTime((int) $hour, (int) $minute);
        
    
        // Uložení obrázku
        $image = $data->image;
        
        //Kontrola jestli Obrázek je správně nahrán a přesunutí do složky
        if ($image->isOk()) {
            $image->move(__DIR__ . $this->moveDir . $image->getName());
            
            $this->flashMessage('Obrázek byl úspěšně nahrán.','success');
        } else {
            $this->flashMessage('Nastala chyba při nahrávání obrázku.', 'error');
        }

        $this->database->table('posts')->insert(['title'=>$data->name,
                                                'content'=>$data->description,
                                                'img_url'=>$data->image->getName(),
                                                'created_at'=> new DateTime(),
                                                'event_date'=>$data->date]);
        $this->flashMessage('Event byl vytvořen');// $this->flashMessage('Akce byla úspěšně uložena.','success');
        $this->redirect('this');
    }



}