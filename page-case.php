<?php get_header(); ?>

<main class="l-main">

  <section class="p-pageCase">

    <div class="p-pageCase__head c-pageTitleHead">
      <?php get_template_part('template-parts/part', 'breadcrumb'); ?>
      <div class="c-pageTitle">
        <div class="c-pageTitle__en">CASE</div>
        <h1 class="c-pageTitle__ja">当院の症例</h2>
      </div>
    </div>

    <div class="p-pageCase__body">
      <div class="l-inner">
        <ul class="p-pageCase__list p-case">

          <?php $i = 1; ?>
          <li class="p-case__item">
            <div class="p-case__head">
              <div class="p-case__headName">症例</div>
              <div class="p-case__headNum">0<?php echo $i; ?></div>
            </div>
            <div class="p-case__body">
              <div class="p-case__images">
                <div class="p-case__image">
                  <div class="p-case__imageTitle">BEFORE</div>
                  <figure class="p-case__figure">
                    <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/case/0<?php echo $i; ?>-1.jpg" alt="before">
                  </figure>
                </div>
                <div class="p-case__image">
                  <div class="p-case__imageTitle">AFTER</div>
                  <figure class="p-case__figure">
                    <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/case/0<?php echo $i; ?>-2.jpg" alt="after">
                  </figure>
                </div>
              </div>

              <div class="p-case__box">
                <div class="p-case__boxTitle js-accordion">
                  Y.T様 リエートクリニックオリジナルプログラム
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
                      <dd>400,000円〜1,500,000円</dd>
                      <dt>期間・回数</dt>
                      <dd>3ヶ月/10回</dd>
                      <dt>リスク・副作用</dt>
                      <dd>糖尿病予防に効果的で、インスリン分泌促進により血糖値上昇抑制と糖尿病リスク低減が期待できます。</dd>
                    </dl>
                  </div>
                </div>
              </div>
            </div>
            <?php $i ++; ?>
          </li>
          
          <li class="p-case__item">
            <div class="p-case__head">
              <div class="p-case__headName">症例</div>
              <div class="p-case__headNum">0<?php echo $i; ?></div>
            </div>
            <div class="p-case__body">
              <div class="p-case__images">
                <div class="p-case__image">
                  <div class="p-case__imageTitle">BEFORE</div>
                  <figure class="p-case__figure">
                    <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/case/0<?php echo $i; ?>-1.jpg" alt="before">
                  </figure>
                </div>
                <div class="p-case__image">
                  <div class="p-case__imageTitle">AFTER</div>
                  <figure class="p-case__figure">
                    <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/case/0<?php echo $i; ?>-2.jpg" alt="after">
                  </figure>
                </div>
              </div>

              <div class="p-case__box">
                <div class="p-case__boxTitle js-accordion">
                  A.M様 リエートクリニックオリジナルプログラム
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
                      <dd>400,000円〜1,700,000円</dd>
                      <dt>期間・回数</dt>
                      <dd>4ヶ月/14回</dd>
                      <dt>リスク・副作用</dt>
                      <dd>糖尿病予防に効果的で、インスリン分泌促進により血糖値上昇抑制と糖尿病リスク低減が期待できます。</dd>
                    </dl>
                  </div>
                </div>
              </div>
            </div>
            <?php $i ++; ?>
          </li>

          <li class="p-case__item">
            <div class="p-case__head">
              <div class="p-case__headName">症例</div>
              <div class="p-case__headNum">0<?php echo $i; ?></div>
            </div>
            <div class="p-case__body">
              <div class="p-case__images">
                <div class="p-case__image">
                  <div class="p-case__imageTitle">BEFORE</div>
                  <figure class="p-case__figure">
                    <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/case/0<?php echo $i; ?>-1.jpg" alt="before">
                  </figure>
                </div>
                <div class="p-case__image">
                  <div class="p-case__imageTitle">AFTER</div>
                  <figure class="p-case__figure">
                    <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/case/0<?php echo $i; ?>-2.jpg" alt="after">
                  </figure>
                </div>
              </div>

              <div class="p-case__box">
                <div class="p-case__boxTitle js-accordion">
                  H.M様 リエートクリニックオリジナルプログラム
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
                      <dd>400,000円〜1,500,000円</dd>
                      <dt>期間・回数</dt>
                      <dd>3ヶ月/10回</dd>
                      <dt>リスク・副作用</dt>
                      <dd>糖尿病予防に効果的で、インスリン分泌促進により血糖値上昇抑制と糖尿病リスク低減が期待できます。</dd>
                    </dl>
                  </div>
                </div>
              </div>
            </div>
            <?php $i ++; ?>
          </li>

          <li class="p-case__item">
            <div class="p-case__head">
              <div class="p-case__headName">症例</div>
              <div class="p-case__headNum">0<?php echo $i; ?></div>
            </div>
            <div class="p-case__body">
              <div class="p-case__images">
                <div class="p-case__image">
                  <div class="p-case__imageTitle">BEFORE</div>
                  <figure class="p-case__figure">
                    <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/case/0<?php echo $i; ?>-1.jpg" alt="before">
                  </figure>
                </div>
                <div class="p-case__image">
                  <div class="p-case__imageTitle">AFTER</div>
                  <figure class="p-case__figure">
                    <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/case/0<?php echo $i; ?>-2.jpg" alt="after">
                  </figure>
                </div>
              </div>

              <div class="p-case__box">
                <div class="p-case__boxTitle js-accordion">
                  I.S様 リエートクリニックオリジナルプログラム
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
                      <dd>400,000円〜1,500,000円</dd>
                      <dt>期間・回数</dt>
                      <dd>3ヶ月/10回</dd>
                      <dt>リスク・副作用</dt>
                      <dd>糖尿病予防に効果的で、インスリン分泌促進により血糖値上昇抑制と糖尿病リスク低減が期待できます。</dd>
                    </dl>
                  </div>
                </div>
              </div>
            </div>
            <?php $i ++; ?>
          </li>

          <li class="p-case__item">
            <div class="p-case__head">
              <div class="p-case__headName">症例</div>
              <div class="p-case__headNum">0<?php echo $i; ?></div>
            </div>
            <div class="p-case__body">
              <div class="p-case__images">
                <div class="p-case__image">
                  <div class="p-case__imageTitle">BEFORE</div>
                  <figure class="p-case__figure">
                    <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/case/0<?php echo $i; ?>-1.jpg" alt="before">
                  </figure>
                </div>
                <div class="p-case__image">
                  <div class="p-case__imageTitle">AFTER</div>
                  <figure class="p-case__figure">
                    <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/case/0<?php echo $i; ?>-2.jpg" alt="after">
                  </figure>
                </div>
              </div>

              <div class="p-case__box">
                <div class="p-case__boxTitle js-accordion">
                  I.Y様 リエートクリニックオリジナルプログラム
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
                      <dd>400,000円〜1,300,000円</dd>
                      <dt>期間・回数</dt>
                      <dd>3ヶ月/10回</dd>
                      <dt>リスク・副作用</dt>
                      <dd>糖尿病予防に効果的で、インスリン分泌促進により血糖値上昇抑制と糖尿病リスク低減が期待できます。</dd>
                    </dl>
                  </div>
                </div>
              </div>
            </div>
            <?php $i ++; ?>
          </li>

          <li class="p-case__item">
            <div class="p-case__head">
              <div class="p-case__headName">症例</div>
              <div class="p-case__headNum">0<?php echo $i; ?></div>
            </div>
            <div class="p-case__body">
              <div class="p-case__images">
                <div class="p-case__image">
                  <div class="p-case__imageTitle">BEFORE</div>
                  <figure class="p-case__figure">
                    <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/case/0<?php echo $i; ?>-1.jpg" alt="before">
                  </figure>
                </div>
                <div class="p-case__image">
                  <div class="p-case__imageTitle">AFTER</div>
                  <figure class="p-case__figure">
                    <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/case/0<?php echo $i; ?>-2.jpg" alt="after">
                  </figure>
                </div>
              </div>

              <div class="p-case__box">
                <div class="p-case__boxTitle js-accordion">
                  IF様 リエートクリニックオリジナルプログラム
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
                      <dd>400,000円〜1,500,000円</dd>
                      <dt>期間・回数</dt>
                      <dd>3ヶ月/10回</dd>
                      <dt>リスク・副作用</dt>
                      <dd>糖尿病予防に効果的で、インスリン分泌促進により血糖値上昇抑制と糖尿病リスク低減が期待できます。</dd>
                    </dl>
                  </div>
                </div>
              </div>
            </div>
            <?php $i ++; ?>
          </li>

          <li class="p-case__item">
            <div class="p-case__head">
              <div class="p-case__headName">症例</div>
              <div class="p-case__headNum">0<?php echo $i; ?></div>
            </div>
            <div class="p-case__body">
              <div class="p-case__images">
                <div class="p-case__image">
                  <div class="p-case__imageTitle">BEFORE</div>
                  <figure class="p-case__figure">
                    <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/case/0<?php echo $i; ?>-1.jpg" alt="before">
                  </figure>
                </div>
                <div class="p-case__image">
                  <div class="p-case__imageTitle">AFTER</div>
                  <figure class="p-case__figure">
                    <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/case/0<?php echo $i; ?>-2.jpg" alt="after">
                  </figure>
                </div>
              </div>

              <div class="p-case__box">
                <div class="p-case__boxTitle js-accordion">
                  MY様 リエートクリニックオリジナルプログラム
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
                      <dd>400,000円〜1,500,000円</dd>
                      <dt>期間・回数</dt>
                      <dd>3ヶ月/10回</dd>
                      <dt>リスク・副作用</dt>
                      <dd>糖尿病予防に効果的で、インスリン分泌促進により血糖値上昇抑制と糖尿病リスク低減が期待できます。</dd>
                    </dl>
                  </div>
                </div>
              </div>
            </div>
            <?php $i ++; ?>
          </li>

          <li class="p-case__item">
            <div class="p-case__head">
              <div class="p-case__headName">症例</div>
              <div class="p-case__headNum">0<?php echo $i; ?></div>
            </div>
            <div class="p-case__body">
              <div class="p-case__images">
                <div class="p-case__image">
                  <div class="p-case__imageTitle">BEFORE</div>
                  <figure class="p-case__figure">
                    <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/case/0<?php echo $i; ?>-1.jpg" alt="before">
                  </figure>
                </div>
                <div class="p-case__image">
                  <div class="p-case__imageTitle">AFTER</div>
                  <figure class="p-case__figure">
                    <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/case/0<?php echo $i; ?>-2.jpg" alt="after">
                  </figure>
                </div>
              </div>

              <div class="p-case__box">
                <div class="p-case__boxTitle js-accordion">
                  T.A様 リエートクリニックオリジナルプログラム
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
                      <dd>400,000円〜1,200,000円</dd>
                      <dt>期間・回数</dt>
                      <dd>3ヶ月/10回</dd>
                      <dt>リスク・副作用</dt>
                      <dd>糖尿病予防に効果的で、インスリン分泌促進により血糖値上昇抑制と糖尿病リスク低減が期待できます。</dd>
                    </dl>
                  </div>
                </div>
              </div>
            </div>
            <?php $i ++; ?>
          </li>

          <li class="p-case__item">
            <div class="p-case__head">
              <div class="p-case__headName">症例</div>
              <div class="p-case__headNum">0<?php echo $i; ?></div>
            </div>
            <div class="p-case__body">
              <div class="p-case__images">
                <div class="p-case__image">
                  <div class="p-case__imageTitle">BEFORE</div>
                  <figure class="p-case__figure">
                    <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/case/0<?php echo $i; ?>-1.jpg" alt="before">
                  </figure>
                </div>
                <div class="p-case__image">
                  <div class="p-case__imageTitle">AFTER</div>
                  <figure class="p-case__figure">
                    <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/case/0<?php echo $i; ?>-2.jpg" alt="after">
                  </figure>
                </div>
              </div>

              <div class="p-case__box">
                <div class="p-case__boxTitle js-accordion">
                  Y.K様 リエートクリニックオリジナルプログラム
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
                      <dd>400,000円〜1,500,000円</dd>
                      <dt>期間・回数</dt>
                      <dd>3ヶ月/10回</dd>
                      <dt>リスク・副作用</dt>
                      <dd>糖尿病予防に効果的で、インスリン分泌促進により血糖値上昇抑制と糖尿病リスク低減が期待できます。</dd>
                    </dl>
                  </div>
                </div>
              </div>
            </div>
            <?php $i ++; ?>
          </li>

        </ul>
      </div>
    </div>

    <!-- CTA -->
    <div class="p-pageCase__cta l-inner">
      <?php get_template_part('template-parts/part', 'cta'); ?>
    </div>

  </section>

</main>

<?php get_footer();
