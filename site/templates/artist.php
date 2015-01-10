<?php snippet('header') ?>

<section class="the-artist">
	<article>
		<div class="big-portrait"><img src="<?php echo $page->images()->find('artist.jpg')->url(); ?>" alt=""></div>
		<div class="artist-info">
			<h2><?php echo $page->title(); ?></h2>
			<a class="website" href="http://<?php echo $page->website(); ?>"><?php echo $page->website(); ?></a>
			<hr>
			<?php echo kirbytext($page->text()); ?>
			<ul>
				<?php if($page->facebook() != '') { ?>
				<li>
					<a target="_new" href="<?php echo $page->facebook() ?>">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 54 53.999"><g fill="#010101"><path d="M27 2c13.785 0 25 11.215 25 25 0 13.784-11.215 25-25 25S2 40.783 2 27C2 13.215 13.215 2 27 2m0-2C12.088 0 0 12.088 0 27c0 14.91 12.088 27 27 27s27-12.09 27-27C54 12.088 41.912 0 27 0z"/><path d="M22.94 42.966V28.4h-4.9v-5.677h4.9v-4.187c0-4.86 2.968-7.505 7.304-7.505 2.074 0 3.86.155 4.38.224v5.08h-3.007c-2.355 0-2.81 1.12-2.81 2.766v3.623h5.618l-.73 5.677h-4.89v14.563h-5.864v.003z"/></g></svg>
					</a>
				</li>
				<?php } ?>
				<?php if($page->instagram() != '') { ?>
				<li>
					<a target="_new" href="<?php echo $page->instagram() ?>">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 54 54"><g fill="#010101"><path d="M27 2c13.785 0 25 11.215 25 25S40.785 52 27 52 2 40.785 2 27 13.215 2 27 2m0-2C12.088 0 0 12.088 0 27c0 14.91 12.088 27 27 27s27-12.09 27-27C54 12.088 41.912 0 27 0zM37.533 24.89h-2.385c.174.676.275 1.382.275 2.11 0 4.654-3.77 8.426-8.425 8.426s-8.425-3.77-8.425-8.426c0-.73.103-1.435.276-2.11h-2.386v11.59c0 .58.473 1.052 1.055 1.052h18.958c.582 0 1.054-.472 1.054-1.052V24.89zm0-7.37c0-.582-.473-1.053-1.055-1.053H33.32c-.584 0-1.053.47-1.053 1.053v3.16c0 .58.47 1.053 1.053 1.053h3.158c.582 0 1.055-.473 1.055-1.052v-3.16zM27 21.732c-2.91 0-5.266 2.358-5.266 5.268 0 2.908 2.356 5.266 5.266 5.266 2.908 0 5.268-2.356 5.268-5.266s-2.36-5.268-5.268-5.268m10.533 18.96H16.466c-1.743 0-3.16-1.415-3.16-3.16V16.466c0-1.745 1.417-3.16 3.16-3.16h21.067c1.744 0 3.158 1.415 3.158 3.16V37.53c0 1.747-1.413 3.16-3.157 3.16"/></g></svg>
					</a>
				</li>
				<?php } ?>
				<?php if($page->twitterurl() != '') { ?>
				<li>
					<a target="_new" href="<?php echo $page->twitterurl() ?>">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 54 54"><path fill="#010101" d="M27 2c13.785 0 25 11.215 25 25S40.785 52 27 52C13.213 52 2 40.785 2 27S13.214 2 27 2m0-2C12.087 0 0 12.088 0 27c0 14.91 12.088 27 27 27s27-12.09 27-27C54 12.088 41.912 0 27 0zM38.48 21.11c.01.256.016.512.016.77 0 7.824-5.957 16.85-16.852 16.85-3.345 0-6.457-.978-9.08-2.66.463.056.935.083 1.414.083 2.775 0 5.328-.946 7.354-2.534-2.592-.05-4.777-1.762-5.532-4.114.363.068.733.106 1.115.106.54 0 1.063-.073 1.562-.21-2.71-.544-4.752-2.937-4.752-5.808 0-.022 0-.05.002-.073.797.445 1.71.71 2.68.74-1.588-1.06-2.633-2.874-2.633-4.93 0-1.085.29-2.103.8-2.978 2.922 3.584 7.288 5.94 12.21 6.188-.102-.435-.155-.888-.155-1.35 0-3.272 2.648-5.925 5.922-5.925 1.703 0 3.242.72 4.324 1.87 1.35-.265 2.615-.757 3.764-1.437-.445 1.384-1.385 2.546-2.605 3.277 1.195-.145 2.338-.46 3.4-.934-.794 1.193-1.798 2.236-2.955 3.07z"/></svg>
					</a>
				</li>
				<?php } ?>
				<?php if($page->spotify() != '') { ?>
				<li>
					<a target="_new" href="<?php echo $page->spotify() ?>">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 54 54"><path fill="#010101" d="M27 2c13.785 0 25 11.215 25 25S40.785 52 27 52 2 40.785 2 27 13.215 2 27 2m0-2C12.088 0 0 12.088 0 27c0 14.91 12.088 27 27 27s27-12.09 27-27C54 12.088 41.912 0 27 0z"/><g fill-rule="evenodd" clip-rule="evenodd" fill="#010101"><path d="M44.354 22.378c-.007 1.717-1.807 2.768-3.314 1.915-1.022-.58-2.068-1.103-3.158-1.54-2.167-.87-4.41-1.453-6.705-1.857-1.596-.282-3.205-.468-4.823-.565-1.683-.1-3.366-.112-5.05-.025-1.93.1-3.846.312-5.735.72-.698.15-1.387.34-2.077.525-.422.112-.84.126-1.26.003-.922-.27-1.558-1.096-1.585-2.062-.027-.94.553-1.812 1.464-2.112.666-.22 1.35-.393 2.035-.55 1.695-.393 3.414-.635 5.146-.793 1.84-.168 3.682-.222 5.526-.17 4.542.13 8.997.795 13.31 2.284 1.757.606 3.448 1.36 5.057 2.297.573.334.958.806 1.104 1.458.034.154.044.315.064.473zM22.893 27.673c-2.708.01-5.48.347-8.19 1.15-.442.13-.885.14-1.318-.035-.703-.285-1.16-.99-1.137-1.737.026-.778.5-1.456 1.25-1.685.765-.233 1.54-.436 2.32-.61 1.92-.425 3.865-.65 5.83-.726 4.23-.16 8.36.386 12.392 1.677 2.04.654 3.988 1.51 5.83 2.604.09.055.182.11.272.167.96.587 1.075 1.768.618 2.52-.524.862-1.613 1.13-2.52.62-.51-.29-1.015-.59-1.537-.855-2.393-1.22-4.93-2.01-7.563-2.51-2.027-.382-4.074-.57-6.247-.58zM23.315 31.69c3.117.032 6.167.453 9.127 1.452 1.633.55 3.19 1.263 4.67 2.145.13.076.26.15.38.242.596.452.75 1.273.367 1.92-.375.628-1.166.88-1.843.58-.135-.06-.263-.14-.39-.215-2.51-1.487-5.218-2.41-8.097-2.85-1.767-.27-3.54-.364-5.324-.294-2.308.092-4.584.412-6.838.912-.228.05-.462.096-.694.1-.697.006-1.287-.49-1.408-1.16-.13-.71.222-1.376.874-1.638.137-.055.284-.09.43-.123 1.843-.413 3.704-.726 5.586-.885 1.05-.092 2.107-.126 3.16-.186z"/></g></svg>
					</a>
				</li>
				<?php } ?>
				<!-- <li>
					<a href="">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 54 54"><path d="M27 2c13.785 0 25 11.215 25 25S40.785 52 27 52 2 40.785 2 27 13.215 2 27 2m0-2C12.088 0 0 12.088 0 27c0 14.91 12.088 27 27 27s27-12.09 27-27C54 12.088 41.912 0 27 0zm10.533 24.89h-2.385c.174.676.275 1.382.275 2.11 0 4.654-3.77 8.426-8.425 8.426s-8.425-3.77-8.425-8.426c0-.73.103-1.435.276-2.11h-2.387v11.59c0 .58.473 1.052 1.055 1.052h18.958c.582 0 1.054-.472 1.054-1.052V24.89zm0-7.37c0-.582-.473-1.053-1.055-1.053H33.32c-.584 0-1.053.47-1.053 1.053v3.16c0 .58.47 1.053 1.053 1.053h3.158c.582 0 1.055-.473 1.055-1.052v-3.16zM27 21.732c-2.91 0-5.266 2.358-5.266 5.268 0 2.908 2.356 5.266 5.266 5.266 2.908 0 5.268-2.356 5.268-5.266s-2.36-5.268-5.268-5.268m10.533 18.96H16.466c-1.743 0-3.16-1.415-3.16-3.16V16.466c0-1.745 1.417-3.16 3.16-3.16h21.067c1.744 0 3.158 1.415 3.158 3.16V37.53c0 1.747-1.412 3.16-3.156 3.16" fill="#010101"/></svg>
					</a>
				</li> -->
			</ul>
		</div>
	</article>
