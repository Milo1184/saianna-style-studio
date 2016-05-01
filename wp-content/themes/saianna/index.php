<?php get_header(); ?>

    <main id="home" class="content">
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
	        	<h2>Our Latest Posts</h2>
				<?php
                $args = array( 'post_type' => 'post', 'posts_per_page' => 4 );
                $posts = get_posts( $args );
                
                foreach( $posts as $post ): setup_postdata( $post );
                ?>
                <article class="column">
                    <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post->ID ); ?></a>
                    <h3><?php the_title(); ?></h3>
                </article>
	            <?php endforeach; ?>
            <!-- div.wrap ENDS -->
			</div>
        <!-- section.home-collections ENDS -->
        </section>

        <!--<section class="customise">
        	<div class="wrap">
	        	<h2>Customise your order</h2>
                <p>Follow the link below and place a custom order. You can pick your designs, sizes and fabrics.</p>
                <a class="link-1" href="#">Customise Your Order</a>
			</div>-->
        <!-- section.customise ENDS -->
        <!--</section>-->

        <section class="customers-say">
        	<div class="wrap">
	        	<h2>What our customers are saying</h2>

                <section class="testimonials three-columns">
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