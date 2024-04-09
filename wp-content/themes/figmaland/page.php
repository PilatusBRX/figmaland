<?php get_header(); ?>

<main  class="pages">

		<h1><?php the_title();?></h1>
            
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

                <?php endwhile; else: endif; ?>

	</main><!-- #main -->

<?php get_footer();?>
