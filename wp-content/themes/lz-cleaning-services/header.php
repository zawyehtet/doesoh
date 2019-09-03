<?php
/**
 * The header for our theme
 *
 * @package WordPress
 * @subpackage lz-cleaning-services
 * @since 1.0
 * @version 0.1
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'lz-cleaning-services' ) ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<div class="top-header">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<span class="contact">
					<span class="call"><?php if( get_theme_mod('lz_cleaning_services_location') != ''){ ?>
						<i class="fas fa-map-marker-alt"></i><?php echo esc_html( get_theme_mod('lz_cleaning_services_location','') ); ?><?php } ?>
					</span>
					<span class="email"><?php if( get_theme_mod('lz_cleaning_services_timming') != ''){ ?>
						<i class="far fa-clock"></i><?php echo esc_html( get_theme_mod('lz_cleaning_services_timming','') ); ?><?php } ?>
					</span>
				</span>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="row">
					<div class="col-lg-8 col-md-8">
						<div class="social-icons">
							<?php if( get_theme_mod( 'lz_cleaning_services_facebook_url') != '') { ?>
						      <a href="<?php echo esc_url( get_theme_mod( 'lz_cleaning_services_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
						    <?php } ?>
						    <?php if( get_theme_mod( 'lz_cleaning_services_twitter_url') != '') { ?>
						      <a href="<?php echo esc_url( get_theme_mod( 'lz_cleaning_services_twitter_url','' ) ); ?>"><i class="fab fa-twitter"></i></a>
						    <?php } ?>
						    <?php if( get_theme_mod( 'lz_cleaning_services_insta_url') != '') { ?>
						      <a href="<?php echo esc_url( get_theme_mod( 'lz_cleaning_services_insta_url','' ) ); ?>"><i class="fab fa-instagram"></i></a>
						    <?php } ?>
						    <?php if( get_theme_mod( 'lz_cleaning_services_linkedin_url') != '') { ?>
						      <a href="<?php echo esc_url( get_theme_mod( 'lz_cleaning_services_linkedin_url','' ) ); ?>"><i class="fab fa-linkedin-in"></i></a>
						    <?php } ?>	 
						    <?php if( get_theme_mod( 'lz_cleaning_services_pinterest_url') != '') { ?>
						      <a href="<?php echo esc_url( get_theme_mod( 'lz_cleaning_services_pinterest_url','' ) ); ?>"><i class="fab fa-pinterest-p"></i></a>
						    <?php } ?>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<?php if( get_theme_mod( 'lz_cleaning_services_quote_text') != '') { ?>
							<div class="quote-btn">
								<a href="<?php echo esc_url( get_theme_mod( 'lz_cleaning_services_quote_url','' ) ); ?>"><?php echo esc_html( get_theme_mod( 'lz_cleaning_services_quote_text','' ) ); ?></a>
							</div>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="header">	
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3">
				<div class="logo">
			        <?php if( has_custom_logo() ){ lz_cleaning_services_the_custom_logo();
			           }else{ ?>
			          <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			          <?php $description = get_bloginfo( 'description', 'display' );
			          if ( $description || is_customize_preview() ) : ?> 
			            <p class="site-description"><?php echo esc_html($description); ?></p>
			        <?php endif; }?>
			    </div>
			</div>
			<div class="col-lg-5 offset-lg-4 col-md-9">
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="info-box">
							<div class="row">
								<?php if( get_theme_mod('lz_cleaning_services_call_text') != '' ||  get_theme_mod('lz_cleaning_services_call_number') != ''){ ?>
									<div class="col-lg-3 col-md-3">
										<i class="fas fa-phone"></i>
									</div>
									<div class="col-lg-9 col-md-9">
										<h6><?php echo esc_html( get_theme_mod('lz_cleaning_services_call_text','') ); ?></h6>
										<p><?php echo esc_html( get_theme_mod('lz_cleaning_services_call_number','') ); ?></p>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="info-box">
							<div class="row">
								<?php if( get_theme_mod('lz_cleaning_services_email_text') != '' ||  get_theme_mod('lz_cleaning_services_email_address') != ''){ ?>
									<div class="col-lg-3 col-md-3">
										<i class="far fa-envelope"></i>
									</div>
									<div class="col-lg-9 col-md-9">
										<h6><?php echo esc_html( get_theme_mod('lz_cleaning_services_email_text','') ); ?></h6>
										<p><?php echo esc_html( get_theme_mod('lz_cleaning_services_email_address','') ); ?></p>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu','lz-cleaning-services'); ?></a></div>
	<div class="menu-section">
		<div class="container">
			<div class="nav">
				<?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
			</div>
		</div>
	</div>
</div>