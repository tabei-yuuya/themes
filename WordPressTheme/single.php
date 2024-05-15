<?php get_header(); ?>
<!-- main visual -->
<div class="mv-underlayer">
  <div class="mv-underlayer__inner">
    <picture class="mv-underlayer__picture">
      <source srcset="./assets/images/blog-pc-mv.jpg" media="(min-width: 768px)" >
      <img src="./assets/images/blog-sp-mv.jpg" alt="魚の大群の画像">
    </picture>
    </div>
    <div class="mv-underlayer__title">
      <h1 class=" mv-underlayer__main">Blog</h1>
    </div>
  </div>
<!-- main visual -->

<!-- page-top -->
<div class="page-top">
</div>
<!-- page-top -->

<!-- main -->
  <main>
    <!-- blog-content -->
    <div class="breadcrumb breadcrumb-layout">
      <div class="breadcrumb__inner inner">
        <a href="index.html" class="breadcrumb__link">top</a>
        <span class=" u-desktop breadcrumb__arrow"></span>
        <a href="#" class="breadcrumb__link u-desktop">ブログ一覧</a>
        <span class="breadcrumb__arrow"></span>
        <a href="#" class="breadcrumb__link">ブログ詳細</a>
      </div>
    </div>

    <section class="blog-content blog-detail-layout content-fish">
      <div class="blog-content__inner inner">
        <div class="blog-content__wrapper">
          <div class="blog-content__box">
          <div class="blog-content__detail blog-detail">
            <?php the_content(); ?>
          </div>
            <div class="blog-content__pagination pagination pagination--blog-detail">
            <?php
              // 前の記事へのリンク
              $prev_link = get_previous_post_link('%link', '');
              echo str_replace('<a href=', '<a class="pagination__prev" href=', $prev_link);

              // 次の記事へのリンク
              $next_link = get_next_post_link('%link', '');
              echo str_replace('<a href=', '<a class="pagination__next" href=', $next_link);
            ?>
            </div>
          </div>
          <?php get_sidebar(); ?>　
        </div>
        </div>
    </section>



    <!-- contact -->
    <section id="contact" class="contact contact-layout contact-fish">
      <div class="contact__inner inner">

        <div class="contact__container">
          <div class="contact__content">
            <div class="contact__img2">
              <img src="./assets/images/contact.svg" alt="CodeUps">
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