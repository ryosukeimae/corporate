<?php get_header(); ?>

<main> 
  
  <section class="sub_visual">
    <div class="sub_visual_title">
      <img src="<?php echo get_template_directory_uri(); ?>/img/okanewo.png" alt="おかねを、かるく。">
    </div>
  </section>
  
  <section class="inner subpage_wrap">
    <?php while (have_posts()): the_post(); ?>  
        <h1 class="title_18_30_b announcement_title"><?php the_title(); ?></h1>
        <div class="sub_announce_container2">
          <time class="sub_announce_date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
          <div class="sub_announce_content">
            <?php the_content(); ?>
          </div>
        </div> 
    <?php endwhile; ?>    
  </section>  
  
</main>   
   
  
<?php get_footer(); ?>