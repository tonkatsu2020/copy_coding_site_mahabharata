<div class="section_inner">
  <?php $term_obj = get_term_by( 'slug','news','category' ); ?>
  <h2 class="section_ttl">
    <?php 
      if(is_front_page()){
        echo $term_obj->name; 
      } else {
        echo 'LATEST NEWS';
      }
    ?>
  </h2>
  <a class="news_button common_button" href="<?php echo esc_url( get_term_link( $term_obj ) ); ?>">ニュース一覧へ</a>
  <ul class="news_list">
    <?php
      $news_posts = get_specific_posts( 'post', 'category', 'news', 5 );
      if( $news_posts->have_posts()):
      while ( $news_posts->have_posts() ): $news_posts->the_post();
      $loopcounter++;
    ?>
    <li class="news_list_items">
      <a class="news_list_link" href="<?php permalink_link(); ?>">
      <?php 
        $thumbnail = get_the_post_thumbnail( $post->ID, 'front_news' );
        $image_output = preg_replace('/(<img.?)/', "$1"."class='news_list_image'", $thumbnail);
        echo $image_output;
      ?>
        <div class="news_text_wrapper">
          <p class="news_list_date"><?php the_time( 'Y.m.d' );?></p>
          <p class="news_list_ttl">
            <?php
              if($loopcounter>=4) {
                echo mb_substr($post->post_title, 0, 23).'...'; 
              } else {
                the_title();
              }
            ?>
          </p>
        </div>
      </a>
    </li>
    <?php
      endwhile;
      endif;
      wp_reset_postdata();
    ?>
  </ul>
</div>