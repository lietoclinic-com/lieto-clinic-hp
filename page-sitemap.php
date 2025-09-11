<?php get_header(); ?>

<main class="l-main">

  <section class="p-pageSitemap">

    <div class="p-pageSitemap__head c-pageTitleHead">
      <?php get_template_part('template-parts/part', 'breadcrumb'); ?>
      <div class="c-pageTitle">
        <div class="c-pageTitle__en">SITEMAP</div>
        <h1 class="c-pageTitle__ja">サイトマップ</h2>
      </div>
    </div>

    <div class="p-pageSitemap__body">
      <div class="p-pageSitemap__area">
        <div class="p-pageSitemap__box">
          <div class="p-pageSitemap__boxTitle">TOP</div>
          <ul class="p-pageSitemap__list">
            <li class="p-pageSitemap__item"><a href="<?php echo esc_url(home_url()); ?>#top-reason">選ばれる理由</a></li>
            <li class="p-pageSitemap__item"><a href="<?php echo esc_url(home_url()); ?>#top-about">わたしたちの思い</a></li>
            <!-- <li class="p-pageSitemap__item has-child">
              <a href="">わたしたちの想い</a>
              <ul class="p-pageSitemap__subList">
                <li class="p-pageSitemap__subItem"><a href="">すぐに効果を実感したい方へ</a></li>
                <li class="p-pageSitemap__subItem _column"><a href="">太りにくく、痩せやすいカラダ作りへ</a></li>
              </ul>
            </li> -->
            <li class="p-pageSitemap__item"><a href="<?php echo esc_url(home_url()); ?>#top-treatment">施術内容</a></li>
            <li class="p-pageSitemap__item"><a href="<?php echo esc_url(home_url()); ?>#top-access">アクセス</a></li>
            <li class="p-pageSitemap__item"><a href="<?php echo esc_url(home_url()); ?>#top-message">担当医師挨拶</a></li>
            <li class="p-pageSitemap__item"><a href="<?php echo esc_url(home_url()); ?>#top-faq">よくあるご質問</a></li>
            <li class="p-pageSitemap__item"><a href="<?php echo esc_url(home_url()); ?>#top-information">新着情報</a></li>
          </ul>
        </div>

        <div class="p-pageSitemap__box">
          <div class="p-pageSitemap__boxTitle">当院について</div>
          <ul class="p-pageSitemap__list">
            <li class="p-pageSitemap__item"><a href="/greeting/">担当医師挨拶</a></li>
            <li class="p-pageSitemap__item"><a href="/about/">当院について</a></li>
            <li class="p-pageSitemap__item"><a href="/menu/">施術の流れ</a></li>
            <li class="p-pageSitemap__item"><a href="/minor/">未成年者の方へ</a></li>
            <li class="p-pageSitemap__item has-child">
              <a href="">クリニック一覧</a>
              <ul class="p-pageSitemap__subList">
                <?php 
                  $args = array(
                      'post_type' => 'clinic',
                      'posts_per_page' => -1,
                  );
                  $query = new WP_Query($args);
                ?>
                <?php if($query->have_posts()): ?>
                  <?php while($query->have_posts()): $query->the_post(); ?>
                    <li class="p-pageSitemap__subItem">
                      <a href="<?php the_permalink(); ?>"><?php echo get_field("clinic_name"); ?>院</a>
                    </li>
                  <?php endwhile; wp_reset_postdata() ?>
                <?php endif; ?>
              </ul>
            </li>
            <li class="p-pageSitemap__item"><a href="/news/">新着情報</a></li>
            <li class="p-pageSitemap__item"><a href="/recruit/">採用情報</a></li>
            <li class="p-pageSitemap__item"><a href="/price/">料金一覧</a></li>
            <li class="p-pageSitemap__item"><a href="/monitor/">モニター募集</a></li>
            <li class="p-pageSitemap__item"><a href="">当院の症例</a></li>
            <li class="p-pageSitemap__item"><a href="/voice/">患者様の声</a></li>
          </ul>
        </div>

        <div class="p-pageSitemap__box">
          <div class="p-pageSitemap__boxTitle">施術について</div>
          <ul class="p-pageSitemap__list">
            <li class="p-pageSitemap__item has-child">
              <a href="/menu/">診療メニュー</a>
              <ul class="p-pageSitemap__subList">
                <li class="p-pageSitemap__subItem"><a href="/menu/stimsure/">医療痩身機器<span>StimSure-スティムシュアー</span></a></li>
                <li class="p-pageSitemap__subItem"><a href="/menu/clatuu-a/">医療脂肪冷却機器<span>CLATUU α -クラツーアルファ-</span></a></li>
                <li class="p-pageSitemap__subItem"><a href="/menu/hifu/">医療HIFU<span>ULTRAcel [zíː] -ウルトラセル ジィー-</a></li>
                <li class="p-pageSitemap__subItem"><a href="/menu/fat-dissolving-injection/">脂肪溶解注射</a></li>
                <li class="p-pageSitemap__subItem"><a href="/menu/glp-1/">GLP-1</a></li>
                <li class="p-pageSitemap__subItem"><a href="/menu/beauty-drip/">ダイエット美容点滴</a></li>
                <li class="p-pageSitemap__subItem"><a href="/menu/original-supplement/">オリジナルサプリメント</a></li>
                <li class="p-pageSitemap__subItem"><a href="/menu/original-protein/">オリジナルプロテイン</a></li>
                <li class="p-pageSitemap__subItem"><a href="/menu/diet-supplement/">ダイエット薬</a></li>
                <li class="p-pageSitemap__subItem"><a href="/menu/guidance/">食事・栄養指導</a></li>
                <li class="p-pageSitemap__subItem"><a href="/menu/exosome/">細胞レベルで美しく<span>エクソソーム点滴</span></a></li>
                <!-- 部位別メニュー -->
                <li class="p-pageSitemap__subItem is-parts_parent">部位別メニュー</li>
                <li class="p-pageSitemap__subItem is-parts"><a href="/menu/upper-arm/">二の腕痩せ</a></li>
                <li class="p-pageSitemap__subItem is-parts"><a href="/menu/face-slimming/">顔痩せ</a></li>
                <li class="p-pageSitemap__subItem is-parts"><a href="/menu/lose-weight/">お腹痩せ</a></li>
                <li class="p-pageSitemap__subItem is-parts"><a href="/menu/slim-thighs/">太もも痩せ</a></li>
              </ul>
            </li>
          </ul>
        </div>

        <div class="p-pageSitemap__box">
          <div class="p-pageSitemap__boxTitle">その他</div>
          <ul class="p-pageSitemap__list">
            <li class="p-pageSitemap__item"><a href="/contact/">お問い合わせ</a></li>
            <li class="p-pageSitemap__item"><a href="https://ac.lietoclinic.com/cl/043cbe9C3Ge4cC56/?bid=1fC589b7e76c3p4p&_gl=1*1gvdhfb*_gcl_au*MTQxODQxMzY3Mi4xNzA3NDQ1MDg5">無料カウンセリング予約</a></li>
            <li class="p-pageSitemap__item"><a href="/faq/">よくあるご質問</a></li>
            <li class="p-pageSitemap__item has-child">
              <?php
                $query = new WP_Query(
                  array(
                    'post_type' => 'post',
                    'post_status' => 'publish',  
                  )
                );
              ?>
              <?php if ($query->have_posts()) : ?>
                <a href="/column/">コラム</a>
              <?php endif;
              wp_reset_postdata(); ?>

              <ul class="p-pageSitemap__subList">
                <?php
                  $terms = get_terms('category');
                  foreach ($terms as $term) :
                    $slug = $term->slug;
                ?>
                  <li class="p-pageSitemap__subItem"><a href="<?php echo esc_url(home_url($slug)); ?>/"><?php echo $term->name; ?></a></li>
                <?php
                  endforeach;
                ?>
              </ul>
            </li>
            <li class="p-pageSitemap__item"><a href="/sitemap/">サイトマップ</a></li>
          </ul>
        </div>

      </div>
    </div>
  </section>

</main>

<?php get_footer();
