<?php
/**
 * The header for our theme
 *
 * @package WordPress
 * @subpackage noor
 * @since 1.0
 * @version 0.1
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'noorlite' ); ?></a>

<div class="top-header">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8">
				<span class="contact">
					<span class="location"><?php if( '' != get_theme_mod('noorlite_location') ){ ?>
						<i class="fa fa-map-marker"></i><?php echo esc_html( get_theme_mod('noorlite_location','') ); ?><?php } ?>
					</span>
					<span class="email"><?php if( '' != get_theme_mod('noorlite_email')){ ?>
						<i class="fa fa-envelope"></i><?php echo esc_html( get_theme_mod('noorlite_email','') ); ?><?php } ?>
					</span>
                    <span class="phone"><?php if( '' != get_theme_mod('noorlite_phone_number')){ ?>
						<i class="fa fa-phone"></i><?php echo esc_html( get_theme_mod('noorlite_phone_number','') ); ?><?php } ?>
					</span>
				</span>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="row">
					<div class="col-lg-8 col-md-8">
						<div class="social-icons">
							<?php if( '' != get_theme_mod( 'noorlite_facebook_url') ) { ?>
						      <a href="<?php echo esc_url( get_theme_mod( 'noorlite_facebook_url','' ) ); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						    <?php } ?>
						    <?php if( '' != get_theme_mod( 'noorlite_twitter_url') ) { ?>
						      <a href="<?php echo esc_url( get_theme_mod( 'noorlite_twitter_url','' ) ); ?>"><i class="fa fa-twitter"></i></a>
						    <?php } ?>
						    <?php if( '' != get_theme_mod( 'noorlite_insta_url')) { ?>
						      <a href="<?php echo esc_url( get_theme_mod( 'noorlite_insta_url','' ) ); ?>"><i class="fa fa-instagram"></i></a>
						    <?php } ?>
						    <?php if( '' != get_theme_mod( 'noorlite_linkedin_url') ) { ?>
						      <a href="<?php echo esc_url( get_theme_mod( 'noorlite_linkedin_url','' ) ); ?>"><i class="fa fa-linkedin"></i></a>
						    <?php } ?>	 
						    <?php if( '' != get_theme_mod( 'noorlite_pinterest_url')) { ?>
						      <a href="<?php echo esc_url( get_theme_mod( 'noorlite_pinterest_url','' ) ); ?>"><i class="fa fa-pinterest"></i></a>
						    <?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="noor-header">	
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3">
				<div class="logo">
			        <?php if( has_custom_logo() ){ noorlite_the_custom_logo();
			           }else{ ?>
			          <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			          <?php $description = get_bloginfo( 'description', 'display' );
			          if ( $description || is_customize_preview() ) : ?> 
			            <p class="site-description"><?php echo esc_html($description); ?></p>
			        <?php endif; }?>
			    </div>
			</div>
		</div>
	</div>
	<div class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu','noorlite'); ?></a></div>
	<div class="menu-section">
		<div class="container">
			<div class="nav">
				<?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
			</div>
		</div>
	</div>
</div>