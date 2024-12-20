<!doctype html><?php
 $page_settings = array(
  "directory_pos" => "./",
  "page_id" => "access",
  "gnav_set" => "access",
  "page_class" => "access",
  "url" => "access.html",
  "title" => "アクセス｜",
  "keywords" => "アクセス,",
  "description" => "アクセスページ。",
  "add_stylesheet" => ["css/access.css","css/leaflet.css"],
  "add_script" =>  [""],
  "canonical_page_id" => "access", 
  "logo_text" => "アクセス｜"
);
?>

<?php require(INCLUDES."header.php"); ?>

<main>
	<!-- パンくずリスト -->
  <div class="breadcrumb sp-hide">
    <ul>
      <li><a href="./index.html">シティタワー名古屋東別院｜東別院 マンション｜トップ</a></li>
      <li><p>アクセス</p></li>
    </ul>
  </div>
	<!--// パンくずリスト -->

  <header class="main-visual clearfix">
    <!-- <h2 class="page-lead gothic">Hello New World.</h2> -->
   <div class="image"><img src="./images/access/mv.jpg" alt="" class="pc"><img src="./images/access/mv-sp.jpg" alt="" class="tb"><p class="annotation white">image photo</p></div>
  </header><!-- main-visual -->

  <section class="intro sections clearfix">
    <div class="inner">
      <p class="lead">都心の主要エリアを掌中にする<br class="pc">快適なるアクセス拠点。
      <p class="text">地下鉄名城線「東別院」駅をはじめ、徒歩圏で5駅6路線<sup>※1</sup>が利用可能。栄、伏見といったオフィス街や「名古屋」駅へのスムーズなアクセスを実現します。市内屈指のターミナル「金山」駅からは、名鉄名古屋本線で中部国際空港セントレアへ、JR東海道本線で三河方面へのアクセスも軽快。行動範囲がより快適に広がります。 </p>
      <!-- <div class="image img01">
        <img src="./images/access/img01.png" alt="">
      </div> -->
    </div>
    <div class="images image01">
        <figure class="pc"><img src="./images/access/img01.png" class="sp-hide" alt="路線図"></figure>
        <figure class="tb"><img src="./images/access/img01.png" class="zoomImg tb" alt=""/></figure>
        <p class="annotation wh">路線図</p>
      </div>
  </section><!-- intro -->



  <section class="station wrap clearfix">
    <ul class="lists list01 clearfix">
      <li>
      <div class="tit-box sta01 pc">
       <p class="min"><span class="line">地下鉄名城線</span>「<span class="name">東別院</span>」駅まで 徒歩<span class="num">8</span>分</p>
      </div>
      <div class="info-box main tb">
        <p class="line">地下鉄名城線</p>
        <p class="min"><span class="name">「東別院」<span class="to">駅まで</span></span><span class="right">徒歩<span class="big">8</span>分</span></p>
      </div>
      <div class="info-box main tb">
        <p class="line">地下鉄鶴舞線</p>
        <p class="min"><span class="name">「大須観音」<span class="to">駅まで</span></span><span class="right">徒歩<span class="big">12</span>分</span></p>
      </div>
      <div class="image image01">
        <img src="./images/access/line01.jpg" alt="" class="pc">
        <img src="./images/access/line01-sp.jpg" alt="" class="tb">
        <p class="annotation white">image photo</p>
      </div>
      <div class="info-box pc">
        <p class="min"><span class="name size">「栄」</span>駅<span class="min01">直通<span class="big">6</span>分<span class="mini">（6分）</span></span></p>
        <p class="sen">「東別院」駅より地下鉄名城線利用</p>
      </div>
      <div class="info-box tb">
      <p class="min"><span class="name">「栄」駅</span> </p>
        <p class="sub">直通<span class="big">6</span>分<span class="mini">（6分）</span></p>
        <p class="sen">「東別院」駅より地下鉄名城線利用</p>
      </div>
      </li>
      <li>
      <div class="tit-box pc">
        <p class="min"><span class="line">地下鉄鶴舞線</span>「<span class="name">大須観音</span>」駅まで 徒歩<span class="num">12</span>分</p>
      </div>
      <div class="image">
        <img src="./images/access/line02.jpg" alt="" class="pc">
        <img src="./images/access/line02-sp.jpg" alt="" class="tb">
        <p class="annotation white">image photo</p>
      </div>
      <div class="info-box pc">
        <p class="min"><span class="name size">「名古屋」</span>駅<span class="min01"><span class="big">7</span>分<span class="mini">（11分）</span></span></p>
        <p class="sen">「大須観音」駅より地下鉄鶴舞線利用、「伏見」駅で地下鉄東山線に乗換え</p>
      </div>
      <div class="info-box tb">
      <p class="min"><span class="name">「名古屋」駅</span> </p>
        <p class="sub"><span class="big">7</span>分<span class="mini">（11分）</span></p>
        <p class="sen">「大須観音」駅より地下鉄鶴舞線利用、「伏見」駅で地下鉄東山線に乗換え</p>
      </div>
      </li>
    </ul><!-- list01 -->
    <ul class="lists list02 clearfix">
      <li>
      <div class="image">
        <img src="./images/access/line03.jpg" alt="" class="pc">
        <img src="./images/access/line03-sp.jpg" alt="" class="tb">
        <p class="annotation white">image photo</p>
      </div>
      <div class="info-box">
        <p class="min"><span class="name">「伏見」駅</span> </p>
        <p class="sub">直通<span class="big">1</span>分<span class="mini">（1分）</span></p>
        <p class="sen">「大須観音」駅より地下鉄鶴舞線利用</p>
      </div>
      </li>
      <li>
      <div class="image">
        <img src="./images/access/line04.jpg" alt="" class="pc">
        <img src="./images/access/line04-sp.jpg" alt="" class="tb">
        <p class="annotation white">image photo</p>
      </div>
      <div class="info-box">
        <p class="min"><span class="name">「久屋大通」駅</span> </p>
        <p class="sub">直通<span class="big">8</span>分<span class="mini">（8分）</span></p>
        <p class="sen">「東別院」駅より地下鉄名城線利用</p>
      </div>
      </li>
      <li>
      <div class="image">
        <img src="./images/access/line05.jpg" alt="" class="pc">
        <img src="./images/access/line05-sp.jpg" alt="" class="tb">
        <p class="annotation white">image photo</p>
      </div>
      <div class="info-box">
        <p class="min"><span class="name">「名古屋城」駅</span> </p>
        <p class="sub">直通<span class="big">10</span>分<span class="mini">（10分）</span></p>
        <p class="sen">「東別院」駅より地下鉄名城線利用</p>
      </div>
      </li>
    </ul><!-- list02 -->

    <div class="airport clearfix">
      <p class="tit01">世界への玄関口「中部国際空港」へ、ダイレクトなアクセスが可能</p>
      <p class="tit02">徒歩15分の「金山」駅より、名鉄名古屋本線が利用可能。当駅から「中部国際空港」駅へ直通電車が利用でき、国内各地や海外への出張・旅行の際にも便利です。</p>
      <ul class="lists list01 clearfix">
        <li>
          <div class="info-box pc">
            <p class="min"><span class="mini">名鉄名古屋本線 「金山」駅よりミュースカイ利用</span><br>「中部国際空港」駅へ</p>
            <p class="sub">直通<span class="big">24</span>分<span class="mini">（24分）</span></p>
          </div>
        </li>
        <li>
          <div class="image">
            <img src="./images/access/line06.jpg" alt="">
            <p class="annotation white">image photo</p>
          </div>
          <div class="info-box sp">
            <p class="min"><span class="mini">名鉄名古屋本線 「金山」駅より<br>ミュースカイ利用</span>「中部国際空港」駅へ</p>
            <p class="sub">直通<span class="big">24</span>分<span class="mini">（24分）</span></p>
          </div>
        </li>
      </ul>
      <p class="caps">※1：5駅6路線とは、地下鉄名城線「東別院」駅（徒歩8分）、地下鉄鶴舞線「大須観音」駅（徒歩12分）、地下鉄名城線・鶴舞線「上前津」駅（徒歩13分）、名鉄名古屋本線「山王」駅（徒歩14分）、地下鉄名城線・名港線「金山」駅（徒歩14分）、JR東海道本線・中央線、名鉄名古屋本線「金山」駅（徒歩15分）のことです。<br>※掲載の所要時間は待ち時間・乗り換え時間を含んだ通勤時（カッコ内は日中平常時）の目安であり、時間帯により多少異なります。<br>※掲載の路線図は、一部路線・駅等を抜粋して表記しています。</p>
    </div><!-- airport -->
  </section><!-- station -->



  <section class="taxi clearfix">
    <div class="image">
      <img src="./images/access/taxi01.svg" alt="" class="pc">
      <img src="./images/access/taxi01-sp.svg" alt="" class="tb">
    </div>
    <div class="wrap">
    <p class="tit01">都心立地だからこそ、日常的に気軽にタクシー利用</p>
    <p class="tit02">深夜の帰宅時、出張や旅行・ショッピングなど荷物の多い際、雨の日のお出かけなどに、タクシーを気軽に利用してスマートに移動できます。</p>
    <p class="tit03">■「シティタワー名古屋東別院」までのタクシー料金シミュレーション（概算）</p>
    <ul>
      <li>
        <div class="image">
        <img src="./images/access/taxi02-01.jpg" alt="">
        <p class="annotation white">image photo</p>
        </div>
        <p class="name"><span>金山駅</span>（金山駅南口）より</p>
        <div class="image">
        <img src="./images/access/taxi02-02.jpg" alt="">
        </div>
      </li>
      <li>
        <div class="image">
        <img src="./images/access/taxi03-01.jpg" alt="">
        <p class="annotation white">image photo</p>
        </div>
        <p class="name"><span>栄駅</span>（栄駅7番出口）より</p>
        <div class="image">
        <img src="./images/access/taxi03-02.jpg" alt="">
        </div>
      </li>
      <li>
        <div class="image">
        <img src="./images/access/taxi04-01.jpg" alt="">
        <p class="annotation white">image photo</p>
        </div>
        <p class="name"><span>名古屋駅</span>（桜通口）より</p>
        <div class="image">
        <img src="./images/access/taxi04-02.jpg" alt="">
        </div>
      </li>
    </ul>
    <p class="caps">※タクシー料金は、初乗り500円の普通車（中型車）を日中時（深夜時は22時〜5時）に一般道で利用した場合の参考例です。タクシー会社・走行ルートおよび交通状況によって料金は異なります。<br>※タクシーサイトより（2023年9月調べ）</p>
    </div>
  </section><!-- taxi -->



  <section class="car clearfix">
    <div class="image">
      <img src="./images/access/car01.svg" alt="" class="pc">
      <img src="./images/access/car01-sp.svg" alt="" class="tb">
    </div>
    <div class="wrap">
    <p class="tit01">名古屋高速都心環状線の入口が近く、お出かけも軽快に。</p>
    <p class="tit02">名古屋の中心部を縦断する伏見通、山王通、大津通など、快適な交通網が広がる現地周辺。高速道路の入口にも近いため、空港やレジャースポットへ、自在なカーアクセスが可能です。</p>
    <p class="tit03">■名古屋高速都心環状線<span>「東別院」</span>入口（山王JCT方面）まで約<span>770m</span></p>
    <ul>
      <li>
        <div class="image">
        <img src="./images/access/car02.jpg" alt="">
        <p class="annotation white">レゴランドimage photo</p>
        </div>
        <div class="info-box">
          <p class="min"><span class="mini">伊勢湾岸自動車道</span><br>「名港中央」出口</p>
          <p class="sub">約<span class="big">17</span>分<span class="mini">（約17.2km）</span></p>
        </div>
      </li>
      <li>
        <div class="image">
        <img src="./images/access/car03.jpg" alt="">
        <p class="annotation white">ナガシマスパーランドimage photo</p>
        </div>
        <div class="info-box">
          <p class="min"><span class="mini">伊勢湾岸自動車道</span><br>「湾岸長島」出口</p>
          <p class="sub">約<span class="big">24</span>分<span class="mini">（約28.3km）</span></p>
        </div>
      </li>
      <li>
        <div class="image">
        <img src="./images/access/car04.jpg" alt="">
        <p class="annotation">中部国際空港image photo</p>
        </div>
        <div class="info-box">
          <p class="min"><span class="mini">中部国際空港連絡道路</span><br>「セントレア東」出口</p>
          <p class="sub">約<span class="big">39</span>分<span class="mini">（約43.8km）</span></p>
        </div>
      </li>
    </ul>
    <p class="caps">※掲載の距離表示については地図上の概測距離を、高速道路は「ドラぷら（NEXCO東日本）」ホームページにて検索（2023年9月現在）したものです。</p>
    </div>
  </section><!-- car -->



<div class="annotation-area">
<p class="page-annotation js-scroll wrap clearfix">※「シティタワー東別院」は「シティタワー名古屋東別院」に物件名を変更いたしました。<br>※距離表示については地図上の概測距離を、徒歩分数表示については80ｍを1分として算出し、端数を切り上げたものです。<br> ※掲載の情報は2023年9月現在のものです。</p></div>
</main>

<?php require(INCLUDES."footer.php"); ?>
</body>
</html>
