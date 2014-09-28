<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- Use title if it's in the page YAML frontmatter -->
    <title>表演 36 房</title>
    <meta name="description" content="「表演36房」，將優人神鼓原創的表演藝術技巧傳授給山下社區居民，並協同中華民國自主學習促進會及文山區各社區組織的資源，期望打造一個專業表演人才培訓學苑，實現從社區出發，建立國際舞台交流平台的目標。">
    <meta name="viewport" content="width=device-width">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link href="css/application.css" rel="stylesheet" type="text/css" />
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js" type="text/javascript"></script>
  </head>
  <body>
      <!--[if lt IE 7]>
          <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
      <![endif]-->

  <!-- header -->
  <?php include "partials/_header.php" ?>


  <!-- index.html -->

  <!-- slider -->
  <div class="index_slider">
    <div class="container">

      <?php include "partials/_index_slider.php" ?>

    </div>
  </div><!-- e/o slider -->

  <!-- index main content => news and FB -->
  <div class="index_main">
    <div class="container">

      <!-- 最新消息 -->
      <div class="index_news">
        <h2>最新消息</h2>
        <div class="index_news-inner">

          <!--
          <% data.index.news.each do |f| %>
          <a href="<%= f.link %>" class="unit trans-05s">

            <div class="left">
              <img class="img-responsive" src="<%= f.img %>" alt="">
            </div>

            <div class="right">
              <div class="date">
                <span><%= f.date %></span>
              </div>
              <div class="title">
                <h3><%= f.title %></h3>
              </div>
              <div class="summary only-desktop-up">
                <p><%= f.summary %></p>
              </div>
            </div>
          </a>
          <% end %>
           -->

          <!-- news unit -->
          <a href="/show/news.php" class="unit trans-05s">

            <!-- left for feature pic -->
            <div class="left">
              <img class="img-responsive" src="./img/news/001.jpg" alt="">
            </div>

            <!-- right for detail info -->
            <div class="right">
              <div class="date">
                <span>2014-09-26</span>
              </div>
              <div class="title">
                <h3>秋日好養生，太極導引、菩提功夫禪系列課程健康招生中！</h3>
              </div>
              <div class="summary only-desktop-up">
                <p>時過秋分，天氣漸涼，正是調節身體養氣生息的好時機。特別推薦太極導引班，以及最新推出的菩提功夫禪常態班，都是適合各年齡層的優質健康課程，歡迎您前來體驗，感受身心平衡的寧靜。</p>
              </div>
            </div>
          </a>
          <!-- news unit -->
          <a href="#" class="unit trans-05s">

            <!-- left for feature pic -->
            <div class="left">
              <img class="img-responsive" src="./img/news/002.jpg" alt="">
            </div>

            <!-- right for detail info -->
            <div class="right">
              <div class="date">
                <span>2014-09-26</span>
              </div>
              <div class="title">
                <h3>2014文山藝術季即將熱鬧登場，快來參加臺北城南最精彩的藝文饗宴！</h3>
              </div>
              <div class="summary only-desktop-up">
                <p>永安藝文館-表演36房主辦文山藝術季迄今已第8年，串聯景文高中優人表演藝術班、政大藝文中心、文山劇場、臺灣戲曲學院等單位，以講座、展覽、表演、身心靈等不同面向的活動，妝點成為文山地區秋冬時節最繽紛的藝文風景。</p>
              </div>
            </div>
          </a>
          <!-- news unit -->
          <a href="#" class="unit trans-05s">

            <!-- left for feature pic -->
            <div class="left">
              <img class="img-responsive" src="./img/news/003.jpg" alt="">
            </div>

            <!-- right for detail info -->
            <div class="right">
              <div class="date">
                <span>2014-09-26</span>
              </div>
              <div class="title">
                <h3>2015 表演36房兒童禪鼓冬令營開始報名，名額有限 欲報從速！</h3>
              </div>
              <div class="summary only-desktop-up">
                <p>最受歡迎、最充實豐富的冬季藝術營隊，表演36房兒童禪鼓冬令營要開始報名囉！課程內容包含：禪鼓、習武、靜心、創意戲劇，激發孩子們的想像力與手腦協調性，同時報名兩梯次，享85折優惠！</p>
              </div>
            </div>
          </a>

        </div>
      </div><!-- e/o 最新消息 -->

      <!-- facebook -->
      <div class="index_facebook">
        <div class="index_main-inner">
          <iframe class="facebook_block" src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpas36&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=true&amp;show_border=false&amp;appId=266049590099572" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowTransparency="true"></iframe>
        </div>
      </div><!-- e/o facebook -->

    </div>
  </div>

  <!-- little banners -->
  <div class="index_banners">
    <div class="container">

      <!--

      <% data.index.banner.each do |f| %>
      <div class="index_banner-unit">
        <div class="index_banner-inner">
          <a href="<%= f.link %>">
            <img class="img-responsive" src="<%= f.img %>" alt="<%= f.title %>" title="<%= f.title %>">
          </a>
        </div>
      </div>
      <% end %>

       -->

      <div class="index_banner-unit">
        <div class="index_banner-inner">
          <a href="#">
            <img class="img-responsive" src="http://placehold.it/300x130" alt="banner1" title="banner1">
          </a>
        </div>
      </div>
      <div class="index_banner-unit">
        <div class="index_banner-inner">
          <a href="#">
            <img class="img-responsive" src="http://placehold.it/300x130" alt="banner2" title="banner2">
          </a>
        </div>
      </div>
      <div class="index_banner-unit">
        <div class="index_banner-inner">
          <a href="#">
            <img class="img-responsive" src="http://placehold.it/300x130" alt="banner3" title="banner3">
          </a>
        </div>
      </div>
      <div class="index_banner-unit">
        <div class="index_banner-inner">
          <a href="#">
            <img class="img-responsive" src="http://placehold.it/300x130" alt="banner4" title="banner4">
          </a>
        </div>
      </div>
      <div class="index_banner-unit">
        <div class="index_banner-inner">
          <a href="#">
            <img class="img-responsive" src="http://placehold.it/300x130" alt="banner5" title="banner5">
          </a>
        </div>
      </div>

      <!-- 下面這個 block 獨立出來，手機版面占位子用 -->
      <div class="index_banner-unit only-mobile">
        <div class="index_banner-inner">
          <a href="#">
            <img class="img-responsive" src="http://placehold.it/300x130" alt="placeholder" title="placeholder">
          </a>
        </div>
      </div>

    </div>
  </div>


  <!-- footer -->
  <?php include "partials/_footer.php" ?>


  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
  <script src="js/plugins.js" type="text/javascript"></script>
  <script src="js/application.js" type="text/javascript"></script>

  <!-- Google Analystic -->
  <script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
  </script>


  </body>
</html>
