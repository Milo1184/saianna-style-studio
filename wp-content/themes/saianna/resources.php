<?php
/*
Template Name: Resources
*/
?>
<?php get_header(); ?>        
        
        <!-- div#resources START -->
        <div id="resources">
        
            <!--ul#scroll-nav START -->
            <ul id="scroll-nav">
            
                <li>
                    <a href="#helpful-resources">Helpful Resources</a>
                    <span class="descr"><span>Helpful Resources</span></span>
                </li>
				
                <li>
                    <a href="#myths-and-labels">Myths and Lables</a>
                    <span class="descr"><span>Myths and Lables</span></span>
                </li>
                
                <li>
                    <a href="#early-signs">Early Signs</a>
                    <span class="descr"><span>Early Signs</span></span>
                </li>
                
                <li>
                    <a href="#developmental-signs">Developmental Milestones</a>
                    <span class="descr"><span>Developmental Milestones</span></span>
                </li>
                
                <li>
                    <a href="#downloads">Downloads</a>
                    <span class="descr"><span>Downloads</span></span>
                </li>
            
            <!--ul#scroll-nav END --> 
            </ul>
        
        	<?php $img = get_field( 'helpful_resources' ); ?>

            <!-- section#heplful-resources START -->
            <section class="banner scrollblock" id="helpful-resources" style="background-image:url('<?php echo $img[ 'url' ]; ?>');">
                
                <p class="info-balls helpful-resources">Helpful<br> Resources</p>
                
                <p class="info-balls a-guideline">a guideline<br> of what to<br> look out for</p>
                
            <!-- section#resources-banner END -->
            </section>
            
            <!-- section#myths-and-labels START -->
            <section class="section-type scrollblock" id="myths-and-labels">
                
                <!-- div.wrap START -->
                <div class="wrap">
                
                    <!-- div.left START -->
                    <div class="left">
                    
                    	<?php echo get_field( 'myths_and_labels_left' ); ?>
                        
                    <!-- div.left END -->
                    </div>                                
                
                    <!-- div.right START -->
                    <div class="right">

                    	<?php echo get_field( 'myths_and_labels_right' ); ?>
                    
                    <!-- div.right END -->
                    </div>                    
                    
                <div class="clear"></div>
            
                <!-- div.wrap END -->
                </div>
                
            <!-- section#myths-and-labels END -->
            </section>
            
            <!-- div.scrollblock START -->
            <div class="scrollblock" style="position:relative;">
            	
                <?php $img = get_field( 'banner_middle' ); ?>
                <!-- section.banner-2 START -->
                <section class="banner banner-2" style="background-image:url('<?php echo $img[ 'url' ]; ?>'); position:absolute;">
                
                    &nbsp;
                    
                <!-- section.banner-2 END -->
                </section>
                
                <!-- section#early-signs START -->
                <section class="section-type" id="early-signs" style="padding-top:237px;">
                
                    <!-- div.wrap START -->
                    <div class="wrap">
                
                        <!-- div.left START -->              
                        <div class="left">
                        
                        	<?php echo get_field( 'early_signs_left' ); ?>
                        
                        <!-- div.left END -->
                        </div>                                  
                        
                        <!-- div.right START -->
                        <div class="right">
						
                        	<?php echo get_field( 'early_signs_right' ); ?>
                                                    
                        <!-- div.right END -->
                        </div>                    
                        
                        <div class="clear"></div>
    
                    <!-- div.wrap END -->
                    </div>                       
                
                <!-- section#early-signs END -->
                </section>
            
            <!-- div.scrollblock END -->
            </div>
            
            <!-- div.scrollblock START -->
            <div class="scrollblock" style="position:relative;">
            	
                <?php $img = get_field( 'banner_final' ); ?>

                <!-- section.banner-3 START -->
                <section class="banner banner-3" style="background-image:url('<?php echo $img[ 'url' ]; ?>'); position:absolute;">
                
                    &nbsp;
                    
                <!-- section.banner-3 END -->
                </section>
                
                <!-- section#developmental-signs START -->
                <section class="section-type scrollblock" id="developmental-signs" style="padding-top:237px;">
                    
                    <!-- div.wrap START -->
                    <div class="wrap">
    
                        <!-- div.left START -->
                        <div class="left">
                        
                        	<?php echo get_field( 'developmental_milestones_left' ); ?>
                            
                        <!-- div.left END -->
                        </div>
                        
                        <!-- div.right START -->
                        <div class="right">
                        
                        	<?php echo get_field( 'developmental_milestones_right' ); ?>
                            
                            <!-- div.tab-container START -->
                            <div class="tab-container">
                            
                                <ul class="tabs">
                                
                            	<?php
								// The $i is used as  a count to insert the last class after every two repeater fields
								$i = 0;
								//$collections becomes an array that holds the developmental_milestones_buttons repeater fields
								$collection = get_field( 'developmental_milestones_buttons' ); 
								//To get the title of each button
								foreach ( $collection as $single ):
									$i++;
								?> 
                            
                                    <li><a href="#<?php echo $i; ?>"><?php echo $single[ 'button_title' ]; ?></a></li>
                                    
                                <?php endforeach; ?>
                                    
                                </ul>
                                
                                <div class="clear"></div>
                                
                                <?php
								//Reset $i to 0 to get count and add class for tab 
								$i = 0;
								//To get the content of the buttons
								foreach ( $collection as $single ):
									$i++;
								?>
                                
                                <!-- div.tab START -->
                                <div class="tab <?php echo $i; ?>">
                                
                                	<?php echo $single[ 'button_content' ]; ?>
                                
                                <!-- div.tab END -->
                                </div>
                                
                                <?php endforeach; ?>
                                
                            <!--div.tab-container END-->    
							</div>								                             

                        <!-- div.right END -->    
                        </div>
                        
                        <div class="clear"></div>
    
                    <!-- div.wrap END -->
                    </div>
                                        
                <!-- section#developmental-signs END -->
                </section>
                
                <!--section#downloads START-->
                <section class="scrollblock section-type" id="downloads">
                	
                    <!-- div.wrap START -->
                    <div class="wrap">
                    
                    	<a href="#" class="download dropper">Download</a>
                        
                        <!-- div.items-container START -->
                        <div class="items-container drop">
                        
                        <?php
						//Counter to insert the clear class after every four items
						$i = 0; 
						//To get the repeater field downloads as an array
						$downloads = get_field( 'downloads' ); 
						foreach ( $downloads as $download ):
							$i++;
						?>
                	
                            <!-- div.item START -->
                            <div class="item">
                            	
                                <?php
								$path = wp_upload_dir();
								$file = $download[ 'file' ];
								$name = $path[ 'basedir' ].'/'.get_post_meta( $file, '_wp_attached_file', true);
								?>
                            
                                <a href="<?php echo wp_get_attachment_url( $download[ 'file' ] ); ?>">Name: <?php echo $download[ 'name' ]; ?><br>Size: <?php echo round( filesize($name)/1024 ); ?> KB</a>
                            
                            <!-- div.item END -->
                            </div>
                            
                            <?php if ( $i % 4 == 0 ): ?><div class="clear"></div><?php endif; ?>
                            
							<?php endforeach; ?>
                            
                            <div class="clear"></div>
                            
						<!-- div.items-container END -->
                        </div>
                        
                        <!-- div#placed-bottom is to place the user view to the bottom of the page once the items have been displayed via core.js -->
						<div id="placed-bottom"></div>
                    
                    <!-- div.wrap END -->    
					</div>                        
                
                <!--section#downloads END-->
                </section>  
            
            <!-- div.scrollblock END -->
            </div>
            
        <!-- div#resources END -->
        </div>
        
		<script src="<?php bloginfo( 'template_url' ); ?>/assets/js/core.js"></script>
        <script>
        // Page specific animations
        scrollorama.animate('.helpful-resources', { delay: 100, duration: 1000, property:'top', start:496, end:0 });
        scrollorama.animate('.a-guideline', { delay: 100, duration: 400, property:'top', start:571, end:0 });
        scrollorama.animate('.banner-2', { delay: 100, duration: 2000, property:'top', start:0, end:-237 });
        scrollorama.animate('.banner-3', { delay: 100, duration: 2000, property:'top', start:0, end:-237 });
        </script>        
    
<?php get_footer(); ?>