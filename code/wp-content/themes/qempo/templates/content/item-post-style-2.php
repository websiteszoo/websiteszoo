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

   if(!isset($excerpt_words)){
      $excerpt_words = qempo_get_option('blog_excerpt_limit', 20);
   }

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
   <article id="post-<?php echo esc_attr(get_the_ID()); ?>" <?php post_class('post post-style-2'); ?>>
      <div class="post-thumbnail">
         <a href="<?php echo esc_url( get_permalink() ) ?>">
            <?php the_post_thumbnail( $thumbnail, array( 'alt' => get_the_title() ) ); ?>
         </a>
      </div>  
        
      <div class="entry-content">
         <div class="content-inner">
            <div class="<?php echo esc_attr($meta_classes) ?>">
               <?php if( get_the_date() ){ ?>
                  <span class="entry-date ">
                     <i class="far fa-calendar-alt"></i>
                     <?php echo esc_html( get_the_date( get_option( 'date_format' ) ) ) ?>
                  </span>
               <?php } ?>
               <span class="line"><?php echo esc_html__('/', 'qempo'); ?></span>
               <?php the_category(); ?>
            </div> 
            <h2 class="entry-title">
               <a href="<?php echo esc_url( get_permalink() ) ?>"><?php the_title() ?></a>
            </h2>
            <div class="read-more">
               <a class="btn-inline" href="<?php echo esc_url( get_permalink() ) ?>">
                  <?php echo esc_html__('Read More', 'qempo'); ?></a>
            </div>
         </div>
         
      </div>
      <a href="<?php echo esc_url( get_permalink() ) ?>" class="link-overlay"></a>
   </article>   
</div>

  