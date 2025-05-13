<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\web\app\Presentation\RecoveryGroup/default.latte */
final class Template_2d2e90b09e extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\web\\app\\Presentation\\RecoveryGroup/default.latte';

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


	/** {block content} on line 3 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div hx-target="this" hx-swap="outerHTML">
';
		$this->createTemplate('../header.latte', $this->params, 'include')->renderToContentType('html') /* line 5 */;
		echo '  <!--Main layout-->
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
              <div class="col-12">
                <div class="bg-image hover-overlay shadow-1-strong rounded"  data-mdb-ripple-init data-mdb-ripple-color="light">
                  <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 82 */;
		echo '/uploads/img/vizitka.jpg" class="img-fluid" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
              </div>

              <div class="col-md-8 mb-4">
               
              </div>
            </div>
			
          </section>
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
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 112 */;
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
              <a role="button" class="btn btn-primary" href="https://mdbootstrap.com/docs/standard/" data-mdb-ripple-init
                target="_blank">Download for free<i class="fas fa-download ms-2"></i></a>
            </section>
            <!--Section: Ad-->
            <!--Section: Video-->
            <section class="text-center">
              <h5 class="mb-4">Pozvánka na skupinky</h5>

              <div class="embed-responsive embed-responsive-16by9 shadow-4-strong">
                <iframe class="embed-responsive-item rounded" src="https://www.youtube.com/embed/NFkklaJDQnU"
                  allowfullscreen></iframe>
              </div>
            </section>
            <!--Section: Video-->

          </section>
          <!--Section: Sidebar-->
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->


      <!-- Pagination -->
      <nav class="my-4" aria-label="...">
        <ul class="pagination pagination-circle justify-content-center">
          <li class="page-item">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item active" aria-current="page">
            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
          </li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </div>
  </main>
  <!--Main layout-->

';
		$this->createTemplate('../footer.latte', $this->params, 'include')->renderToContentType('html') /* line 168 */;
		echo '
</div>

';
	}
}
