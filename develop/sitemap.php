<!doctype html><?php
 $page_settings = array(
  "directory_pos" => "./",
  "page_id" => "sitemap",
  "gnav_set" => "sitemap",
  "page_class" =>"sitemap",
  "url" => "sitemap.html",
  "title" => "サイトマップ｜",
  "keywords" => "サイトマップ,",
  "description" => "サイトマップページ。",
  "add_stylesheet" => ["css/sitemap.css"], 
  "canonical_page_id" => "sitemap", 
  "logo_text" => "サイトマップ｜"
);
?>

<?php require(INCLUDES."header.php"); ?>

<main>
  <section id="submaincontainer">
  <h2 class="ttl">サイトマップ</h2>
  <div class="sitemap_area">
  <ul>
						<li class="top"><a href="/tokai/higashibetsuin/">シティタワー東別院 トップ</a></li>
						<li class="concept"><a href="concept.html">コンセプト</a></li>
						<li class="design"><p href="design.html">デザイン</p></li>
						<li class="public"><p href="public.html">共用空間</p></li>
						<!--li class="private"><span>室内空間
						（ <a href="private_01.html"></a> ／ <a href="private_02.html"></a> ）</span></li-->
						<li class="private">室内空間</li>
						<!--li class="plan"><a href="/tokai/higashibetsuin/list.php" target="_blank">間取り</a></li-->
						<li class="plan"><a href="https://www.sumitomo-rd-mansion.jp/tokai/higashibetsuin/list.php" target="_blank">間取り</a></li>
						<!--li class="equipment"><span>設備・仕様<br />
						（ <a href="equipment_01.html">キッチン</a> ／ <a href="equipment_02.html">サニタリー</a> ／ <a href="equipment_03.html">健康・エコ・省エネ</a> ／ <a href="equipment_04.html">収納・快適仕様</a> ／ <a href="equipment_05.html">ユニバーサルデザイン・マルチメディア</a> ）</span></li-->
						<li class="equipment">設備・仕様</li>
						<!--li class="structure"><span>構造・防災
						（ <a href="structure_01.html">基本構造</a> ／ <a href="structure_02.html">セキュリティ</a> ／ <a href="structure_03.html">防災対策</a> ）</span></li-->
						<li class="structure">構造・防災</li>
						<li class="location"><span>ロケーション
						（ <a href="location01.html">進化する都心エリア</a> ／ <a href="location02.html">静穏な邸宅地</a> ）</span></li>
						<li class="access"><a href="access.html">アクセス</a></li>
						<li class="map"><a href="map.html" target="_blank">現地案内図</a></li>
						<li class="outline"><a href="javascript:outline()">物件概要</a></li>
						<!--li class="blog"><a href="javascript:blog();">マンション情報ブログ</a></li-->
						<li class="blog">マンション情報ブログ</li>
						<li class="faq"><a href="/tokai/higashibetsuin/faq.cgi" target="_blank">FAQ</a></li>
						<li class="link sitemap"><a href="sitemap.html"><span class="ja">サイトマップ</span></a></li>
      					<script type="text/javascript" src="/bukken_manage/bukken_manage_entry_button.cgi?AREA_CD=tokai&PROP_CD=higashibetsuin&LINK=footer"></script>
					</ul>
    </div>
  </section>
</main>

<?php require(INCLUDES."footer.php"); ?>
</body>
</html>
