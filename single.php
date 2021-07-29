<!DOCTYPE html>
<html lang="ja">

<head>
  <title>飲食店テンプレート1/NEWS/single</title>
  <?php get_header(); ?>
</head>

<body>
  <div class="superwrapper animsition">
    <header id="header" class="header">
      <div class="mobile-container">
        <div class="logo__img">
          <a class="animsition-link" href="/">
            <div class="logo"></div>
          </a>
        </div>
        <div class="mobile-button">
          <button class="mobile-menu__btn">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </div>
      <!-- /.mobile-container -->
      <div class="pc-container">
        <div class="logo__img">
          <a class="animsition-link" href="/">
            <div class="logo-pc logo"></div>
          </a>
        </div>
        <nav class="pc-nav">
          <ul class="pc-nav-list">
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/')); ?>"><span>TOP</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/news')); ?>"><span>NEWS</span></a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- /.pc-container -->
      <nav class="sp-navbtn">
        <ul class="sp-navbtn__container">
          <li><a class="tel" href="tel:092-686-7954">電話予約<i class="icon-tel"></i></a></li>
          <li><a class="net" target="_blank" href="https://beauty.hotpepper.jp/">オンライン予約<i class="icon-net"></i></a>
          </li>
        </ul>
      </nav>
      <!-- /.nav-btn -->
    </header>
    <!-- /#header -->
    <section class="c-news-sl">
      <div class="c-container">
        <ul class="c-news-sl__list">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
          <li class="c-news-sl__block">
            <div class="c-news-sl__tit">
              <p class="c-txt-md"><?php the_title(); ?></p>
              <span class="c-news-sl__date"><?php echo get_the_date(); ?></span>
            </div>
            <?php the_post_thumbnail('thumbnail'); ?>
            <div class="c-news-sl__contents">
              <p class="c-txt-sm"><?php the_content(); ?></p>
            </div>
          </li>
          <?php endwhile; ?>
          <?php endif; ?>
        </ul>
        <div class="c-news-sl__link">
          <a class="more-link animsition-link" href="<?php echo esc_url( home_url('/news')); ?>"><span class="readmore">一覧へ戻る</span></a>
        </div>
      </div>
    </section>
    <!-- /.news-top -->
    <footer class="footer">
      <div class="c-container">
        <div class="c-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/images/home/riv_logo-white.png" alt="">
        </div>
        <div class="footer__info">
          <ul class="footer__item c-txt-xs">
            <li class="nav-address">
              <p class="c-txt-xs">
                〒812-0041<br class="view-pc">
                福岡県福岡市博多区博多駅前<br class="view-pc">3-27-25,第二岡部ビル9F
              </p>
            </li>
            <li class="nav-tel">
              <p>TEL</p><a href="tel:092-686-7954"> 092-686-7954</a>
            </li>
            <li class="nav-time">
              <div class="head">ランチ</div>
              <div class="txt">11:00〜14:00</div>
            </li>
            <li class="nav-time">
              <div class="head">ディナー</div>
              <div class="txt">17:00〜22:00</div>
            </li>
            <li class="nav-date">
              <div class="head">定休日</div>
              <div class="txt">水曜日</div>
            </li>
          </ul>
        </div>
        <div class="copyright">
          &copy; RivRound.inc
        </div>
      </div>
      <footer class="footer">
      <div class="c-container">
        <div class="c-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/images/home/riv_logo-white.png" alt="">
        </div>

        <div class="footer__info">
          <ul class="footer__item c-txt-xs">
            <li class="nav-address">
              <p class="c-txt-xs">
                〒812-0041<br class="view-pc">
                福岡県福岡市博多区博多駅前<br class="view-pc">3-27-25,第二岡部ビル9F
              </p>
            </li>
            <li class="nav-tel">
              <p>TEL</p><a href="tel:092-686-7954"> 092-686-7954</a>
            </li>
            <li class="nav-time">
              <div class="head">ランチ</div>
              <div class="txt">11:00〜14:00</div>
            </li>
            <li class="nav-time">
              <div class="head">ディナー</div>
              <div class="txt">17:00〜22:00</div>
            </li>
            <li class="nav-date">
              <div class="head">定休日</div>
              <div class="txt">水曜日</div>
            </li>
          </ul>
        </div>
        <div class="copyright">
          &copy; RivRound.inc
        </div>
      </div>
    </footer>
    <!-- /#footer -->
    <div class="mobile-menu">
      <nav class="mobile-menu__nav">
        <ul class="mobile-menu__list">
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/')); ?>">TOP</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/news')); ?>">NEWS
          </li>
        </ul>
        <div class="reserve-btn-wrap">
          <div class="reserve-btn-tel">
            <h4>電話予約はこちら</h4>
            <div class="reserve-btn">
              <a href="tel:092-686-7954"><span>092-686-7954</span></a>
            </div>
          </div>
          <div class="reserve-btn-net">
            <h4>ネット予約はこちら</h4>
            <div class="reserve-btn">
              <a href="https://beauty.hotpepper.jp/" target="_blank"><span>ONLINE RESERVE</span></a>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <!------ /.mobile-menu ----->
  </div>
  <!-- .superwrapper -->
  <?php get_template_part('includes/c-footer'); ?>
</body>

</html>