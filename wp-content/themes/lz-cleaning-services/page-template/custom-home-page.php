<?php
/**
 * Template Name: Custom Home
 */

get_header(); ?>

<?php do_action( 'lz_cleaning_services_above_slider' ); ?>

<?php if( get_theme_mod('lz_cleaning_services_slider_hide_show') != ''){ ?>
	<section id="slider">
	  	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
		    <?php $pages = array();
		      	for ( $count = 1; $count <= 4; $count++ ) {
			        $mod = intval( get_theme_mod( 'lz_cleaning_services_slider' . $count ));
			        if ( 'page-none-selected' != $mod ) {
			          $pages[] = $mod;
			        }
		      	}
		      	if( !empty($pages) ) :
		        $args = array(
		          	'post_type' => 'page',
		          	'post__in' => $pages,
		          	'orderby' => 'post__in'
		        );
		        $query = new WP_Query( $args );
		        if ( $query->have_posts() ) :
		          $i = 1;
		    ?>     
		    <div class="carousel-inner" role="listbox">
		      	<?php  while ( $query->have_posts() ) : $query->the_post(); ?>
		        <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
		          	<a href="<?php echo esc_url( get_permalink() );?>"><img src="<?php the_post_thumbnail_url('full'); ?>"/></a>
		          	<div class="carousel-caption">
			            <div class="inner_carousel">
			              	<h2><?php the_title();?></h2>
			              	<p><?php $excerpt = get_the_excerpt(); echo esc_html( lz_cleaning_services_string_limit_words( $excerpt,20 ) ); ?></p>
			            </div>
			            <div class="read-btn">
			              <a href="<?php the_permalink();?>" class="" title="<?php esc_attr_e( 'READ MORE', 'lz-cleaning-services' ); ?>"><?php esc_html_e('READ MORE','lz-cleaning-services'); ?>
			              </a>
				       	</div>
		          	</div>
		        </div>
		      	<?php $i++; endwhile; 
		      	wp_reset_postdata();?>
		    </div>
		    <?php else : ?>
		    <div class="no-postfound"></div>
		      <?php endif;
		    endif;?>
		    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		      <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
		    </a>
		    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		      <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
		    </a>
	  	</div>  
	  	<div class="clearfix"></div>
	</section>
<?php }?>

<?php do_action('lz_cleaning_services_below_slider'); ?>

<?php /*--our-features --*/?>
<?php if( get_theme_mod('cleaning_features_title') != '' || get_theme_mod( 'cleaning_features_cat' )!= ''){ ?>
	<section id="our_service">
		<div class="container">
			<div class="service-box">
				<?php if( get_theme_mod('cleaning_features_title') != ''){ ?>
		    		<h3><?php echo esc_html(get_theme_mod('cleaning_features_title','')); ?></h3>
		    		<hr>
		    	<?php }?>
	            <div class="row">
		      		<?php $catData1=  get_theme_mod('cleaning_features_cat'); if($catData1){ 
		      		$page_query = new WP_Query(array( 'category_name' => esc_html($catData1 ,'lz-cleaning-services')));?>
		        		<?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>	
		          			<div class="col-lg-4 col-md-6">
		          				<div class="content-topic">
							      	<img src="<?php the_post_thumbnail_url('full'); ?>"/>
							      	<h4><?php the_title();?></h4>
							      	<p><?php $excerpt = get_the_excerpt(); echo esc_html( lz_cleaning_services_string_limit_words( $excerpt,20 ) ); ?></p>
							      	<div class="cat-btn">
							      		<a href="<?php the_permalink();?>"><?php echo esc_html_e('Read More','lz-cleaning-services'); ?></a>
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

<?php do_action('lz_cleaning_services_below_our_service_section'); ?>

<div class="container">
  	<?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>