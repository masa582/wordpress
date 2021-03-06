    <?php get_header(); ?>

    <div class="loading-screen">
      <div class="loading01"><span class="loading01"><span></span></span></div>
      <img src="<?php echo get_template_directory_uri(); ?>/img/estra_whitelogo.png" alt="ロゴ" class="loadingImg" 　>
    </div>
    <div class="cover">

      <video playsinline src="<?php echo get_template_directory_uri(); ?>/video/movie_2.mp4" loop autoplay muted class="video">
        <p>動画を再生するには、videoタグをサポートしたブラウザが必要です。</p>
      </video>
    </div>
    <main>
      <section class="mainSec">
        <article class="main_inner">
          <section class="row2">
            <h2 class="row">Estra, Inc</h2>
          </section>
          <div class="c-scrolldown scroll-bar is-active">
            <div class="c-label">Scroll</div>
            <div class="c-baseliine"></div>
            <div class="c-line"></div>
          </div>
          <section class="news">
            <h2 class="newsttl">News</h2>
            <ul class="newsCnt">
              <li class="newslist">
                <div newslist-wrapper>
                  <a href="/archive-news1.php">
                    <div class="newsDate">
                      <p>2021年5月30日</p>
                    </div>
                    <div class="cardCat">お知らせ</div>
                    <div class="newsItem">
                      estra新代々木オフィス昨年12月に移転しました
                    </div>
                  </a>
                </div>
              </li>
              <li class="newslist">
                <a href="#">
                  <div class="newsDate">
                    <p>2021年4月10日</p>
                  </div>
                  <div class="cardCat">お知らせ</div>
                  <div class="newsItem">
                    コーポレートサイトリニューアルのお知らせ
                  </div>
                </a>
              </li>
              <li class="newslist">
                <a href="#">
                  <div class="newsDate">
                    <p>2021年3月20日</p>
                  </div>
                  <div class="cardCat">サービス</div>
                  <div class="newsItem">
                    プログラミングスクールCOACHTECHがサービス開始
                  </div>
                </a>
              </li>
              <li class="newslist">
                <a href="#">
                  <div class="newsDate">
                    <p>2021年2月10日</p>
                  </div>
                  <div class="cardCat">サービス</div>
                  <div class="newsItem">
                    プログラミングスクール「COACHTECH」ブランドリニューアル
                  </div>
                </a>
              </li>
            </ul>
            <div class="secBox_btn">
              <a href="/about_us/" class="c-buttonStyle1">
                <span class="c-label">View More
                  <span class="c-border">
                    <span class="c-icon">
              </a>
            </div>
          </section>
          <section class="service">
            <div class="serviceImg"><img src="<?php echo get_template_directory_uri(); ?>/img/service.jpg" alt="serviceイメージ" width="90%"></div>
            <div class="serviceCnt">
              <h3 class="serviceTlt">サービス</h3>
              <p class="serviceTlt_EN">service</p>
              <p class="service_Txt1">フリーランス特化型プログラミングスクール「COACHTECH」</p>
              <p class="service_Txt2">
                COACHTECH(コーチテック)はフリーランス特化型のオンラインコーチングプログラミングスクールです。プログラミング未経験の方でも、「独自の学習ノウハウ」でフリーランスエンジニアを目指すことができます。
              </p>
              <p class="service_Txt3">教育機関向け業務効率化支援ツール「Stageee」</p>
              <p class="service_Txt4">
                Stageee(ステージー)はコーチングに特化した業務効率化支援ツールです。Web会議、面談予約、チャット、学習計画作成、学習状況の把握、教材管理、指導報告書作成といったコーチングにおいて必要な機能が1つにまとまった業務効率化を支えるSaaS
              </p>
            </div>
          </section>
          <section class="company">
            <div class="companyCnt">
              <h3 class="companyTlt">企業情報</h3>
              <p class="companyTlt_EN">Company</p>
              <h3 class="company_Txt1">Technology × Coaching</h3>
              <p class="company_Txt2">
                株式会社estraはデジタル化が遅れている教育業界に最新のテクノロジーを導入することによって教育のDXを実現します。独自のオペレーションとコーチングを融合した新しい教育の仕組みにより、一人ひとりに合わせた最適な教育を提供します。
              </p>
            </div>
            <div class="m-figureCaption__swiperContainer swiper-container">
              <div class="swiper-wrapper">
                <!-- スライドの中身 -->
                <div class="swiper-slide swiper-img1">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/company/company1.jpg" alt="">
                </div>
                <div class="swiper-slide swiper-img2">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/company/company2.jpg" alt="">
                </div>
                <div class="swiper-slide swiper-img3">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/company/company3.jpg" alt="">
                </div>
                <div class="swiper-slide swiper-img3">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/company/company4.jpg" alt="">
                </div>
              </div>
              <!-- ページネーション -->
              <div class="swiper-pagination"></div>
              <!-- ナビゲーションボタンの div 要素（省略可能） -->

            </div>
          </section>

          <section class="recruit-bg">
            <div class="recruit_inner">
              <div class="recruit-ttl">
                <h3>採用情報</h3>
                <p class="recruit-ttl_2">RECRUIT</p>
              </div>
              <div class="recruit-txt_1">
                <p>日本の教育を変革する最前線で活躍する人材に</p>
              </div>
              <div class="recruit-txt_2">
                <p>全員がリスクを恐れずにチャレンジし、社員一人一人が活躍できる環境をみんなで作り上げる</p>
              </div>
              <div class="contactBtn"><a href="#">
                  <p class="contact-txt2">View More+</p>
                </a></div>
            </div>

          </section>
          <section class="contact-bg">
            <div class="contact-mask">
              <div class="contact_inner">
                <h3 class="contact-ttl">CONTACT</h3>
                <div>
                  <p class="contact-txt1">お問い合わせ</p>
                  <div class="contactBtn"><a href="#">
                      <p class="contact-txt2">View More+</p>
                    </a></div>
                </div>
              </div>
            </div>
          </section>
        </article>
    </main>
    <?php get_footer(); ?>