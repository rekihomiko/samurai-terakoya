<!-- header.php ここから -->
<!DOCTYPE html>

<head>
  <title>samurai university</title>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="samurai university" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css" />
  <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="styles/main_styles.css" />
</head>

<body>
  <div class="super_container">
    <!-- ヘッダーここから -->
    <header class="header">
      <div class="header_container">
        <div class="">
          <nav class="navbar navbar-expand-lg">
            <div class="logo_container">
              <a href="index.php">
                <div class="logo_text">
                  <a href="index.html">
                    <img src="images/logo_big.png" />
                    <span>Samurai University</span>
                  </a>
                </div>
              </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fa fa-bars toggle-menu" aria-hidden="true"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav flex-row ml-md-auto d-md-flex main_nav">
                <li class="nav-item">
                  <a class="nav-link" href="news.html">
                    NEWS
                    <p>ニュース</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="events.html">
                    EVENT
                    <p>イベント</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="courses.html">
                    COURSES
                    <p>コース</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html">
                    ABOUT US
                    <p>侍大学について</p>
                  </a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- ヘッダー ここまで -->
    <!-- header.php ここまで -->
    <?php get_header();?>
    <!-- メインビジュアル -->
    <div class="home">
      <div class="home_slider_container">
        <div class="bd-example">
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
            <div class="carousel-item active"> 
            <img src="<?php echo get_template_directory_uri(); ?>/images/top1_1200_630.jpg" class="d-block w-100" style="background-color: #2b7b8e26" />   
                <div class="carousel-caption d-none d-md-block">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo_big_slide.png" /> 
                  <div class="title-slide">
                    <p>Samurai University</p>
                  </div>
                  <div class="content-slide">
                    <p>
                      SAMURAI大学の理念には「プログラミングを通して、
                      国際社会に貢献する豊かな教養を備えた人材の育成」と
                      「公正な世界観に基づき、
                      時代と社会の要請に応えていく実学」の思いが込められています
                    </p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top2_1200_630.jpg" class="d-block w-100" />
               <div class="carousel-caption d-none d-md-block">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo_big_slide.png" />
                  <div class="title-slide">
                    <p>Samurai University</p>
                  </div>
                  <div class="content-slide">
                    <p>
                      SAMURAI大学の理念には「プログラミングを通して、
                      国際社会に貢献する豊かな教養を備えた人材の育成」と
                      「公正な世界観に基づき、
                      時代と社会の要請に応えていく実学」の思いが込められています
                    </p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top3_1200_630.jpg" class="d-block w-100" />
                <div class="carousel-caption d-none d-md-block">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo_big_slide.png" />   
                  <div class="title-slide">
                    <p>Samurai University</p>
                  </div>
                  <div class="content-slide">
                    <p>
                      SAMURAI大学の理念には「プログラミングを通して、
                      国際社会に貢献する豊かな教養を備えた人材の育成」と
                      「公正な世界観に基づき、
                      時代と社会の要請に応えていく実学」の思いが込められています
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- メインビジュアルここまで -->

    <!-- ニュースとイベント -->
    <div class="news">
      <div class="footer_row">
        <div class="row news_row">
          <!-- ニュース -->
          <div class="col-lg-6 col-md-6 col-sx-12 news_col">
            <div class="home_title">News</div>
            <div class="home_title_sub">ニュース</div>
            <?php
               //取得したい投稿記事などの条件を引数として渡す
               $args = array(
                   // 投稿タイプ
                   'post_type'      => 'post',
                   // カテゴリー名
                   'category_name' => 'event',
                   // 1ページに表示する投稿数
                   'posts_per_page' => 2,
               );
               // データの取得
               $posts = get_posts($args);
             ?>
 
             <!-- ループ処理 -->
             <?php foreach($posts as $post): ?>
               <?php setup_postdata($post); ?>
               <div class="news_post_small">
                 <div class="row news_post_row">
                   <div class="col-lg-3 col-md-4 col-sx-12">
                     <div class="calendar_border">
                       <div class="calendar_border_1">
                       <div class="calendar_month">
                           <?php echo post_custom('month'); ?>
                         </div>
                         <div class="calendar_day">
                         <span>
                             <?php echo post_custom('day'); ?>
                           </span> 
                         </div>
                       </div>
                     </div>
                   </div>
                   <div class="col-lg-9 col-md-8 col-sx-12">
                     <div class="news_post_small_title">
                       <a href="<?php the_permalink(); ?>">
                         <?php the_title() ; ?>
                       </a>
                     </div>
                     <div class="news_post_content">
                       <?php 
                         $content = wp_trim_words( get_the_content() ,  50, '...');
                         echo $content;
                       ?>
                     </div>
                   </div>
                 </div>
               </div>
             <?php endforeach; ?>
             <!-- 使用した投稿データをリセット -->
             <?php wp_reset_postdata(); ?>

          </div>
          <!-- イベントここまで -->
        </div>
      </div>
    </div>
    <!-- ニュースとイベントここまで -->

    <!-- コース -->
    <div class="courses">
      <div class="footer_row">
        <div class="row">
          <div class="col">
            <div class="section_title_container text-center">
              <h2 class="home_title">COURSES</h2>
              <div class="section_subtitle">コース</div>
            </div>
          </div>
        </div>
        <div class="row courses_row">
          <div class="col-lg-4 course_col">
            <div class="course">
              <div class="course_image">
              <img src="<?php echo get_template_directory_uri(); ?>/images/pic6-3.jpg" alt="" />
              </div>
              <div class="course_body">
                <h3 class="course_title">
                  <a href="courses_detail.html">教育学部</a>
                </h3>
                <div class="course_text">
                  <p>
                    広い視野と総合力を持つ世界に通用する、教育者・指導者を育成
                  </p>
                </div>
              </div>
              <div class="course_footer">
                <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                  <div class="course_price ml-auto">詳細を見る</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 course_col">
            <div class="course">
              <div class="course_image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/pic6-1.jpg" alt="" />
              </div>
              <div class="course_body">
                <h3 class="course_title">
                  <a href="courses_detail.html">理工学部</a>
                </h3>
                <div class="course_text">
                  <p>
                    未知なる科学技術の扉を開く。 「次世代」を見据えた専門教育
                  </p>
                </div>
              </div>
              <div class="course_footer">
                <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                  <div class="course_price ml-auto">詳細を見る</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 course_col">
            <div class="course">
              <div class="course_image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/pic6-4.jpg" alt="" />
              </div>
              <div class="course_body">
                <h3 class="course_title"><a href="courses_detail.html">法学部</a></h3>
                <div class="course_text">
                  <p>複雑な社会現象を考察する、法律学科と政治学科</p>
                </div>
              </div>
              <div class="course_footer">
                <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                  <div class="course_price ml-auto">詳細を見る</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- コースここまで -->

    <!-- 数字 -->
    <div class="counter">
    <div class="counter_background" style="background-image: url(<?php echo get_template_directory_uri();?>/images/pic_chart.png)"></div>
      <div class="footer_row">
        <div class="">
          <div class="">
            <div class="counter_content">
              <div class="milestones row">
                <div class="milestone col-md-3 col-lg-3 col-sx-12">
                  <div class="milestone_counter">
                    <p>教授数</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon4.png" alt="" />
                    <span class="milestone_number">335</span><span class="milestone_count">名</span>
                  </div>
                </div>
                <div class="milestone col-md-3 col-lg-3 col-sx-12">
                  <div class="milestone_counter">
                    <p>卒業生徒</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon3.png" alt="" />
                    <span class="milestone_number">4526</span><span class="milestone_count">名</span>
                  </div>
                </div>
                <div class="milestone col-md-3 col-lg-3 col-sx-12">
                  <div class="milestone_counter">
                    <p>学習コース</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon2.png" alt="" />
                    <span class="milestone_number">12</span><span class="milestone_count">コース</span>
                  </div>
                </div>
                <div class="milestone col-md-3 col-lg-3 col-sx-12">
                  <div class="milestone_counter">
                    <p>受賞</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon1.png" alt="" />
                    <span class="milestone_number">35</span><span class="milestone_count">回</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- 数字ここまで -->
    <?php get_footer(); ?>
    <!-- footer.php ここから -->
   
<!-- footer.php ここまで -->