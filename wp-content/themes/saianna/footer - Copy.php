    <footer>
    	<div class="wrap">
            <div class="three-columns">
                <div class="column">
                    <h3>Saianna Style Studio</h3>

					<?php wp_nav_menu( array('menu' => 'Footer Menu','menu_class' => 'footer-menu', 'container' => '') ) ?>
                <!-- div.column ENDS -->
                </div>

                <div class="column">
                    <h3>Connect With Us</h3>

                    <ul class="social-icons">
                    	<li><a href="https://www.facebook.com/saianna.style.studio/" class="facebook" target="_blank">Facebook</a></li>
                    	<li><a href="#" class="instagram" target="_blank">Instagram</a></li>
                    </ul>
                <!-- div.column ENDS -->
                </div>

                <div class="column">
                    <h3>Subscrbe to our newsletter</h3>

                    <form action="" class="subscribe">
                    	<input type="text" name="name" placeholder="Enter your name" required>
                    	<input type="email" name="email" placeholder="Enter your email" required>
                        <button type="submit">Subscribe</button>
                    </form>
                <!-- div.column ENDS -->
                </div>
            <!-- div.three-columns ENDS -->
            </div>
        <!-- div.wrap ENDS -->
		</div>
    </footer>
    <link href="<?php bloginfo( 'template_url' ); ?>/css/saianna-style-studio.css" rel="stylesheet" media="all">
    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/core.js"></script>

    <?php wp_footer(); ?>
</body>
</html>