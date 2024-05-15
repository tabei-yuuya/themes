<?php get_header(); ?>
<!-- main visual -->
<?php
$top_slider = SCF::get_option_meta('top_slider');
$top_slider_group = $top_slider['top_slider_group'];
if (!empty($top_slider_group)) :
?>
<div class="mv">
  <div class="mv__inner">
    <div class="mv__slider js-mv-swiper">
      <div class="swiper-wrapper">
      <?php foreach ($top_slider_group as $item) :
        //画像
        $top_img_pc_id = $item['top_slider_img_pc'];
        $top_img_pc_src = wp_get_attachment_url($top_img_pc_id);
        $top_img_sp_id = $item['top_slider_img_sp'];
        $top_img_sp_src = wp_get_attachment_url($top_img_sp_id);

        //alt
        $alt_pc = get_post_meta($top_img_pc_id, '_wp_attachment_image_alt', true);

      ?>
       <div class="swiper-slide">
          <picture>
            <source srcset="<?php echo $top_img_pc_src;?>" media="(min-width: 768px)" >
            <img src="<?php echo $top_img_sp_src;?>" alt="<?php echo $alt_pc;?>">
          </picture>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="mv__title">
      <p class=" mv__main">DIVING</p>
      <p class="mv__sub">into the ocean</p>
    </div>
  </div>
</div>
<?php endif; ?>


<!-- main visual -->

<!-- page-top -->
<div class="page-top">
</div>
<!-- page-top -->

