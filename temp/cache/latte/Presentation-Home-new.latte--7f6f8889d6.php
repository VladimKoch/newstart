<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\newstart\app\Presentation\Home/new.latte */
final class Template_7f6f8889d6 extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\newstart\\app\\Presentation\\Home/new.latte';

	public const Blocks = [
		['content' => 'blockContent'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		$this->renderBlock('content', get_defined_vars()) /* line 1 */;
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5 mb-5">
                <div class="card-body">
                    <h2 class="text-center">Vytvoření Komentáře</h2>
                    <p class="text-center">Vyplňte prosím následující formulář.</p>
';
		$ʟ_tmp = $this->global->uiControl->getComponent('commentForm');
		if ($ʟ_tmp instanceof Nette\Application\UI\Renderable) $ʟ_tmp->redrawControl(null, false);
		$ʟ_tmp->render() /* line 10 */;

		echo '                </div>
            </div>
        </div>
    </div>
</div>

';
	}
}
