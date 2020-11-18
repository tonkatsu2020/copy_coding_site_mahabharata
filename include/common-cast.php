<div class="main_cast_wrapper">
  <div class="section_inner">
    <?php if( is_front_page() ):// トップページの場合 ?>
    <ul class="cast_list">
      <?php
        $casts = array(
          get_field('main_cast','22'),
          get_field('main_cast2','22'),
          get_field('main_cast3','22'),
        );
        foreach ( $casts as $cast ):
      ?>
      <li class="cast_list_items">
        <?php
          echo wp_get_attachment_image(
            $cast["picture"],
            'main_cast',
            false,
            array(
              'class'=>'cast_image',
              'alt'=>trim( strip_tags( get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ) ) ),
            )
          );
        ?>
        <div class="cast_profile">
          <p class="cast_role"><?php	echo $cast["role"] ?></p>
          <p class="cast_name"><?php	echo $cast["name"] ?></p>
          <p class="cast_hobby"><?php	echo $cast["hobby"] ?></p>
        </div>
        <p class="cast_history"><?php	echo $cast["history"] ?></p>
      </li>
      <?php	endforeach; ?>
    </ul>
    <div class="cast_button">
      <a class="common_button" href="<?php	echo esc_url( home_url('cast') ); ?>">もっと見る</a>
    </div>
    <?php	else: // 下層CASTページの場合 ?>
    <ul class="cast_list">
      <?php
        $main_casts = array(
          'main_cast',
          'main_cast2',
          'main_cast3'
        );
        foreach ( $main_casts as $main_cast ):
        if( have_rows($main_cast) ):
        while( have_rows($main_cast) ): the_row(); 
      ?>
      <li class="cast_list_items">
        <?php
          echo wp_get_attachment_image(
            get_sub_field( 'picture' ), 
            'main_cast',
            false,
            array(
              'class'=>'cast_image',
              'alt'=>trim( strip_tags( get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ) ) ),
            )
          );
        ?>
        <div class="cast_profile">
          <p class="cast_role"><?php	the_sub_field( 'role' ); ?></p>
          <p class="cast_name"><?php	the_sub_field( 'name' ); ?></p>
          <p class="cast_hobby"><?php	the_sub_field( 'hobby' ); ?></p>
        </div>
        <p class="cast_history"><?php	the_sub_field( 'history' ); ?></p>
      </li>
      <?php
        endwhile;
        endif;
        endforeach 
      ?>
    </ul>
  </div><!-- /.section_inner -->
<?php	endif; ?>
</div>