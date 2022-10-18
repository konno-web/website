<?php

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<title>PORTFORIO | MITSUYOSHI KONNO</title>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="ウェブデザイン,ウェブデザイナー,制作会社,コーダー,wordpress,design,jquery,konno-mitsuyoshi,html,css,coding">
<meta name="description" content="ウェブデザイン承ります。ホームページを作りたい、リニューアルしたい、ショップサイトを起ち上げたいという方は是非ご相談ください。HTML5、CSSよるコーディング、WordPressのカスタマイズに対応しております">
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/favicon.ico">
<link rel="icon" type="image/png" href="img/favicon.ico">
<link rel="stylesheet" media="screen" href="css/style.css">
<link rel="stylesheet" media="screen" href="css/common.css">
<link rel="stylesheet" media="screen" href="css/header.css">
<link rel="stylesheet" media="screen" href="css/footer.css">
<!-- scripts -->
<script src="js/particles.js"></script>
<script src="js/setting.js"></script>
<script src="js/app.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.2/particles.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
<html lang="ja">

<body>
<header class="header" id="header">
  <nav class="g_nav">
    <div class="header_inner">
      <div id="global-menu" class="global-menu global-menu--active" style="display: block;">
        <div class="global-menu__container">
          <div class="global-menu__ttl">MENU</div>
          <ul class="global-menu__list">
            <li><a href="https://konno-mitsuyoshi.jp/how-to-order">
              <span class="menu-en">CONSEPT</span>
              <span class="menu-ja">方針・コンセプト</span>
            </a></li>
            <li><a href="https://konno-mitsuyoshi.jp/service">
              <span class="menu-en">SERVICE</span>
              <span class="menu-ja">サービス内容</span>
            </a></li>
            <li><a href="https://konno-mitsuyoshi.jp/works">
              <span class="menu-en">WORKS</span>
              <span class="menu-ja">実績</span>
            </a></li>
            <li><a href="https://konno-mitsuyoshi.jp/contact">
              <span class="menu-en">CONTACT</span>
              <span class="menu-ja">お問い合わせ</span>
            </a></li>
            </ul>
            <div class="global-menu__footer">
              <p><a href="https://hasegawahiroshi.jp">konno-mitsuyoshi.jp</a></p>
            </div>
          </div><!-- /.global-menu__container -->
          <div id="menu-bg" class="menu-bg"></div>
        </div>
      </div>
    </nav>
    <div class="h_menu" id="h_menu_js">
      <span class="h_menu_line h_menu_line_1"></span>
      <span class="h_menu_line h_menu_line_2"></span>
      <span class="h_menu_line h_menu_line_3"></span>
    </div>
    <div class="h_menu_background"></div>
    <div class="bg_open" id="bg_open_js"></div>
</header>	

		
<script>
  function toggleNav() {
      var body = document.body;
      var hamburger = document.getElementById('h_menu_js');
      var blackBg = document.getElementById('bg_open_js');
       hamburger.addEventListener('click', function () {
           body.classList.toggle('menu_open');
  });
  blackBg.addEventListener('click', function () {
      body.classList.remove('menu_open');
  });
  }
  toggleNav();
</script><!--ハンバーガーメニューjs-->

<script>
  var particles = Particles.init({
    selector: '.background',
  sizeVariations: 10,
  color: ['#dce1d8', '#dce1d8', '#dce1d8'],
  connectParticles: true
});
</script>


<a href="#header">
<div id="pageup" class="pageup pageup--active">
  <div class="pageup__arr"></div></a>
</div>
			

			
</header><!-- #masthead -->
<div id="content" class="site-content">
