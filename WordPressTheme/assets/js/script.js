"use strict";

jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

  var topBtn = $('.page-top');
  $(".page-top").hide();
  // ボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  });

  // ボタンをクリックしたらスクロールして上に戻る
  topBtn.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 300, 'swing');
    return false;
  });

  // // フッター手前でストップ
  $(document).ready(function () {
    // 変数の宣言と初期化
    var scrollHeight = $(document).height();
    var scrollPosition = $(window).height() + $(window).scrollTop();
    var footHeight = $(".footer").innerHeight();

    // スクロールイベントの処理
    $(window).on("scroll", function () {
      scrollPosition = $(window).height() + $(window).scrollTop();
      footHeight = $(".footer").innerHeight();
      if (scrollHeight - scrollPosition <= footHeight) {
        $(".page-top").css({
          position: "absolute",
          bottom: footHeight
        });
      } else {
        $(".page-top").css({
          position: "fixed",
          bottom: "0"
        });
      }
    });
  });

  // ハンバーガーメニュー
  $(" .js-hamburger, .js-drawer, .js-drawer a").click(function () {
    $("header").toggleClass("is-active");
    $(".js-hamburger").toggleClass("is-active");
    $(".js-drawer").fadeToggle();
  });

//ドロワーメニュー
$("#MenuButton").click(function () {
  $(".js-drawer-open").toggleClass("open");
  $(".drawer-menu").toggleClass("open");
  $("html").toggleClass("is-fixed");
});

  // ハンバーガーメニューボタンがクリックされたときのイベントハンドラを設定
  $(".js-hamburger").click(function () {
    // 現在のbodyタグのoverflowスタイルを確認
    if ($("body").css("overflow") === "hidden") {
      // もしoverflowがhiddenなら、bodyのスタイルを元に戻す
      $("body").css({
        height: "",
        overflow: ""
      });
    } else {
      // そうでなければ、bodyにheight: 100%とoverflow: hiddenを設定し、スクロールを無効にする
      $("body").css({
        height: "100%",
        overflow: "hidden"
      });
    }
  });

// スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)

$(document).on('click', 'a[href*="#"]', function () {
  var time = 400;
  var header = $('header').innerHeight(); // ヘッダーの高さを取得
  var target = $(this.hash);
  if (!target.length) return;
  var targetY = target.offset().top - header; // ヘッダーの高さを考慮してスクロール位置を計算
  $('html,body').animate({
    scrollTop: targetY
  }, time, 'swing');
  return false;
});
var swiper1 = new Swiper(".js-mv-swiper", {
  loop: true,
  effect: "fade",
  speed: 3000,
  allowTouchMove: false,
  autoplay: {
    delay: 2000
  }
});

var swiper = new Swiper(".swiper2", {
  loop: true,
  slidesPerView: 1.213,
  spaceBetween: 24,
  speed: 2000,
  breakpoints: {
    425: {
      slidesPerView: 1.5,
      spaceBetween: 30
    },
    768: {
      slidesPerView: 2.8,
      spaceBetween: 30
    },
    1024: {
      slidesPerView: 2.8,
      spaceBetween: 41
    },
    1440: {
      slidesPerView: 3,
      spaceBetween: 41
    }
  },
  navigation: {
    nextEl: ".campaign__next",
    prevEl: ".campaign__prev"
  }
});

  var tabButton = $(".js-tab-item"),
    tabContent = $(".js-content-area");
  tabButton.on("click", function () {
    var index = tabButton.index(this);
    tabButton.removeClass("active");
    $(this).addClass("active");
    tabContent.removeClass("active");
    tabContent.eq(index).addClass("active");
  });

  //別ページからタブメニューへダイレクトリンク
  //タブへダイレクトリンクの実装
  //リンクからハッシュを取得
  window.scrollTo(0, 0);
  var hash = location.hash;
  hash = (hash.match(/^#tab__menu-\d+$/) || [])[0];
  //リンクにハッシュが入っていればtabnameに格納
  if ($(hash).length) {
    var tabname = hash.slice(1);
  } else {
    var tabname = "tab__menu-1";
  }

// モーダル

  var open = $(".js-modal-open"),
    close = $(".js-modal__close"),
    modal = $(".js-modal");

  //開くボタンをクリックしたら対応するモーダルを表示する
  open.on("click", function () {
    var targetModalId = $(this).data("target");
    $("#".concat(targetModalId)).addClass("is-open");
    $('body').css('overflow-y', 'hidden'); // 本文の縦スクロールを無効

  //閉じるボタンをクリックしたらモーダルを閉じる
  close.add(modal).on("click", function () {
    modal.removeClass("is-open");
    $('body').css('overflow-y', 'auto'); // 本文の縦スクロールを有効
  });
});

// ブログアコーディオン
  $(".js-accordion__item:first-child .js-accordion__content").css("display", "block");
  $(".js-accordion__item:nth-of-type(2)  .js-accordion__content").css("display", "none ");
  $(".js-accordion__title").on("click", function () {
    $(this).toggleClass("is-open");
    $(this).next().slideToggle(300);
  });

// faqアコーディオン
  $(".js-faq-accordion__item  .js-faq-accordion__content").css("display", "block");
  $(".js-faq-accordion__item .js-faq-accordion__title").addClass("is-open");
  $(".js-faq-accordion__title").on("click", function () {
    $(this).toggleClass("is-open");
    $(this).next().slideToggle(300);
  });

});
