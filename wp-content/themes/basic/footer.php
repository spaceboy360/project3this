	<div id="footer">
		<?php wp_footer(); ?>
	</div>
      
	<div class="row white">
		<div class="container footer setwidth">
			<div class="col-xs-12">
				<h2 class="footertype1">The Chefs</h2>
			</div>

		
  <?php $args = array(
            'post_type'       =>'chef',
            'orderby'         =>'title',
            // 'posts_per_page'  => '6',
            );
          
          // WP LOOP
          $chef = new WP_Query( $args ); ?>
          
          <?php if ($chef->have_posts()) : while ($chef->have_posts()) : $chef->the_post(); ?>

  <div class="col-xs-3 space5">    
      <a target="_blank" href="<?php the_permalink();?>">
          <img class="img-responsive" src="<?php the_field('person');?>" alt="">                       
      </a>    
  </div>

   <?php endwhile; else: ?>
      
    <p>Sorry, no food matched your criteria.</p>
    <?php endif; ?>


		</div>
		

		<div class="well noborder4">
				<div class="container squeeze">
					<div class="col-xs-3">
						<a target="_blank" href="http://www.google.com">
						<img class="img-responsive center3" src="<?php bloginfo('template_directory'); ?>/images/contact1.png" alt="logo"></a>
					</div>
					<div class="col-xs-3">
						<a target="_blank" href="">
						<img class="img-responsive center3" src="<?php bloginfo('template_directory'); ?>/images/contact2.png" alt="logo"></a>
					</div>
					<div class="col-xs-3">
						<a target="_blank" href="">
						<img class="img-responsive center3" src="<?php bloginfo('template_directory'); ?>/images/contact3.png" alt="logo"></a>
					</div>
					<div class="col-xs-3">
						<a target="_blank" href="">
						<img class="img-responsive center3" src="<?php bloginfo('template_directory'); ?>/images/contact4.png" alt="logo"></a>
					</div>
				</div>
			<div class="col-xs-12 center2 finalfont">
				<a href="mailto:Contact@Chefstable.com" class="btn center2">Contact@Chefstable.com</a>
			</div>

			<div class="col-xs-12 center2 finalfont">
				<p>Copyright 2015 Chefstable.com</p>
			</div>
		</div>
		
	</div>



</div><!-- x content -->
</body>
</html>