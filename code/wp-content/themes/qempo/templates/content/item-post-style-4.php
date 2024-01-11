<?php 
   $item_classes = 'all ';
   $separator = ' ';
   $item_cats = get_the_terms( get_the_ID(), 'category' );
   if(!empty($item_cats) && !is_wp_error($item_cats)){
      foreach((array)$item_cats as $item_cat){
         $item_classes .= $item_cat->slug . ' ';
      }
   }
   
   $thumbnail = (isset($thumbnail_size) && $thumbnail_size) ? $thumbnail_size : 'post-thumbnail';
   $excerpt_words = (isset($excerpt_words) && $excerpt_words) ? $excerpt_words : '30';

   if(!isset($layout)){
      $layout = 'carousel';
   }
   if($layout == 'grid'){
      $item_classes .= ' item-columns';
   }

   $meta_classes = 'entry-meta';
   if( empty(get_the_date()) ){
      $meta_classes = 'entry-meta schedule-date';
   }
?>

<div class="<?php echo esc_attr($item_classes) ?>">
   <article id="post-<?php echo esc_attr(get_the_ID()); ?>" <?php post_class('post post-style-4'); ?>>
      <div class="post-thumbnail">
         <a href="<?php echo esc_url( get_permalink() ) ?>">
            <?php the_post_thumbnail( $thumbnail, array( 'alt' => get_the_title() ) ); ?>
         </a>
         <?php if( get_the_date() ){ ?>
            <div class="entry-date">               
               <span class="day"><?php echo esc_html( get_the_date( 'd' ) ) ?></span>
               <span><?php echo esc_html( get_the_date( 'M' ) ) ?></span>
            </div>
         <?php } ?>
      </div>   

      <div class="entry-content">
         <div class="content-inner">
            <div class="<?php echo esc_attr($meta_classes) ?>">
               <?php qempo_posted_on(); ?>
            </div> 
            <h3 class="entry-title"><a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark"><?php the_title() ?></a></h3>
         </div>
      </div>
   </article>   
</div>

  