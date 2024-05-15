<?php get_header(); ?>
<!-- main visual -->
<div class="mv-underlayer">
  <div class="mv-underlayer__inner">
    <picture>
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/contact-pc-mv.jpg" media="(min-width: 768px)" >
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/contact-sp-mv.jpg" alt="エメラルドグリーンの海と
      白い砂浜の画像">
    </picture>
    </div>
    <div class="mv-underlayer__title">
      <h1 class=" mv-underlayer__main">Contact</h1>
    </div>
  </div>
<!-- main visual -->

<!-- page-top -->
<div class="page-top">
</div>
<!-- page-top -->

<!-- main -->
  <main>
    <!-- contact-page -->
    <?php if (function_exists('bcn_display')) { ?>
    <div class="breadcrumb breadcrumb-layout">
      <div class="breadcrumb__inner inner">
      <?php bcn_display(); ?>
      </div>
    </div>
  <?php } ?>
    <div class="contact-content contact-content-layout content-fish">
      <div class="contact-content__inner inner">
        <form class="contact-content__form contact-form">
          <dl class="contact-form__wrap">
            <dt class="contact-form__label">
              <label for="name">お名前<span>必須</span></label>
            </dt>
            <dd class="contact-form__input">
              <input type="text" id="name" name="name" placeholder="沖縄&nbsp;太郎" required="required">
            </dd>
          </dl>
          <dl class="contact-form__wrap">
            <dt class="contact-form__label">
              <label for="name">メールアドレス<span>必須</span></label>
            </dt>
            <dd class="contact-form__input">
              <input type="email" id="email" name="email" placeholder="aaa000@ggmail.com" required="required">
            </dd>
          </dl>
          <dl class="contact-form__wrap">
            <dt class="contact-form__label">
              <label for="name">電話番号<span>必須</span></label>
            </dt>
            <dd class="contact-form__input">
              <input type="tel" id="tell" name="tell" placeholder="000-0000-0000" required="required">
            </dd>
          </dl>
          <dl class="contact-form__wrap">
            <dt class="contact-form__label">
              <label for="name">お問合せ項目<span>必須</span></label>
            </dt>
            <dd class="contact-form__check">
              <label>
                <input class="contact-form__checkbox" type="checkbox" checked>
                <span>ダイビング講習について</span>
              </label>
              <label>
                <input class="contact-form__checkbox" type="checkbox">
                <span>ファンダイビングについて</span>
              </label>
              <label>
                <input class="contact-form__checkbox" type="checkbox">
                <span>体験ダイビングについて</span>
              </label>
            </dd>
          </dl>
          <dl class="contact-form__wrap">
            <dt class="contact-form__label">
              <label for="name">キャンペーン</label>
            </dt>
            <dd class="contact-form__select">
              <select id="address">
                <option value="hidden">キャンペーン内容を選択</option>
                <option value="ライセンス取得">ライセンス取得</option>
                <option value="貸切体験ダイビング">貸切体験ダイビング</option>
                <option value="ナイトダイビング">ナイトダイビング</option>
                <option value="貸切ファンダイビング">貸切ファンダイビング</option>
              </select>
            </dd>
          </dl>
          <dl class="contact-form__wrap">
            <dt class="contact-form__label">
              <label for="message">お問合せ内容<span>必須</span></label>
            </dt>
            <dd class="contact-form__textarea">
              <textarea name="message" id="message" required="required"></textarea>
            </dd>
          </dl>
          <div class="contact-form__send">
            <label>
              <input type="checkbox">
              <span>個人情報の取り扱いについて同意のうえ送信します。</span>
            </label>
          </div>
          <div class="contact-form__submit form-submit">
            <input type="submit" value="send" />
        </div>
        </form>
      </div>
    </div>
    <!-- contact-page -->

  </main>

  <!-- main --><?php get_footer(); ?>