</section>

<section class="featured-artist-items">
	<article>
		<div class="featured-video">
			<div class="page-title">
				<svg xmlns="http://www.w3.org/2000/svg" width="42.693" height="41" viewBox="0 0 42.693 41"><path d="M10.4 17.338c3.148 0 5.9-1.69 7.42-4.208 1.52 2.516 4.27 4.208 7.418 4.208 4.78 0 8.67-3.89 8.67-8.67S30.017 0 25.237 0c-3.146 0-5.9 1.69-7.418 4.208C16.3 1.69 13.55 0 10.4 0 5.62 0 1.733 3.89 1.733 8.67s3.89 8.668 8.67 8.668zM25.24 2.723c3.28 0 5.947 2.667 5.947 5.947 0 3.28-2.668 5.947-5.947 5.947s-5.946-2.668-5.946-5.947c0-3.28 2.667-5.947 5.946-5.947zm-14.837 0c3.28 0 5.947 2.667 5.947 5.947 0 3.28-2.668 5.947-5.946 5.947S4.455 11.95 4.455 8.67c0-3.28 2.67-5.947 5.947-5.947zM41.19 18.435l-4.05 3.48c-.825.708-1.5.398-1.5-.69v-1.757c0-1.09-.892-1.98-1.98-1.98H1.98c-1.09 0-1.98.89-1.98 1.98V39.02C0 40.11.89 41 1.98 41h31.68c1.09 0 1.98-.89 1.98-1.98v-1.757c0-1.09.675-1.4 1.5-.69l4.05 3.48c.827.708 1.503.398 1.503-.69v-20.24c0-1.088-.675-1.398-1.502-.688zm-1.22 7.084v7.45c0 1.088-.675 1.398-1.5.69l-3.64-3.126c-.826-.71-.826-1.87 0-2.58l3.64-3.125c.825-.71 1.5-.4 1.5.69zM4.703 38.276c-1.09 0-1.98-.89-1.98-1.98V22.19c0-1.09.89-1.98 1.98-1.98h26.235c1.09 0 1.98.89 1.98 1.98v14.107c0 1.09-.892 1.98-1.98 1.98H4.702z"/></svg>
				<hr class="blue-hr">
				<h5>Featured Videos</h5>
			</div>
			<div id="carousel" class="carousel slide" data-ride="carousel">
				
				<?php 
					$video1 = $page->video1();
					$video2 = $page->video2();
					$video3 = $page->video3();
					$video4 = $page->video4();
					$video5 = $page->video5();
				?>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">
			    <?php if($video1 === '') {} else { ?>
			    <div class="item wrapper active">
			    	<iframe  src="//www.youtube.com/embed/<?php echo $video1; ?>" frameborder="0" allowfullscreen></iframe>
			    </div>
			    <?php } ?>
			    <?php if($video2 == '') {} else { ?>
			    <div class="item wrapper">
			    	<iframe  src="//www.youtube.com/embed/<?php echo $video2; ?>" frameborder="0" allowfullscreen></iframe>
			    </div>
			    <?php } ?>
			    <?php if($video3 == '') {} else { ?>
			    <div class="item wrapper">
			    	<iframe  src="//www.youtube.com/embed/<?php echo $video3; ?>" frameborder="0" allowfullscreen></iframe>
			    </div>
			    <?php } ?>
			    <?php if($video4 == '') {} else { ?>
			    <div class="item wrapper">
			    	<iframe  src="//www.youtube.com/embed/<?php echo $video4; ?>" frameborder="0" allowfullscreen></iframe>
			    </div>
			    <?php } ?>
			    <?php if($video5 == '') {} else { ?>
			    <div class="item wrapper">
			    	<iframe  src="//www.youtube.com/embed/<?php echo $video5; ?>" frameborder="0" allowfullscreen></iframe>
			    </div>
			    <?php } ?>
			  </div>
			
			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
			  	<svg xmlns="http://www.w3.org/2000/svg" width="17.431" height="16.24" viewBox="0 0 17.431 16.24"><path d="M17.43 8.12c0-.508-.45-.924-1-.924H3.626c-.55 0-.733-.362-.407-.806L6.8 1.52C7.13 1.08 7.06.47 6.65.17c-.41-.302-1.01-.186-1.337.258L.243 7.314c-.325.443-.325 1.168 0 1.61l5.07 6.89c.326.444.928.56 1.337.26.41-.303.478-.91.15-1.355L3.22 9.85c-.326-.444-.142-.806.407-.806H16.43c.55 0 1-.416 1-.924z"/></svg>
			  </a>
			  <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
			  	<svg xmlns="http://www.w3.org/2000/svg" width="17.431" height="16.24" viewBox="0 0 17.431 16.24"><path d="M17.43 8.12c0-.508-.45-.924-1-.924H3.626c-.55 0-.733-.362-.407-.806L6.8 1.52C7.13 1.08 7.06.47 6.65.17c-.41-.302-1.01-.186-1.337.258L.243 7.314c-.325.443-.325 1.168 0 1.61l5.07 6.89c.326.444.928.56 1.337.26.41-.303.478-.91.15-1.355L3.22 9.85c-.326-.444-.142-.806.407-.806H16.43c.55 0 1-.416 1-.924z"/></svg>
			  </a>

			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			  <?php if(isset($video1)) { ?>
			    <li data-target="#carousel" data-slide-to="0" class="active"></li>
			  <?php } ?>
			  <?php if($video2 == '') {} else { ?>
			    <li data-target="#carousel" data-slide-to="1"></li>
				<?php } ?>
			  <?php if($video3 == '') {} else { ?>
			    <li data-target="#carousel" data-slide-to="2"></li>
				<?php } ?>
			  <?php if($video4 == '') {} else { ?>
			    <li data-target="#carousel" data-slide-to="3"></li>
				<?php } ?>
			  <?php if($video5 == '') {} else { ?>
			    <li data-target="#carousel" data-slide-to="4"></li>
			  <?php } ?>
			  </ol>
			
			</div>
		</div>
		<div class="twitter-feed-wrap">
			<div class="page-title">
				<svg xmlns="http://www.w3.org/2000/svg" width="43.615" height="36" viewBox="0 0 43.615 36"><path d="M43.267 4.438c-.35-.416-.892-.604-1.41-.502.224-.447.413-.91.567-1.39.188-.587-.007-1.23-.487-1.613-.483-.384-1.15-.43-1.68-.116-1.28.758-2.65 1.32-4.084 1.678C34.38.9 32.04 0 29.625 0c-5.417 0-9.823 4.406-9.823 9.822 0 .086 0 .17.003.26-5.59-.737-10.744-3.596-14.343-8.01-.308-.378-.797-.58-1.264-.542-.486.037-.92.31-1.167.73-.87 1.49-1.328 3.2-1.328 4.94 0 1.577.375 3.1 1.065 4.46-.125.03-.247.076-.362.14-.447.245-.736.703-.767 1.212-.004.062-.005.13-.005.19 0 2.876 1.26 5.52 3.296 7.337-.348.392-.463.938-.304 1.437.873 2.725 2.86 4.865 5.37 5.98-2.02.952-4.227 1.445-6.522 1.445-.613 0-1.224-.036-1.816-.104-.687-.088-1.337.32-1.57.972-.233.65.013 1.376.595 1.748C4.745 34.624 9.443 36 14.268 36c9.48 0 15.418-4.478 18.73-8.235 4.12-4.673 6.48-10.86 6.48-16.977 0-.12 0-.238-.002-.357 1.506-1.188 2.812-2.603 3.89-4.212.366-.55.326-1.276-.1-1.78zm-6.163 4.067c-.405.292-.636.768-.615 1.268.014.338.022.678.022 1.016 0 13.925-11.31 22.245-22.245 22.245-2.346 0-4.657-.37-6.86-1.085 2.66-.578 5.148-1.75 7.336-3.466.494-.387.69-1.043.49-1.637-.198-.596-.75-1-1.377-1.012-2.147-.04-4.1-1.074-5.344-2.72.568-.052 1.132-.153 1.686-.304.663-.18 1.115-.792 1.092-1.48-.023-.687-.517-1.27-1.19-1.403-2.445-.49-4.376-2.27-5.143-4.548.62.143 1.252.227 1.888.246h.048c.642 0 1.214-.413 1.412-1.028.203-.63-.037-1.318-.587-1.687-1.91-1.274-3.05-3.41-3.05-5.708 0-.48.05-.957.148-1.422 4.404 4.435 10.335 7.107 16.613 7.423.484.022.913-.173 1.21-.53s.413-.833.307-1.287c-.12-.51-.18-1.035-.18-1.563 0-3.78 3.077-6.856 6.858-6.856 1.89 0 3.715.79 5.006 2.166.35.373.868.54 1.368.44.184-.036.365-.075.546-.116-.575.366-.827 1.08-.605 1.73.225.66.894 1.073 1.578.99.01 0 .018 0 .026-.002-.143.112-.29.222-.44.33z"/></svg>
				<hr class="blue-hr">
				<h5>Twitter</h5>
			</div>
			<div class="artist-twitter-feed">
				
			</div>
		</div>
		<script class="source" type="text/javascript">
		    $('.artist-twitter-feed').twittie({
		        username: '<?php echo $page->twitter() ?>',
		        dateFormat: '%B. %d, %Y',
		        template: '{{tweet}} <div class="date">- {{date}}</div>',
		        count: 3
		    });
		</script>
	</article>
