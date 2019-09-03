<?php
/**
 * Template Name: Custom Home
 */

get_header(); ?>

<?php if( get_theme_mod( 'noorlite_slider_arrows') == '1') { ?>

    	<section id="slider">
    	    <div class="container-fluid px-0">
    			<div class="slide">
    	            <div class="row">
    		      		<?php 
                            $page_id = get_theme_mod('noorlite_slider_cat'); 
                            $page_query = new WP_Query(array('post_type' => 'page', 'post__in' => array($page_id) ));?>
    		        		<?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>	
    		          			<div class="col-lg-12 col-md-12">
                			      	<img src="<?php the_post_thumbnail_url('full'); ?>"/>
                                    <div class="slide-content">
                    			      	<h2><?php the_title();?></h2>
                    			      	<p><?php echo esc_html( the_excerpt() ); ?></p>
                    			      	<div class="btn btn-secondary btn-lg">
                    			      		<a href="<?php the_permalink();?>"><?php echo esc_html_e('Read More','noorlite'); ?></a>
                            			</div>
    							    </div>    
    							</div>	
    		          		<?php endwhile; 
    		          	wp_reset_postdata();
    		          	?>
    	      		</div>
    			    <div class="clearfix"></div>
    		    </div>
            </div>  
    	  	<div class="clearfix"></div>
    	</section>
    
<?php }?>

<?php /*--our-features --*/?>
<?php if( get_theme_mod( 'noorlite_feature_arrows') == '1') { ?>
    <?php if( get_theme_mod('noorlite_features_title') != '' || get_theme_mod( 'noorlite_features_cat' )!= ''){ ?>
    	<section id="our_service">
    		<div class="container">
    			<div class="service-box">
    				<?php if( get_theme_mod('noorlite_features_title') != ''){ ?>
    		    		<h3><?php echo esc_html(get_theme_mod('noorlite_features_title','')); ?></h3>
    		    		<hr>
    		    	<?php }?>
    	            <div class="row">
    		      		<?php $catData1=  get_theme_mod('noorlite_features_cat'); if($catData1){ 
    		      		$page_query = new WP_Query(array( 'category_name' => esc_html($catData1 ,'noorlite')));?>
    		        		<?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>	
    		          			<div class="col-lg-4 col-md-6">
    		          				<div class="content-topic">
    							      	<img src="<?php the_post_thumbnail_url('full'); ?>"/>
    							      	<h4><?php the_title();?></h4>
    							      	<p><?php echo esc_html( the_excerpt() ); ?></p>
    							      	<div class="cat-btn">
    							      		<a href="<?php the_permalink();?>"><?php echo esc_html_e('Read More','noorlite'); ?></a>
    		          					</div>
    							    </div>    
    							</div>	
    		          		<?php endwhile; 
    		          	wp_reset_postdata();
    		          	}?>
    	      		</div>
    			</div>
    			<div class="clearfix"></div>
    		</div>
    	</section>
    <?php }?>
    
<?php }?>


<div class="container">
  	<?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>