<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\web\app\Presentation\Home/show.latte */
final class Template_df47f2b155 extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\web\\app\\Presentation\\Home/show.latte';

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
			foreach (array_intersect_key(['comment' => '62'], $this->params) as $ʟ_v => $ʟ_l) {
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
<div hx-target="this" hx-swap="outerHTML">
';
		$this->createTemplate('../header.latte', $this->params, 'include')->renderToContentType('html') /* line 4 */;
		echo '    <!--Main layout-->
  <main class="my-5">
    <div class="container">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-md-9 mb-4">
          <!--Section: Content-->
          <section>
		  
            <!-- Post -->
            <div class="row">
              <div class="col-md-4 mb-4">
                <div class="bg-image hover-overlay shadow-1-strong rounded">
                  <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 19 */;
		echo '/uploads/img/';
		echo LR\Filters::escapeHtmlAttr($posts->img_url) /* line 19 */;
		echo '" class="img-fluid shadow" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
              </div>

              <div class="col-md-8 mb-4">
                <h5>';
		echo LR\Filters::escapeHtmlText($posts->title) /* line 27 */;
		echo '</h5>
                <p>
                  ';
		echo LR\Filters::escapeHtmlText($posts->content) /* line 29 */;
		echo '
                </p>

                
              </div>
            </div>
                <!--Přihlaš se na událost-->
                <button type="button" class="btn btn-primary shadow" hx-get="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:eventRegister')) /* line 36 */;
		echo '">Přihlaš se na údálost</button>
                <button type="button" class="btn btn-secondary shadow" hx-get="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:default')) /* line 37 */;
		echo '">Zpět</button>
          </section>
          <!--Section: Content-->
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 mb-4">
          <!--Section: Sidebar-->
          <section class="sticky-top" style="top: 80px;">
            <!--Section: Video-->
            <section class="text-center">
              <h5 class="mb-4">Video k události</h5>

              <div class="embed-responsive embed-responsive-16by9 shadow-4-strong">
                <iframe class="embed-responsive-item rounded shadow" src="https://www.youtube.com/embed/c9B4TPnak1A"
                  allowfullscreen></iframe>
              </div>
            </section>
            <!--Section: Video-->
            <hr>
            <!--Section: Ad-->
            <section class="text-center border-bottom pb-4 mb-4">
              <div class="bg-image hover-overlay mb-4">
              <h2>Komentáře:</h2>
';
		foreach ($comments as $comment) /* line 62 */ {
			echo '                <div>
                <strong>';
			echo LR\Filters::escapeHtmlText($comment->name) /* line 63 */;
			echo '</strong>
                <p>';
			echo LR\Filters::escapeHtmlText($comment->content) /* line 64 */;
			echo '</p>
                </div>
';

		}

		echo '                <a href="https://mdbootstrap.com/docs/standard/" target="_blank">
                  <div class="mask" style="background-color: rgba(57, 192, 237, 0.2);"></div>
                </a>
              </div>
';
		if ($user->isLoggedIn()) /* line 77 */ {
			echo '              <a role="button" class="btn btn-primary" href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Post:new')) /* line 78 */;
			echo '"
                target="_blank">Vlož komentář<i class="fas fa-download ms-2"></i></a>
';
		}
		echo '            </section>
            <!--Section: Ad-->

          </section>
          <!--Section: Sidebar-->
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
</main>
';
		$this->createTemplate('../footer.latte', $this->params, 'include')->renderToContentType('html') /* line 92 */;
		echo '</div>
';
	}
}
