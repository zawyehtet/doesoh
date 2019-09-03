<?php
/**
 * Template part for displaying  Single Posts
 * @package WordPress
 * @subpackage NoorLite
 * @since 1.0
 * @version 1.4
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="single-post">
    <div class="article_content">
      <div class="article-text">
        <h3 class="single-post"><?php the_title();?></h3>
          <div class="metabox1"> 
            <span class="entry-author"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><i class="fa fa-user"></i><?php the_author(); ?></span></a>
            <span class="entry-date"><i class="fa fa-calendar"></i><?php the_time( get_option( 'date_format' ) ); ?></span>
            <span class="entry-comments"><i class="fa fa-comments"></i><?php comments_popup_link( __( 'Leave a comment', 'noorlite' ), __( '1 Comment', 'noorlite' ), __( '% Comments', 'noorlite' ) ); ?></span>
          </div>
        <img src="<?php the_post_thumbnail_url('full'); ?>"/>
        <p><?php the_content(); ?></p>
        
        <?php
            wp_link_pages(
    			array(
    				'before' => '<div class="page-links">' . __( 'Pages:', 'noorlite' ),
    				'after'  => '</div>',
    			)
    		);
		?>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>