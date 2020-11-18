<?php	get_header();	?>

  <main>
    <?php get_template_part( 'include/common-kv' ) ?>
    
    <!-- sec -->
    <section class="comments_page_content section_inner">
      <h1 class="section_ttl">COMMENTS</h1>
      <p class="comments_sub_ttl">舞台関係者のみならず各界著名人からコメントが届いています！</p>
      <div class="comments_inner">
        <div class="comments_text_container">
          <p class="comments_text_ttl">京都佛立ミュージアム館長 <span>長松清潤</span></p>
          <p class="comments_text">「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br>
          まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。</p>
        </div>
      </div>
      <ul class="comments_list">
      <?php
      $commentators = array(
        'commentator1',
        'commentator2',
        'commentator3',
        'commentator4',
        'commentator5',
        'commentator6'
      );
        foreach ( $commentators as $commentator ):
        if( have_rows($commentator) ):
        while( have_rows($commentator) ): the_row();
      ?>
        <li class="comments_list_items">
          <p class="commtens_name"><?php the_sub_field( 'name' ); ?></p>
          <p class="commtens_job"><?php the_sub_field( 'job' ); ?></p>
          <p class="commtens_text"><?php the_sub_field( 'comment' ); ?></p>
        </li>
        <?php
          endwhile;
          endif;
          endforeach
        ?>
      </ul>
    </section><!-- /.sec comments_page_content -->
    <!-- sec -->
    <section class="comments_schedule">
    <?php get_template_part( 'include/schedule' ); ?>
    </section><!-- /.sec secshedule -->
    
  </main>
<?php	get_footer();	?>