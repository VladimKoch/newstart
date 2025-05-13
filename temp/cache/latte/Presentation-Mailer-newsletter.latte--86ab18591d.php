<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\web\app\Presentation/Mailer/newsletter.latte */
final class Template_86ab18591d extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\web\\app\\Presentation/Mailer/newsletter.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		echo '<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>';
		$subject = null /* line 5 */;
		echo '</title>
</head>
<body>
    <div>
        <h1>';
		$subject = null /* line 9 */;
		echo '</h1>
';
		if (isset($content)) /* line 10 */ {
			echo '        <p>';
			echo $content /* line 11 */;
			echo '</p>
';
		}
		echo '    </div>
</body>
</html>';
	}
}
