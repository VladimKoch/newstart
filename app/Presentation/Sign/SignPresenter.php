<?php
namespace App\Presentation\Sign;

use Nette;
use Nette\Application\UI\Form;
use Nette\Database\UniqueConstraintViolationException;




final class SignPresenter extends Nette\Application\UI\Presenter
{   

    public function __construct(private \Nette\Database\Explorer $database,
                                private \Nette\Security\User $user,
                                private \App\Model\UserManager $userManager,
                                private \App\Model\Auth $auth)
    {
        
    }

	protected function createComponentSignInForm(): Form
	{
		$form = new Form;



        $form->addText('firstName', 'First name:')
        ->setRequired()
        ->setHtmlAttribute('class', 'form-control')
        ->setHtmlId('form3Example1');

    $form->addText('lastName', 'Last name:')
        ->setRequired()
        ->setHtmlAttribute('class', 'form-control')
        ->setHtmlId('form3Example2');

    $form->addEmail('email', 'Email address:')
        ->setRequired()
        ->setHtmlAttribute('class', 'form-control')
        ->setHtmlId('form3Example3');

    $form->addPassword('password', 'Password:')
        ->setRequired()
        ->setHtmlAttribute('class', 'form-control')
        ->setHtmlId('form3Example4');

    $form->addCheckbox('newsletter', 'Chci dostávat novinky')
        ->setHtmlAttribute('class', 'form-check-input me-2')
        ->setDefaultValue(true);

    $form->addSubmit('send', 'Sign up')
        ->setHtmlAttribute('class', 'btn btn-primary btn-block mb-4');

    

		// $form->addText('username', 'Uživatelské jméno:')->setHtmlAttribute('class','form-control')->setHtmlAttribute('id','form3Example1')
		// 	->setRequired('Prosím vyplňte své uživatelské jméno.');
		// $form->addEmail('email', 'Email:')->setHtmlAttribute('class','form-control')->setHtmlAttribute('id','form3Example1')
		// 	->setRequired('Prosím vyplňte email.');

		// $form->addPassword('password', 'Heslo:')
		// 	->setRequired('Prosím vyplňte své heslo.');

		// $form->addSubmit('send', 'Přihlásit');

		$form->onSuccess[] = [$this,'signInFormSucceeded'];
		return $form;
	}

    public function signInFormSucceeded(Form $form,\stdClass $data): void
    {   
        try{
            $this->database->table('users')->insert([
                'firstName'=>$data->firstName,
                'lastName'=>$data->lastName,
                'email'=>$data->email,
                'password'=>password_hash($data->password,PASSWORD_DEFAULT),
                'newsLetter'=>$data->newsletter
                
            ]);
            $this->flashMessage('Váš účet byl úspěšně zaregistrován, nyní se můžete přihlásit');
            $this->redirect('Sign:login');

        }catch(UniqueConstraintViolationException $e){
            $form->addError('Uživatel s tímto emailem již existuje');
        }

    }

    

    protected function createComponentLoginForm(): Form
	{
		$form = new Form;
		

    $form->addEmail('email', 'Email address:')
        ->setRequired()
        ->setHtmlAttribute('class', 'form-control')
        ->setHtmlId('form3Example3');

    $form->addPassword('password', 'Password:')
        ->setRequired()
        ->setHtmlAttribute('class', 'form-control')
        ->setHtmlId('form3Example4');

    $form->addCheckbox('newsletter', 'Subscribe to our newsletter')
        ->setHtmlAttribute('class', 'form-check-input me-2')
        ->setDefaultValue(true);

    $form->addSubmit('send', 'Login')
        ->setHtmlAttribute('class', 'btn btn-primary btn-block mb-4');


		$form->onSuccess[] = [$this,'loginFormSucceeded'];
		return $form;
	}


    // Funkce která zabrání vejít znovu do Loginu pokud je uživatel přihlášený
    protected function startup(): void
    {
        parent::startup();

        if ($this->getUser()->isLoggedIn() && $this->getAction() === 'login') {
            $this->redirect('Home:default'); // nebo jinam kam chceš
        }
    }

    public function loginFormSucceeded(Form $form,\stdClass $data): void
    {  
    try {
            $this->getUser()->login($data->email, $data->password);
            $this->flashMessage('Byl jste úspěšne přihlášen');
            $this->redirect('Home:default');
      
        } catch (Nette\Security\AuthenticationException $e) {
           
           $form->addError('Nesprávný přihlašovací email nebo heslo.');
            // $this->redirect('this');
        }

    }

    public function actionOut(): void
    {   
        $this->user->logout();
        $this->flashMessage('Byl jste odhlášen.', 'info');
        $this->redirect('Sign:login');
    }


}