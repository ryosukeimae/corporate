<?php get_header(); ?>

<main> 
  
  <section class="sub_visual">
    <div class="sub_visual_title">
      <img src="<?php echo get_template_directory_uri(); ?>/img/okanewo.png" alt="おかねを、かるく。">
    </div>
  </section>
  
  <section class="inner subpage_wrap">
    <h1 class="title_18_30_b announcement_title">ニュース</h1>

    <?php if( have_posts()) : ?>    
    <ul class="top_announce_container sub_announce_container">
      <?php while ( have_posts() ) : the_post(); ?>      
      <li class="top_announce_one">
        <a href="<?php the_permalink() ?>">
          <time class="post-news-time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
          <p><?php the_title(); ?></p>
        </a>
      </li> 
      <?php endwhile; ?>      
    </ul>
    <?php else: ?>
      <p>現在表示するお知らせはありません。</p>
    <?php endif; ?>    
    <div class="page_next">
      <?php if( function_exists('wp_pagenavi') ) { wp_pagenavi(); } ?>      
     <!-- <p>&lt;</p><p class="current">1</p><p>2</p><p>3</p><p>4</p><p>&gt;</p> -->
    </div>
  </section>  
  
  
</main>   
   
  
<?php get_footer(); ?>