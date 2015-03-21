<?php get_header();
/*
Template Name: Home Page
*/
?>



<div class="row black down1">

	<div class="container down2">
	
           <?php $args = array(
            'post_type'       =>'food',
            'orderby'         =>'rand',
            'posts_per_page'  => '6',
            );
          
          // WP LOOP
          $food = new WP_Query( $args ); ?>
          
          <?php if ($food->have_posts()) : while ($food->have_posts()) : $food->the_post(); ?>
          
             <div class="col-xs-4 marginround">
              
                <!-- <div class="well"> -->
                    <a target="_blank" href="<?php the_permalink();?>">
                       <img class="img-responsive" src="<?php the_field('image');?>" alt="">                       
                    </a>
                    

                <!-- </div> -->
            </div>
          <?php endwhile; else: ?>
  		
            <p>Sorry, no pages matched your criteria.</p>
          <?php endif; ?>
    </div>  
         
  	<div class="row white down3">
  		<div class="container down3">
  		<div class="col-xs-6">
  			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  			<?php the_content(); ?>
  		</div>
  			<?php endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>
  		</div>
  	</div>
    <div class="container">
    <?php

$chef = new WP_Query( $args ); ?>
          
          <?php if ($chef->have_posts()) : while ($chef->have_posts()) : $chef->the_post(); ?>
          
             <div class="col-xs-4 marginround">
              
                <div class="well">
                    <a target="_blank" href="<?php the_permalink();?>">
                       <img class="img-responsive" src="<?php the_field('person');?>" alt="">                       
                    </a>
                </div>
              </div>
           
          <?php endwhile; else: ?>
      
            <p>Sorry, no pages matched your criteria.</p>
          <?php endif; ?>
 </div>



  </div>





 	






<?php get_footer(); ?>

