<?php
/**
 * Template part for displaying posts
 * @package WordPress
 * @subpackage lz-fashion-ecommerce
 * @since 1.0
 * @version 1.4
 */

?>
<div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="article_content">   
    <div class="article-text">
      <h4><?php the_title();?></h4>   
      <img src="<?php the_post_thumbnail_url('full'); ?>"/>   
      <div class="metabox">
        <span class="entry-date"><?php the_time( get_option( 'date_format' ) ); ?></span>
        <a href="<?php echo esc_url( get_permalink() );?>"><span class="entry-author"><?php the_author(); ?></span></a>
        <a href="<?php echo esc_url( get_permalink() );?>"><span class="entry-comments"><?php comments_number( __('0 Comments','lz-fashion-ecommerce'), __('0 Comments','lz-fashion-ecommerce'), __('% Comments','lz-fashion-ecommerce') ); ?></span></a>
      </div>
      <p><?php the_content(); ?></p>      
    </div>
    <div class="clearfix"></div> 
  </div>
</div>