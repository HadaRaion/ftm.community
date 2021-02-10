<?php get_header(); ?>
<main>
	<div class="board home">
		<div class="home__notice">
			<h2 class="home__title">
				<a href="<?php echo site_url('/notice') ?>">test공지사항</a>
			</h2>
			<div class="home__contents">
				<?php echo do_shortcode('[kboard_latest id="1" url="http://ftm-community.local/notice/" rpp="4"]'); ?>
			</div>
		</div>
		<div class="home__notice">
			
			<h2 class="home__title">
				<a href="<?php echo site_url('/bachelor') ?>">학과게시판</a>
			</h2>
			<div class="home__contents">
			<?php echo do_shortcode('[kboard_latest id="2" url="http://ftm-community.local/bachelor/" rpp="4"]'); ?>
			</div>
		</div>
		<div class="home__notice">
			<h2 class="home__title">
				<a href="<?php echo site_url('/master') ?>">학부게시판</a>
			</h2>
			<div class="home__contents">
			<?php echo do_shortcode('[kboard_latest id="3" url="http://ftm-community.local/master/" rpp="4"]'); ?>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>