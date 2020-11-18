<?php	get_header();	?>

  <main>
    <?php get_template_part( 'include/common-kv' ) ?>
    <!-- sec -->
    <section class="inquiry_page">
      <h1 class="section_ttl">INQUIRY</h1>
      <!-- <form class="contact_form_container" action=""> -->
      <?php	the_content(); ?>
      <!-- </form> -->
    </section><!-- /.sec inquiry_page -->
    <!-- sec -->
    <section class="inquiry_schedule">
    <?php get_template_part( 'include/schedule' ); ?>
    </section><!-- /.sec secshedule -->
  </main>
<?php	get_footer();	?>