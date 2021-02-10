<!DOCTYPE html>
<html <?php language_attributes(); ?>>

  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" >
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
  <header class="site-header">
			<div class="site-header__logo">
				<a href="<?php echo site_url() ?>" style="background-image: url(<?php echo get_theme_file_uri('/images/logo_l.svg'); ?>);" alt="logo"></a></div>
			</div>

			<nav class="site-header__menu-wrapper">
				<ul class="site-header__menu">
					<li>
						<a href="<?php echo site_url('/notice') ?>">
							<i class="i-notice" style="background-image: url(<?php echo get_theme_file_uri('images/icons/iconMegaphone.svg'); ?>);"></i>
							<div class="letter">공</div>
							<div class="letter">지</div>
							<div class="letter">사</div>
							<div class="letter">항</div>
						</a>
					</li>
					<li>
						<a href="<?php echo site_url('/bachelor') ?>">
							<i class="i-bachelor-board" style="background-image: url(<?php echo get_theme_file_uri('images/icons/iconChat2.svg'); ?>);"></i>
							<div class="letter">학</div>
							<div class="letter">과</div>
							<div class="letter">게</div>
							<div class="letter">시</div>
							<div class="letter">판</div>
						</a>
					</li>
					<li>
						<a href="<?php echo site_url('/master') ?>">
							<i class="i-master-board" style="background-image: url(<?php echo get_theme_file_uri('images/icons/iconChat.svg'); ?>);"></i>
							<div class="letter">학</div>
							<div class="letter">부</div>
							<div class="letter">게</div>
							<div class="letter">시</div>
							<div class="letter">판</div>
						</a>
					</li>
					<li>
						<a href="<?php echo site_url('/rent') ?>">
							<i class="i-camera" style="background-image: url(<?php echo get_theme_file_uri('images/icons/iconCamera.svg'); ?>);"></i>
							<div class="letter">장</div>
							<div class="letter">비</div>
							<div class="letter">대</div>
							<div class="letter">여</div>
						</a>
					</li>
					<li>
						<a href="<?php echo site_url('/rent-studio') ?>">
							<i class="i-location" style="background-image: url(<?php echo get_theme_file_uri('images/icons/iconAddress.svg'); ?>);"></i>
							<div class="letter">강</div>
							<div class="letter">의</div>
							<div class="letter">실</div>
							<div class="letter">대</div>
							<div class="letter">여</div>
						</a>
					</li>
				</ul>
				<ul class="site-header__social-links">
					<li>
						<a href="https://www.facebook.com/skkuftmsc/" target="_black">
							<i class="i-facebook" style="background-image: url(<?php echo get_theme_file_uri('images/icons/iconFB.svg'); ?>);"></i>
							<div class="letter">페</div>
							<div class="letter">이</div>
							<div class="letter">스</div>
							<div class="letter">북</div>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/skku_ftm/?hl=ko" target="_black">
							<i class="i-instagram" style="background-image: url(<?php echo get_theme_file_uri('images/icons/iconIG.svg'); ?>);"></i>
							<div class="letter">인</div>
							<div class="letter">스</div>
							<div class="letter">타</div>
							<div class="letter">그</div>
							<div class="letter">램</div>
						</a>
					</li>
					<li>
						<a href="http://friedscreen.com" target="_black"> 
							<i class="i-fried-screen" style="background-image: url(<?php echo get_theme_file_uri('images/icons/iconFS.svg'); ?>);"></i>
							<div class="letter">프</div>
							<div class="letter">라</div>
							<div class="letter">이</div>
							<div class="letter">드</div>
							<div class="letter">스</div>
							<div class="letter">크</div>
							<div class="letter">린</div>
						</a>
					</li>
				</ul>
				<ul class="site-header__member">
				<?php echo do_shortcode('[cosmosfarm_members_account_links]')?>
					<!-- <li><a href="<?php echo site_url('/register') ?>">회원가입</a></li> -->
					<!-- <li><a href="<?php echo site_url('/login') ?>">로그인</a></li> -->
				</ul>
			</nav>

			<button class="burger">
				<span class="burger__line"></span>
				<span class="burger__line"></span>
				<span class="burger__line"></span>
				<span class="burger__line"></span>
			</button>
		</header>

		<div class="header--line"></div>
		<div class="header--bg"></div>
