<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\newstart\app\Presentation\ImgApi/default.latte */
final class Template_03b6d57ca6 extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\newstart\\app\\Presentation\\ImgApi/default.latte';

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


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['file' => '24', 'fileImg' => '36'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
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
                    <h2 class="text-center">Nahrajte Obrázek</h2>
';
		$ʟ_tmp = $this->global->uiControl->getComponent('imageUploadForm');
		if ($ʟ_tmp instanceof Nette\Application\UI\Renderable) $ʟ_tmp->redrawControl(null, false);
		$ʟ_tmp->render() /* line 11 */;

		echo '                </div>
            </div>
        </div>
    </div>
    
    
 


 	<h2>Nahrané obrázky PNG:</h2>
<ul>
';
		foreach ($uploadsPng as $file) /* line 24 */ {
			echo '    <div class="row">
    <div class="col-md-2">
        <li class=""><img src="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 27 */;
			echo '/uploads/png/';
			echo LR\Filters::escapeHtmlAttr($file) /* line 27 */;
			echo '" class="img-fluid" alt="';
			echo LR\Filters::escapeHtmlAttr($file) /* line 27 */;
			echo '" width="100">';
			echo LR\Filters::escapeHtmlText($file) /* line 27 */;
			echo '</li>
    </div>
    </div>
';

		}

		echo '</ul>
    <div class="container">
 	<h2>Nahrané obrázky JPG:</h2>
<ul>
    <div class="row row-cols-1 row-cols-md-2 g-5">
';
		foreach ($uploadsImgs as $fileImg) /* line 36 */ {
			echo '    <div class="col-md-3 ">
        <img src="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 38 */;
			echo '/uploads/img/';
			echo LR\Filters::escapeHtmlAttr($fileImg) /* line 38 */;
			echo '" class="img-fluid" alt="';
			echo LR\Filters::escapeHtmlAttr($fileImg) /* line 38 */;
			echo '" width="100">
    </div>
';

		}

		echo '    </div>
</ul>


    <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:default')) /* line 45 */;
		echo '" class="btn btn-primary">Zpět</a>

</div>
</div>

';
	}
}
