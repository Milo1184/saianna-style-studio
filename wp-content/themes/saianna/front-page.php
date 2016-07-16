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
							<?php the_field( 'testimonial_1' ); ?>
                        </blockquote>
						<p>- <?php the_field( 'name_1' ); ?></p>
                    </article>

                	<article class="column">
                    	<blockquote>
							<?php the_field( 'testimonial_2' ); ?>
                        </blockquote>
						<p>- <?php the_field( 'name_2' ); ?></p>
                    </article>

                	<article class="column">
                    	<blockquote>
							<?php the_field( 'testimonial_3' ); ?>
                        </blockquote>
						<p>- <?php the_field( 'name_3' ); ?></p>
                    </article>

                	<article class="column">
                    	<blockquote>
                        	Worked wonder for my wardrobe, I hope to return to the studion realy soon.
                            <span class="close">&nbsp;</span>
                        </blockquote>
                    </article>

                	<article class="column">
                    	<blockquote>
                        	Excpetional Work, extrodinary attention to detail. I am a satisfied customer.
                            <span class="close">&nbsp;</span>
                        </blockquote>
                    </article>

                	<article class="column">
                    	<blockquote>
                        	Lorem ipsum ipsos ulrium.
                            <span class="close">&nbsp;</span>
                        </blockquote>
                    </article>
                <!-- section.testimonials ENDS -->
                </section>
			</div>
        <!-- section.customers-say ENDS -->
        </section>
    </main>

<?php get_footer(); ?>