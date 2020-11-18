<?php	get_header();	?>

  <main>
    <?php get_template_part( 'include/common-kv' ) ?>
    
    <!-- sec -->
    <section class="single section_inner">
      <div class="section_ttl">NEWS</div>
      <div class="single_content ">
        <?php
          if( have_posts()):
          while ( have_posts() ): the_post();
        ?>
        <?php
          echo get_the_post_thumbnail( $post->ID, 'page_news' );
        ?>
        <div class="single_ttlContainer">
          <time class="single_time"><?php the_time('Y.m.d'); ?></time>
          <h3 class="single_ttl"><?php	the_title() ?></h3>
        </div>
        <div class="single_textWrapper">
          <?php the_content(); ?>
        </div>
        </div>
      </div>
      <?php
        endwhile;
        endif;
      ?>
      <!-- ページ遷移 -->
      <div class="more_single">
        <?php
          $next_post = get_next_post( true );
          $prev_post = get_previous_post( true );
        ?>
        <div class="more_single_content">
          <?php	if ( $next_post ): ?>
            <a class="more_single_link" href="<?php the_permalink( $next_post->ID ); ?>">
              <img class="more_single_arrow" src="<?php	echo get_template_directory_uri(); ?>/assets/img/prev-arr.svg" alt="左矢印">
              <div class="prev more_single_textContainer">
                <time class="more_single_date"><?php echo mysql2date('Y.m.d', $next_post->post_date); ?></time>
                <p class="more_single_text"><?php	echo $next_post->post_title ?></p>
              </div>
            </a>
          <?php endif; ?>
        </div><!-- /.more_single_content -->

        <div class="more_single_content">
          <?php if( $prev_post ): ?>
            <a class="more_single_link" href="<?php the_permalink( $prev_post->ID ); ?>">
              <div class="next more_single_textContainer">
                <time class="more_single_date"><?php echo mysql2date('Y.m.d', $prev_post->post_date); ?></time>
                <p class="more_single_text"><?php	echo $prev_post->post_title ?></p>
              </div>
              <img class="more_single_arrow" src="<?php	echo get_template_directory_uri(); ?>/assets/img/next-arr.svg" alt="右矢印">
            </a>
          <?php endif; ?>
        </div><!-- /.more_single_content -->
      </div><!-- /.ページ遷移 -->
    </section><!-- /.sec single -->

    <div class="single_schedule">
    <?php get_template_part( 'include/schedule' ) ?>
    </div>
  </main>
<?php	get_footer();	?>