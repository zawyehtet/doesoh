<?php
/**
 * Template part for displaying posts
 * @package WordPress
 * @subpackage noor
 * @since 1.0
 * @version 1.0
 */

?>

<div id="post-<?php the_ID(); ?>">
  <div class="article_content">
    <div class="metabox"> 
      <span class="entry-author"><a href="<?php echo esc_url( get_permalink() );?>"><i class="fa fa-user"></i><?php the_author(); ?></a></span>
      <span class="entry-date"><i class="fa fa-calendar"></i><?php echo esc_html( get_the_date()); ?></span>
      <span class="entry-comments"><a href="<?php echo esc_url( get_permalink() );?>"><i class="fa fa-comments"></i><?php comments_number( __('0 Comments','noorlite'), __('0 Comments','noorlite'), __('% Comments','noorlite') ); ?></a></span>
    </div>
    <?php if(has_post_thumbnail()) { ?>
      <?php the_post_thumbnail(); ?>  
    <?php }?>
    <h3><a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></h3>
    <p><?php the_excerpt(); ?></p>
    <div class="read-btn">
      <a href="<?php the_permalink();?>" title="<?php esc_attr_e( 'READ MORE', 'noorlite' ); ?>"><?php esc_html_e('READ MORE','noorlite'); ?>
      </a>
    </div>
    <div class="clearfix"></div> 
  </div>
</div>