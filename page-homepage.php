<?php
/**
  * Common wordpress Template for blog loop / also final fall back in template
  * @package Wordpress
  * @subpackage one-theme
  * @since 1.0
  * @author Matthew Hansen & Bryan Haskin
  * Template Name: page-homepage
  */

get_header(); ?>

<section class="container-fluid">
	<div class="row">
	  <div class="container">
		<div class="row">
		  <div class="page-header">
		    <h1><?php the_title(); ?></h1>
		  </div>
		</div>
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
