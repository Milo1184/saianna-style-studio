<?php
/**
 * Sidebar
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/sidebar.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

//get_sidebar( 'shop' ); ?>

<?php $productCategories = get_terms( 'product_cat', array('oderby' => 'term_order', 'hide_empty' => 0, 'parent' => 0) ); ?>

<?php foreach( $productCategories as $productCategory ): ?>
	<div class="product-category-container">
        <p class="product-parent-category"><a href="<?php bloginfo( 'url' ); ?>/products/<?php echo $productCategory->slug; ?>/"><?php echo $productCategory->name; ?></a><a class="expander" href="#"><span class="plus">+</span><span class="minus">-</span></a></p>
        <?php $productSubCategories = get_terms( 'product_cat', array('oderby' => 'term_order', 'hide_empty' => 0, 'parent' => $productCategory->term_id) ); ?>
    
        <?php foreach( $productSubCategories as $productSubCategory ): ?>
        <ul class="product-categories">
            <li><a href="<?php bloginfo( 'url' ); ?>/shop-category/<?php echo $productCategory->slug; ?>/<?php echo $productSubCategory->slug; ?>/"><?php echo $productSubCategory->name; ?></a></li>
        </ul>
        <?php endforeach ?>
    <!-- div.product-category-container ENDS -->
    </div>

<?php endforeach; ?>
