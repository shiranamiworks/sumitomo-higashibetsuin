<!doctype html><?php
 $page_settings = array(
  "directory_pos" => "./",
  "page_id" => "map",
  "gnav_set" => "map",
  "page_class" => "map",
  "url" => "map.html",
  "title" => "現地案内図｜",
  "keywords" => "現地案内図,",
  "description" => "現地案内図ページ。",
  "add_stylesheet" => ["css/map.css"],
  "add_script" =>  ["js/map.js"],
  "canonical_page_id" => "map",  
  "logo_text" => "現地案内図｜"
);
?>

<?php require(INCLUDES."header.php"); ?>

<main>
<section id="submaincontainer" class="map-sec">
    <h2 class="ttl"><span class="eng">MAP</span><br><span class="ja">マンションギャラリー・現地案内図</span></h2>
    <div class="mapArea map02">
      <h2 class="ttl">総合マンションギャラリー栄館案内図</h2>
        <div class="image pc"><img src="./images/map/map02.jpg" alt="現地案内図" id="map2"></div>
        <figure class="img img05 tb">
          <img src="./images/map/map02.jpg" class="sp-hide" alt="">
          <img src="./images/map/map02.jpg" class="zoomImg sp" alt=""/>
        </figure>
      </div><!-- mapArea -->
    <div class="mapArea">
    <h2 class="ttl">現地案内図</h2>
        <div class="image pc"><img src="./images/map/map.jpg" alt="マンションギャラリー・現地案内図" id="map1"></div>
        <figure class="img img05 tb">
          <img src="./images/map/map.jpg" class="sp-hide" alt="">
          <img src="./images/map/map.jpg" class="zoomImg sp" alt=""/>
        </figure>
      </div><!-- mapArea -->
      <p class="zip js-scroll">名古屋市中区橘二丁目303番<span>※住居表示ではありません。</span></p>

    <div id="btnArea">
			<div id="GoogleMap"><a href="https://goo.gl/maps/dGvZc5oqvqBomWtz7" target="_blank">Google Mapsで見る</a></div>
			<div id="PrintMap" class="pc"><a href="JavaScript:;" onclick="print_out(); return false;">印刷する</a></div>
    </div>
    <div class="container">
	     <p class="txt">※「シティタワー東別院」は「シティタワー名古屋東別院」に物件名を変更いたしました。<br>※掲載の現地案内図は一部道路・施設等を抜粋して表記しています。</p>
    </div>
</section>
</main>

<?php require(INCLUDES."footer.php"); ?>
</body>
</html>
