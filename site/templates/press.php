<?php snippet('header') ?>

<section class="press">
	<div class="page-title">
		<svg class="dark-svg" xmlns="http://www.w3.org/2000/svg" width="43.848" height="34" viewBox="0 0 43.848 34"><path d="M42.633 0H7.975C7.305 0 6.76.545 6.76 1.215v2.208H2.632v.024C1.252 3.565.158 4.652.028 6.027H0v23.356c0 2.463 1.943 4.463 4.373 4.592V34h34.86c2.46 0 4.46-1.942 4.59-4.372h.024V1.215c0-.67-.544-1.215-1.214-1.215zM2.43 29.384V6.297c0-.245.2-.444.445-.444s.445.2.445.444v22.177c0 .67.544 1.215 1.214 1.215s1.215-.546 1.215-1.216V6.297c0-.152-.023-.3-.046-.444h.486c.095.006.245.03.366.14.135.12.204.322.204.602V29.63h.018c-.122 1.09-1.04 1.942-2.162 1.942-1.206 0-2.186-.982-2.186-2.188zm38.99 0c0 1.206-.982 2.188-2.188 2.188H8.655c.355-.654.576-1.392.576-2.188v-.242h-.04V3.755c.02-.724.602-1.306 1.323-1.326h29.592c.684.02 1.24.542 1.313 1.212v25.742zM22.713 8.98h-8.987c-.67 0-1.215.544-1.215 1.214v17.612c0 .67.545 1.215 1.216 1.215h8.987c.67 0 1.215-.544 1.215-1.214V10.193c0-.67-.545-1.214-1.215-1.214zM21.5 11.407V26.59h-6.56V11.41h6.56zM26.357 8.98H38.26v2.43H26.357zM26.357 16.312H38.26v2.43H26.357zM26.357 12.744h5.223v2.43h-5.223zM26.357 20.032h5.223v2.43h-5.223zM33.038 12.744h5.223v2.43H33.04zM12.51 5.214h25.75v2.43H12.51z"/></svg>
		<hr class="dark-hr">
		<h5>Featured Press</h5>
	</div>
	<article>
		<?php
			$articles = $page->children()->visible()->flip()->paginate(5);
			foreach($articles as $article):

			$pressImage = $article->images()->find('01.jpg');
		?>

		<div class="press-items">
			<?php if(isset($pressImage)) { ?>
			<img src="<?php echo $pressImage->url() ?>">
			<?php } ?>
			<div class="press-info">
				<h3><?php echo $article->title(); ?></h3>
				<hr class="white-hr">
				<p><?php echo excerpt($article->text(), 150); ?><a target="_new" href="<?php echo $article->link(); ?>"> Read More</a></p>
			</div>
		</div>

		<?php endforeach ?>

		<?php if($articles->pagination()->hasPages()): ?>
			
			<nav class="pagination">

				<?php if($articles->pagination()->hasPrevPage()): ?>
					<a class="articles-new" href="<?php echo $articles->pagination()->prevPageURL() ?>"><svg xmlns="http://www.w3.org/2000/svg" width="17.431" height="16.24" viewBox="0 0 17.431 16.24"><path d="M17.43 8.12c0-.508-.45-.924-1-.924H3.626c-.55 0-.733-.362-.407-.806L6.8 1.52C7.13 1.08 7.06.47 6.65.17c-.41-.302-1.01-.186-1.337.258L.243 7.314c-.325.443-.325 1.168 0 1.61l5.07 6.89c.326.444.928.56 1.337.26.41-.303.478-.91.15-1.355L3.22 9.85c-.326-.444-.142-.806.407-.806H16.43c.55 0 1-.416 1-.924z"/></svg></a>
				<?php endif ?>
				<?php if($articles->pagination()->hasNextPage()): ?>
					<a class="articles-old" href="<?php echo $articles->pagination()->nextPageURL() ?>"><svg xmlns="http://www.w3.org/2000/svg" width="17.431" height="16.24" viewBox="0 0 17.431 16.24"><path d="M17.43 8.12c0-.508-.45-.924-1-.924H3.626c-.55 0-.733-.362-.407-.806L6.8 1.52C7.13 1.08 7.06.47 6.65.17c-.41-.302-1.01-.186-1.337.258L.243 7.314c-.325.443-.325 1.168 0 1.61l5.07 6.89c.326.444.928.56 1.337.26.41-.303.478-.91.15-1.355L3.22 9.85c-.326-.444-.142-.806.407-.806H16.43c.55 0 1-.416 1-.924z"/></svg></a>
				<?php endif ?>
			</nav>

		<?php endif ?>

	</article>
</section>

<?php snippet('footer') ?>