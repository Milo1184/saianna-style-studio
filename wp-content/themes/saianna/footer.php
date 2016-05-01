    <footer>
    	<div class="wrap">
            <div class="three-columns">
                <div class="column">
                    <h3>The Luxe Affair</h3>

					<?php wp_nav_menu( array('menu' => 'Footer Menu','menu_class' => 'footer-menu', 'container' => '') ) ?>
                <!-- div.column ENDS -->
                </div>

                <div class="column">
                    <h3>Connect With Us</h3>

                    <div class="social-icons">
                    </div>
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
    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/core.js"></script>

    <?php wp_footer(); ?>
</body>
</html>