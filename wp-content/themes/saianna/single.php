<?php get_header(); ?>
	<main id="two-columns" class="cms-content">
        <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
        
    	<div class="wrap">
            <aside>
            	<h3>Featured Products</h3>
            	<?php echo do_shortcode('[featured_products per_page="4" columns="1" orderby="date" order="desc"]'); ?>
            </aside>

        	<section class="main-content">
                <article class="blog-post">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </article>
            </section>
        <!-- div.wrap ENDS -->
        </div>
    </main>
<?php get_footer(); ?>