</section>

<section class="features-recent-releases">
	<article>
		<div class="featured-on">
			<div class="page-title">
				<svg xmlns="http://www.w3.org/2000/svg" width="33.558" height="53.179" viewBox="0 0 33.558 53.179"><path d="M33.184 1.598c.377-.65.46-1.017.29-1.308l-.22-.29h-.29c-.27 0-.57.17-1.03.58L6.524 23.4c-.53.476-.762 1.054-.635 1.583.126.53.594.94 1.283 1.125l7.42 1.984c.354.095.604.29.7.55.1.257.04.568-.16.874L.452 51.612c-.385.578-.56.953-.385 1.28l.188.286h.3c.217 0 .463-.104 1.015-.613l30.552-28.23c.72-.666.688-1.277.606-1.582-.083-.305-.366-.848-1.325-1.057l-7.494-1.638c-.36-.08-.62-.265-.734-.522-.114-.258-.075-.576.11-.895L33.184 1.6zm-5.917 23.14L13.393 37.555l5.78-8.7c.38-.57.477-1.22.265-1.78-.212-.56-.714-.982-1.378-1.16l-6.545-1.75c-.318-.086-.53-.232-.57-.392s.086-.387.332-.607L23.63 12.07l-4.32 7.438c-.344.593-.402 1.25-.16 1.8.242.55.766.95 1.437 1.096l6.428 1.404c.376.083.542.23.572.344.03.11-.038.324-.32.585z"/></svg>
				<hr class="blue-hr">
				<h5>Featured On</h5>
			</div>
			<ul class="featured-places">
				<?php 
					$featured1 = $page->images()->find('feature1.jpg');
					$featured2 = $page->images()->find('feature2.jpg');
					$featured3 = $page->images()->find('feature3.jpg');

					if(isset($featured1)) {
				?>
				<li>
					<a target="_new" href="<?php echo $page->featurelink1(); ?>"><img src="<?php echo $featured1->url(); ?>" alt=""></a></li><?php } if(isset($featured2)) { ?><li>
					<a target="_new" href="<?php echo $page->featurelink2(); ?>"><img src="<?php echo $featured2->url(); ?>" alt=""></a></li><?php } if(isset($featured3)) { ?><li>
					<a target="_new" href="<?php echo $page->featurelink3(); ?>"><img src="<?php echo $featured3->url(); ?>" alt=""></a></li><?php } ?>
			</ul>
		</div><?php $recent1 = $page->images()->find('recent1.jpg'); if(isset($recent1)) { ?><div class="recent-releases">
			<div class="page-title">
				<svg xmlns="http://www.w3.org/2000/svg" width="46.998" height="46.998" viewBox="0 0 46.998 46.998"><path d="M23.5 13.168c-5.698 0-10.333 4.634-10.333 10.33S17.802 33.83 23.5 33.83c5.696 0 10.33-4.634 10.33-10.33S29.196 13.167 23.5 13.167zm0 11.797c-.81 0-1.467-.656-1.467-1.466s.656-1.467 1.466-1.467 1.465.656 1.465 1.466-.656 1.465-1.466 1.465zM23.5 8.778c-1.117 0-2.23.125-3.31.373-6.72 1.546-11.413 7.445-11.413 14.35 0 8.116 6.604 14.72 14.722 14.72 8.116 0 14.72-6.604 14.72-14.72S31.615 8.777 23.5 8.777zm0 26.942c-6.74 0-12.223-5.482-12.223-12.22 0-5.732 3.896-10.63 9.473-11.91.896-.207 1.82-.312 2.75-.312 6.737 0 12.22 5.482 12.22 12.22S30.236 35.72 23.5 35.72zM23.5 4.39c-10.54 0-19.11 8.572-19.11 19.11S12.96 42.607 23.5 42.607c10.536 0 19.108-8.572 19.108-19.11S34.036 4.39 23.498 4.39zm0 35.718c-9.16 0-16.61-7.45-16.61-16.61S14.34 6.89 23.5 6.89c9.157 0 16.608 7.45 16.608 16.61s-7.45 16.608-16.61 16.608zM23.5 0C10.54 0 0 10.542 0 23.5s10.542 23.498 23.5 23.498 23.498-10.542 23.498-23.5S36.458 0 23.498 0zm0 44.498c-11.58 0-21-9.42-21-21S11.92 2.5 23.5 2.5s20.998 9.42 20.998 21-9.42 20.998-21 20.998z"/></svg>
				<hr class="blue-hr">
				<h5>Featured Releases</h5>
			</div>
			<ul class="recently-released">
				<?php 
					if(isset($recent1)) { ?>
				<li>
					<img src="<?php echo $recent1->url(); ?>" alt="">
					<?php }

					$itunes1 = $page->itunes1();
					$spotify1 = $page->spotify1();
					$amazon1 = $page->amazon1();
					if(isset($recent1)) { ?>
					<ul class="find-music">
						<?php if($itunes1 != '') { ?>
						<li>
							<a target="_new" href="<?php echo $itunes1; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="0 0 54 54"><path fill="#010101" d="M27 2c13.785 0 25 11.215 25 25S40.785 52 27 52 2 40.785 2 27 13.215 2 27 2m0-2C12.088 0 0 12.088 0 27c0 14.91 12.088 27 27 27s27-12.09 27-27C54 12.088 41.912 0 27 0z"/><path fill="#010101" d="M37.592 34.053c.19 2.503-1.69 4.782-4.2 5.096-2.505.31-4.696-1.467-4.886-3.97-.19-2.5 1.693-4.782 4.2-5.093.794-.098 1.554.012 2.23.287v-12.29L23.165 20.27v15.357h-.02c.003.043.015.083.015.127.188 2.504-1.69 4.78-4.196 5.092-2.512.31-4.695-1.465-4.887-3.966-.193-2.503 1.688-4.785 4.197-5.093.793-.1 1.55.012 2.23.29V14.373l17.08-2.916.015-.006v.003l.005-.002-.006.08v22.397h-.024c.006.046.014.083.016.126z"/></svg></a>
						</li><?php } 
							if($spotify1 != '') { ?><li>
							<a target="_new" href="<?php echo $spotify1; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="0 0 54 54"><path fill="#010101" d="M27 2c13.785 0 25 11.215 25 25S40.785 52 27 52 2 40.785 2 27 13.215 2 27 2m0-2C12.088 0 0 12.088 0 27c0 14.91 12.088 27 27 27s27-12.09 27-27C54 12.088 41.912 0 27 0z"/><g fill-rule="evenodd" clip-rule="evenodd" fill="#010101"><path d="M44.354 22.378c-.007 1.717-1.807 2.768-3.314 1.915-1.022-.58-2.068-1.103-3.158-1.54-2.167-.87-4.41-1.453-6.705-1.857-1.596-.282-3.205-.468-4.823-.565-1.683-.1-3.366-.112-5.05-.025-1.93.1-3.846.312-5.735.72-.698.15-1.387.34-2.077.525-.422.112-.84.126-1.26.003-.922-.27-1.558-1.096-1.585-2.062-.027-.94.553-1.812 1.464-2.112.666-.22 1.35-.393 2.035-.55 1.695-.393 3.414-.635 5.146-.793 1.84-.168 3.682-.222 5.526-.17 4.542.13 8.997.795 13.31 2.284 1.757.606 3.448 1.36 5.057 2.297.573.334.958.806 1.104 1.458.034.154.044.315.064.473zM22.893 27.673c-2.708.01-5.48.347-8.19 1.15-.442.13-.885.14-1.318-.035-.703-.285-1.16-.99-1.137-1.737.026-.778.5-1.456 1.25-1.685.765-.233 1.54-.436 2.32-.61 1.92-.425 3.865-.65 5.83-.726 4.23-.16 8.36.386 12.392 1.677 2.04.654 3.988 1.51 5.83 2.604.09.055.182.11.272.167.96.587 1.075 1.768.618 2.52-.524.862-1.613 1.13-2.52.62-.51-.29-1.015-.59-1.537-.855-2.393-1.22-4.93-2.01-7.563-2.51-2.027-.382-4.074-.57-6.247-.58zM23.315 31.69c3.117.032 6.167.453 9.127 1.452 1.633.55 3.19 1.263 4.67 2.145.13.076.26.15.38.242.596.452.75 1.273.367 1.92-.375.628-1.166.88-1.843.58-.135-.06-.263-.14-.39-.215-2.51-1.487-5.218-2.41-8.097-2.85-1.767-.27-3.54-.364-5.324-.294-2.308.092-4.584.412-6.838.912-.228.05-.462.096-.694.1-.697.006-1.287-.49-1.408-1.16-.13-.71.222-1.376.874-1.638.137-.055.284-.09.43-.123 1.843-.413 3.704-.726 5.586-.885 1.05-.092 2.107-.126 3.16-.186z"/></g></svg></a>
						</li><?php } 
							if($amazon1 != '') { ?><li>
							<a target="_new" href="<?php echo $amazon1; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="0 0 54 54"><path fill="#010101" d="M27 2c13.785 0 25 11.215 25 25S40.785 52 27 52 2 40.785 2 27 13.215 2 27 2m0-2C12.088 0 0 12.088 0 27c0 14.91 12.088 27 27 27s27-12.09 27-27C54 12.088 41.912 0 27 0z"/><g fill="#010101"><path d="M30.297 20.713c-.855.063-1.843.126-2.83.255-1.514.19-3.028.45-4.28 1.035-2.437.98-4.09 3.082-4.103 6.18-.015 3.89 2.48 5.873 5.636 5.885 1.055.004 1.91-.122 2.697-.316 1.253-.392 2.308-1.11 3.562-2.426.72.992.915 1.455 2.16 2.513.33.133.658.135.922-.063.792-.656 2.177-1.836 2.904-2.492.33-.266.265-.658.07-.99-.722-.925-1.44-1.72-1.434-3.496l.022-5.933c.01-2.506.214-4.81-1.62-6.53-1.507-1.392-3.874-1.927-5.716-1.934-.264 0-.525-.003-.79-.003-3.355.185-6.913 1.62-7.72 5.77-.133.525.263.725.525.794l3.68.475c.396-.066.595-.395.66-.725.337-1.447 1.522-2.167 2.84-2.295h.264c.787.004 1.642.338 2.1.996.522.795.454 1.85.45 2.77v.527zm-.015 3.823c-.006 1.517.054 2.703-.74 4.015-.462.922-1.254 1.512-2.11 1.707-.132 0-.328.066-.526.066-1.446-.006-2.3-1.13-2.293-2.778.008-2.108 1.263-3.093 2.842-3.548.857-.195 1.846-.256 2.832-.252l-.005.79z"/><path d="M42.33 40.083c1.612-1.354 2.3-3.82 2.34-5.11l.002-.216c0-.287-.07-.5-.14-.607-.32-.395-2.68-.764-4.717-.163-.572.18-1.075.426-1.54.747-.36.25-.288.57.068.537.394-.07.895-.103 1.467-.175 1.25-.1 2.717-.13 3.072.336.496.61-.584 3.256-1.055 4.4-.142.358.18.504.502.253zM9.504 34.837c4.594 4.207 10.66 6.737 17.45 6.764 4.22.017 9.082-1.146 12.844-3.388.504-.286 1.004-.606 1.47-.96.645-.463.075-1.184-.57-.9-.284.106-.607.25-.894.356-4.118 1.596-8.44 2.332-12.446 2.316C20.996 39 14.856 37.22 9.898 34.3c-.462-.25-.787.213-.394.537z"/></g></svg></a>
						</li><?php } ?>
					</ul>
				</li><?php } 

					$recent2 = $page->images()->find('recent2.jpg');
					if(isset($recent2)) { ?><li>
					<img src="<?php echo $recent2->url(); ?>" alt="">
				<?php } 

					$itunes2 = $page->itunes2();
					$spotify2 = $page->spotify2();
					$amazon2 = $page->amazon2();
					if(isset($recent2)) { ?>
					<ul class="find-music">
						<?php if($itunes2 != '') { ?>
						<li>
							<a target="_new" href="<?php echo $itunes2; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="0 0 54 54"><path fill="#010101" d="M27 2c13.785 0 25 11.215 25 25S40.785 52 27 52 2 40.785 2 27 13.215 2 27 2m0-2C12.088 0 0 12.088 0 27c0 14.91 12.088 27 27 27s27-12.09 27-27C54 12.088 41.912 0 27 0z"/><path fill="#010101" d="M37.592 34.053c.19 2.503-1.69 4.782-4.2 5.096-2.505.31-4.696-1.467-4.886-3.97-.19-2.5 1.693-4.782 4.2-5.093.794-.098 1.554.012 2.23.287v-12.29L23.165 20.27v15.357h-.02c.003.043.015.083.015.127.188 2.504-1.69 4.78-4.196 5.092-2.512.31-4.695-1.465-4.887-3.966-.193-2.503 1.688-4.785 4.197-5.093.793-.1 1.55.012 2.23.29V14.373l17.08-2.916.015-.006v.003l.005-.002-.006.08v22.397h-.024c.006.046.014.083.016.126z"/></svg></a>
						</li><?php } if($spotify2 != '') { ?><li>
							<a target="_new" href="<?php echo $spotify2; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="0 0 54 54"><path fill="#010101" d="M27 2c13.785 0 25 11.215 25 25S40.785 52 27 52 2 40.785 2 27 13.215 2 27 2m0-2C12.088 0 0 12.088 0 27c0 14.91 12.088 27 27 27s27-12.09 27-27C54 12.088 41.912 0 27 0z"/><g fill-rule="evenodd" clip-rule="evenodd" fill="#010101"><path d="M44.354 22.378c-.007 1.717-1.807 2.768-3.314 1.915-1.022-.58-2.068-1.103-3.158-1.54-2.167-.87-4.41-1.453-6.705-1.857-1.596-.282-3.205-.468-4.823-.565-1.683-.1-3.366-.112-5.05-.025-1.93.1-3.846.312-5.735.72-.698.15-1.387.34-2.077.525-.422.112-.84.126-1.26.003-.922-.27-1.558-1.096-1.585-2.062-.027-.94.553-1.812 1.464-2.112.666-.22 1.35-.393 2.035-.55 1.695-.393 3.414-.635 5.146-.793 1.84-.168 3.682-.222 5.526-.17 4.542.13 8.997.795 13.31 2.284 1.757.606 3.448 1.36 5.057 2.297.573.334.958.806 1.104 1.458.034.154.044.315.064.473zM22.893 27.673c-2.708.01-5.48.347-8.19 1.15-.442.13-.885.14-1.318-.035-.703-.285-1.16-.99-1.137-1.737.026-.778.5-1.456 1.25-1.685.765-.233 1.54-.436 2.32-.61 1.92-.425 3.865-.65 5.83-.726 4.23-.16 8.36.386 12.392 1.677 2.04.654 3.988 1.51 5.83 2.604.09.055.182.11.272.167.96.587 1.075 1.768.618 2.52-.524.862-1.613 1.13-2.52.62-.51-.29-1.015-.59-1.537-.855-2.393-1.22-4.93-2.01-7.563-2.51-2.027-.382-4.074-.57-6.247-.58zM23.315 31.69c3.117.032 6.167.453 9.127 1.452 1.633.55 3.19 1.263 4.67 2.145.13.076.26.15.38.242.596.452.75 1.273.367 1.92-.375.628-1.166.88-1.843.58-.135-.06-.263-.14-.39-.215-2.51-1.487-5.218-2.41-8.097-2.85-1.767-.27-3.54-.364-5.324-.294-2.308.092-4.584.412-6.838.912-.228.05-.462.096-.694.1-.697.006-1.287-.49-1.408-1.16-.13-.71.222-1.376.874-1.638.137-.055.284-.09.43-.123 1.843-.413 3.704-.726 5.586-.885 1.05-.092 2.107-.126 3.16-.186z"/></g></svg></a>
						</li><?php } if($amazon2 != '') { ?><li>
							<a target="_new" href="<?php echo $amazon2; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="0 0 54 54"><path fill="#010101" d="M27 2c13.785 0 25 11.215 25 25S40.785 52 27 52 2 40.785 2 27 13.215 2 27 2m0-2C12.088 0 0 12.088 0 27c0 14.91 12.088 27 27 27s27-12.09 27-27C54 12.088 41.912 0 27 0z"/><g fill="#010101"><path d="M30.297 20.713c-.855.063-1.843.126-2.83.255-1.514.19-3.028.45-4.28 1.035-2.437.98-4.09 3.082-4.103 6.18-.015 3.89 2.48 5.873 5.636 5.885 1.055.004 1.91-.122 2.697-.316 1.253-.392 2.308-1.11 3.562-2.426.72.992.915 1.455 2.16 2.513.33.133.658.135.922-.063.792-.656 2.177-1.836 2.904-2.492.33-.266.265-.658.07-.99-.722-.925-1.44-1.72-1.434-3.496l.022-5.933c.01-2.506.214-4.81-1.62-6.53-1.507-1.392-3.874-1.927-5.716-1.934-.264 0-.525-.003-.79-.003-3.355.185-6.913 1.62-7.72 5.77-.133.525.263.725.525.794l3.68.475c.396-.066.595-.395.66-.725.337-1.447 1.522-2.167 2.84-2.295h.264c.787.004 1.642.338 2.1.996.522.795.454 1.85.45 2.77v.527zm-.015 3.823c-.006 1.517.054 2.703-.74 4.015-.462.922-1.254 1.512-2.11 1.707-.132 0-.328.066-.526.066-1.446-.006-2.3-1.13-2.293-2.778.008-2.108 1.263-3.093 2.842-3.548.857-.195 1.846-.256 2.832-.252l-.005.79z"/><path d="M42.33 40.083c1.612-1.354 2.3-3.82 2.34-5.11l.002-.216c0-.287-.07-.5-.14-.607-.32-.395-2.68-.764-4.717-.163-.572.18-1.075.426-1.54.747-.36.25-.288.57.068.537.394-.07.895-.103 1.467-.175 1.25-.1 2.717-.13 3.072.336.496.61-.584 3.256-1.055 4.4-.142.358.18.504.502.253zM9.504 34.837c4.594 4.207 10.66 6.737 17.45 6.764 4.22.017 9.082-1.146 12.844-3.388.504-.286 1.004-.606 1.47-.96.645-.463.075-1.184-.57-.9-.284.106-.607.25-.894.356-4.118 1.596-8.44 2.332-12.446 2.316C20.996 39 14.856 37.22 9.898 34.3c-.462-.25-.787.213-.394.537z"/></g></svg></a>
						</li><?php } ?>
					</ul>
				</li>
				<?php } ?>
			</ul>
		</div>
		<?php } ?>
	</article>
</section>

<?php snippet('footer') ?>