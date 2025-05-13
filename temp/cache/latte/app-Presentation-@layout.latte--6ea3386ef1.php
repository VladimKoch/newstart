<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\web\app\Presentation/@layout.latte */
final class Template_6ea3386ef1 extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\web\\app\\Presentation/@layout.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		echo '<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 6 */;
		echo '/css/bootstrap-icons.css">
	<link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 7 */;
		echo '/css/bootstrap.min.css">
	<link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 8 */;
		echo '/css/bootstrap.min.css.map">
	<link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 9 */;
		echo '/css/style.css">
	<link rel="stylesheet" href="https://bootswatch.com/5/spacelab/bootstrap.min.css">
	
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://unpkg.com/naja@2/dist/Naja.min.js"></script>
	<script src="https://unpkg.com/nette-forms@3/src/assets/netteForms.min.js"></script>
	<script src="https://unpkg.com/nette.ajax.js"></script>
	<script src="https://unpkg.com/htmx.org@2.0.4"></script>


	<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 32 */;
		echo '/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

	    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.0.0/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />


</head>

<body>
	<div class="container">
';
		foreach ($flashes as $flash) /* line 50 */ {
			echo '			<div class="alert alert-warning text-center">';
			echo LR\Filters::escapeHtmlText($flash->message) /* line 51 */;
			echo '</div>
';

		}

		echo '	</div>

';
		$this->renderBlock('content', [], 'html') /* line 55 */;
		echo '
    <script>
        function updateTime() {
            const now = new Date();
            const options = { hour: \'2-digit\', minute: \'2-digit\', second: \'2-digit\' };
            document.getElementById(\'current-time\').textContent = now.toLocaleTimeString(\'cs-CZ\', options);
        }


        setInterval(updateTime, 1000); // Aktualizace každou sekundu
        updateTime(); // Inicializace při načtení stránky
    </script>
	
	<script>window.scrollTo({ top: 0, behavior: \'smooth\' });</script>

	 <!-- MDB -->
    <script type="text/javascript" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 82 */;
		echo '/js/mdb.umd.min.js"></script>

	
	
		
</body>
  
</html>
';
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['flash' => '50'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}
}
