<?php	get_header();	?>

  <main>
    <?php get_template_part( 'include/common-kv' ) ?>
    <!-- sec -->
    <section class="archive">
      <div class="section_inner">
        <h1 class="section_ttl"><?php	single_cat_title(); ?></h1>
        <ul class="archive_list">
          <?php
            if( have_posts()):
              while ( have_posts() ): the_post();
          ?>
          <li class="archive_list_items">
            <a class="archive_list_link" href="<?php the_permalink(); ?>">
            <?php echo get_the_post_thumbnail( $post->ID, 'front_news' ); ?>
              <div class="archive_text_wrapper">
                <time class="archive_list_date"><?php the_time( 'Y.m.d' ); ?></time>
                <p class="archive_list_ttl"><?php the_title(); ?></p>
              </div>
            </a>
          </li>
          <?php
            endwhile;
            endif;
            wp_reset_postdata();
          ?>
        </ul>
      </div><!-- /.section_inner -->
      <!-- ページャー -->
      <?php
        wp_pagenavi(); 
      ?>
    </section><!-- /.sec archive -->

    <!-- sec  -->
    <section class="archive_schedule">
    <?php get_template_part( 'include/schedule' ) ?>
    </section><!-- sec shedule -->
  </main>
<?php	get_footer();	?>