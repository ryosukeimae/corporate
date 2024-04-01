<?php get_header(); ?>  
  
<main> 
  
  <section class="main_visual">
        <div>
             <h1 class="main_visual_title">
              <img src="<?php echo get_template_directory_uri(); ?>/img/okanewo.png" alt="おかねを、かるく。">
            </h1>
        </div>
  </section>

  <section class="sec_service" id="anchor_service">
		<div class="contents bg_gray inner">
			<div class="sec_service_wrap_1">
				<h2>
					<img class="ultra_logo" src="<?php echo get_template_directory_uri(); ?>/img/ultra_logo.png" alt="ultra pay">
				</h2>
				<div class="caption">
					ultra pay カードは、審査なしで誰でも持てるプリペイド式Visaカードです。
				</div>
				<a class="btn_1 btn_hover" href="https://ultra-pay.co.jp/" target="_blank">
					<span>サービスサイトへ</span>
				</a>
			</div>
			<div class="sec_service_cardimg">
				<img src="<?php echo get_template_directory_uri(); ?>/img/card_img.png" alt="ultra pay カード画像">
			</div>
		</div>
		<div class="contents bg_gray inner second">
			<div class="sec_service_wrap_1">
				<h2>
					<img class="payblend_logo" src="<?php echo get_template_directory_uri(); ?>/img/payblend_logo.png" alt="PayBlend">
				</h2>
				<div class="caption">
					PayBlendは、事業者さま・そのお客さまと共に<br class="pc">新たな顧客体験を共創する決済プラットフォームです。
				</div>
				<a class="btn_1 btn_hover" href="https://payblend.ultra-pay.co.jp/" target="_blank">
					<span>サービスサイトへ</span>
				</a>
			</div>
			<div class="payblend_img">
				<img src="<?php echo get_template_directory_uri(); ?>/img/payblend_img.png" alt="PayBlendスマホ画像">
			</div>
		</div>	
  </section>

  <section class="sec_announce">
    <div class="inner">
      <div class="top_announce_title_wrap">
        <h2 class="top_title_announce title_18_30_b">ニュース</h2>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>pressrelease">View all<span>&rarr;</span></a>
      </div>
      
          <?php
            $information= get_posts( array(
              'posts_per_page' => 3, //表示件数
              'post_type' => array('pressrelease') //カスタム投稿名              
            ));
            if( $information):
          ?>      
      <ul class="top_announce_container">
            <?php
              foreach( $information as $post ):
              setup_postdata( $post );
            ?>        
        <li class="top_announce_one">
          <a href="<?php the_permalink(); ?>">
            <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time> 
            <p><?php the_title(); ?></p>
          </a>
        </li>
            <?php
            endforeach;
            wp_reset_postdata();
            ?>        
      </ul>
          <?php else: ?>
          <p>表示できる情報はありません。</p>
          <?php endif; ?> 
    </div>
    
  </section>
    
</main>   
   
<?php get_footer(); ?>
