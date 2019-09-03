<?php
/**
 * The header for our theme
 *
 * @package WordPress
 * @subpackage Expert Carpenter
 * @since 1.0
 * @version 0.1
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'expert-carpenter' ) ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="screen-reader-text skip-link" href="#wp-toolbar"><?php esc_html_e( 'Skip to content', 'expert-carpenter' ); ?></a>

<div class="header-box">
	<div class="topbar">
		<div class="container">
			<div class="row">
				<div class="offset-md-6">
					<div class="row">
						<div class="contact-details">
							<?php if( get_theme_mod( 'expert_carpenter_email_address') != '') { ?>
								<span><a href="mailto:<?php echo esc_html(get_theme_mod('expert_carpenter_email_address',''));?>"><i class="fas fa-envelope"></i><?php echo esc_html( get_theme_mod( 'expert_carpenter_email_address','' ) ); ?></a></span>
							<?php }?>
							<?php if( get_theme_mod( 'expert_carpenter_phone_number') != '') { ?>
								<span><i class="fas fa-phone"></i><?php echo esc_html( get_theme_mod( 'expert_carpenter_phone_number','' ) ); ?></span>
							<?php }?>
						</div>
						<div class="social-icons">
							<?php if( get_theme_mod( 'expert_carpenter_facebook_url') != '') { ?>
					      		<a href="<?php echo esc_url( get_theme_mod( 'expert_carpenter_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_attr_e( 'Facebook','expert-carpenter' );?></span></a>
						    <?php } ?>
						    <?php if( get_theme_mod( 'expert_carpenter_twitter_url') != '') { ?>
						      	<a href="<?php echo esc_url( get_theme_mod( 'expert_carpenter_twitter_url','' ) ); ?>"><i class="fab fa-twitter"></i><span class="screen-reader-text"><?php esc_attr_e( 'Twitter','expert-carpenter' );?></span></a>
						    <?php } ?>
						    <?php if( get_theme_mod( 'expert_carpenter_google_plus_url') != '') { ?>
						      	<a href="<?php echo esc_url( get_theme_mod( 'expert_carpenter_google_plus_url','' ) ); ?>"><i class="fab fa-google-plus-g"></i><span class="screen-reader-text"><?php esc_attr_e( 'Google','expert-carpenter' );?></span></a>
						    <?php } ?>
						    <?php if( get_theme_mod( 'expert_carpenter_instagram_url') != '') { ?>
					     		<a href="<?php echo esc_url( get_theme_mod( 'expert_carpenter_instagram_url','' ) ); ?>"><i class="fab fa-instagram"></i><span class="screen-reader-text"><?php esc_attr_e( 'Instagram','expert-carpenter' );?></span></a>
						    <?php } ?>
						    <?php if( get_theme_mod( 'expert_carpenter_youtube_url') != '') { ?>
					     		<a href="<?php echo esc_url( get_theme_mod( 'expert_carpenter_youtube_url','' ) ); ?>"><i class="fab fa-youtube"></i><span class="screen-reader-text"><?php esc_attr_e( 'Youtube','expert-carpenter' );?></span></a>
						    <?php } ?>	 
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="logo">
				        <?php if( has_custom_logo() ){ expert_carpenter_the_custom_logo();
				           }else{ ?>
				          <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				          <?php $description = get_bloginfo( 'description', 'display' );
				          if ( $description || is_customize_preview() ) : ?> 
				            <p class="site-description"><?php echo esc_html($description); ?></p>
				        <?php endif; }?>
				    </div>
				</div>
				<div class="col-lg-8 col-md-8">
					<button class="toggleMenu toggle"><?php esc_html_e('Menu','expert-carpenter'); ?></button>
					<div id="header" class="menu-section">
						<nav class="nav">
							<?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>