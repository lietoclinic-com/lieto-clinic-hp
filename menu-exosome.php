<?php /* Template Name: エクソソーム点滴 */ ?>

<?php get_header(); ?>

<main class="l-main">

  <section class="p-singleMenu">
    <div class="p-singleMenu__head c-pageTitleHead _exosome">
      <?php get_template_part('template-parts/part', 'breadcrumb'); ?>
      <div class="c-pageTitle">
        <div class="c-pageTitle__en">EXOSOME</div>
        <h1 class="c-pageTitle__ja">エクソソーム点滴</h2>
      </div>
    </div>

    <div class="p-singleMenu__body p-exosome">
      <figure class="p-exosomeFigure">
        <picture>
          <source media="(max-width: 768px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/menu/exosome_main_sp.png">
          <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/menu/exosome_main.png" alt="エクソソーム点滴">
        </picture>
      </figure>

      <!-- このような悩みに -->
      <div class="p-exosomeTrouble">
        <div class="p-exosomeTrouble__inner l-inner">
          <h2 class="p-exosomeTrouble__title">このようなお悩みに</h2>
          <div class="p-exosomeTrouble__body">
            <div class="p-exosomeTrouble__bgimg"></div>
            <ul class="p-exosomeTrouble__list">
              <li class="p-exosomeTrouble__item">老化を予防したい</li>
              <li class="p-exosomeTrouble__item">全身の若返りを実現したい</li>
              <li class="p-exosomeTrouble__item">認知症を予防したい</li>
              <li class="p-exosomeTrouble__item">しみやくすみを改善したい</li>
              <li class="p-exosomeTrouble__item">アトピー性皮膚炎を改善したい</li>
              <li class="p-exosomeTrouble__item">血管系の病気を予防したい</li>
              <li class="p-exosomeTrouble__item">免疫力を上げたい</li>
              <li class="p-exosomeTrouble__item">慢性的な疲労を改善したい</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- 様々な効果が期待 -->
      <div class="p-exosomeEffect">
        <div class="p-exosomeEffect__bgimg">
          <div class="p-exosomeEffect__inner l-inner">
            <div class="p-exosomeEffect__title">
              それ以外にもエクソソームには<br><span>様々な効果</span>が期待されています
            </div>

            <div class="p-exosomeEffect__body">
              <div class="p-exosomeEffect__area _man">
                <div class="p-exosomeEffect__areaHead">男&emsp;性</div>
                <ul class="p-exosomeEffect__areaList">
                  <li class="p-exosomeEffect__areaItem"><span>EDの改善をしたい</span></li>
                  <li class="p-exosomeEffect__areaItem"><span>全身の若返りを実現したい</span></li>
                  <li class="p-exosomeEffect__areaItem"><span>糖尿病を改善したい</span></li>
                  <li class="p-exosomeEffect__areaItem"><span>全身のデトックスを行いたい</span></li>
                </ul>
              </div>

              <div class="p-exosomeEffect__area _woman">
                <div class="p-exosomeEffect__areaHead">女&emsp;性</div>
                <ul class="p-exosomeEffect__areaList">
                  <li class="p-exosomeEffect__areaItem"><span>更年期障害を改善したい</span></li>
                  <li class="p-exosomeEffect__areaItem"><span>FAGA（女性の薄毛）を改善したい</span></li>
                  <li class="p-exosomeEffect__areaItem"><span>肌のツヤを取り戻したい</span></li>
                  <li class="p-exosomeEffect__areaItem"><span>髪の毛のハリやコシを取り戻したい</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- 再生医療エクソソームとは -->
      <div class="p-exosomeAbout">
        <div class="p-exosomeAbout__inner l-inner">
          <div class="p-exosomeAbout__head c-secTitle _exosome">
            <div class="c-secTitle__en">WHAT’S IS THIS?</div>
            <h2 class="c-secTitle__ja">再生医療エクソソームとは</h2>
          </div>

          <div class="p-exosomeAbout__body">
            <p class="p-exosomeAbout__message">再生医療とは、自然には回復しない組織・臓器の回復を促す医療です</p>
            <figure class="p-exosomeAbout__figure">
              <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/menu/exosome_about_main.png" alt="再生医療とは、自然には回復しない組織・臓器の回復を促す医療です">
            </figure>
            <p class="p-exosomeAbout__text">
              体の自然な修復力を活用し、細胞や組織を修復または再生するための革新的な美容技術の一環として注目を集めています。<br>
              <br>
              その中でもエクソソームには、成長因子、タンパク質、核酸、脂質など、細胞の情報を伝達するための重要な分子が含まれています。<br>
              静脈内に注入される点滴療法により、体内の細胞にエクソソームの有用な成分が直接届けられ、細胞の活性化や再生が促進され、様々な効果が期待できます。
            </p>

            <div class="p-exosomeAbout__content">
              <figure class="p-exosomeAbout__contentFigure">
                <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/menu/exosome_about_desc.png" alt="再生を促す”幹細胞”は年齢とともに減少していきます">
              </figure>
              <div class="p-exosomeAbout__contentDesc">
                <h3 class="p-exosomeAbout__contentTitle">再生を促す”幹細胞”は<br>年齢とともに減少していきます</h3>
                <p class="p-exosomeAbout__contentText">
                  幹細胞は、体内のさまざまな組織や臓器の再生・修復に不可欠な役割を果たす特殊な細胞です。<br>
                  これらの幹細胞は、体内の新しい細胞を生成し、古い細胞を置き換える役割を担っています。<br>
                  <br>
                  しかし、年齢とともに、細胞分裂能力の低下や細胞ダメージの蓄積などにより、幹細胞の数や活性が減少することが報告されています。
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- wrap img color -->
      <div class="p-exosomeBgcImg">
        <div class="p-exosomeBgc">

          <!-- M2Pエクソソーム -->
          <div class="p-exosomeM2p">
            <div class="p-exosomeM2p__inner l-inner">
              <div class="p-exosomeM2p__head c-secTitle _exosome">
                <div class="c-secTitle__en">EXOSOME</div>
                <h2 class="c-secTitle__ja">抗老化に特化した<br class="_sp">「M2Pエクソソーム™」</h2>
              </div>
              <div class="p-exosomeM2p__body">
                <div class="p-exosomeM2p__area">
                  <p class="p-exosomeM2p__text">
                    M2Pとは、免疫細胞の性質を炎症性（M1）から抗炎症性（M2）に切り替える作用のことで、<span>M2P活性の高いエクソソームは、全身の組織を細胞レベルで若返らせるように作用します。</span><br>
                    <br>
                    エクソソームを抽出する元の細胞になる幹細胞は、若く健康なドナーから得られた幹細胞から選ばれますが、その中でも約5,000個に一つの割合で存在するいわばエリート幹細胞というものが存在します。<br>
                    <br>
                    培養を繰り返しても細胞老化が進みづらい性質があるこのエリート幹細胞を培養で増やし、これらのみを１バイアルあたり50億個含有しているのが、当院のエクソソーム点滴で使用しているM2Pエクソソームです。
                  </p>
                  <div class="p-exosomeM2p__box">
                    <div class="p-exosomeM2p__boxTitle">管理・製造について</div>
                    <p class="p-exosomeM2p__boxText">
                      AZACLI EXOSOME LABで最終加工される「M2P-Exosome️™」はバイオベンチャーであるセルソース株式会社の技術支援により細胞加工に準じた管理基準で精製されています。
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- 当院の症例 -->
          <!-- <div class="p-exosomeCase">
            <div class="p-exosomeCase__inner l-inner">
              <div class="p-exosomeCase__head c-secTitle _exosome">
                <div class="c-secTitle__en">CASE</div>
                <h2 class="c-secTitle__ja">当院の症例</h2>
              </div>

              <div class="p-exosomeCase__body">
                <ul class="p-exosomeCase__case p-case">
                  <li class="p-case__item">
                    <div class="p-case__head">
                      <div class="p-case__headName">症例</div>
                      <div class="p-case__headNum">01</div>
                    </div>
                    <div class="p-case__body">
                      <div class="p-case__images">
                        <div class="p-case__image">
                          <div class="p-case__imageTitle">BEFORE</div>
                          <figure class="p-case__figure">
                            <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/case/case_01_before.png" alt="before">
                          </figure>
                        </div>
                        <div class="p-case__image">
                          <div class="p-case__imageTitle">AFTER</div>
                          <figure class="p-case__figure">
                            <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/case/case_01_after.png" alt="after">
                          </figure>
                        </div>
                      </div>
  
                      <div class="p-case__box">
                        <div class="p-case__boxTitle js-accordion">
                          20代 女性 短期集中コース
                          <div class="p-case__boxTitleMark"></div>
                        </div>
                        <div class="p-case__boxDescWrap">
                          <div class="p-case__boxDesc">
                            <dl class="p-case__boxContent">
                              <dt>治療内容</dt>
                              <dd>GLP-GLP-1は「痩せるホルモン」とも言われ、インスリン分泌を促進し、食欲を抑制します。基礎代謝を高め、脂肪燃焼を効率化し、痩せやすい体質を促します。内臓脂肪増加防止効果もあり、食欲抑制と糖質過剰摂取予防により中性脂肪増加を抑え、内臓脂肪蓄積を防ぎます。また、糖尿病予防に効果的で、インスリン分泌促進により血糖値上昇抑制と糖尿病リスク低減が期待できます。基礎代謝向上、内臓脂肪抑制、糖尿病予防に効果的です。-1を定期的に服用することで、GLPの分泌量を増やし、無理なく食欲を抑えて脂肪を分解する痩せ体質作りを目指します。</dd>
                            </dl>
                            <dl class="p-case__boxDetail">
                              <dt>金額</dt>
                              <dd>28,900 円</dd>
                              <dt>期間・回数</dt>
                              <dd>14ヶ月・7回</dd>
                              <dt>リスク・副作用</dt>
                              <dd>糖尿病予防に効果的で、インスリン分泌促進により血糖値上昇抑制と糖尿病リスク低減が期待できます。</dd>
                            </dl>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
  
                  <li class="p-case__item">
                    <div class="p-case__head">
                      <div class="p-case__headName">症例</div>
                      <div class="p-case__headNum">02</div>
                    </div>
                    <div class="p-case__body">
                      <div class="p-case__images">
                        <div class="p-case__image">
                          <div class="p-case__imageTitle">BEFORE</div>
                          <figure class="p-case__figure">
                            <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/case/case_02_before.png" alt="before">
                          </figure>
                        </div>
                        <div class="p-case__image">
                          <div class="p-case__imageTitle">AFTER</div>
                          <figure class="p-case__figure">
                            <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/case/case_02_after.png" alt="after">
                          </figure>
                        </div>
                      </div>
  
                      <div class="p-case__box">
                        <div class="p-case__boxTitle js-accordion">
                          20代 女性 短期集中コース
                          <div class="p-case__boxTitleMark"></div>
                        </div>
                        <div class="p-case__boxDescWrap">
                          <div class="p-case__boxDesc">
                            <dl class="p-case__boxContent">
                              <dt>治療内容</dt>
                              <dd>GLP-GLP-1は「痩せるホルモン」とも言われ、インスリン分泌を促進し、食欲を抑制します。基礎代謝を高め、脂肪燃焼を効率化し、痩せやすい体質を促します。内臓脂肪増加防止効果もあり、食欲抑制と糖質過剰摂取予防により中性脂肪増加を抑え、内臓脂肪蓄積を防ぎます。また、糖尿病予防に効果的で、インスリン分泌促進により血糖値上昇抑制と糖尿病リスク低減が期待できます。基礎代謝向上、内臓脂肪抑制、糖尿病予防に効果的です。-1を定期的に服用することで、GLPの分泌量を増やし、無理なく食欲を抑えて脂肪を分解する痩せ体質作りを目指します。</dd>
                            </dl>
                            <dl class="p-case__boxDetail">
                              <dt>金額</dt>
                              <dd>28,900 円</dd>
                              <dt>期間・回数</dt>
                              <dd>14ヶ月・7回</dd>
                              <dt>リスク・副作用</dt>
                              <dd>糖尿病予防に効果的で、インスリン分泌促進により血糖値上昇抑制と糖尿病リスク低減が期待できます。</dd>
                            </dl>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>

            </div>
          </div> -->

        </div>
      </div>

      <!-- 施術の流れ -->
      <div class="p-exosomeFlow">
        <div class="p-exosomeFlow__inner l-inner">
          <div class="p-exosomeFlow__head c-secTitle _exosome">
            <div class="c-secTitle__en">FLOW</div>
            <h2 class="c-secTitle__ja">リエートクリニックの<br class="_sp">エクソソーム点滴<br>施術の流れ</h2>
          </div>

          <div class="p-exosomeFlow__body">
            <ul class="p-exosomeFlow__list">
              <li class="p-exosomeFlow__item">
                <figure class="p-exosomeFlow__figure">
                  <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/menu/exosome_flow_01.png" alt="問診・ヒアリング">
                </figure>
                <div class="p-exosomeFlow__desc">
                  <div class="p-exosomeFlow__descHead">
                    <div class="p-exosomeFlow__descNum">01</div>
                    <div class="p-exosomeFlow__descTitle">
                      問診・ヒアリング
                    </div>
                  </div>
                </div>
              </li>

              <li class="p-exosomeFlow__item">
                <figure class="p-exosomeFlow__figure">
                  <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/menu/exosome_flow_02.png" alt="点滴">
                </figure>
                <div class="p-exosomeFlow__desc">
                  <div class="p-exosomeFlow__descHead">
                    <div class="p-exosomeFlow__descNum">02</div>
                    <div class="p-exosomeFlow__descTitle">
                      点滴
                    </div>
                  </div>
                </div>
              </li>
              <li class="p-exosomeFlow__item">
                <figure class="p-exosomeFlow__figure">
                  <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/menu/exosome_flow_03.png" alt="そのままご帰宅いただけます">
                </figure>
                <div class="p-exosomeFlow__desc">
                  <div class="p-exosomeFlow__descHead">
                    <div class="p-exosomeFlow__descNum">03</div>
                    <div class="p-exosomeFlow__descTitle">
                      そのまま<br>ご帰宅いただけます
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- CTA -->
      <div class="p-singleMenu__cta l-inner">
        <?php get_template_part('template-parts/part', 'cta'); ?>
      </div>

      <!-- 詳細情報とリスク・副作用 -->
      <div class="p-singleMenu__area l-inner _exo">
        <h2 class="p-singleMenu__title">詳細情報とリスク・副作用</h2>
        <div class="p-singleMenu__box">
          <dl class="p-singleMenu__detail">
            <div class="p-singleMenu__detailRow">
              <dt>施術時間</dt>
              <dd>30分程度</dd>
            </div>
            <div class="p-singleMenu__detailRow">
              <dt>麻酔・通院</dt>
              <dd>なし</dd>
            </div>
            <div class="p-singleMenu__detailRow">
              <dt>腫れ・痛み</dt>
              <dd>
                注射処置時、内出血や軽度の痛みが生じることがあります。また、注射後に軽い腫れが現れることもありますが、通常は2〜3日で収まります。<br>
                <br>
                点滴処置の際、まれに針穴周辺に腫れや内出血が生じることがありますが、これらは一時的なものであり、ご安心ください。
              </dd>
            </div>
            <div class="p-singleMenu__detailRow">
              <dt>ダウンタイム</dt>
              <dd>特にございません</dd>
            </div>
            <div class="p-singleMenu__detailRow">
              <dt>メイク</dt>
              <dd>当日から可能</dd>
            </div>
            <div class="p-singleMenu__detailRow">
              <dt>リスク・副作用</dt>
              <dd>かゆみ、軽度の炎症、発赤、アレルギー反応、内出血</dd>
            </div>
          </dl>
        </div>
      </div>

      <!-- エクソソーム点滴のよくある質問 -->
      <div class="p-singleMenu__area l-inner _exo">
        <h2 class="p-singleMenu__title _nols">エクソソーム点滴のよくある質問</h2>

        <div class="p-singleMenu__box">
          <div class="p-singleMenu__faq p-faq _exo" itemscope itemtype="https://schema.org/FAQPage">
            <?php get_template_part('template-parts/faq/part', 'exosome'); ?>
          </div>
        </div>
      </div>

      <div class="p-exosomeMessage">
        <div class="p-exosomeMessage__inner l-inner">
          <div class="p-exosomeFlow__head c-secTitle _exosome">
            <div class="c-secTitle__en">MESSAGE</div>
            <h2 class="c-secTitle__ja">担当医師挨拶</h2>
          </div>

          <div class="p-exosomeMessage__body">
            <figure class="p-exosomeMessage__figure">
              <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/doctor.png" alt="リエートクリニック横浜院医師 白川 巧">
            </figure>
            <div class="p-exosomeMessage__desc">
              <p class="p-exosomeMessage__text">
                はじめまして、当院を見つけ、この文章をお読み頂き、有り難うございます。<br>
                <br>
                理想の体型を目指し努力されてる皆様にとっては敵のように思われている糖と脂質ですが、脳にはエネルギーの糖が必要であり、脳は水分を除いた構成の大部分が脂質です。<br>
                <br>
                脂質は免疫にも重要です。過剰な制限は健康を害します。<br>
                糖と脂質を味方に、適切な食事をしながら痩せることを目指し、その経過で生じるストレスを軽減する方法を探求していきます。<br>
                <br>
                そのために生化学・分子生物学、薬理学、病態生理学と消化吸収、代謝、内分泌、血液循環、筋肉、心理、睡眠、脳神経・自律神経、性差、年齢差など多岐にわたる内容を総合判断し、食事の提案、投薬、最新医療機器を用いた施術を行います。<br>
                <br>
                通院中に、ご一緒に取り組んで頂いたことを生かして習慣化し、通院終了後も理想とされる体型作りと健康増進にお役立て頂くと幸いです。
              </p>

              <div class="p-exosomeMessage__post">
                <div class="p-exosomeMessage__clinic">リエートクリニック横浜院</div>
                <div class="p-exosomeMessage__name"><span>医師</span>白川 巧</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- 関連コラム -->
      <?php $slug = get_post(get_the_ID())->post_name; ?>
      <div class="p-singleMenu__area l-inner">
        <h2 class="p-singleMenu__title _nols">関連コラム</h2>
        
        <ul class="p-singleMenu__box _relatedColumn">
          <?php
            $args = array(
              'post_type' => 'post',
              'posts_per_page' => 3,
              'tag' => $slug,
            );
            $query = new WP_Query($args);
          ?>

          <?php if ($query->have_posts()) : ?>
            <?php while ($query->have_posts()) : $query->the_post(); ?>
              <li class="p-pageColumn__articlesItem">
                <a href="<?php the_permalink(); ?>">
                  <figure class="p-pageColumn__articlesFigure">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail(); ?>
                    <?php else : ?>
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/sample_01.png" alt="記事サムネイル">
                    <?php endif; ?>
                  </figure>
                  <div class="p-pageColumn__articlesDesc">
                    <div class="p-pageColumn__articlesCat">
                      <?php
                        $term_obj = get_the_terms($post->ID, 'category');
                        echo $term_obj[0]->name;
                      ?>
                    </div>
                    <div class="p-pageColumn__dates c-articleDates">
                      <div class="c-articleDates__modified">
                        <div class="c-articleDates__modifiedTtl">更新日</div>
                        <time class="c-articleDates__modifiedNum" datetime="<?php the_modified_time('Y-m-d'); ?>" itemprop="datemodified"><?php the_modified_time('Y.m.d') ?></time>
                      </div>
                      <div class="c-articleDates__published">
                        <div class="c-articleDates__publishedTtl">公開日</div>
                        <time class="c-articleDates__publishedNum" datetime="<?php the_time('Y-m-d'); ?>" itemprop="datepublished"><?php the_time('Y.m.d'); ?></time>
                      </div>
                    </div>
                    <h3 class="p-pageColumn__articlesTitle">
                      <?php
                      if (mb_strlen($post->post_title) > 39) {
                        $title = mb_substr($post->post_title, 0, 39);
                        echo $title . '...';
                      } else {
                        echo $post->post_title;
                      }
                      ?>
                    </h3>
                  </div>
                </a>
              </li>

            <?php endwhile;
            wp_reset_postdata() ?>
          <?php endif; ?>

        </ul>

        <div class="p-pageColumn__articlesBtn">
          <a href="/tag/<?php echo $slug; ?>/" class="c-btn">関連コラム一覧へ</a>
        </div>
      </div>

      <!-- CTA -->
      <div class="p-singleMenu__cta l-inner">
        <?php get_template_part('template-parts/part', 'cta'); ?>
      </div>

    </div>
  </section>

</main>

<?php get_footer();
