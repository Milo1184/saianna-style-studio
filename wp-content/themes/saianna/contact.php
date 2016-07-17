<?php
/*
	Template Name: Two Columns
*/
?>

<?php get_header(); ?>
	<main id="two-columns">
    	<div class="wrap">
        	<h1><?php the_title(); ?></h1>
            
        	<div class="left">
            <?php if ( have_posts() ): ?>
            	<?php while( have_posts() ): the_post(); ?>
                	<?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>
            <!-- div.left ENDS -->
            </div>
            
            <div class="right">
            	<p><strong>Workshop:</strong> <address>Namburar Street, V.K. Road, Peelamedu, Coimbatore - 641004</address></p>
            	<p><strong>Studio:</strong> <address>76, W Ponnurangam Rd, R.S. Puram, Coimbatore, Tamil Nadu 641002</address> (Available by apppointment only)</p>
                <p>Phone: <a href="tel:+919363101145">+91 936 3101145</a></p>
                <p>Email:  <a href="mailto:archanabhatia6053@gmail.com">archanabhatia6053@gmail.com</a></p>
            	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.3649408294627!2d76.94771991462237!3d11.011221757827162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba8591dba87bc51%3A0xad9a27f22e777856!2s76%2C+W+Ponnurangam+Rd%2C+R.S.+Puram%2C+Coimbatore%2C+Tamil+Nadu+641002!5e0!3m2!1sen!2sin!4v1468780859973" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            <!-- div.right ENDS -->
            </div>
        <!-- div.wrap ENDS -->
        </div>
    </main>
<?php get_footer(); ?>