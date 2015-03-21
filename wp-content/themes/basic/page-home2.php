<?php get_header();
/*
Template Name: Home2 Page
*/
?>



<div class="container setwidth">
  <?php $args = array(
            'post_type'       =>'mainfood',
            'orderby'         =>'rand',
            // 'posts_per_page'  => '6',
            );
          
          // WP LOOP
          $mainfood = new WP_Query( $args ); ?>
          
          <?php if ($mainfood->have_posts()) : while ($mainfood->have_posts()) : $mainfood->the_post(); ?>

  <div class="col-xs-6 down4">    
      <a target="_blank" href="<?php the_permalink();?>">
          <img class="img-responsive" src="<?php the_field('thumbnail');?>" alt="">                       
      </a>    
  </div>

   <?php endwhile; else: ?>
      
    <p>Sorry, no food matched your criteria.</p>
    <?php endif; ?>

</div>


  <div class="container setwidth">
  <?php $args = array(
            'post_type'       =>'subfood',
            'orderby'         =>'title',
            // 'posts_per_page'  => '6',
            );
          
          // WP LOOP
          $subfood = new WP_Query( $args ); ?>
          
          <?php if ($subfood->have_posts()) : while ($subfood->have_posts()) : $subfood->the_post(); ?>

  <div class="col-xs-4 ">    
      <a target="_blank" href="<?php the_permalink();?>">
          <img class="img-responsive" src="<?php the_field('subthumbnail');?>" alt="">                       
      </a>    
  </div>

   <?php endwhile; else: ?>
      
    <p>Sorry, no food matched your criteria.</p>
    <?php endif; ?>

</div>

  

  <div class="row gray2 down5">
    <div class="container setwidth type1">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php the_content(); ?>

    </div>
      <?php endwhile; else: ?>
        <p>Sorry, no pages matched your criteria.</p>
      <?php endif; ?>
  </div>







<?php get_footer(); ?>

