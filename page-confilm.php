<?php	get_header();	?>

  <main>
    <?php get_template_part( 'include/common-kv' ) ?>
    <!-- sec -->
    <section class="confilm_page">
      <h1 class="section_ttl">INQUIRY</h1>
      <div class="confilm_container" action="">
       <p class="confilm_text">
        お問い合わせありがとうございました。<br>
        メッセージは正常に送信されました。
       </p>
      </div>
    </section><!-- /.sec confilm_page -->
    <!-- sec -->
    <section class="confilm_news">
      <?php	get_template_part( 'include/common-news' ); ?>
    </section><!-- /.sec confilm_news -->
    <!-- sec -->
    <section class="confilm_schedule">
      <?php get_template_part( 'include/schedule' ); ?>
    </section><!-- /.sec secshedule -->

  </main>
<?php	get_footer();	?>