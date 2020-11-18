<?php	get_header();	?>

  <main>
    <!-- sec -->
    <section class="kv">
      <div class="kv_inner">
          <h1 class="site_ttl">
            <img class="site_ttl_img" src="<?php echo	get_template_directory_uri(); ?>/assets/img/site_ttl.svg" alt="世界最長の叙事詩をピーター・ブルック以来の全編舞台化。完全版マハーバーラタ">
          </h1>
        <div class="kv_container">
          <img class="performance_date" src="<?php echo	get_template_directory_uri(); ?>/assets/img/performance_date.svg" alt="2020年7月4日〜7日なかのZERO大ホール">
          <p class="kv_text">小池博史ブリッジプロジェクトが2013年から2020年までの8カ年計画で臨む、インド古代叙事詩「マハーバーラタ」の全編舞台作品化計画。いよいよその集大成である完全版マハーバーラタの公演が決定！！<br>
          アジア各国のアーティストらが共同で取り組み、発展を遂げる本事業はアジア、そして世界へ向けてビッグウェーブを起こす。タイと日本から世界へと発信する本作。どうぞお見逃しなく！</p>
          <a class="kv_button common_button" href="<?php the_field( 'reserve' ); ?>">チケット予約サイトへ</a>
        </div>
      </div><!-- /.kv_wrapper -->
    </section><!-- /.sec kv -->

    <!-- sec -->
    <section class="introduction">
      <div class="section_inner">
        <div class="introduction_inner">
          <h2 class="section_ttl">INTRODUCTION</h2>
          <p class="introduction_question">なぜ今「マハーバーラタ」なのか？</p>
          <div class="introduction_text_wrapper">
            <p class="introduction_text">「平和」について改めて考えるストーリー全世界を司るものが神だとすれば、なぜ神であるクリシュナは、策を巡らしてまで、登場人物すべてを滅亡へと導いたのか？<br>
            それは、「戦い」そのものを廃絶しようとしたからだと考えられる。戦うことそのものへの虚しさ、「戦い」そのものの「悪」を問う物語が「マハーバーラタ」と言える。<br>
            平和とは？私たちには何ができるのか？根源的な「平和」を希求する物語。<br>
            現代社会を映し出す人間ドラマ対難民問題やヘイトスピーチ問題に見られるように、文化的背景が「異」なるものに対して非寛容になりつつある現代社会。<br>
            神の血を引きながらも、現代人同様に欲望や嫉妬によって争う登場人物たちが破滅していく様を描いた「マハーバーラタ」のストーリーは、人類が歩んできた争いの歴史の物語とも言い換えられる。<br>
            非寛容による悲劇の物語である「マハーバーラタ」を現代社会に重ね合わせつつ描くことで「寛容」の重要性を示す。
            </p>
          </div>
        </div>
      </div>
    </section><!-- /.sec introduction -->

    <!-- sec -->
    <section class="top_news">
    <?php	get_template_part( 'include/common-news' ); ?>
    </section><!-- /.sec news -->

    <!-- sec story -->
    <section class="story">
      <?php	$story_obj = get_page_by_path( 'story' ); ?>
      <h2 class="section_ttl"><?php	echo get_the_title($story_obj); ?></h2>
      <div class="section_inner">
        <p class="story_text">マハー（偉大な）、バーラタ（バラタ族）、つまり「偉大なバラタ族」の物語。神々が人間界を作り出すところから始まり、バラタ族の中のクル家とパーンドゥ家という二つの部族間の対立を巡るストーリー。神の血を引く個性豊かな登場人物たちによる差別、対立、欲望、嫉妬など、生の苦しみが描かれ、最終的には一族が破滅していく。<br>
        世界的な文学作品古代ギリシャの「イーリアス」「オデュッセイア」と並ぶ世界三大叙事詩の一つに数えられており、「ラーマーヤナ」と双璧を成すインド二大叙事詩の一つ。原語はサンスクリット語であるが、全18巻、10万詩節を超えるその長さは聖書の約4倍と言われ、原典の日本語訳はいまだ完結していない。</p>
        <a class="story_button common_button" href="<?php	echo esc_url( home_url('story') ); ?>">もっと詳しく</a>
      </div>
    </section><!-- /.sec story -->

    <!-- sec -->
    <section class="comments">
      <div class="section_inner">
        <?php	$comments_obj = get_page_by_path( 'comments' ); ?>
        <h2 class="section_ttl"><?php	echo get_the_title($comments_obj); ?></h2>
        <p class="comments_sub_ttl">舞台関係者のみならず各界著名人からコメントが届いています！</p>
        <div class="comments_inner">
          <div class="comments_text_container">
            <p class="comments_text_ttl">京都佛立ミュージアム館長 <span>長松清潤</span></p>
            <p class="comments_text">「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br>
            まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。</p>
          </div>
          <a class="comments_button common_button" href="<?php echo esc_url( home_url('comments') ); ?>">もっと見る</a>
        </div>
      </div>
    </section><!-- /.sec comments -->

    <!-- sec -->
    <section class="top_cast">
      <h2 class="section_ttl">CAST</h2>
      <?php get_template_part( 'include/common-cast' ) ?>
    </section><!-- /.sec cast -->

    <!-- sec -->
    <section class="top_schedule">
    <?php get_template_part( 'include/schedule' ) ?>
    </section><!-- /.sec schedule -->

  </main>
<?php	get_footer();	?>