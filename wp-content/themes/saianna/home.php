<?php get_header(); ?>

    <main id="blog-listing" class="content">
        <ul id="slider" class="rslides">
            <li><img src="images/filler/slider/1.jpg" alt="Banner" title="Banner"></li>
            <li><img src="images/filler/slider/2.jpg" alt="Banner" title="Banner"></li>
            <li><img src="images/filler/slider/3.jpg" alt="Banner" title="Banner"></li>
            <li><img src="images/filler/slider/4.jpg" alt="Banner" title="Banner"></li>
        <!-- div#slider ENDS -->
        </ul>
        
		<?php if ( have_posts() ): ?>
        <section class="blog-listing">
        	<div class="wrap">
                
            	<div class="three-columns">
                <?php while( have_posts() ): the_post(); ?>
                    <article class="column">
                        <a href="blog.html"><?php the_post_thumbnail( 'blog-thumb' ); ?></a>
                        <h2><?php the_title(); ?></h2>
                        <?php the_excerpt(); ?>
                        <a class="link-1" href="<?php the_permalink(); ?>">Read More</a>
                    </article>
				<?php endwhile; ?>
                <!-- div.three-columns -->
                </div>
            <!-- div.wrap ENDS -->
            </div>
        <!-- section.blog-listing ENDS -->
        </section>
        
        <?php else: ?>
        <section class="blog-listing">
        	<div class="wrap">
	        	<p>No Posts were found in this category!</p>
			</div>
        </section>
        <?php endif; ?>
    </main>

<?php get_footer(); ?>