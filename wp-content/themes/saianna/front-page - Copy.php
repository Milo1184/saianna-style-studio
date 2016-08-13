<?php
/*
	Template Name: Front Page
*/
?>

<?php get_header(); ?>

    <main id="home">
    	<div class="slider-container">
            <ul id="slider" class="rslides">
                <li><img src="<?php bloginfo( 'template_url' ); ?>/images/filler/slider/1.jpg" alt="Banner" title="Banner"></li>
                <li><img src="<?php bloginfo( 'template_url' ); ?>/images/filler/slider/2.jpg" alt="Banner" title="Banner"></li>
                <li><img src="<?php bloginfo( 'template_url' ); ?>/images/filler/slider/3.jpg" alt="Banner" title="Banner"></li>
                <li><img src="<?php bloginfo( 'template_url' ); ?>/images/filler/slider/4.jpg" alt="Banner" title="Banner"></li>
            <!-- div#slider ENDS -->
            </ul>
        <!-- div.slide-container ENDS -->
		</div>

        <section class="home-collections two-columns">
        	<div class="wrap">
	        	<h2>Featured Products</h2>
                
                <?php echo do_shortcode('[featured_products per_page="8" columns="4" orderby="date" order="desc"]'); ?>
            <!-- div.wrap ENDS -->
			</div>
        <!-- section.home-collections ENDS -->
        </section>

        <section class="customise">
        	<div class="wrap">
	        	<h2>Customise your order</h2>
                <p>Follow the link below and place a custom order. You can pick your designs, sizes and fabrics.</p>
                <a class="link-1" href="#">Customise Your Order</a>
			</div>
        <!-- section.customise ENDS -->
        </section>
         
        <section class="customers-say">
        	<div class="wrap">
	        	<h2>What our customers are saying</h2>

                <section class="testimonials three-columns">
                	<article class="column">
                    	<blockquote>
							&quot;<?php the_field( 'testimonial_1' ); ?>&quot;
                        </blockquote>
						<p>- <?php the_field( 'name_1' ); ?></p>
                    </article>

                	<article class="column">
                    	<blockquote>
							&quot;<?php the_field( 'testimonial_2' ); ?>&quot;
                        </blockquote>
						<p>- <?php the_field( 'name_2' ); ?></p>
                    </article>

                	<article class="column">
                    	<blockquote>
							&quot;<?php the_field( 'testimonial_3' ); ?>&quot;
                        </blockquote>
						<p>- <?php the_field( 'name_3' ); ?></p>
                    </article>
                <!-- section.testimonials ENDS -->
                </section>
			</div>
        <!-- section.customers-say ENDS -->
        </section>
    </main>

<?php get_footer(); ?>