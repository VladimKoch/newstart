<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\web\app\Presentation\Sign/login.latte */
final class Template_8892da74c7 extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\web\\app\\Presentation\\Sign/login.latte';

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
			foreach (array_intersect_key(['error' => '23'], $this->params) as $ʟ_v => $ʟ_l) {
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

		$this->createTemplate('../header.latte', $this->params, 'include')->renderToContentType('html') /* line 2 */;
		echo '<section>
  <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <h1 class="my-5 display-3 fw-bold ls-tight">
            Pro Zdraví <br />
            <span class="text-primary">a Naději</span>
          </h1>
          <p style="color: hsl(217, 10%, 50.8%)">
            Lorem ipsum dolor sit amet consectetur adipisicing elit...
          </p>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card">
            <div class="card-body py-5 px-md-5 shadow">
              ';
		$form = $this->global->formsStack[] = $this->global->uiControl['loginForm'] /* line 20 */;
		Nette\Bridges\FormsLatte\Runtime::initializeForm($form);
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form, []) /* line 20 */;
		echo "\n";
		if ($form->errors) /* line 21 */ {
			echo '                      <ul class="errors" style="color:red;">
';
			foreach ($form->errors as $error) /* line 23 */ {
				echo '                              <p>';
				echo LR\Filters::escapeHtmlText($error) /* line 24 */;
				echo '</p>
';

			}

			echo '                      </ul>
';
		}
		echo '                <div class="form-outline mb-4" data-mdb-input-init>
                  ';
		echo ($ʟ_label = Nette\Bridges\FormsLatte\Runtime::item('email', $this->global)->getLabel()) /* line 29 */;
		echo '
                  ';
		echo Nette\Bridges\FormsLatte\Runtime::item('email', $this->global)->getControl() /* line 30 */;
		echo '
                </div>

                <div class="form-outline mb-4" data-mdb-input-init>
                  ';
		echo ($ʟ_label = Nette\Bridges\FormsLatte\Runtime::item('password', $this->global)->getLabel()) /* line 34 */;
		echo '
                  ';
		echo Nette\Bridges\FormsLatte\Runtime::item('password', $this->global)->getControl() /* line 35 */;
		echo '
                </div>

           

                ';
		echo Nette\Bridges\FormsLatte\Runtime::item('send', $this->global)->getControl() /* line 40 */;
		echo '

                <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Sign:sign')) /* line 42 */;
		echo '">Nemáte účet? Založte si!</a>

              ';
		echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack)) /* line 44 */;

		echo '

              <div class="text-center mt-4">
                <p>or sign up with:</p>
                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-facebook-f"></i>
                </button>
                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-google"></i>
                </button>
                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-twitter"></i>
                </button>
                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-github"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

';
		$this->createTemplate('../footer.latte', $this->params, 'include')->renderToContentType('html') /* line 69 */;
		echo "\n";
	}
}
