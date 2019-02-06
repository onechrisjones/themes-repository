<main class="" role="main">
	<div class="album bg-light">
		<div class="row justify-content-center">
			<div class="col-sm-12 col-md-9 col-lg-8 col-xl-6 p-5">
			<div class="card mb-3 box-shadow">
			  <?php if ($page->coverImage()): ?><img src="<?php echo $page->coverImage(); ?>" class="card-img-top" alt="..."><?php endif ?>
			  <div class="card-body">
			    <h2 class="card-title"><?php echo $page->title(); ?></h2>
			    <!-- Load Bludit Plugins: Page Begin -->
				<?php Theme::plugins('pageBegin'); ?>
			    <?php echo $page->content(); ?>
			    <!-- Load Bludit Plugins: Page End -->
				<?php Theme::plugins('pageEnd'); ?>
			  </div>
			</div>
			</div>				
		</div>
	</div>
</main>