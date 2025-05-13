<?php

declare(strict_types=1);

namespace App\Presentation\Home;

use Nette;


final class HomePresenter extends Nette\Application\UI\Presenter
{   

    

    public function __construct(private \App\Model\ArticleManager $article,
                                private \Nette\Http\Request $request)
    {
       
    }

    public function renderDefault($page = 1)
    {

        
            // Získání aktuálně přihlášeného uživatele
            $user = $this->getUser();

            // print_r($user->getIdentity()->getRoles()[0]);
            // die;
            
            // Zkontrolujte, zda je uživatel přihlášen
            if ($user->isLoggedIn()) {
                $this->template->username = $user->getIdentity()->email; // nebo jiný atribut s uživatelským jménem
            } else {
                $this->template->username = null; // Není přihlášen
            }
        
        $posts = $this->article->findAllArticles();


        $lastPage = 0;

        $this->template->posts = $posts->page($page, 4, $lastPage);

        $this->template->page = $page;
        $this->template->lastPage = $lastPage;
        $this->template->time = date('H:i:s');
    }

    public function renderShow($postId): void
    {
        
        $posts = $this->article->findAllArticles()->get($postId);
        
        if($posts){
            $this->template->posts = $posts;
            $comments = $posts->related('comments');
            if($comments){
                $this->template->comments = $comments;
            }else{$this->error('Comenty nebyly nalezeny');

            }
        }else{

            $this->error('Posty nebyly nalezeny');
        }

        // if($postId){
        //     $comments = $this->database->table('posts')->get($postId);
        //     if(!$comments)
        //     {
        //         $this->error('Stránka nebyla nalezena');
        //     }
        //     $this->template->comments = $comments->related('comments');
        // }
    }

    public function handleClick(): void
    {   
        
        if($this->isAjax()){
            
            bdump($this->isAjax());
            $time = 'ogon';
            $this->template->time = $time;
            $this->redrawControl('mySnippet');
  
        }else{
            $this->flashMessage('Neni AJax');
            $this->redirect('this');
        }

    }

    
}