<!-- main -->
  <main>
    <!-- campaign -->
    <section id="campaign" class="campaign campaign-layout">
      <div class="campaign__inner inner">
      <div class="campaing__title section-title">
        <h2 class="section-title__main">
          <span>C</span>ampaign
        </h2>
        <p class="section-title__sub">
          キャンペーン
        </p>
      </div>
      <div class="campaign__items">
        <div class="swiper2 campaign__swiper">
          <div class="swiper__button">
            <div class="campaign__next u-desktop"></div>
            <div class="campaign__prev u-desktop"></div>
          </div>
          <!-- swiper-wrapper -->
          <div class="swiper-wrapper campaign__cards campaign-cards">
            <!-- swiper-slider -->
            <div class="swiper-slide campaign-cards__item">
              <a href="#" class="campaign-cards__card card">
                <div class="card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign1.jpg" alt="たくさんの魚が泳いでいる画像">
              </div>
              <div class="card__contents">
                <div class="card__head">
                  <div class="card__label">ライセンス講習</div>
                  <p class="card__title">ライセンス取得</p>
                </div>
                <div class="card__border border"></div>
                <div class="card__body">
                  <p class="card__info">全部コミコミ(お一人様)</p>
                  <div class="card__price-box">
                    <div class="card__price card__price--lg">&yen;56,000</div>
                    <div class="card__price card__price--sm">&yen;46,000</div>
                  </div>
                </div>
              </div>
              </a>
            </div>
            <div class="swiper-slide campaign-cards__item">
              <a href="#" class="campaign-cards__card card">
                <div class="card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign2.jpg" alt="海と複数のボートの画像">
              </div>
              <div class="card__contents">
                <div class="card__head">
                  <div class="card__label">体験ダイビング</div>
                  <p class="card__title">貸切体験ダイビング</p>
                </div>
                <div class="card__border border"></div>
                <div class="card__body">
                  <p class="card__info">全部コミコミ(お一人様)</p>
                  <div class="card__price-box">
                    <div class="card__price card__price--lg">&yen;24,000</div>
                    <div class="card__price card__price--sm">&yen;18,000</div>
                  </div>
                </div>
              </div>
              </a>
            </div>
            <div class="swiper-slide campaign-cards__item">
              <a href="#" class="campaign-cards__card card">
                <div class="card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign3.jpg" alt="小さいクラゲ達が暗い水の中を泳いでいる画像">
              </div>
              <div class="card__contents">
                <div class="card__head">
                  <div class="card__label">体験ダイビング</div>
                  <p class="card__title">ナイトダイビング</p>
                </div>
                <div class="card__border border"></div>
                <div class="card__body">
                  <p class="card__info">全部コミコミ(お一人様)</p>
                  <div class="card__price-box">
                    <div class="card__price card__price--lg">&yen;10,000</div>
                    <div class="card__price card__price--sm">&yen;8,000</div>
                  </div>
                </div>
              </div>
              </a>
            </div>
            <div class="swiper-slide campaign-cards__item">
              <a href="#" class="campaign-cards__card card">
                <div class="card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign4.jpg" alt="4人のダイバーが海面に顔を出している画像">
              </div>
              <div class="card__contents">
                <div class="card__head">
                  <div class="card__label">ファンダイビング</div>
                  <p class="card__title">貸切ファンダイビング</p>
                </div>
                <div class="card__border border"></div>
                <div class="card__body">
                  <p class="card__info">全部コミコミ(お一人様)</p>
                  <div class="card__price-box">
                    <div class="card__price card__price--lg">&yen;20,000</div>
                    <div class="card__price card__price--sm">&yen;16,000</div>
                  </div>
                </div>
              </div>
              </a>
            </div>
            <div class="swiper-slide campaign-cards__item">
              <a href="#" class="campaign-card__card card">
                <div class="card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign1.jpg" alt="たくさんの魚が泳いでいる画像">
              </div>
              <div class="card__contents">
                <div class="card__head">
                  <div class="card__label">ライセンス講習</div>
                  <p class="card__title">ライセンス取得</p>
                </div>
                <div class="card__border border"></div>
                <div class="card__body">
                  <p class="card__info">全部コミコミ(お一人様)</p>
                  <div class="card__price-box">
                    <div class="card__price card__price--lg">&yen;56,000</div>
                    <div class="card__price card__price--sm">&yen;46,000</div>
                  </div>
                </div>
              </div>
              </a>
            </div>
            <div class="swiper-slide campaign-cards__item">
              <a href="#" class="campaign-card__card card">
                <div class="card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign2.jpg" alt="海と複数のボートの画像">
              </div>
              <div class="card__contents">
                <div class="card__head">
                  <div class="card__label">体験ダイビング</div>
                  <p class="card__title">貸切体験ダイビング</p>
                </div>
                <div class="card__border border"></div>
                <div class="card__body">
                  <p class="card__info">全部コミコミ(お一人様)</p>
                  <div class="card__price-box">
                    <div class="card__price card__price--lg">&yen;24,000</div>
                    <div class="card__price card__price--sm">¥&yen;18,000</div>
                  </div>
                </div>
              </div>
              </a>
            </div>
            <div class="swiper-slide campaign-cards__item">
              <a href="#" class="campaign-card__card card">
                <div class="card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign3.jpg" alt="小さいクラゲ達が暗い水の中を泳いでいる画像">
              </div>
              <div class="card__contents">
                <div class="card__head">
                  <div class="card__label">体験ダイビング</div>
                  <p class="card__title">ナイトダイビング</p>
                </div>
                <div class="card__border border"></div>
                <div class="card__body">
                  <p class="card__info">全部コミコミ(お一人様)</p>
                  <div class="card__price-box">
                    <div class="card__price card__price--lg">&yen;10,000</div>
                    <div class="card__price card__price--sm">&yen;8,000</div>
                  </div>
                </div>
              </div>
              </a>
            </div>
            <div class="swiper-slide campaign-cards__item">
              <a href="#" class="campaign-card__card card">
                <div class="card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign4.jpg" alt="4人のダイバーが海面に顔を出している画像">
              </div>
              <div class="card__contents">
                <div class="card__head">
                  <div class="card__label">ファンダイビング</div>
                  <p class="card__title">貸切ファンダイビング</p>
                </div>
                <div class="card__border border"></div>
                <div class="card__body">
                  <p class="card__info">全部コミコミ(お一人様)</p>
                  <div class="card__price-box">
                    <div class="card__price card__price--lg">&yen;20,000</div>
                    <div class="card__price card__price--sm">&yen;16,000</div>
                  </div>
                </div>
              </div>
              </a>
            </div>
            <!-- /swiper-slider -->
          <!-- /swiper-wrapper -->
        </div>
      </div>
      <div class="campaign__btn">
      <a href="campaign.html" class="btn">View more<span class="btn__arrow"></span></a>
      </div>
     </div>
     </div>
    </section>
    <!-- campaign -->

    <!-- about -->
    <section id="about" class="about about-layout">
      <div class="about__inner inner">
        <div class="about__title section-title">
          <h2 class="section-title__main">
            <span>A</span>bout us
          </h2>
          <p class="section-title__sub">
            私たちについて
          </p>
        </div>

      <div class="about__contents">
      </div>
        <div class="about__content">
          <div class="about__img1 about__img1--sm">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/ocean1.jpg" alt="オレンジ色と白色の屋根の上に、シーサーの置物が置いてある画像">
          </div>
          <div class="about__img1 about__img1--lg">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/ocean2.jpg" alt="海の中を2匹の黄色い魚が泳いでいる画像">
          </div>
        </div>
          <div class="about__box">
            <p class="about__text about__text--lg">Dive into<br>the Ocean</p>
            <div class="about__box2">
              <p class="about__text about__text--sm">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                <br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
                <div class="about__btn">
                  <a href="about.html" class="btn">View more<span class="btn__arrow"></span></a>
                </div>
              </div>
            </div>
        </div>
    </section>
    <!-- about -->

    <!-- information -->
    <section id="information" class="information information-layout">
      <div class="information__inner inner">
        <div class="information__title section-title">
          <h2 class="section-title__main">
          <span>I</span>nformation
        </h2>
        <p class="section-title__sub">
          ダイビング情報
        </p>
      </div>
      <div class="information__wrapper">
        <div class="information__img js-colorbox">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/info.jpg" alt="珊瑚礁の近くを泳ぐ黄色と青色の魚たち">
        </div>

        <div class="information__box">
          <div class="information__text information__text--lg">
            ライセンス講習
          </div>
          <div class="border"></div>
          <div class="information__text information__text--sm">
            当店はダイビングライセンス（Cカード）世界<br class="u-mobile">最大の教育機関PADIの「正規店」として店舗登録されています。<br>正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
          </div>

          <div class="information__btn">
          <a href="infomation.html" class="btn">View more<span class="btn__arrow"></span></a>
         </div>
        </div>
      </div>
    </div>
    </section>
    <!-- information -->

    <!-- blog -->
    <?php
    // WordPressのカスタムクエリを設定し、ブログ投稿を取得
    $blog_query          = new WP_Query([
        'post_type'      => 'post',    // 投稿タイプを'投稿'に指定
        'posts_per_page' => 3,         // 表示する投稿数
    ]);
     if ($blog_query->have_posts()) : ?>
    <section id="blog" class="blog blog-layout">
      <div class="blog__inner inner">
        <div class="blog__title section-title section-title--blog">
          <h2 class="section-title__main section-title__main--blog">
            <span>B</span>log
          </h2>
          <p class="section-title__sub section-title__sub--blog">
            ブログ
          </p>
        </div>
        <div class="blog__cards blog-cards">
        <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
        <div class="blog-cards__card blog-card">
                <a class="blog-card__link blog-card__link--blog-content" href="<?php the_permalink(); ?>">
                  <div class="blog-card__item ">
                    <div class="blog-card__header">
                      <div class="blog-card__figure">
                        <div class="blog-card__img blog-card__img--blog-content">
                        <?php if (has_post_thumbnail()) : ?>
                          <?php the_post_thumbnail( 'full', array( 'class' => 'blog-card__img' ) ); ?>
                        <?php else : ?>
                            <img src="<?php echo esc_url(get_theme_file_uri( "/assets/images/no-image.jpg" )); ?>" alt="NoImage画像" />
                          <?php endif ; ?>
                        </div>
                      </div>
                    </div>
                    <div class="blog-card__body">
                      <time  class="blog-card__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                      <p class="blog-card__title"><?php the_title(); ?></p>
                      <div class="blog-border border border--blog"></div>
                      <p class="blog-card__copy">ここにテキストが入ります。ここにテキ<br>ストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                        <br>ここにテキストが入ります。ここにテキ<br>ストが入ります。ここにテキスト</p>
                    </div>
                  </div>
                </a>
              </div>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
        </div>
        <?php else : ?>
          <p>記事が投稿されていません</p>
        <?php endif; ?>

        <div class="blog__btn">
          <a href="blog.html" class="btn">View more<span class="btn__arrow"></span></a>
        </div>

      </div>
      </section>
    <!-- blog -->

    <!-- voice -->
    <section id="voice" class="voice voice-layout">
      <div class=" voice__inner inner">
        <div class="voice__title section-title">
          <h2 class="section-title__main">
            <span>V</span>oice
          </h2>
          <p class="section-title__sub">
            お客様の声
          </p>
        </div>

        <div class="voice__cards voice-cards">
          <div class="voice-cards__card voice-card">
              <a class="voice-card__link" href="#">
                <div class="voice-card__item">
                  <div class="voice-card__header">
                      <div class="voice-card__inner">
                        <div class="voice-card__content">
                         <p class="voice-card__age">20代(女性)</p>
                          <p class="voice-card__lead">ライセンス講習</p>
                        </div>
                        <p class="voice-card__title">ここにタイトルが入ります。ここにタイトル</p>
                      </div>
                      <div class="voice-card__figure">
                        <div class="voice-card__img js-colorbox">
                          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/voice1.jpg" alt="帽子を被った笑顔の女性">
                        </div>
                      </div>
                </div>

                  <p class="voice-card__copy">
                      ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                      <br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                      <br>ここにテキストが入ります。ここにテキストが入ります。
                    </p>
                </div>
              </a>
          </div>
          <div class="voice-cards__card voice-card">
              <a class="voice-card__link" href="#">
                <div class="voice-card__item">
                  <div class="voice-card__header">
                      <div class="voice-card__inner">
                        <div class="voice-card__content">
                         <p class="voice-card__age">30代(男性)</p>
                          <p class="voice-card__lead">ファンダイビング</p>
                        </div>
                        <p class="voice-card__title">ここにタイトルが入ります。ここにタイトル</p>
                      </div>
                      <div class="voice-card__figure">
                        <div class="voice-card__img js-colorbox">
                          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/voice2.jpg" alt="グットポーズをしている男性の画像">
                        </div>
                      </div>
                </div>

                  <p class="voice-card__copy">
                      ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                      <br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                      <br>ここにテキストが入ります。ここにテキストが入ります。
                    </p>
                </div>
              </a>
          </div>
        </div>

        <div class="voice__btn">
          <a href="voice.html" class="btn">View more<span class="btn__arrow"></span></a>
        </div>
      </div>
    </section>
    <!-- voice -->
    <!-- price -->
    <section id="price" class="price price-layout">
      <div class="price__inner inner">
        <div class="price__title section-title">
          <h2 class="section-title__main">
            <span>P</span>rice
          </h2>
          <p class="section-title__sub">
            料金一覧
          </p>
        </div>
        <div class="price__container">
          <div class="price__img1 u-mobile">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/price2.jpg" alt="海を泳いでいる亀の画像">
          </div>
            <div class="price__content">
              <div class="price__lists">
                <dl class="price__list">
                  <dt class="price__list-title">ライセンス講習</dt>
                  <dt class="price__term">オープンウォーターダイバーコース</dt>
                  <dd class="price__description">&yen;50,000</dd>
                  <dt class="price__term">アドバンスドオープンウォーターコース</dt>
                  <dd class="price__description">&yen;60,000</dd>
                  <dt class="price__term">レスキュー&plus;EFRコース</dt>
                  <dd class="price__description">&yen;70,000</dd>
                </dl>
                <dl class="price__list">
                  <dt class="price__list-title">体験ダイビング</dt>
                  <dt class="price__term">ビーチ体験ダイビング(半日)</dt>
                  <dd class="price__description">&yen;7,000</dd>
                  <dt class="price__term">ビーチ体験ダイビング(1日)</dt>
                  <dd class="price__description">&yen;14,000</dd>
                  <dt class="price__term">ボート体験ダイビング(半日)</dt>
                  <dd class="price__description">&yen;10,000</dd>
                  <dt class="price__term">ボート体験ダイビング(1日)</dt>
                  <dd class="price__description">&yen;18,000</dd>
                </dl>
                <dl class="price__list">
                  <dt class="price__list-title">ファンダイビング</dt>
                  <dt class="price__term">ビーチダイビング(2ダイブ)</dt>
                  <dd class="price__description">&yen;14,000</dd>
                  <dt class="price__term">ボートダイビング(2ダイブ)</dt>
                  <dd class="price__description">&yen;18,000</dd>
                  <dt class="price__term">スペシャルダイビング(2ダイブ)</dt>
                  <dd class="price__description">&yen;24,000</dd>
                  <dt class="price__term">ナイトダイビング(1ダイブ)</dt>
                  <dd class="price__description">&yen;10,000</dd>
                </dl>
                <dl class="price__list">
                  <dt class="price__list-title">スペシャルダイビング</dt>
                  <dt class="price__term">貸切ダイビング(2ダイブ)</dt>
                  <dd class="price__description">&yen;24,000</dd>
                  <dt class="price__term">1日ダイビング(3ダイブ)</dt>
                  <dd class="price__description">&yen;32,000</dd>
                </dl>

              </div>

              <div class="price__img2 js-colorbox u-desktop">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/price1.jpg" alt="珊瑚礁の周りを泳ぐ子魚たち">
              </div>

         </div>
        </div>

        <div class="price__btn">
          <a href="price.html" class="btn">View more<span class="btn__arrow"></span></a>
        </div>

      </div>
    </section>
    <!-- price -->

    <!-- contact -->
    <section id="contact" class="contact contact-layout contact-fish">
      <div class="contact__inner inner">

        <div class="contact__container">
          <div class="contact__content">
            <div class="contact__img2">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/contact.svg" alt="CodeUps">
            </div>
            <div class="contact__box">
              <p class="contact__text">
                沖縄県那覇市1-1<br>
                TEL:0120-000-0000<br>
                営業時間:8:30-19:00<br>
                定休日:毎週火曜日<br>
              </p>
              <div class="contact__item">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3578.992041301909!2d127.68828337613978!3d26.229448139118073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e56bd0b4a42ff1%3A0x36812e0e598f7d6b!2z44CSOTAwLTAwMDUg5rKW57iE55yM6YKj6KaH5biC5aSp5LmF77yR5LiB55uu77yR!5e0!3m2!1sja!2sjp!4v1701751290283!5m2!1sja!2sjp" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
          <div class="contact__content">
              <p class="contact__title">
                <span>C</span>ontact
              </p>
              <h2 class="contact__title contact__title--sub">
                お問い合わせ
              </h2>
              <p class="contact__title contact__title--sub">
                ご予約・お問い合わせはコチラ
              </p>

              <div class="contact__btn">
                <a href="sitemap.html" class="btn">Contact us<span class="btn__arrow"></span></a>
              </div>
          </div>

        </div>

      </div>
    </section>
    <!-- contact -->

  </main>

  <!-- main -->
  <?php get_footer(); ?>