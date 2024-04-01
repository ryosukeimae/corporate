<?php
/*
template Name: form_お問い合わせ
*/
?>


<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post();?>

  <main> 
    <section class="sub_visual">
          <div>
               <h1 class="sub_visual_title">
                <img src="<?php echo get_template_directory_uri(); ?>/img/okanewo.png" alt="おかねを、かるく。">
              </h1>
          </div>
    </section>


    <section class="sec_inquiry_form">
      <div class="inner">
        <h2 class="title_18_30_b">法人お問い合わせ</h2>
        <div class="form_comment">
          個人のお客さまからのお問い合わせはこちらでは受け付けておりません。お問い合わせをいただいた場合は、返信を差し上げることができませんので予めご了承ください。個人のお客さまでultra pay カードのご利用に関するご質問、ご要望は<a class ="form_link" href="https://support.ultra-pay.co.jp/hc/ja/requests/new" target="_blank">こちら</a>からお問い合わせください。
        </div>
        <?php the_content() ?>
      </div>  
    </section>

  </main>   

  <?php endwhile; ?>
<?php endif; ?>

   
<?php get_footer(); ?>



