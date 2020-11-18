<div class="schedule_wrapper section_inner">
  <div class="schedule_content">
    <h2 class="section_ttl">SCHEDULE</h2>
    <ul class="schedule_list">
    <?php if( is_front_page() ): // トップページ時の場合 ?>
      <?php
        $schedules = array(
          'repeat_schedule',
          'repeat_schedule2',
          'repeat_schedule3',
          'repeat_schedule4'
        );
        foreach ( $schedules as $schedule ):
        while( have_rows($schedule) ): the_row(); 
      ?>
      <?php if( get_sub_field( 'schedule_event' ) ): ?>
      <li class="schedule_items">
        <p class="schedule_date schedule_common">
          <?php the_sub_field( 'schedule_event' ); ?>
        </p>
        <a class="schedule_ticket_link schedule_common" href="<?php	the_sub_field( 'schedule_link' ); ?>">
          <?php	the_sub_field( 'schedule_linktext' ); ?>
        </a>
      </li>
        <?php else: // schedule_eventが無い場合は<li>を出力しない ?>
        <?php endif; ?>
      <?php endwhile; endforeach; ?>

    <?php	else: // トップページ以外の場合 ?>
      <?php
        $groups = array(
          get_field('repeat_schedule','14'),
          get_field('repeat_schedule2','14'),
          get_field('repeat_schedule3','14'),
          get_field('repeat_schedule4','14'),
        );
        foreach ( $groups as $group ):
      ?>
        <?php if( $group["schedule_event"] ): ?>
          <li class="schedule_items">
            <p class="schedule_date schedule_common"><?php	echo $group["schedule_event"] ?></p>
            <a class="schedule_ticket_link schedule_common" href="<?php	echo $group["schedule_link"] ?>">
              <?php	echo $group["schedule_linktext"] ?>
            </a>
          </li>
        <?php else: ?>

        <?php endif; ?>
      <?php endforeach; ?>
    <?php	endif; ?>
    </ul>
  </div>
  <!-- ボタン -->
  <div class="schedule_btn_wrapper">
    <?php $inquiry_obj = get_page_by_path( 'inquiry' ); ?>
    <a class="schedule_contact_button common_button" 
    href="<?php echo esc_url( home_url('inquiry') ); ?>">お問い合わせはこちら</a>
    <a class="schedule_reservation_button common_button" 
      href="
      <?php	
        if( is_front_page() ):
          the_field( 'reserve' ); 
        else:
          the_field('reserve','14');
        endif;
      ?>">チケット予約サイトへ
    </a>
  </div>
</div>
