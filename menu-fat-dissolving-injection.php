<?php /* Template Name: 脂肪溶解注射 */ ?>

<?php get_header(); ?>

<main class="l-main">

  <section class="p-singleMenu">

    <div class="p-singleMenu__head c-pageTitleHead">
      <?php get_template_part('template-parts/part', 'breadcrumb'); ?>
      <div class="c-pageTitle">
        <div class="c-pageTitle__en">injection</div>
        <h1 class="c-pageTitle__ja">脂肪溶解注射</h2>
      </div>
    </div>

    <div class="p-singleMenu__body p-injection">

      <figure class="p-injectionFigure">
        <picture>
          <source media="(max-width: 768px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/menu/injection_main_sp.jpg">
          <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/menu/injection_main.jpg" alt="脂肪溶解注射">
        </picture>
      </figure>

      <!-- CTA -->
      <div class="p-singleMenu__cta l-inner">
        <?php get_template_part('template-parts/part', 'cta'); ?>
      </div>

      <!-- menu -->
      <div class="p-injectionMenu">
        <div class="p-injectionMenu__inner l-inner">
          <ul class="p-injectionMenu__list">
            <li class="p-injectionMenu__item"><a href="#injection_about">脂肪溶解注射とは</a></li>
            <li class="p-injectionMenu__item"><a href="#injection_recommend">こんな人におすすめ</a></li>
            <li class="p-injectionMenu__item"><a href="#injection_merit">脂肪溶解注射のメリット</a></li>
            <li class="p-injectionMenu__item"><a href="#injection_demerit">脂肪溶解注射のデメリット</a></li>
            <li class="p-injectionMenu__item"><a href="#injection_reason">リエートクリニックが選ばれる理由</a></li>
            <li class="p-injectionMenu__item"><a href="#injection_feature">脂肪溶解注射の種類と特徴</a></li>
            <li class="p-injectionMenu__item"><a href="#injection_case">症例</a></li>
            <li class="p-injectionMenu__item"><a href="#injection_part">注入量の目安</a></li>
            <li class="p-injectionMenu__item"><a href="#injection_faq">よくある質問</a></li>
          </ul>
        </div>
      </div>

      <!-- WHAT’S IS THIS? -->
      <div class="p-injectionAbout" id="injection_about">
        <div class="p-injectionAbout__inner l-inner">
          <div class="p-injectionAbout__head c-secTitle">
            <div class="c-secTitle__en">WHAT’S IS THIS?</div>
            <h2 class="c-secTitle__ja">脂肪溶解注射とは</h2>
          </div>

          <div class="p-injectionAbout__body">
            <div class="p-injectionAbout__figure">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/menu/injection_02.png" alt="脂肪溶解注射とは" decoding="async" loading="lazy">
            </div>
            <div class="p-injectionAbout__desc">
            脂肪溶解注射は、痩せたい部分に薬剤を注射し、脂肪細胞を物理的に減らす美容施術です。<br>
            <br>
            通常の運動や食事制限では落としにくい頑固な脂肪に対して効率よくアプローチできるのが特徴で、顔や腹部、セルライトが気になる部位などの部分痩せに効果を発揮します。<br>
            <br>
            脂肪細胞そのものを減らすためリバウンドしにくく、効果も長期間持続します。また、メスを使用しないのでダウンタイムが少なく、忙しい方でも手軽に受けられるのも大きな魅力です。<br>
            <br>
            脂肪溶解注射で使用する薬剤には、脂肪を溶かすデオキシコール酸や、脂肪排出を促す成分などが含まれます。薬剤の作用によって破壊された細胞は、体内の自然な代謝プロセス（アポトーシス）によって時間の経過とともに体外に排出されます。
            </div>
          </div>
        </div>
      </div>

      <!-- wrap img color -->
      <div class="p-bgcImg">
        <div class="p-bgc">

          <!-- MECHANISM -->
          <div class="p-injectionMechanism">
            <div class="p-injectionMechanism__inner l-inner">
              <div class="p-injectionMechanism__head c-secTitle">
                <div class="c-secTitle__en">MECHANISM</div>
                <h2 class="c-secTitle__ja">脂肪溶解注射のメカニズム</h2>
              </div>

              <div class="p-injectionMechanism__body">
                <figure class="p-injectionMechanism__figure">
                  <picture>
                    <source media="(max-width: 768px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/menu/injection_mechanism_sp.png">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/menu/injection_mechanism.png" alt="脂肪溶解注射のメカニズム" decoding="async" loading="lazy">
                  </picture>
                </figure>

                <div class="p-injectionMechanism__recommendWrap" id="injection_recommend">
                  <div class="p-injectionMechanism__recommend">
                    <div class="p-injectionMechanism__recommendTitle">こんな人におすすめ</div>
                    <ul class="p-injectionMechanism__recommendList">
                      <li class="p-injectionMechanism__recommendItem">ダイエットが続かない</li>
                      <li class="p-injectionMechanism__recommendItem">リバウンドを繰り返している</li>
                      <li class="p-injectionMechanism__recommendItem">食事制限せずに楽に痩せたい</li>
                      <li class="p-injectionMechanism__recommendItem">部分痩せしたい</li>
                      <li class="p-injectionMechanism__recommendItem">小顔になりたい</li>
                      <li class="p-injectionMechanism__recommendItem">セルライトをなくしたい</li>
                      <li class="p-injectionMechanism__recommendItem">ダウンタイムの少ない施術をしたい</li>
                    </ul>
                  </div>
                </div>

                <!-- CTA -->
                <div class="p-singleMenu__cta">
                  <?php get_template_part('template-parts/part', 'cta'); ?>
                </div>

                <div class="p-singleMenu__con">
                  <?php get_template_part('template-parts/part-lp-con'); ?>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>

      <!-- 脂肪溶解注射のメリット -->
      <div class="p-injectionMerit" id="injection_merit">
        <div class="p-injectionMerit__inner l-inner">
          <div class="p-injectionMerit__head c-secTitle">
            <div class="c-secTitle__en">MERIT</div>
            <h2 class="c-secTitle__ja">脂肪溶解注射のメリット</h2>
          </div>

          <div class="p-injectionMerit__body">
            <ul class="p-injectionMerit__list">
              <li class="p-injectionMerit__item">
                <div class="p-injectionMerit__itemDesc">
                  <div class="p-injectionMerit__itemHead">
                    <div class="p-injectionMerit__itemNum">01</div>
                    <div class="p-injectionMerit__itemTitle">ダウンタイムが少ない</div>
                  </div>
                  <div class="p-injectionMerit__itemText">
                  脂肪溶解注射は外科手術を伴わないため、ダウンタイムが少なく済むのが大きなメリットです。<br>
                  <br>
                  脂肪が気になる部分に注射をするだけなので、施術自体は5〜15分程度で終わります。痛みや腫れが出ることがありますが、数日〜1週間程度で消失するのが一般的です。<br>
                  <br>
                  日常生活に支障をきたすことがなく、施術後のケアもシンプルなので、仕事やプライベートの予定を大幅に変更する必要はありません。
                  </div>
                </div>
                <figure class="p-injectionMerit__itemFigure">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/menu/injection_merit_01.jpg" alt="ダウンタイムが少ない" decoding="async" loading="lazy">
                </figure>
              </li>
    
              <li class="p-injectionMerit__item">
                <div class="p-injectionMerit__itemDesc">
                  <div class="p-injectionMerit__itemHead">
                    <div class="p-injectionMerit__itemNum">02</div>
                    <div class="p-injectionMerit__itemTitle">部分痩せができる</div>
                  </div>
                  <div class="p-injectionMerit__itemText">
                  脂肪溶解注射は、部分痩せを目指す方に大変おすすめの施術です。<br>
                  <br>
                  特に、フェイスラインや腹部、二の腕などの脂肪がたまりやすい場所に効果を発揮します。運動では困難な部分痩せに有効なので、自己流のダイエットに失敗したことがある方も理想のフェイスライン・ボディラインに近づく手助けをしてくれます。
                  </div>
                </div>
                <figure class="p-injectionMerit__itemFigure">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/menu/injection_merit_02.jpg" alt="部分痩せができる" decoding="async" loading="lazy">
                </figure>
              </li>
    
              <li class="p-injectionMerit__item">
                <div class="p-injectionMerit__itemDesc">
                  <div class="p-injectionMerit__itemHead">
                    <div class="p-injectionMerit__itemNum">03</div>
                    <div class="p-injectionMerit__itemTitle">リバウンドしにくい</div>
                  </div>
                  <div class="p-injectionMerit__itemText">
                    脂肪溶解注射は脂肪細胞を破壊する施術であるため、リバウンドしにくいのも大きな魅力です。<br>
                    <br>
                    通常のダイエットでは、脂肪細胞のサイズが一時的に縮小するだけで、ダイエットをやめると再び脂肪細胞が大きくなり、リバウンドのリスクが高まります。<br>
                    <br>
                    一方、脂肪溶解注射は脂肪細胞そのものを減少させるため、施術を受けた部位に脂肪が再び蓄積されるリスクが少なく、長期間にわたり理想の体型を維持しやすくなる点が特徴です。
                  </div>
                </div>
                <figure class="p-injectionMerit__itemFigure">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/menu/injection_merit_03.jpg" alt="" decoding="async" loading="lazy">
                </figure>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- 脂肪溶解注射のデメリット -->
      <div class="p-injectionMerit" id="injection_demerit">
        <div class="p-injectionMerit__inner l-inner">
          <div class="p-injectionMerit__head c-secTitle">
            <div class="c-secTitle__en">DEMERIT</div>
            <h2 class="c-secTitle__ja">脂肪溶解注射のデメリット</h2>
          </div>

          <div class="p-injectionMerit__body">
            <div class="p-injectionMerit__list">
              <div class="p-injectionMerit__item">
                <div class="p-injectionMerit__itemDesc">
                  <div class="p-injectionMerit__itemHead">
                    <div class="p-injectionMerit__itemNum">01</div>
                    <div class="p-injectionMerit__itemTitle">脂肪が多い部分は不向きな場合がある</div>
                  </div>
                  <div class="p-injectionMerit__itemText">
                  脂肪溶解注射は部分的な脂肪減少に効果を発揮しますが、脂肪が多い部位では十分な効果を得られないことがあります。<br>
                  <br>
                  安全に施術を受けていただくため、一度に注入できる薬剤の量には制限があります。脂肪が多い部位は施術の回数を増やさなければならず、その分時間とお金が必要です。<br>
                  <br>
                  また、広範囲の脂肪を効率よく減らすには、脂肪溶解注射と他の施術との併用が推奨されます。
                  </div>
                </div>
                <figure class="p-injectionMerit__itemFigure">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/menu/injection_demerit_01.jpg" alt="脂肪が多い部分は不向きな場合がある" decoding="async" loading="lazy">
                </figure>
              </div>

              <div class="p-injectionMerit__btn">
                <a href="<?php echo esc_url(home_url()); ?>/medical-diet/no-effect-fat-freezing-injection/" class="p-injectionMerit__btnLink c-btn">脂肪溶解注射は効果がないって本当？</a>
              </div>
    
              <div class="p-injectionMerit__item _reverse">
                <div class="p-injectionMerit__itemDesc">
                  <div class="p-injectionMerit__itemHead">
                    <div class="p-injectionMerit__itemNum">02</div>
                    <div class="p-injectionMerit__itemTitle">脂肪溶解成分が高濃度の場合はダウンタイムが大きい</div>
                  </div>
                  <div class="p-injectionMerit__itemText">
                  脂肪溶解注射は副作用が少ない施術として人気がありますが、使用する薬剤の濃度によってはダウンタイムが長くなることがあります。<br>
                  <br>
                  特に、高濃度の薬剤を使用すると痛みや腫れ、赤みが続きやすい傾向にあります。通常数日〜1週間程度で落ち着きますが、不安な方は事前のカウンセリングで疑問点をしっかりと確認しましょう。
                  </div>
                </div>
                <figure class="p-injectionMerit__itemFigure">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/menu/injection_demerit_02.jpg" alt="脂肪溶解成分が高濃度の場合はダウンタイムが大きい" decoding="async" loading="lazy">
                </figure>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- リエートクリニックが選ばれる理由 -->
      <div class="p-injectionReason" id="injection_reason">
        <div class="p-injectionReason__inner l-inner">
          <h2 class="p-singleMenu__title">リエートクリニックが選ばれる理由</h2>
          <div class="p-injectionReason__body">
            <figure class="p-injectionReason__figure">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/menu/clatuu-a_reason.jpg" alt="リエートクリニックが選ばれる理由" decoding="async" loading="lazy">
            </figure>
            <div class="p-injectionReason__desc">
              <div class="p-injectionReason__text">
              当院の医療ダイエットは、専門的な知識と経験に基づき、一人ひとりのお客様に合わせてプログラムを作成します。化学的根拠に基づいてアプローチするので、リバウンドのリスクが低く、細胞レベルでのダイエットが可能です。<br>
              <br>
              当院では、お客様に対して無理な食事制限や運動を強制することはありません。美しさと健康を少しでも長く維持するには、負担やストレスの多い方法は避けるべきだと考えているからです。<br>
              <br>
              効率よく痩せるには、一つの施術に限定せず、多角的なアプローチを行うのが有用です。切らない施術で日常生活への影響を最小限に抑えつつ、一緒に理想のボディラインを目指しましょう。
              </div>
              <div class="p-injectionReason__btn">
                <a href="<?php echo esc_url(home_url()); ?>/about/" class="ReasonCase__btnLink c-btn">リエートクリニックについて</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- 脂肪溶解注射の種類と特徴 -->
      <div class="p-injectionFeature" id="injection_feature">
        <div class="p-injectionFeature__inner l-inner">
          <h2 class="p-singleMenu__title">脂肪溶解注射の種類と特徴</h2>
          <div class="p-injectionFeature__body">
            <div class="p-injectionFeature__text">
              脂肪溶解注射にはいくつか種類があり、それぞれ特徴が異なります。以下の表に代表的な脂肪溶解注射の特徴をまとめました。
            </div>
            <table class="p-injection__table">
              <tr>
                <th></th>
                <th>カベリン</th>
                <th>FAT X Core</th>
                <th>BNLS Ultimate</th>
              </tr>
              <tr>
                <td>デオキシコール<br>酸濃度</td>
                <td>0.5%</td>
                <td>1%</td>
                <td>0.02%</td>
              </tr>
              <tr>
                <td>推奨回数の目安</td>
                <td>3〜5回<br>（1ヶ月に1回のペース）</td>
                <td>1〜2回<br>（1ヶ月に1回のペース）</td>
                <td>6〜10回<br>（1〜2週間に1回のペース）</td>
              </tr>
              <tr>
                <td>痛み・<br>腫れ</td>
                <td>やや少ない</td>
                <td>強い</td>
                <td>少ない</td>
              </tr>
              <tr>
                <td>ダウン<br>タイム</td>
                <td>数日〜<br>1週間程度</td>
                <td>1〜2週間程度</td>
                <td>数日</td>
              </tr>
              <tr>
                <td>メーカー</td>
                <td><a href="https://jp.dexlevo.co.kr/" target="_blank">DEXLEVO社<br>（韓国）</a></td>
                <td><a href="https://tnsco.co.kr/" target="_blank">TNS社<br>（韓国）</a></td>
                <td><a href="https://bnls-global.com/?page_id=3072&lang=ja" target="_blank">株式会社BNLS<br>（韓国）</a></td>
              </tr>
            </table>
            <div class="p-injectionFeature__attention">
              ※推奨回数は体型や施術部位によって個人差があります
            </div>
            <div class="p-injectionFeature__text">
              上記のうち、デオキシコール酸濃度がもっとも高いのはFAT X Coreで、少ない回数で高い効果を期待できます。高濃度ゆえ、その他の薬剤に比べて副作用が出やすく、ダウンタイムは1〜2週間とやや長めです。<br>
              <br>
              BNLS Ultimateは他の2種類に比べて濃度が低いのが特徴です。体への負担を軽減したい方に人気があります。<br>
              <br>
              カベリンは、優れた効果とリスクの少なさの両方を重視したい方に最適な薬剤です。ダウンタイムも比較的少ないので、予定変更をせずに日常生活を送れます。
            </div>
          </div>
        </div>
      </div>

      <!-- 当院の脂肪溶解注射「カベリン」について -->
      <div class="p-injectionMerit _kabeline">
        <div class="p-injectionMerit__inner l-inner">
          <h2 class="p-singleMenu__title">当院の脂肪溶解注射「カベリン」について</h2>
          <div class="p-injectionMerit__body">
            <div class="p-injectionMerit__list">

              <div class="p-injectionMerit__item">
                <figure class="p-injectionMerit__itemFigure">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/menu/injection_kabeline.jpg" alt="カベリン" decoding="async" loading="lazy">
                </figure>
                <div class="p-injectionMerit__itemDesc">
                  <div class="p-injectionMerit__itemText">
                  当院の脂肪溶解注射では、カベリンという薬剤を使用します。従来の脂肪溶解注射よりも短い期間で効果を期待でき、効率よく痩せたい方に最適な薬剤です。<br>
                  <br>
                  カベリンは韓国食品医薬品安全処（MFDS）で承認を受けています。<br>
                  <br>
                  カベリンには大きく3つの特徴があります。
                  </div>
                </div>
              </div>

              <div class="p-injectionMerit__item">
                <figure class="p-injectionMerit__itemFigure">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/menu/injection_kabeline_01.jpg" alt="脂肪溶解成分が高濃度で配合されている" decoding="async" loading="lazy">
                </figure>
                <div class="p-injectionMerit__itemDesc">
                  <div class="p-injectionMerit__itemHead">
                    <div class="p-injectionMerit__itemNum">01</div>
                    <div class="p-injectionMerit__itemTitle">脂肪溶解成分が高濃度で配合されている</div>
                  </div>
                  <div class="p-injectionMerit__itemText">
                  カベリンには、米国FDAが承認した脂肪溶解成分「デオキシコール酸」が高濃度で配合されています。<br>
                  <br>
                  同じデオキシコール酸を含む薬剤に韓国製の「BNLS-neo」という薬剤がありますが、カベリンに含まれるデオキシコール酸の量はBNLS-neoの5,000倍です。<br>
                  <br>
                  カベリンには他にも、脂肪分解と排出を促進するL-カルニチンやアーティチョークエキスが配合されています。
                  </div>
                </div>
              </div>
    
              <div class="p-injectionMerit__item">
                <figure class="p-injectionMerit__itemFigure">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/menu/injection_kabeline_02.jpg" alt="顔・体どちらにも適用している" decoding="async" loading="lazy">
                </figure>
                <div class="p-injectionMerit__itemDesc">
                  <div class="p-injectionMerit__itemHead">
                    <div class="p-injectionMerit__itemNum">02</div>
                    <div class="p-injectionMerit__itemTitle">顔・体どちらにも適用している</div>
                  </div>
                  <div class="p-injectionMerit__itemText">
                  カベリンは、顔と体のどちらにも使用できる汎用性の高さが魅力です。<br>
                  <br>
                  <a href="https://lietoclinic.com/medical-diet/face-fat-dissolving-injection/">フェイスラインの引き締め</a>はもちろんのこと、<a href="https://lietoclinic.com/medical-diet/abdominal-fat-bnls/">腹部</a>や太もも、二の腕などボディへの施術も可能です。顔と体の気になる部分をバランスよくシェイプアップできるので、全身のプロポーション改善に役立ちます。
                  </div>
                </div>
              </div>

              <div class="p-injectionMerit__item">
                <figure class="p-injectionMerit__itemFigure">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/menu/injection_kabeline_03.jpg" alt="痛み・ダウンタイムが少ない" decoding="async" loading="lazy">
                </figure>
                <div class="p-injectionMerit__itemDesc">
                  <div class="p-injectionMerit__itemHead">
                    <div class="p-injectionMerit__itemNum">03</div>
                    <div class="p-injectionMerit__itemTitle">痛み・ダウンタイムが少ない</div>
                  </div>
                  <div class="p-injectionMerit__itemText">
                  施術中、および施術後の痛みが少ないことも、カベリンの大きな特徴の一つです。<br>
                  <br>
                  脂肪溶解注射は注入時の痛みが懸念されますが、カベリンは注射針が細く、強い痛みはほとんど感じません。施術後の腫れや赤みも一時的なもので、通常は数日で消失します。<br>
                  <br>
                  長期間の休暇も必要なく、施術後すぐに日常生活を送ることができます。
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- 脂肪溶解注射「カベリン」の主要成分 -->
      <div class="p-injectionIngredient">
        <div class="p-injectionIngredient__inner l-inner">
          <h2 class="p-singleMenu__title">脂肪溶解注射「カベリン」の主要成分</h2>
          <div class="p-injectionIngredient__body">
            <div class="p-injectionIngredient__text">
            以下はカベリンに配合される成分の一例です。
            </div>
            <table class="p-injection__table _ingredient">
              <tr>
                <th>成分名</th>
                <th>効果</th>
              </tr>
              <tr>
                <td>デオキシコール酸</td>
                <td>脂肪細胞の細胞膜を破壊する</td>
              </tr>
              <tr>
                <td>Lーカルニチン</td>
                <td>脂肪分解と排出を促進する</td>
              </tr>
              <tr>
                <td>アーティチョークエキス</td>
                <td>肌を引き締め、弾力を与える</td>
              </tr>
            </table>
            <div class="p-injectionIngredient__text">
            デオキシコール酸には脂肪細胞を破壊する効果があります。カベリンにはデオキシコール酸が高濃度（0.5％）で配合されており、脂肪が気になる部分のサイズダウンに大変効果的です。<br>
            <br>
            L-カルニチンには、破壊された脂肪細胞が体外へ排出するのを促す効果があります。脂肪細胞が除去された後はコラーゲンに代替されるので、施術後は肌のハリ感もアップします。<br>
            <br>
            アーティチョークエキスの引き締め効果も相まって、施術後は肌に弾力が出る嬉しい効果も期待できるでしょう。
            </div>
          </div>
        </div>
      </div>

      <!-- 症例 -->
      <div class="p-injectionCase" id="injection_case">
        <div class="p-injectionCase__inner l-inner">
          <h2 class="p-singleMenu__title">症例</h2>
          <div class="p-injectionCase__body">

            <!-- 腹部 -->
            <div class="p-injectionCase__area">
              <!-- <div class="p-injectionCase__subtitle">腹部</div> -->
              <ul class="p-injectionCase__list">
                <li class="p-injectionCase__item">
                  <div class="p-injectionCase__figures">
                    <figure class="p-injectionCase__figure">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/menu/injection_item01_1.jpg" alt="術前" decoding="async" loading="lazy">
                      <figcaption>術前</figcaption>
                    </figure>
                    <figure class="p-injectionCase__figure">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/menu/injection_item01_2.jpg" alt="術後" decoding="async" loading="lazy">
                      <figcaption>術後</figcaption>
                    </figure>
                  </div>

                  <div class="p-injectionCase__quote">[画像引用] <a href="http://www.kabelline.jp/" target="_blank">Kabeline</a></div>

                  <div class="p-injectionCase__desc">
                    <div class="p-injectionCase__text">施術内容：脂肪溶解注射（カベリン使用）</div>
                    <div class="p-injectionCase__text">副作用・リスク：腫れ、内出血</div>
                  </div>
                </li>

                <li class="p-injectionCase__item">
                  <div class="p-injectionCase__figures">
                    <figure class="p-injectionCase__figure">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/menu/injection_item01_3.jpg" alt="術前" decoding="async" loading="lazy">
                      <figcaption>術前</figcaption>
                    </figure>
                    <figure class="p-injectionCase__figure">
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/menu/injection_item01_4.jpg" alt="術後" decoding="async" loading="lazy">
                      <figcaption>術後</figcaption>
                    </figure>
                  </div>

                  <div class="p-injectionCase__quote">[画像引用] <a href="http://www.kabelline.jp/" target="_blank">Kabeline</a></div>

                  <div class="p-injectionCase__desc">
                    <div class="p-injectionCase__text">施術内容：脂肪溶解注射（カベリン使用）</div>
                    <div class="p-injectionCase__text">副作用・リスク：腫れ、内出血</div>
                  </div>
                </li>
              </ul>
            </div>

          </div>
        </div>
      </div>

      <!-- 脂肪溶解注射の注入量目安 -->
      <div class="p-injectionPart" id="injection_part">
        <div class="p-injectionPart__inner l-inner">
          <h2 class="p-singleMenu__title">脂肪溶解注射の注入量目安</h2>
          <div class="p-injectionPart__body">
            <div class="p-injectionPart__text">
            脂肪溶解注射は、部位によって注入する薬剤の量が異なります。
            </div>
            <figure class="p-injectionPart__figure">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/menu/injection_part.jpg" alt="脂肪溶解注射の注入量目安" decoding="async" loading="lazy">
            </figure>
          </div>
        </div>
      </div>

      <!-- 料金 -->
      <div class="p-injectionPrice">
        <div class="p-injectionPrice__inner l-inner">
          <h2 class="p-singleMenu__title">料金</h2>
          <div class="p-injectionPrice__body">

            <div class="p-injectionPrice__text">
              当院では一人ひとりに合わせた痩身プログラムをご提案しております。<br>
              それぞれのお悩みや目標を考慮し、プランを作成するので、まずはカウンセリングにてご相談ください。
            </div>
            <div class="p-injectionPrice__cta">
              <?php get_template_part('template-parts/part', 'cta'); ?>
            </div>
          </div>
        </div>
      </div>

      <!-- リスク・副作用 -->
      <div class="p-singleMenu__area l-inner">
        <h2 class="p-singleMenu__title">リスク・副作用</h2>
        <div class="p-singleMenu__attention">
        脂肪溶解注射では次の副作用が生じることがあります。<br>
        また、以下の禁忌事項に当てはまる方は施術を受けることができません。
        </div>
        <div class="p-singleMenu__box">
          <dl class="p-singleMenu__detail">
            <div class="p-singleMenu__detailRow">
              <dt>施術時間</dt>
              <dd>20～60分</dd>
            </div>
            <div class="p-singleMenu__detailRow">
              <dt>通院</dt>
              <dd>1ヶ月に1回、計3〜5回継続するのが理想です</dd>
            </div>
            <div class="p-singleMenu__detailRow">
              <dt>ダウンタイム</dt>
              <dd>特にございません</dd>
            </div>
            <div class="p-singleMenu__detailRow">
              <dt>リスク・副作用</dt>
              <dd>腫れ、内出血</dd>
            </div>
            <div class="p-singleMenu__detailRow">
              <dt>メイク</dt>
              <dd>当日から可能</dd>
            </div>
            <div class="p-singleMenu__detailRow">
              <dt>禁忌事項</dt>
              <dd>
              ・妊娠中または妊娠の可能性がある方<br>
              ・授乳中の方<br>
              ・基礎疾患のある方<br>
              ・甲状腺機能亢進症（バセドウ病）のある方<br>
              ・過去に脂肪溶解注射でアレルギー反応がみられた方
              </dd>
            </div>
          </dl>
        </div>  
        <div class="p-singleMenu__text" style="text-align: center; margin-top: 8px; font-size: 18px;">
        これらの症状は一時的なもので、通常数日から一週間程度で自然に消失します。
        </div>
      </div>

      <!-- 施術の流れ -->
      <div class="p-injectionFlow">
        <div class="p-injectionFlow__inner l-inner">
          <h2 class="p-singleMenu__title">施術の流れ</h2>
          <div class="p-injectionFlow__body">
            <ul class="p-injectionFlow__list">
              <li class="p-injectionFlow__item">
                <div class="p-injectionFlow__itemIndex">
                  <div class="p-injectionFlow__itemHead">
                    <div class="p-injectionFlow__itemNum">01</div>
                  </div>
                  <div class="p-injectionFlow__itemTitle">
                  カウンセリング
                  </div>
                </div>
                <div class="p-injectionFlow__itemText">
                当院では一人ひとりに合った痩身プログラムをご提案するため、施術前のカウンセリングを実施しています。<br>
                お客様の生活習慣や目標、希望部位などを確認させていただき、注入量や注入範囲を決定します。不安や疑問が、あればどのような些細なことでもご質問ください。
                </div>
              </li>

              <li class="p-injectionFlow__item">
                <div class="p-injectionFlow__itemIndex">
                  <div class="p-injectionFlow__itemHead">
                    <div class="p-injectionFlow__itemNum">02</div>
                  </div>
                  <div class="p-injectionFlow__itemTitle">
                  麻酔
                  </div>
                </div>
                <div class="p-injectionFlow__itemText">
                痛みを軽減するため、局所麻酔を行います。
                </div>
              </li>

              <li class="p-injectionFlow__item">
                <div class="p-injectionFlow__itemIndex">
                  <div class="p-injectionFlow__itemHead">
                    <div class="p-injectionFlow__itemNum">03</div>
                  </div>
                  <div class="p-injectionFlow__itemTitle">
                  クレンジング・洗顔
                  </div>
                </div>
                <div class="p-injectionFlow__itemText">
                顔へ施術を行う際はクレンジングと洗顔を行います。
                </div>
              </li>

              <li class="p-injectionFlow__item">
                <div class="p-injectionFlow__itemIndex">
                  <div class="p-injectionFlow__itemHead">
                    <div class="p-injectionFlow__itemNum">04</div>
                  </div>
                  <div class="p-injectionFlow__itemTitle">
                  薬剤注入
                  </div>
                </div>
                <div class="p-injectionFlow__itemText">
                希望部位に薬剤を注入します。施術時間は薬剤の注入量や部位によりますが、20〜60分が目安です。
                </div>
              </li>

              <li class="p-injectionFlow__item">
                <div class="p-injectionFlow__itemIndex">
                  <div class="p-injectionFlow__itemHead">
                    <div class="p-injectionFlow__itemNum">05</div>
                  </div>
                  <div class="p-injectionFlow__itemTitle">
                  メイク・帰宅
                  </div>
                </div>
                <div class="p-injectionFlow__itemText">
                痛みや違和感がなければすぐにお帰りいただけます。ダウンタイムもほとんどなく、施術後すぐにメイクすることも可能です。
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- 脂肪溶解注射のよくある質問 -->
      <div class="p-singleMenu__area l-inner" id="injection_faq">
        <h2 class="p-singleMenu__title _nols">脂肪溶解注射のよくある質問</h2>

        <div class="p-singleMenu__box">
          <div class="p-singleMenu__faq p-faq" itemscope itemtype="https://schema.org/FAQPage">
            <?php get_template_part('template-parts/faq/part', 'fat-dissolving-injection'); ?>
          </div>
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
