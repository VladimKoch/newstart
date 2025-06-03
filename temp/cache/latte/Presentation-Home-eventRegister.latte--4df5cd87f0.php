<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\newstart\app\Presentation\Home/eventRegister.latte */
final class Template_4df5cd87f0 extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\newstart\\app\\Presentation\\Home/eventRegister.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}
	}
}
