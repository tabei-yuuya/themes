<?php get_header(); ?>
<!-- main visual -->
<div class="mv-underlayer">
  <div class="mv-underlayer__inner">
    <picture class="mv-underlayer__picture">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/info-pc-mv.jpg" media="(min-width: 768px)" >
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/info-sp-mv.jpg" alt="ダイバーが珊瑚礁の横を泳いでいる画像">
    </picture>
    </div>
    <div class="mv-underlayer__title">
      <h1 class=" mv-underlayer__main">Information</h1>
    </div>
  </div>
<!-- main visual -->

<!-- page-top -->
<div class="page-top">
</div>
<!-- page-top -->

<!-- main -->
  <main>
    <!-- about-content -->
    <?php if (function_exists('bcn_display')) { ?>
    <div class="breadcrumb breadcrumb-layout">
      <div class="breadcrumb__inner inner">
      <?php bcn_display(); ?>
      </div>
    </div>
  <?php } ?>

    <section class="info-content info-content-layout content-fish">
      <div class="info-content__inner inner">
        <div class="info-content__tab info-content-tab">
          <div class="info-content-tab__item js-tab-item active noscroll">
            ライセンス<br class="u-mobile">講習
          </div>
          <div  class="info-content-tab__item js-tab-item noscroll">
            ファン<br class="u-mobile">ダイビング
          </div>
          <div  class="info-content-tab__item js-tab-item noscroll">
            体験<br class="u-mobile">ダイビング
          </div>
        </div>
        <div class="info-content__area js-tab-direct">
        <div id="tab__menu-1" class="info-content__tab-content js-content-area active">
          <div class="info-content__card info-card">
            <div class="info-card__contents">
              <h2 class="info-card__title">ライセンス講習</h2>
              <div class="info-card__border border"></div>
              <p class="info-card__text">泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします&#33;スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう&#33;</p>
            </div>
            <figure class="info-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/info-license.jpg" alt="5人のダイバーが泳いでいる画像">
            </figure>
          </div>
        </div>
        <div id="tab__menu-2" class="info-content__tab-content js-content-area">
          <div class="info-content__card info-card">
            <div class="info-card__contents">
              <h2 class="info-card__title">ファンダイビング</h2>
              <div class="info-card__border border"></div>
              <p class="info-card__text">ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意&#33;</p>
            </div>
            <figure class="info-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/info-fundiving.jpg" alt="珊瑚礁の周りを魚の群れが泳いでいる画像">
            </figure>
          </div>
        </div>
        <div id="tab__menu-3" class="info-content__tab-content js-content-area">
          <div class="info-content__card info-card">
            <div class="info-card__contents">
              <h2 class="info-card__title">体験ダイビング</h2>
              <div class="info-card__border border"></div>
              <p class="info-card__text">ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意&#33;</p>
            </div>
            <figure class="info-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/info-experience.jpg" alt="5人のダイバーが泳いでいる画像">
            </figure>
          </div>
        </div>
      </div>
      </div>
    </section>


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
                <a href="#" class="btn">Contact us<span class="btn__arrow"></span></a>
              </div>
          </div>

        </div>

      </div>
    </section>
    <!-- contact -->

  </main>

  <!-- main --><?php get_footer(); ?>