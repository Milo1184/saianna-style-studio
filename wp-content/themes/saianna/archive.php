<?php get_header(); ?>
	<main id="two-columns" class="cms-content">
    	<div class="wrap">
            <h1>Blog</h1>
            
        	<section class="main-content">
                <?php if ( have_posts() ): ?>
                	<?php while( have_posts() ): the_post(); ?>
                    	<article class="blog-post">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'blog-featured' ); ?></a>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="link-1">Read More &nbsp;&nbsp;&#10140;</a>
						</article>
                    <?php endwhile; ?>
                <?php endif; ?>
            </section>
            
            <aside class="sidebar-right">
            	<h3>Featured Products</h3>
            	<?php echo do_shortcode('[featured_products per_page="4" columns="1" orderby="date" order="desc"]'); ?>
            </aside>
        <!-- div.wrap ENDS -->
        </div>
    </main>
<?php get_footer(); ?>