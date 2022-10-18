<?php

?>

</div><!-- #content -->

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

<footer id="colophon" class="site-footer">
<footer>
<ul class="footer_nav">
  <div class="footer_logo"><a href=""><img src="img/logopng.png"></a></div>
  <li class="footer_nav_list"><a href="works.html">CONSEPT</a></li>
  <li class="footer_nav_list"><a href="">SERVICE</a></li>
  <li class="footer_nav_list"><a href="index.html">WORKS</a></li>
  <li class="footer_nav_list"><a href="works.html">CONTACT</a></li>
</ul>
<div class="copyright"><p>COPYRIGHT &#169;KONNO-MITSUYOSHI.JP</p></div>
</footer>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
