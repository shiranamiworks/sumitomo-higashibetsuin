<!doctype html><?php
 $page_settings = array(
  "directory_pos" => "./",
  "page_id" => "sitemap",
  "gnav_set" => "sitemap",
  "page_class" => "",
  "url" => "sitemap.html",
  "title" => "サイトマップ｜【公式】シティタワー東別院｜東別院の新築マンション｜住友不動産",
  "keywords" => "サイトマップ,シティタワー東別院,東別院 マンション,東別院 新築マンション,東別院,東別院駅,地下鉄名城線,名古屋市中区,マンション,新築マンション,分譲マンション,住友不動産",
  "description" => "サイトマップページ。地下鉄名城線「東別院駅」まで徒歩8分。住友不動産の新築マンションが東別院に誕生。【すみふ東別院】名古屋市中区のマンションなら住友不動産。",
  "add_stylesheet" => ["css/sitemap.css"], 
  
  "logo_text" => "東別院駅徒歩8分｜シティタワー東別院｜東別院 新築マンション｜すみふ東別院｜住友不動産"
);
?>

<?php require(INCLUDES."header.php"); ?>

<main>
  <section id="submaincontainer">
  <h2 class="ttl">サイトマップ</h2>
  <div class="sitemap_area">
    <ul class="pages">
      <li class="top"><a href="./"><span class="ja">シティタワー東別院 トップ</span></a></li>
      <li class="concept"><a href="./concept.html"><span class="ja">コンセプト</span></a></li>
      <li class="design disable"><a href="./design01.html" class="disable"><span class="ja">デザイン</span></a></li>
      <li class="public disable"><a href="./public01.html" class="disable"><span class="ja">共用空間</span></a></li>
      <li class="private disable"><a href="./private01.html" class="disable"><span class="ja">室内空間</span></a></li>
     <li class="plan disable"><a href="javascript:planFn();" class="disable"><span class="ja">間取り</span></a></li>
      <li class="equipment disable"><a href="./equipment01.html" class="disable"><span class="ja">設備・仕様</span></a></li>
      <li class="structur disable"><a href="./structure01.html" class="disable"><span class="ja">構造・防災</span></a></li>
      <li class="location disable">ロケーション （ <span><a href="./location01.html"><span class="ja">進化する都心エリア</span></a></span> / <span><a href="./location02.html"><span class="ja">歴史ある格調の地</span></a></span> / <span><a href="./location03.html"><span class="ja">ライフインフォメーション</span></a></span> ）</li>
      <li class="access"><a href="./access.html"><span class="ja">アクセス</span></a></li>
      <li class="link map"><a href="map.html" target="_blank"><span class="ja">現地案内図</span></a></li>
      <li class="link outline"><a href="javascript:outline();"><span class="ja">物件概要</span></a></li>
      <li class="link faq"><a href="/<?= $folder_name?>faq.cgi" target="_blank"><span class="ja">FAQ</span></a></li>
      <!-- <li class="link blog"><a href="javascript:blog();"><span class="ja">マンション情報ブログ</span></a></li> -->
     <!--<li class="sns-icons">
        <ul class="lists clearfix">
          <li class="sns"><a href="#twitter" target="_blank"><img src="./static/images/common/ico_twitter.png" alt=""></a></li>
          <li class="sns"><a href="#insta" target="_blank"><img src="./static/images/common/ico_instagram.png" alt=""></a></li>
        </ul>
      </li>-->
      <li class="reserveBtn disable"><a href="javascript:raijo();" target="_blank" class="disable">来場予約</a></li>
      <li class="onlineBtn disable"><a href="javascript:online();" target="_blank" class="disable"><span class="btnText">オンライン見学会</span></a></li>
      <li class="demaeBtn disable"><a href="javascript:delivery();" target="_blank" class="disable">出前deオンライン見学会</a></li>
      <!--<li class="requestPageBtn"><a href="#requested_only" target="_blank">資料請求者限定ページ</a></li>
      <li class="meta-gallery"><a href="https://www.sumitomo-rd-mansion.jp/gallery/" target="_blank">メタマンションギャラリー</a></li>-->
      <li class="requestBtn"><a href="javascript:siryo();"><span class="btnText">資料請求<!--（無料）--></span></a></li>
    </ul>
    </div>
  </section>
</main>

<?php require(INCLUDES."footer.php"); ?>
</body>
</html>
