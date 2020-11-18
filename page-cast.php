<?php	get_header();	?>

  <main>
  <?php get_template_part( 'include/common-kv' ) ?>
    <!-- sec -->
    <section class="cast_page">
      <h1 class="section_ttl">CAST</h1>
      <!-- main cast -->
      <div class="main_cast">
        <?php get_template_part( 'include/common-cast' ); ?>
      </div><!-- /.main cast -->
      <!-- middle cast -->
      <div class="middle_cast">
        <div class="section_inner">
          <ul class="middle_cast_list">
            <?php
              $sub_casts = array(
                'sub_cast',
                'sub_cast2',
                'sub_cast3',
                'sub_cast4'
                );
              foreach ( $sub_casts as $sub_cast ):
              if( have_rows($sub_cast) ):
              while( have_rows($sub_cast) ): the_row(); 
            ?>
            <li class="middle_cast_list_items">
              <?php
                $attachment_id = get_sub_field( 'sub_picture' );
                echo wp_get_attachment_image(
                  $attachment_id, 
                  'main_cast',
                  false,
                  array(
                    'class'=>'middle_cast_image',
                    'alt'=>trim( strip_tags( get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ) ) ),
                  )
                );
              ?>
              <div class="middle_cast_content">
                <p class="middle_cast_role"><?php	the_sub_field( 'sub_role' ); ?></p>
                <p class="middle_cast_name"><?php	the_sub_field( 'sub_name' ); ?></p>
                <p class="middle_cast_hobby"><?php	the_sub_field( 'sub_hobby' ); ?></p>
                <p class="middle_cast_history"><?php	the_sub_field( 'sub_history' ); ?></p>
              </div>
              </li>
              <?php
              endwhile;
              endif;
              endforeach 
            ?>
          </ul>
        </div><!-- /.section inner -->
      </div><!-- /.middle cast -->
      <!-- other cast -->
      <div class="other_cast">
        <div class="section_inner">
          <ul class="other_cast_list">
            <?php
              $other_casts = array(
                'other_cast',
                'other_cast2',
                'other_cast3',
                'other_cast4',
                'other_cast5',
                'other_cast6'
              );
              foreach ( $other_casts as $other_cast ):
              if( have_rows($other_cast) ):
              while( have_rows($other_cast) ): the_row(); 
            ?>
            <li class="other_cast_items">
              <p class="other_cast_role"><?php	the_sub_field( 'other_role' ); ?></p>
              <p class="other_cast_name"><?php	the_sub_field( 'other_name' ); ?></p>
              <p class="other_cast_hobby"><?php	the_sub_field( 'other_hobby' ); ?></p>
            </li>
            <?php
              endwhile;
              endif;
              endforeach 
            ?>
          </ul>
        </div><!-- /.section inner -->
      </div><!-- /.other cast -->
    </section><!-- /.sec cast -->
    <!-- sec -->
    <section class="cast_schedule">
    <?php get_template_part( 'include/schedule' ); ?>
    </section><!-- /.sec secshedule -->

  </main>
<?php	get_footer();	?>