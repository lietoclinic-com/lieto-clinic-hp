<?php get_header(); ?>

<main class="l-main">

  <section class="p-singleRecruit">

    <div class="p-singleRecruit__head c-pageTitleHead">
      <?php get_template_part('template-parts/part', 'breadcrumb'); ?>
      <div class="c-pageTitle">
        <div class="c-pageTitle__en">RECRUIT</div>
        <?php
        $job = get_field('recruit_job')['label'];
        ?>
        <h1 class="c-pageTitle__ja"><?php echo $job; ?>の採用について</h2>
      </div>
    </div>

    <div class="p-singleRecruit__body p-recruitBody">

      <!-- メッセージ -->
      <div class="p-singleRecruitMessage p-recruitMessage">
        <div class="p-recruitMessage__inner l-inner">
          関わる全ての人々の幸福を追求する為に、<br class="_overTab">最良最適な美容医療サービスを通じてお客様の美と健康を実現し、<br class="_overTab">社員の自己実現を導く美容クリニックで在り続ける。
        </div>
      </div>

      <!-- コンセプト -->
      <section class="p-singleRecruitConcept">
        <div class="p-singleRecruitConcept__head c-wideTitle">
          <div class="p-singleRecruitConcept__headInner l-inner">
            <div class="c-wideTitle__content">
              <div class="c-wideTitle__en">CONCEPT</div>
              <h2 class="c-wideTitle__ja">リエートクリニックのコンセプト</h2>
            </div>
          </div>
        </div>

        <div class="p-singleRecruitConcept__inner l-inner">
          <div class="p-singleRecruitConcept__body p-concept">
            <figure class="p-concept__figure">
              <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/top_about.png" alt="コンセプト">
            </figure>
            <div class="p-concept__desc">
              <div class="p-concept__message">
                リエートクリニックでは、<br class="_overPc">
                単なる医療痩身サービスの提供だけに留まらず、<br class="_overPc">
                『美しさ』や『健康』をより追求いたします。
              </div>
              <p class="p-concept__text">
                細胞レベルで身体にアプローチすることで、理想の体型づくりと共に人間本来の美しさを取り戻す美容医療を提供し、お客様の人生における『幸せ＝Lieto』の実現に貢献いたします。
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- こだわり -->
      <section class="p-singleRecruitParticular">
        <div class="p-singleRecruitParticular__inner l-inner">
          <h2 class="p-singleRecruitParticular__head c-recruitHead">リエートクリニックのこだわり</h2>

          <div class="p-singleRecruitParticular__body">
            <?php // 選択したチェックボックスの情報を取得
            $commitments = get_field('recruit_commitment');
            if ($commitments) :
            ?>
              <ul class="p-singleRecruitParticular__list">
                <?php foreach ($commitments as $commitment) : ?>
                  <li class="p-singleRecruitParticular__item"><?php echo $commitment['label']; ?></li>
                <?php endforeach; ?>
                <ul>
                <?php endif; ?>
          </div>
        </div>
      </section>

      <!-- メニュー -->
      <div class="p-singleRecruitMenu">
        <div class="p-singleRecruitMenu__inner l-inner">
          <ul class="p-singleRecruitMenu__list">
            <li class="p-singleRecruitMenu__item"><a href="#recruit-job">仕事内容</a></li>
            <li class="p-singleRecruitMenu__item"><a href="#recruit-training">研修制度</a></li>
            <li class="p-singleRecruitMenu__item"><a href="#recruit-info">求人情報</a></li>
            <li class="p-singleRecruitMenu__item"><a href="#recruit-flow">採用の流れ</a></li>
          </ul>
        </div>
      </div>

      <!-- 仕事内容 -->
      <section class="p-singleRecruitJob" id="recruit-job">
        <div class="p-singleRecruitJob__inner l-inner">
          <div class="p-singleRecruitJob__head c-secTitle">
            <div class="c-secTitle__en">JOB DESCRIPTION</div>
            <h2 class="c-secTitle__ja">仕事内容</h2>
          </div>
          <div class="p-singleRecruitJob__body">
            <div class="p-singleRecruitJob__box">
              <?php $recruit_content = get_field('recruit_content'); ?>
              <figure class="p-singleRecruitJob__boxFigure">
                <?php
                $image_url = $recruit_content['recruit_content_img'];
                ?>
                <img loading="lazy" src="<?php echo $image_url; ?>" alt="仕事内容">
              </figure>
              <div class="p-singleRecruitJob__boxDesc">
                <div class="p-singleRecruitJob__boxTitle">
                  <?php echo $recruit_content['recruit_content_title']; ?>
                </div>
                <p class="p-singleRecruitJob__boxText">
                  <?php echo $recruit_content['recruit_content_text']; ?>
                </p>
              </div>
            </div>

            <div class="p-singleRecruitJob__subtitle c-recruitHead">1日の流れの例<span>（早番勤務の場合）</span> </div>
            <div class="p-singleRecruitJob__content">
              <ul class="p-singleRecruitJob__list">
                <?php if (have_rows('recruit_flow')) : ?>
                  <?php while (have_rows('recruit_flow')) : the_row(); ?>
                    <li class="p-singleRecruitJob__item">
                      <div class="p-singleRecruitJob__itemTime"><?php the_sub_field('recruit_flow_time'); ?></div>
                      <div class="p-singleRecruitJob__itemDesc">
                        <div class="p-singleRecruitJob__itemTitle"><?php the_sub_field('recruit_flow_title'); ?></div>
                        <p class="p-singleRecruitJob__itemText">
                          <?php the_sub_field('recruit_flow_text'); ?>
                        </p>
                      </div>
                    </li>
                  <?php endwhile; ?>
                <?php endif; ?>
              </ul>

            </div>
          </div>
        </div>
      </section>

      <!-- 研修制度 -->
      <section class="p-singleRecruitTraining" id="recruit-training">
        <div class="p-singleRecruitTraining__inner l-inner">
          <div class="p-singleRecruitTraining__head c-secTitle">
            <div class="c-secTitle__en">TRAINING</div>
            <h2 class="c-secTitle__ja">リエートクリニックの研修制度</h2>
          </div>

          <div class="p-singleRecruitTraining__body">
            <ul class="p-singleRecruitTraining__list">

              <li class="p-singleRecruitTraining__item">
                <figure class="p-singleRecruitTraining__figure">
                  <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/recruit/training_01.png">
                </figure>
                <div class="p-singleRecruitTraining__box">
                  <div class="p-singleRecruitTraining__boxTitle">新人研修</div>
                  <p class="p-singleRecruitTraining__boxText">
                    リエートクリニックでは、新たに入社するスタッフに対して充実した新人研修プログラムをご用意しております。<br>
                    医療痩身の専門知識からコミュニケーションスキルまで、スムーズに業務へ参加できるよう手助けいたします。
                  </p>
                </div>
              </li>

              <?php // 医師、看護師のみ表示
              $id = get_the_ID();
              if ($id == 260 || $id == 341 || $id == 342 || $id == 343) :
              ?>
                <li class="p-singleRecruitTraining__item">
                  <figure class="p-singleRecruitTraining__figure">
                    <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/recruit/training_02.png">
                  </figure>
                  <div class="p-singleRecruitTraining__box">
                    <div class="p-singleRecruitTraining__boxTitle">手技研修</div>
                    <p class="p-singleRecruitTraining__boxText">
                      手技研修を通じて、スタッフが痩身技術に関するスキルを高め、クリニックの品質基準を満たすための専門的なトレーニングを受けます。<br>
                      手技研修は、スタッフがクリニックのお客様に最高の結果を提供できるようサポートする重要な要素です。
                    </p>
                  </div>
                </li>
              <?php endif; ?>

              <li class="p-singleRecruitTraining__item">
                <figure class="p-singleRecruitTraining__figure">
                  <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/recruit/training_03.png">
                </figure>
                <div class="p-singleRecruitTraining__box">
                  <div class="p-singleRecruitTraining__boxTitle">接遇研修</div>
                  <p class="p-singleRecruitTraining__boxText">
                    スタッフは礼儀正しさ、コミュニケーションスキル、お客様のニーズを理解し、信頼関係を築くことが大切です。<br>
                    接遇研修は、お客様がクリニックで快適でリラックスした雰囲気を感じ、信頼して施術を受けられるようにするための不可欠な要素です。
                  </p>
                </div>
              </li>

              <li class="p-singleRecruitTraining__item">
                <figure class="p-singleRecruitTraining__figure">
                  <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/recruit/training_04.png">
                </figure>
                <div class="p-singleRecruitTraining__box">
                  <div class="p-singleRecruitTraining__boxTitle">医療機器機械研修（座学）</div>
                  <p class="p-singleRecruitTraining__boxText">
                    クリニックで使用される医療機器や機械の正確な理解と適切な操作は、安全性と効果の確保に欠かせません。<br>
                    座学を通じて、スタッフは医療機器の原理や機能、保守、安全対策についての知識を習得します。
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <!-- 求人情報 -->
      <section class="p-singleRecruitInfo" id="recruit-info">
        <div class="p-singleRecruitInfo__inner l-inner">
          <div class="p-singleRecruitInfo__head c-secTitle">
            <div class="c-secTitle__en">RECRUIT INFORMATION</div>
            <h2 class="c-secTitle__ja">求人情報</h2>
          </div>

          <div class="p-singleRecruitInfo__body">
            <dl class="p-singleRecruitInfo__list">
              <?php if (have_rows('recruit_info')) : ?>
                <?php while (have_rows('recruit_info')) : the_row(); ?>
                  <div class="p-singleRecruitInfo__row">
                    <dt><?php the_sub_field('recruit_info_title'); ?></dt>
                    <dd><?php the_sub_field('recruit_info_text'); ?></dd>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>
            </dl>

            <div class="p-singleRecruitInfo__text">
              <span class="p-singleRecruitInfo__attention">
                ※勤務開始日は、ご相談に応じます。<br>※応募から内定までの平均期間は1週間～１カ月とお考えください。
              </span>
            </div>
          </div>
        </div>
      </section>

      <!-- 法人情報 -->
      <section class="p-singleRecruitInfo">
        <div class="p-singleRecruitInfo__inner l-inner">
          <div class="p-singleRecruitInfo__head c-secTitle">
            <div class="c-secTitle__en">COMPANY INFORMATION</div>
            <h2 class="c-secTitle__ja">法人情報</h2>
          </div>

          <div class="p-singleRecruitInfo__body">
            <dl class="p-singleRecruitInfo__list">
              <div class="p-singleRecruitInfo__row">
                <dt>法人名</dt>
                <dd>Lieto Clinic</dd>
              </div>
              <!-- <div class="p-singleRecruitInfo__row">
                <dt>代表者</dt>
                <dd>由利 直樹</dd>
              </div> -->
              <div class="p-singleRecruitInfo__row">
                <dt>住所</dt>
                <dd>〒221-0835<br>
                  神奈川県横浜市神奈川区鶴屋町3-29-4 CRANE CORNER 2階
                </dd>
              </div>
              <div class="p-singleRecruitInfo__row">
                <dt>設立</dt>
                <dd>2023年</dd>
              </div>
              <div class="p-singleRecruitInfo__row">
                <dt>事業内容</dt>
                <dd>美容痩身クリニックの運営</dd>
              </div>
              <div class="p-singleRecruitInfo__row">
                <dt>従業員</dt>
                <dd>20名</dd>
              </div>
            </dl>
          </div>
        </div>
      </section>

      <!-- 採用応募フォーム -->
      <div class="p-singleRecruitForm p-recruitForm">
        <div class="p-recruitForm__inner l-inner">
          <div class="p-recruitForm__bg">
            <div class="p-recruitForm__desc">
              <div class="p-recruitForm__text">採用応募フォーム</div>
              <a href="/recruit/entry/" class="p-recruitForm__link">
                <img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_counseling_circle.png'>採用応募はこちらから
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- 採用の流れ -->
      <section class="p-singleRecruitFlow p-recruitFlow" id="recruit-flow">
        <div class="p-recruitFlow__inner l-inner">
          <div class="p-recruitFlow__head c-recruitHead">採用の流れ</div>
          <div class="p-recruitFlow__body">
            <ul class="p-recruitFlow__list">

              <li class="p-recruitFlow__item">
                <figure class="p-recruitFlow__figure">
                  <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/recruit/flow_01.png" alt="採用応募フォームよりご応募ください">
                </figure>
                <div class="p-recruitFlow__desc">
                  <div class="p-recruitFlow__descNum">01</div>
                  <div class="p-recruitFlow__descText">
                    採用応募フォームより<br class="_sp">ご応募ください
                  </div>
                </div>
              </li>

              <li class="p-recruitFlow__item">
                <figure class="p-recruitFlow__figure">
                  <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/recruit/flow_02.png" alt="採用担当者よりご連絡いたします">
                </figure>
                <div class="p-recruitFlow__desc">
                  <div class="p-recruitFlow__descNum">02</div>
                  <div class="p-recruitFlow__descText">
                    採用担当者より<br>ご連絡いたします
                  </div>
                </div>
              </li>

              <li class="p-recruitFlow__item">
                <figure class="p-recruitFlow__figure">
                  <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/recruit/flow_03.png" alt="オンライン面談後複数回の面接">
                </figure>
                <div class="p-recruitFlow__desc">
                  <div class="p-recruitFlow__descNum">03</div>
                  <div class="p-recruitFlow__descText">
                    オンライン面談後<br>複数回の面接
                  </div>
                </div>
              </li>

              <li class="p-recruitFlow__item">
                <figure class="p-recruitFlow__figure">
                  <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/recruit/flow_04.png" alt="採用・内定のご連絡">
                </figure>
                <div class="p-recruitFlow__desc">
                  <div class="p-recruitFlow__descNum">04</div>
                  <div class="p-recruitFlow__descText">
                    採用・内定のご連絡
                  </div>
                </div>
              </li>

            </ul>
          </div>
        </div>
      </section>

      <!-- 勤務先情報 -->
      <section class="p-singleRecruitAccess">
        <div class="p-singleRecruitAccess__inner l-inner">
          <div class="p-singleRecruitAccess__head c-secTitle">
            <div class="c-secTitle__en">WORK INFORMATION</div>
            <h2 class="c-secTitle__ja">勤務先情報</h2>
          </div>

          <div class="p-singleRecruitAccess__body">
            <div class="p-singleRecruitAccess__area p-access">

              <?php
              $recruit_name = get_field('recruit_name');
              $args = array(
                'post_type' => 'clinic',
                'posts_per_page' => -1,
                'name' => $recruit_name,
              );
              $query = new WP_Query($args);
              ?>

              <?php if ($query->have_posts()) : ?>
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                  <div class="p-access__area">
                    <div class="p-access__clinic">
                      <div class="p-access__desc">
                        <div class="p-access__title">
                          <span><?php the_field("clinic_name") ?>院</span>
                        </div>
                        <dl class="p-access__list">
                          <div class="p-access__listRow">
                            <dt><img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_access_brown.png'>住所</dt>
                            <dd>〒<?php echo get_field("clinic_info")['clinic_info_post']; ?><br><?php echo get_field('clinic_info')['clinic_info_address']; ?></dd>
                          </div>

                          <div class="p-access__listRow">
                            <dt><img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_train_brown.png'>最寄駅</dt>
                            <dd><?php echo get_field('clinic_info')['clinic_info_station']; ?></dd>
                          </div>

                          <div class="p-access__listRow">
                            <dt><img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_tel_brown.png'>電話番号</dt>
                            <dd><a href="tel:<?php echo get_field('clinic_info')['clinic_info_tel']; ?>"><?php echo get_field('clinic_info')['clinic_info_tel']; ?></a></dd>
                          </div>

                          <div class="p-access__listRow">
                            <dt><img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_time_brown.png'>診療時間</dt>
                            <dd><?php echo get_field('clinic_info')['clinic_info_time']; ?></dd>
                          </div>

                          <div class="p-access__listRow">
                            <dt>休診日</dt>
                            <dd><?php echo get_field('clinic_info')['clinic_info_close']; ?></dd>
                          </div>
                          <div class="p-access__listRow">
                            <dt>支払い方法</dt>
                            <dd><?php echo get_field('clinic_info')['clinic_info_payment']; ?></dd>
                          </div>
                        </dl>
                      </div>
                      <div class="p-access__map">
                        <?php echo get_field('clinic_info')['clinic_info_map']; ?>
                      </div>
                    </div>

                    <div class="p-access__btn">
                      <a href="<?php the_permalink(); ?>" class="c-btn"><?php the_field('clinic_name') ?>院を詳しくみる</a>
                    </div>
                  </div>

                <?php endwhile;
                wp_reset_postdata() ?>
              <?php endif; ?>
            </div>

            <div class="p-singleRecruitAccess__area p-access">
              <div class="p-access__head c-recruitHead">その他勤務地情報</div>

              <?php
              $recruit_name = get_field('recruit_name');
              $post_data = get_page_by_path($recruit_name, OBJECT, 'clinic');
              $post_id = $post_data->ID;
              $args = array(
                'post_type' => 'clinic',
                'posts_per_page' => -1,
                'post__not_in' => [$post_id],
              );
              $query = new WP_Query($args);
              ?>

              <?php if ($query->have_posts()) : ?>
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                  <div class="p-access__area">
                    <div class="p-access__clinic">
                      <div class="p-access__desc">
                        <div class="p-access__title">
                          <span><?php the_field("clinic_name") ?>院</span>
                        </div>
                        <dl class="p-access__list">
                          <div class="p-access__listRow">
                            <dt><img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_access_brown.png'>住所</dt>
                            <dd>〒<?php echo get_field("clinic_info")['clinic_info_post']; ?><br><?php echo get_field('clinic_info')['clinic_info_address']; ?></dd>
                          </div>

                          <div class="p-access__listRow">
                            <dt><img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_train_brown.png'>最寄駅</dt>
                            <dd><?php echo get_field('clinic_info')['clinic_info_station']; ?></dd>
                          </div>

                          <div class="p-access__listRow">
                            <dt><img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_tel_brown.png'>電話番号</dt>
                            <dd><a href="tel:<?php echo get_field('clinic_info')['clinic_info_tel']; ?>"><?php echo get_field('clinic_info')['clinic_info_tel']; ?></a></dd>
                          </div>

                          <div class="p-access__listRow">
                            <dt><img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_time_brown.png'>診療時間</dt>
                            <dd><?php echo get_field('clinic_info')['clinic_info_time']; ?></dd>
                          </div>

                          <div class="p-access__listRow">
                            <dt>休診日</dt>
                            <dd><?php echo get_field('clinic_info')['clinic_info_close']; ?></dd>
                          </div>
                          <div class="p-access__listRow">
                            <dt>支払い方法</dt>
                            <dd><?php echo get_field('clinic_info')['clinic_info_payment']; ?></dd>
                          </div>
                        </dl>
                      </div>
                      <div class="p-access__map">
                        <?php echo get_field('clinic_info')['clinic_info_map']; ?>
                      </div>
                    </div>

                    <div class="p-access__btn">
                      <a href="<?php the_permalink(); ?>" class="c-btn"><?php the_field('clinic_name') ?>院を詳しくみる</a>
                    </div>
                  </div>

                <?php endwhile;
                wp_reset_postdata() ?>
              <?php endif; ?>

            </div>
          </div>

        </div>
      </section>

      <!-- よくあるご質問 -->
      <section class="p-singleRecruitFaq">
        <div class="p-singleRecruitFaq__inner l-inner">
          <div class="p-singleRecruitFaq__head c-secTitle">
            <div class="c-secTitle__en">FAQ</div>
            <h2 class="c-secTitle__ja">よくあるご質問</h2>
          </div>

          <div class="p-singleRecruitFaq__body">
            <div class="p-singleRecruitFaq__content p-faq" itemscope itemtype="https://schema.org/FAQPage">

              <div class="p-faq__box js-faqAccordion" itemprop="mainEntity" itemscope itemtype="https://schema.org/Question">

                <div class="p-faq__question">
                  <div class="p-faq__questionDesc">
                    <div class="p-faq__questionMark">Q</div>
                    <span class="p-faq__questionText" itemprop="name">
                      入職時に準備することはありますか？
                    </span>
                  </div>
                  <span class="p-faq__questionOpen"></span>
                </div>

                <div class="p-faq__answer" itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer">
                  <div class="p-faq__answerDesc">
                    <div class="p-faq__answerMark">A</div>
                    <span class="p-faq__answerText" itemprop="text">
                      マイナンバー（個人番号）が確認できる書類、源泉徴収票をご用意ください。
                    </span>
                  </div>
                </div>
              </div>

              <div class="p-faq__box js-faqAccordion" itemprop="mainEntity" itemscope itemtype="https://schema.org/Question">

                <div class="p-faq__question">
                  <div class="p-faq__questionDesc">
                    <div class="p-faq__questionMark">Q</div>
                    <span class="p-faq__questionText" itemprop="name">
                      面接は基本的にオンラインですか？
                    </span>
                  </div>
                  <span class="p-faq__questionOpen"></span>
                </div>

                <div class="p-faq__answer" itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer">
                  <div class="p-faq__answerDesc">
                    <div class="p-faq__answerMark">A</div>
                    <span class="p-faq__answerText" itemprop="text">
                      1次面接はオンラインで実施、最終面接はクリニックにお越し頂きます。
                    </span>
                  </div>
                </div>
              </div>

              <div class="p-faq__box js-faqAccordion" itemprop="mainEntity" itemscope itemtype="https://schema.org/Question">

                <div class="p-faq__question">
                  <div class="p-faq__questionDesc">
                    <div class="p-faq__questionMark">Q</div>
                    <span class="p-faq__questionText" itemprop="name">
                      必要な資格はありますか？
                    </span>
                  </div>
                  <span class="p-faq__questionOpen"></span>
                </div>

                <div class="p-faq__answer" itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer">
                  <div class="p-faq__answerDesc">
                    <div class="p-faq__answerMark">A</div>
                    <span class="p-faq__answerText" itemprop="text">
                      各職種によって異なります。ご応募される職種ページをご確認下さい。
                    </span>
                  </div>
                </div>
              </div>

              <div class="p-faq__box js-faqAccordion" itemprop="mainEntity" itemscope itemtype="https://schema.org/Question">

                <div class="p-faq__question">
                  <div class="p-faq__questionDesc">
                    <div class="p-faq__questionMark">Q</div>
                    <span class="p-faq__questionText" itemprop="name">
                      採用決定までの時間はどのくらいかかりますか？
                    </span>
                  </div>
                  <span class="p-faq__questionOpen"></span>
                </div>

                <div class="p-faq__answer" itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer">
                  <div class="p-faq__answerDesc">
                    <div class="p-faq__answerMark">A</div>
                    <span class="p-faq__answerText" itemprop="text">
                      最短で1週間で採用決定となります。
                    </span>
                  </div>
                </div>
              </div>

              <div class="p-faq__box js-faqAccordion" itemprop="mainEntity" itemscope itemtype="https://schema.org/Question">

                <div class="p-faq__question">
                  <div class="p-faq__questionDesc">
                    <div class="p-faq__questionMark">Q</div>
                    <span class="p-faq__questionText" itemprop="name">
                      専門性はどれくらい必要になりますか？
                    </span>
                  </div>
                  <span class="p-faq__questionOpen"></span>
                </div>

                <div class="p-faq__answer" itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer">
                  <div class="p-faq__answerDesc">
                    <div class="p-faq__answerMark">A</div>
                    <span class="p-faq__answerText" itemprop="text">
                      各職種によって異なる為、面接時にお話させて頂きます。
                    </span>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>
      </section>

      <!-- 採用応募フォーム -->
      <div class="p-singleRecruitForm p-recruitForm">
        <div class="p-recruitForm__inner l-inner">
          <div class="p-recruitForm__bg">
            <div class="p-recruitForm__desc">
              <div class="p-recruitForm__text">採用応募フォーム</div>
              <a href="/recruit/entry/" class="p-recruitForm__link">
                <img loading="lazy" src='<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/icon/icon_counseling_circle.png'>採用応募はこちらから
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>


  </section>

</main>

<?php get_footer();
