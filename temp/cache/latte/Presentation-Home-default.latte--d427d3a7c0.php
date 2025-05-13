<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\web\app\Presentation\Home/default.latte */
final class Template_d427d3a7c0 extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\web\\app\\Presentation\\Home/default.latte';

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

		$this->renderBlock('content', get_defined_vars()) /* line 3 */;
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['post' => '97'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}


	/** {block content} on line 3 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '
<div hx-target="this" hx-swap="outerHTML">
';
		$this->createTemplate('../header.latte', $this->params, 'include')->renderToContentType('html') /* line 6 */;
		echo '
  <!--Main layout-->
  <main class="my-5">
    <div class="container">
           <!--Section: Video-->
            <section class="text-center">
              <h1 style="font-family: \'Times New Roman\', sans-serif" class="mb-4">Lay Institute for Global Health Training</h1>

              <div class="shadow" style="position: relative; width: 100%; padding-bottom: 16.66%;">
                <iframe class="embed-responsive-item rounded" src="https://www.youtube.com/embed/D56TocFcyRo"
                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: none;"
                  allowfullscreen></iframe>
              </div>
            </section>
            <br>
            <hr>
            <!--Section: Video-->
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-md-9 mb-4">
          <!--Section: Content-->
          <section>
';
		foreach ($posts as $post) /* line 97 */ {
			echo '		  <div>
            <!-- Post -->
            <div class="row">
              <div class="col-md-4 mb-4">
                <div class="bg-image hover-overlay shadow-1-strong rounded" data-mdb-ripple-color="light">
                  <img src="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 102 */;
			echo '/uploads/img/';
			echo LR\Filters::escapeHtmlAttr($post->img_url) /* line 102 */;
			echo '" class="img-fluid shadow" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
              </div>

              <div class="col-md-8 mb-4">
                <h5>';
			echo LR\Filters::escapeHtmlText($post->title) /* line 110 */;
			echo '</h5>
                <p>
                  ';
			echo LR\Filters::escapeHtmlText($post->content) /* line 112 */;
			echo '
                </p>

                <button type="button" class="btn btn-primary shadow" hx-get="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:show', [$post->id])) /* line 115 */;
			echo '">Zobraz</button>
              </div>
            </div>
			</div>
';

		}

		echo '          </section>
          <!--Section: Content-->
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 mb-4">
          <!--Section: Sidebar-->
          <section class="sticky-top" style="top: 80px;">
            <!--Section: Ad-->
            <section class="text-center border-bottom pb-4 mb-4">
              <div class="bg-image hover-overlay mb-4" data-mdb-ripple-init>
                <img
                  src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 132 */;
		echo '/uploads/img/unnamed.jpg"
                  class="img-fluid" />
                <a href="https://mdbootstrap.com/docs/standard/" target="_blank">
                  <div class="mask" style="background-color: rgba(57, 192, 237, 0.2);"></div>
                </a>
              </div>
              <h5>Lay Institute for Global Health Training</h5>

              <p>
                Laický institut pro globální zdraví (LIGH) je mezinárodní vzdělávací a výzkumná organizace, která se zaměřuje na
                zlepšení zdraví a blahobytu lidí po celém světě. Naším cílem je poskytovat kvalitní vzdělání a výzkum v oblasti
                globálního zdraví a podporovat inovace a spolupráci mezi odborníky v této oblasti. 
              </p>
              <a role="button" class="btn btn-primary shadow" href="https://mdbootstrap.com/docs/standard/" data-mdb-ripple-init
                target="_blank">Učební materiál<i class="fas fa-download ms-2"></i></a>
            </section>
            <!--Section: Ad-->
            <!--Section: Video-->
            <section class="text-center">
              <h5 class="mb-4">Pozvánka na skupinky</h5>

              <div class="embed-responsive embed-responsive-16by9 shadow-4-strong">
                <iframe class="embed-responsive-item rounded shadow" src="https://www.youtube.com/embed/NFkklaJDQnU"
                  allowfullscreen></iframe>
              </div>
            </section>
            <!--Section: Video-->
            <hr>
            <!--Section: Content-->
            <section class="text-center">
              <h5 class="mb-4">Ukázka Písní</h5>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=yUCuYGHSumM">Jonathan Oriel - Turné</a></li>
              </ul>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=6qUBED_5j88">Jonathan Oriel - Ven Hijo Ven</a></li>
              </ul>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=6qUBED_5j88">Jonathan Oriel - Ven Hijo Ven</a></li>
              </ul>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="https://www.youtube.com/watch?v=6qUBED_5j88">Jonathan Oriel - Tan Fragil</a></li>
              </ul>

            </section>
            <!--Section: Content-->

          </section>
          <!--Section: Sidebar-->
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->


      <!-- Pagination -->
    </div>
  </main>
  <!--Main layout-->
';
		$this->createTemplate('../footer.latte', $this->params, 'include')->renderToContentType('html') /* line 210 */;
		echo '</div>
';
	}
}
