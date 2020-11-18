<?php	get_header();	?>

  <main>
    <!-- story page kv セクション -->
    <?php	$group = get_field('main_story'); ?>
    <!-- sec -->
    <section class="story_page_kv" style="background-image:url( <?php echo $group['main_story_image_url']; ?> )">
      <div class="story_page_kv_wrapper">
        <div class="story_page_top_group">
          <div class="story_page_ttl_content">
            <div class="site_ttl">
               <img class="site_ttl_png" src="<?php	echo get_template_directory_uri(); ?>/assets/img/site_ttl.svg" alt="世界最長の叙事詩をピーター・ブルック以来の全編舞台化。完全版マハーバーラタ">
            </div>
          </div>
          <img class="performance_date" src="<?php	echo get_template_directory_uri(); ?>/assets/img/performance_date.svg" alt="2020年7月4日〜7日なかのZERO大ホール">
          <!-- </div> -->
        </div>
        <a class="story_page_kv_btn common_button" href="#">チケット予約サイトへ</a>
        <?php	get_template_part( 'include/content-common-bread-crumbs' ); ?>
        <h1 class="section_ttl">STORY</h1>
        <div class="story_page_kv_text_wrapper">
          <p class="story_page_kv_subHeading"><?php	echo $group['main_story_heading']; ?></p>
          <p class="story_page_kv_text"><?php	echo $group['main_story_content']; ?></p>
        </div>
      </div>
    </section><!-- /.sec story_page_kv -->
    <!-- sec -->
    <section class="story_page_content">
      <?php
        $sub_storys = array(
        'sub_story1',
        'sub_story2',
        'sub_story3',
        );
        foreach ( $sub_storys as $sub_story ):
        if( have_rows($sub_story) ):
        while( have_rows($sub_story) ): the_row();
      ?>
      <div class="story_page_block" 
      style="background-image:url( <?php the_sub_field( 'sub_story_image_url' );?> )"
      >
        <div class="story_page_text_wrapper" >
          <p class="story_page_block_text"><?php the_sub_field( 'sub_story_content' );?></p>
        </div>
      </div>
      <?php
      endwhile;
      endif;
      endforeach;
      ?>
    </section><!-- /.sec story_page_content -->
    <!-- sec -->
    <section class="story_schedule">
    <?php get_template_part( 'include/schedule' ); ?>
    </section><!-- /.sec secshedule -->
  </main>
<?php	get_footer();	?>