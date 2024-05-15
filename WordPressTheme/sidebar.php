 <div class="blog-content__side-menu blog-side-menu">
            <div class="blog-side-menu__inner">
            <div class="blog-side-menu__popular blog-popular">
                <h2 class="blog-popular__title">人気記事</h2>
                <?php
                  $popular_posts       = new WP_Query(array(
                    'posts_per_page' => 3, // 表示したい記事の数
                    'meta_key' 		 => 'views', // 閲覧数を保存しているメタキー
                    'orderby' 		 => 'meta_value_num', // メタキーの数値で並び替え
                    'order'			 => 'DESC' // 降順
                  ));

                    if ($popular_posts->have_posts()) :
                      while ($popular_posts->have_posts()) : $popular_posts->the_post(); ?>
                  <figure class="blog-popular__card">
                  <a href="<?php the_permalink(); ?>" class="blog-popular__link">
                    <div class="blog-popular__img">
                    <?php if (has_post_thumbnail()) : ?>
                          <?php the_post_thumbnail( 'full', array( 'class' => 'blog-popular__img' ) ); ?>
                        <?php else : ?>
                            <img src="<?php echo esc_url(get_theme_file_uri( "/assets/images/no-image.jpg" )); ?>" alt="NoImage画像" />
                          <?php endif ; ?>
                    </div>
                    <div class="blog-popular__content">
                      <time datetime="2020-11-17" class="blog-popular__date">2023.11/17</time>
                      <p class="blog-popular__text"><?php the_title(); ?></p>
                    </div>
                  </a>
                </figure>
                  <?php endwhile; endif; ?>
                  <?php wp_reset_postdata(); ?>
              </div>
              <div class="blog-side-menu__review blog-review">
                <h2 class="blog-review__title">口コミ</h2>
                <?php
                  // 最新の口コミを取得するためのクエリを設定
                  $latest_reviews      = new WP_Query(array(
                    'post_type'      => 'voice', // 'voice'というカスタム投稿タイプを指定
                    'posts_per_page' => 1        // 1つの投稿のみ取得
                  ));
                  // クエリが投稿を持っている場合
                  if ($latest_reviews->have_posts()) :
                    // 投稿がある間ループ
                    while ($latest_reviews->have_posts()) : $latest_reviews->the_post();
                  ?>
               <div class="blog-review__card">
                <figure class="blog-review__img">
                <?php if (has_post_thumbnail()) : ?>
                  <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
                  <?php else : ?>
                  <img src="<?php echo esc_url(get_theme_file_uri( "/assets/images/no-image.jpg" )); ?>" alt="NoImage画像" />
                  <?php endif; ?>
                </figure>
                <p class="blog-review__label">
                <?php the_field('age'); ?>
                </p>
                <h3 class="blog-review__text">
                  <?php the_title(); ?>
                </h3>
                  <div class="blog-review__btn">
                    <a href="<?php the_permalink(); ?>" class="btn">View more<span class="btn__arrow"></span></a>
                    </div>
              </div>
              <?php
				endwhile;
				// ポストデータをリセット
				wp_reset_postdata();
			endif; ?>
              </div>
              <div class="blog-side-menu__campaign blog-campaign">
                <h2 class="blog-campaign__title">キャンペーン</h2>
                <?php
                  $latest_campaigns    = new WP_Query(array(
                    'post_type'	     => 'campaign', // カスタム投稿タイプを指定
                    'posts_per_page' => 2 			// 投稿数を設定
                  ));

                  // クエリが投稿を持っている場合の処理
                  if ($latest_campaigns->have_posts()) :
                    // 投稿をループ処理で表示
                    while ($latest_campaigns->have_posts()) : $latest_campaigns->the_post();
                      // カスタムフィールドからキャンペーン価格情報を取得
                      $campaignPrice = get_field('campaign_price_list');
			            ?>
                <div class="blog-campaign__card card">
                  <div class="card__img card__img--blog-campaign">
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="たくさんの魚が泳いでいる画像">
                  </div>
                <div class="card__contents card__contents--blog-campaign">
                  <div class="card__head card__head--blog-campaign">
                    <p class="card__title"><?php the_title(); ?></p>
                  </div>
                  <div class="campaign__border border border--campaign"></div>
                  <div class="card__body">
                    <p class="card__info card__info--blog-campaign">全部コミコミ(お一人様)</p>
                    <div class="card__price-box card__price-box--blog-campaign">
                      <div class="card__price card__price--lg card__price--blog-campaign">&yen;56,000</div>
                      <div class="card__price card__price--sm card__price--blog-campaign">&yen;46,000</div>
                    </div>
                  </div>
                </div>
                </div>
                <?php endwhile;
				          wp_reset_postdata();
			          endif; ?>
                </div>
                <div class="blog-campaign__btn">
                  <a href="#" class="btn">View more<span class="btn__arrow"></span></a>
                  </div>
              </div>
              <div class="blog-side-menu__archive blog-archive">
                <h2 class="blog-archive__title">アーカイブ</h2>
                <div class="blog-archive__accordion  blog-accordion js-accordion">
              <div class="blog-accordion__container">
                    <?php
                      $years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' ORDER BY post_date DESC");
                      foreach($years as $years) :?>
                    <div class="blog-accordion__item js-accordion__item">
                      <h3 class="blog-accordion__title js-accordion__title is-open">
                        <?php echo $years;?>
                      </h3>
                      <div class="blog-accordion__content js-accordion__content">
                      <?php
                      $month = $wpdb->get_col("SELECT DISTINCT MONTH(post_date) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' ORDER BY post_date ASC");
                      foreach($month as $month) :?>
                        <a href="<?php echo get_month_link($year, $month); ?>" class="blog-accordion__text"><?php echo $month;?>月</a>
                        <?php endforeach; ?>
                      </div>
                      </div>
                        <?php endforeach; ?>
                  </div>
              </div>
            </div>
          </div>
          </div>