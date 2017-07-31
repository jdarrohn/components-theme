<?php
/**
 * The component that handles the post loop.
 */
?>
<article <?php post_class(); ?> >

	<h1><?php the_title(); ?></h1>

	<?php the_post_thumbnail(); ?>

	<?php the_content(); ?>
	
</article>