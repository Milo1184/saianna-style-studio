<?php
/*
	Template Name: Gallery
*/
?>

<?php get_header(); ?>
	<main id="gallery">
    	<div class="wrap">
			<h1>Gallery</h1>
        <?php if( have_rows( 'gallery_images' ) ): ?>
        	<ul class="three-columns">
            <?php while ( have_rows( 'gallery_images' ) ) : the_row(); ?>
            	<?php $src = wp_get_attachment_image_src( get_sub_field( 'image' ), 'ful' ); ?>
            	<li class="column"><a class="fancybox" rel="fashion-show" href="<?php echo $src[0];  ?>"><?php echo wp_get_attachment_image( get_sub_field( 'image' ), 'gallery-thumb' ); ?></a></li>
            <?php endwhile; ?>    
            </ul>
            
            <?php if( have_posts() ): ?>
            	<?php while( have_posts() ): the_post(); ?>
                	<?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>
        <?php else: ?>
        	<p>We'd like to thank you for your interest in our gallery but there is currently no content on this page.</p>
            <p>Please check back with us at a later date.</p>
            <p>Click <a href="<?php bloginfo( 'url' ); ?>">here</a> to go back to the home page.</p>
        <?php endif; ?>
        <!-- div.wrap ENDS -->
        </div>
    </main>
<?php get_footer(); ?>