<?php
/**
 * Common wordpress Template for pages
 * @package Wordpress
 * @subpackage one-theme
 * @since 1.0
 * @author Matthew Hansen & Bryan Haskin
 */

get_header(); ?>

<section class="container-fluid background-white">
	<div class="row padding-top1">
	  <div class="container">
	  	<div class="row">
	  	  <div class="col-md-12">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; ?>
					<?php else : ?>
				<?php endif; ?>
	  	  </div>
	  	</div>
	  </div>
	</div>
</section>




<?php
get_footer(); ?>
