<!doctype html><?php
 $page_settings = array(
  "directory_pos" => "./",
  "page_id" => "design",
  "gnav_set" => "design",
  "page_class" => "design",
  "url" => "design.html",
  "title" => "デザイン｜",
  "keywords" => "デザイン,",
  "description" => "デザインページ。",
  "add_stylesheet" => ["css/design.css"],
  "add_script" =>  [],
  "canonical_page_id" => "design", 
  "logo_text" => "デザイン｜"
);
?>

<?php require(INCLUDES."header.php"); ?>

<main>
	<!-- パンくずリスト -->
  <div class="breadcrumb sp-hide">
    <ul>
      <li><a href="./index.html">シティタワー東別院｜東別院 マンション｜トップ</a></li>
      <li><p>デザイン</p></li>
    </ul>
  </div>
	<!--// パンくずリスト -->

  <header class="main-visual clearfix">
   <div class="image"><img src="./images/design/mv.jpg" alt=""><p class="annotation white">外観完成予想図</p></div>
  </header><!-- main-visual -->

  <section class="intro sections clearfix">
    <div class="inner">
      <p class="title">街の景観に美しく際立つ洗練の邸。</p>
      <p class="text">整然と連なるガラス手摺が描き出す印象的なファサード。<br>輝く光を纏った堂々たるフォルムが、新たな憧憬を創り出します。</p>
      </div>
      <div class="image img01">
        <img src="./images/design/image01.jpg" alt=""><p class="annotation white">外観完成予想図・東別院（約340m／徒歩5分）</p>
      </div>
  </section><!-- intro -->



  <section class="sections landplan clearfix">
  <div class="tit"><img src="./images/design/title.svg" alt="" class="pc"><img src="./images/design/title-sp.svg" alt="" class="tb"></div>
    <div class="texts inner">
        <p class="txt01">都市生活に快適さと安心感をもたらす、<br class="pc">全戸南東向きのランドスケープ。</p>
        <p class="txt02">安心できる暮らしのために、日々をサポートする機能的な共用設備や仕様、さらに安全性に配慮した歩車分離設計を採用。<br>都心生活にふさわしいランドプランを実現しています。</p>
      <div class="image img01">
        <img src="./images/design/landplan.png" alt=""><p class="annotation">敷地配置イラスト</p>
      </div>
    </div>
  </section>



<div class="annotation-area">
<p class="page-annotation js-scroll wrap clearfix">※掲載の完成予想図は計画段階の図面を基に描き起こしたものに人物等をCG合成したもので、実際とは多少異なります。また、形状の細部および設備機器等については省略しております。<br>
※掲載の外観完成予想図は、東別院境内から現地東側方向を撮影した写真（2023年6月撮影）に計画段階の図面を基に描き起こした建物完成予想図をCG合成・加工したもので、実際とは異なります。　また、周辺環境・眺望は将来変わる場合があります。また、形状の細部および設備機器等については省略しております。<br>
※掲載の敷地配置イラストは計画段階の図面を基に描き起こしたもので、形状・色等は実際とは多少異なります。また、一部敷地外の道路等を合わせて着彩しています。</p></div>
</main>

<?php require(INCLUDES."footer.php"); ?>
</body>
</html>
