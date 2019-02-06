<!-- Welcome message -->
<main role="main">
	<section class="jumbotron text-center">
		<div class="container">
			<h1 class="jumbotron-heading"><?php echo $site->slogan(); ?></h1>
			<!-- Site description -->
			<?php if ($site->description()): ?>
			<p class="lead text-muted"><?php echo $site->description(); ?></p>
			<?php endif ?>
		</div>
	</section>
	<?php if (empty($content)): ?>
	<div class="album py-5 bg-light">
		<div class="text-center p-4">
			<?php $language->p('<h2 class="text-muted">Sorry, we got nothing.</h2>') ?>
		</div>
		<?php endif ?>
	</div>
	<div class="album py-5 bg-light">
		<div class="container">
			<div class="row">
				<?php foreach ($content as $page): ?>
				<div class="col-sm-12 mt-3">
					<div class="card box-shadow">
						<a class="text-dark" href="<?php echo $page->permalink(); ?>"><h5 class="card-header"><?php echo $page->title(); ?></h5></a>
						<div class="card-body">
							<!-- Load Bludit Plugins: Page Begin -->
							<?php Theme::plugins('pageBegin'); ?>
							<p class="card-text"><?php echo $page->contentBreak(); ?></p>
							<!-- Load Bludit Plugins: Page End -->
							<?php Theme::plugins('pageEnd'); ?>
						</div>
						<!-- Shows "read more" button if necessary -->
						<?php if ($page->readMore()): ?>
						<div class="card-footer text-muted">
							<a class="btn btn-primary btn-sm" href="<?php echo $page->permalink(); ?>" role="button"><?php echo $L->get('Read more'); ?></a>
						</div>
						<?php endif ?>
					</div>
				</div>
				<?php endforeach ?>
			</div>
		</div>
		<?php if (Paginator::numberOfPages()>1): ?>
		<div class="container">
			<div class="row justify-content-center mt-4">
				<nav aria-label="...">
					<ul class="pagination">
						<li class="page-item <?php if (!Paginator::showPrev()) echo 'disabled' ?>">
						<a class="page-link" href="<?php echo Paginator::previousPageUrl() ?>" tabindex="-1" aria-disabled="true"><?php echo $L->get('&larr; Previous'); ?></a>
						</li>
						<?php if (Paginator::currentPage() > 1): ?>
						<li class="page-item active" aria-current="page">
						<a class="page-link" href="<?php echo Theme::siteUrl() ?>">Current<span class="sr-only">(current)</span></a>
						</li>
						<?php endif ?>
						<li class="page-item <?php if (!Paginator::showNext()) echo 'disabled' ?>"><a class="page-link" href="<?php echo Paginator::nextPageUrl() ?>"><?php echo $L->get('Next &rarr;'); ?></a>
						</li>
					</ul>
				</nav>
				<?php endif ?>
			</div>
		</div>
	</div>
</main>