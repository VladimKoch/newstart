<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\web\app\Presentation\header.latte */
final class Template_f91c91799f extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\web\\app\\Presentation\\header.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		echo '<!-- zkouška sidebaru -->

<!-- konec zkoušky sidebaru -->

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow text-dark py-3 fixed-top">
		<div class="container-fluid">
		<div class="collapse navbar-collapse" id="navmenu">
			<ul class="navbar-nav ms-auto">
';
		if (!$user->isLoggedIn()) /* line 169 */ {
			echo '			<a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:default')) /* line 170 */;
			echo '" class="navbar-brand">Home <i class="fa-solid fa-house-chimney"></i></a>
			<li class="nav-item me-3 me-lg-0">
				<a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('RecoveryGroup:default')) /* line 172 */;
			echo '" class="nav-link">Skupinka Obnovy <i class="fa-solid fa-hammer"></i></a>
			</li>
			<li class="nav-item me-3 me-lg-0">
				<a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('RecoveryGroup:default')) /* line 175 */;
			echo '" class="nav-link">New Start <i class="fa-solid fa-cart-plus"></i></a>
			</li>
			<li class="nav-item">
				<a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Sign:login')) /* line 178 */;
			echo '" class="nav-link">Login <i class="fa-solid fa-signature"></i></a></li>
';
		} else /* line 179 */ {
			echo '			<a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:default')) /* line 180 */;
			echo '" class="navbar-brand">Home <i class="fa-solid fa-house-chimney"></i></a>
				<li class="nav-item me-3 me-lg-0">
				<a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('RecoveryGroup:default')) /* line 182 */;
			echo '" class="nav-link">Skupinka Obnovy <i class="fa-solid fa-hammer"></i></a>
			</li>
			<li class="nav-item me-3 me-lg-0">
				<a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('RecoveryGroup:default')) /* line 185 */;
			echo '" class="nav-link">New Start <i class="fa-solid fa-cart-plus"></i></a>
			</li>
			<li class="nav-item me-3 me-lg-0">
				<a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Tomaj:default')) /* line 188 */;
			echo '" class="nav-link">Users <i class="fa-solid fa-users"></i></a>
			</li>
			<li class="nav-item me-3 me-lg-0">
				<a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Table:default')) /* line 191 */;
			echo '" class="nav-link">Tabulka <i class="fa-solid fa-table-list"></i></a>
			</li>
			<li class="nav-item me-3 me-lg-0">
				<a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Api:default')) /* line 194 */;
			echo '" class="nav-link">Api <i class="fa-solid fa-tape"></i></a>
			</li>
			<li class="nav-item me-3 me-lg-0">
				<a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Calculator:default')) /* line 197 */;
			echo '" class="nav-link">Kalkulačka <i class="fa-solid fa-calculator"></i></a>
			</li>
			<li>
				<a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('ImgApi:default')) /* line 200 */;
			echo '" class="nav-link">Img <i class="fa-solid fa-image"></i></a>
			</li>
			<li>
				<a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Mailer:default')) /* line 203 */;
			echo '" class="nav-link">Mail <i class="fa-solid fa-envelope"></i></a>
			</li>

';
			if ($user->getIdentity()->getRoles()[0] === 'admin') /* line 206 */ {
				echo '				<li class="nav-item me-3 me-lg-0">
					<a href="';
				echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Admin:default')) /* line 208 */;
				echo '" class="nav-link">Admin <i class="fa-solid fa-user-tie"></i></a>
				</li>
';
			}
			echo '			<li class="nav-item me-3 me-lg-0">
				<a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Sign:out')) /* line 212 */;
			echo '" class="nav-link">Odhlásit se <i class="fa-solid fa-right-from-bracket"></i></a>
			</li>
';
		}
		echo '			</ul>
			<ul class="navbar-nav d-flex flex-row">
            <!-- Icons -->
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="https://www.youtube.com/@LIGHTCzech" rel="nofollow"
                target="_blank">
                <i class="fab fa-youtube"></i>
              </a>
            </li>
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="https://www.facebook.com/mdbootstrap" rel="nofollow" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="https://twitter.com/MDBootstrap" rel="nofollow" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="https://github.com/mdbootstrap/mdb-ui-kit" rel="nofollow" target="_blank">
                <i class="fab fa-github"></i>
              </a>
            </li>
            <li class="nav-item me-3 me-lg-0" style="align-item:center">
				<div id="current-time" class="nav-link"></div>
            </li>
            <li class="nav-item me-3 me-lg-0">
';
		if ($user->isLoggedIn()) /* line 243 */ {
			echo '				<span class="nav-link"style="color:#3399FF">';
			echo LR\Filters::escapeHtmlText($user->getIdentity()->email) /* line 243 */;
			echo '</span>';
		}
		echo '
		
            </li>
          </ul>
			</div>
		</div>
	</nav>
';
	}
}
