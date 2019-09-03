<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Expert Carpenter
 * @since 1.0
 * @version 1.4
 */

?>
<div class="site-info">
	<p><?php echo esc_html(get_theme_mod('expert_carpenter_footer_copy',__('Carpenter WordPress Theme By','expert-carpenter'))); ?> <?php expert_carpenter_credit(); ?></p>
</div>