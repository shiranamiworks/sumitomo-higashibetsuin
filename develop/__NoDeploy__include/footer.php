<footer class="footer">
  <div class="entry">      
    <div class="container">
      <div class="entry-btn entry-btn--3">
        <!-- <p class="entry-btn-p">来場予約</p> -->
        <a href="javascript:online();" class="none"><p>オンライン見学会予約</p></a>
        <a href="javascript:siryo();"><p>資料請求</p></a>
      </div>
      <div class="entry-tel">
        <p>お問い合わせは<br class="sp">住友不動産「総合マンションギャラリー栄館」</p>
        <a href="tel:<?= $site_setting["tel_link"]?>" class="entry-tel__num"><img src="./images/common/icn_entry-tel.png" alt=""><span class="f-en">0120-578-758</span></a><br>
        <a href="mailto:ct-higashibetsuin@j.sumitomo-rd.co.jp" class="disabled">ct-higashibetsuin@j.sumitomo-rd.co.jp</a>
      </div>
      <p class="entry-info">営業時間／11：00&#x301c;19：00 土・日・祝10：00&#x301c;18：00<br class="sp">（火・水曜日定休）</p>
    </div>
  </div>
  <nav class="footer-menu">
    <div class="container">
      <ul>
        <li class="start top"><a href="<?= $page_settings["directory_pos"]  ?>">トップページ</a></li>
        <li class="concept"><a href="<?= $page_settings["directory_pos"]  ?>concept.html">コンセプト</a></li>
        <li class="design">デザイン</li>
        <li class="public">共&#12132;空間</li>
        <li class="private">室内空間</li>
        <li class="roomplan">間取り</li>
        <li class="equipment">設備・仕様</li>
        <li class="structure">構造・防災</li>
        <li class="location"><a href="<?= $page_settings["directory_pos"]  ?>location01.html">ロケーション</a></li>
        <li class="access"><a href="<?= $page_settings["directory_pos"]  ?>access.html">アクセス</a></li>
        <li class="map"><a href="<?= $page_settings["directory_pos"]  ?>map.html" target="_blank">現地案内図</a></li>
        <li class="outline"><a href="javascript:outline()">物件概要</a></li>
        <li class="blog">マンション情報ブログ</li>
        <li class="faq"><a href="/<?= $folder_name?>faq.cgi" target="_blank">FAQ</a></li>
        <li class="sitemap"><a href="<?= $page_settings["directory_pos"]  ?>sitemap.html">サイトマップ</a></li>
        <li class="online">オンライン見学会予約</li>
        <li class="delivery">出前deオンライン見学会予約</li>
        <li class="raijo">来場予約</li>
        <li class="request"><a href="javascript:siryo()">資料請求</a></li>
      </ul>
    </div>
  </nav><!-- footer-menu -->

  <div class="footer-recommend">
    <div class="container">
      <ul class="footer-recommend__menu f-min">
        <li>東別院 マンション</li>
        <li>東別院 新築マンション</li>
        <li>シティタワー東別院</li>
        <li>愛知県名古屋市中区</li>
        <li>地下鉄名城線</li>
        <li>東別院駅</li>
        <li>新築分譲マンション</li>
        <li>住友不動産</li>
        <li>すみふ東別院</li>
      </ul>

      <!-- おススメ物件 -->
      <p class="footer-recommend__ttl">おすすめ物件</p>
      <div class="footer-recommend__slide" id="recommendSlide">
        <div>
          <div class="cont">
            <figure><a href="/tokai/ueda/" target="_blank"><img src="<?= $page_settings["directory_pos"]  ?>images/common/bana/img_recommend01.jpg" alt="シティハウス植田"></a></figure>
            <dl>
              <dt><a href="/tokai/ueda/" target="_blank">シティハウス植田</a></dt>
              <dd>
                <p>交　通：地下鉄鶴舞線「植田」駅まで徒歩2分</p>
                <p>住　所：愛知県名古屋市天白区植田</p>
                <p>総戸数：39戸</p>
              </dd>
            </dl>
          </div>
        </div>
        <div>
          <div class="cont">
            <figure><a href="/tokai/ct_nagono/" target="_blank"><img src="<?= $page_settings["directory_pos"]  ?>images/common/bana/img_recommend02.jpg" alt="シティタワー名駅那古野"></a></figure>
            <dl>
              <dt><a href="/tokai/ct_nagono//" target="_blank">シティタワー名駅那古野</a></dt>
              <dd>
                <p>交　通：地下鉄桜通線「国際センター」駅徒歩6分</p>
                <p>住　所：愛知県名古屋市西区那古野</p>
                <p>総戸数：103戸</p>
              </dd>
            </dl>
          </div>
        </div>
        <div>
          <div class="cont">
            <figure><a href="/tokai/takaoka2/" target="_blank"><img src="<?= $page_settings["directory_pos"]  ?>images/common/bana/img_recommend03.jpg" alt="シティハウス高岳レジデンス"></a></figure>
            <dl>
              <dt><a href="/tokai/takaoka2/" target="_blank">シティハウス高岳レジデンス</a></dt>
              <dd>
                <p>交　通：地下鉄桜通線「高岳」駅まで徒歩5分</p>
                <p>住　所：愛知県名古屋市東区泉</p>
                <p>総戸数：51戸［非分譲住戸6戸含む］</p>
              </dd>
            </dl>
          </div>
        </div>
        <div>
          <div class="cont">
            <figure><a href="/tokai/aoi/" target="_blank"><img src="<?= $page_settings["directory_pos"]  ?>images/common/bana/img_recommend04.jpg" alt="シティタワー葵"></a></figure>
            <dl>
              <dt><a href="/tokai/aoi/" target="_blank">シティタワー葵</a></dt>
              <dd>
                <p>交　通：地下鉄東山線「新栄町」駅徒歩4分</p>
                <p>住　所：愛知県名古屋市東区葵</p>
                <p>総戸数：354戸</p>
              </dd>
            </dl>
          </div>
        </div>
        <div>
          <div class="cont">
            <figure><a href="/tokai/marunouchi/" target="_blank"><img src="<?= $page_settings["directory_pos"]  ?>images/common/bana/img_recommend05.jpg" alt="シティタワー丸の内"></a></figure>
            <dl>
              <dt><a href="/tokai/marunouchi/" target="_blank">シティタワー丸の内</a></dt>
              <dd>
                <p>交　通：地下鉄桜通線・鶴舞線「丸の内」駅から徒歩4分</p>
                <p>住　所：愛知県名古屋市中区丸の内</p>
                <p>総戸数：108戸［非分譲住戸3戸含む］</p>
              </dd>
            </dl>
          </div>
        </div>
        <div>
          <div class="cont">
            <figure><a href="/tokai/chayagasaka/" target="_blank"><img src="<?= $page_settings["directory_pos"]  ?>images/common/bana/img_recommend06.jpg" alt="メガシティテラス"></a></figure>
            <dl>
              <dt><a href="/tokai/chayagasaka/" target="_blank">メガシティテラス</a></dt>
              <dd>
                <p>交　通：地下鉄名城線「茶屋ヶ坂」駅まで徒歩4～6分</p>
                <p>住　所：愛知県名古屋市東区砂田橋</p>
                <p>総戸数：553戸［1工区：373戸・2工区：180戸］</p>
              </dd>
            </dl>
          </div>
        </div>
        <div>
          <div class="cont">
            <figure><a href="/tokai/chayagasaka2/" target="_blank"><img src="<?= $page_settings["directory_pos"]  ?>images/common/bana/img_recommend07.jpg" alt="メガシティテラスⅡ街区"></a></figure>
            <dl>
              <dt><a href="/tokai/chayagasaka2/" target="_blank">メガシティテラスⅡ街区</a></dt>
              <dd>
                <p>交　通：地下鉄名城線「茶屋ヶ坂」駅　徒歩4～8分</p>
                <p>住　所：愛知県名古屋市東区砂田橋</p>
                <p>総戸数：352戸</p>
              </dd>
            </dl>
          </div>
        </div>
      </div><!-- //#recommendSlide -->
<!-- //おススメ物件 -->
    </div>
  </div>

  <div class="footer-logo">
    <div class="container">
      <ul>
        <li>
          <a href="/official/" target="_blank"><img src="<?= $page_settings["directory_pos"]  ?>images/common/logo01.png" alt="住友不動産のマンション 公式サイト"></a>
        </li>
        <li>
          <a href="/" target="_blank"><img src="<?= $page_settings["directory_pos"]  ?>images/common/logo02.png" alt="住友不動産のマンション 物件総合サイト"></a>
        </li>
      </ul>
      <ul>
        <li>
          <a href="/gallery/" target="_blank"><img src="<?= $page_settings["directory_pos"]  ?>images/common/logo03.png" alt="総合マンションギャラリー"></a>
        </li>
        <li>
          <a href="/brand/" target="_blank"><img src="<?= $page_settings["directory_pos"]  ?>images/common/logo04.png" alt="光景となる象徴"></a>
        </li>
        <li>
          <a href="/su-my_club/" target="_blank"><img src="<?= $page_settings["directory_pos"]  ?>images/common/logo05.png" alt="住まいクラブ"></a>
        </li>
      </ul>
    </div>
  </div>

  <div class="footer-wrapper f-min">
    <div class="position-relative">
      <nav>
        <ul>
          <li>
            <a href="http://www.sumitomo-rd.co.jp/privacy_policy/" target="_blank"><i class="fa-solid fa-angle-right"></i>個&#12040;情報保護&#12101;針・個&#12040;情報のお取り扱い</a>
          </li>
          <li>
            <a href="https://www.sumitomo-rd.co.jp/security_policy/" target="_blank"><i class="fa-solid fa-angle-right"></i>情報セキュリティ基本&#12101;針</a>
          </li>
          <li>
            <a href="/cmn2013/html/caution.html" target="_blank"><i class="fa-solid fa-angle-right"></i>ご利&#12132;上の注意</a>
          </li>
          <li>
            <a href="/cmn2013/html/about.html" target="_blank"><i class="fa-solid fa-angle-right"></i>掲載物件情報について</a>
          </li>
          <li>
            <a href="/cmn2013/html/browser.html" target="_blank"><i class="fa-solid fa-angle-right"></i>推奨環境について</a>
          </li>
        </ul>
      </nav>
      <a href="http://www.sumitomo-rd.co.jp/" class="footer-wrapper__logo01" target="_blank"><img src="<?= $page_settings["directory_pos"]  ?>images/common/ft_logo.svg" alt="住友不動産"></a>
      <p class="copyright">Copyright &copy; Sumitomo Realty & Development Co., Ltd.</p>
    </div>
  </div>
  <div class="footer-btn">
    <div class="float-btn">
      <!-- <p class="bg_btn--gray">来場予約</p> -->
      <p class="bg_btn--gray">オンライン<br>見学会予約</p>
      <!-- <a href="javascript:online()" class="bg_btn"><p>オンライン<br>見学会予約 </p></a>
      <a href="javascript:delivery()" class="bg_btn"><p>出前ｄｅオンライン<br>見学会予約 </p></a> -->
      <a href="javascript:siryo()" class="bg_btn--request"><p>資料請求</p></a>
    </div>
    <div class="fixed-btn">
      <a href="<?= $site_setting["tel_link"] ?>">
        <p><img src="<?= $page_settings["directory_pos"]  ?>images/common/icn_tel.png" alt="電話問合せ"><br>電話問合せ</p>
      </a>
      <a href="<?= $page_settings["directory_pos"]  ?>map.html" target="_blank">
        <p><img src="<?= $page_settings["directory_pos"]  ?>images/common/icn_map.png" alt="現地案内図"><br>現地案内図</p>
      </a>
      <a href="javascript:siryo()" class="fixed-btn__mail">
        <p><img src="<?= $page_settings["directory_pos"]  ?>images/common/icn_mail.png" alt="資料請求"><br>資料請求</p>
      </a>
      <a href="javascript:online()" class="fixed-btn__reserve none">
        <p><img src="<?= $page_settings["directory_pos"]  ?>images/common/icn_reserve.png" alt="見学会予約"><br>見学会予約</p>
      </a>
      <div id="sp-menu-btn-ft" class="hamburger">
        <div class="hamburger-wrapper">
          <div class="menu-trigger">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <p>MENU</p>
        </div>
      </div>
    </div>
  </div>
</footer>

</div>






<!-- 解析タグここから -->
<!-- アクセス履歴タグ挿入 begin -->
<img src="/bukken_access.cgi?AREA_CD=<?= $site_setting['area'] ?>&PROP_CD=<?= $site_setting['prop'] ?>" width="1" height="1" id="adtag">
<!-- アクセス履歴タグ挿入 end -->

<!-- ADPLANタグ挿入 begin -->
<script language="JavaScript" type="text/javascript" src="http://o.advg.jp/ojs?aid=1346&pid=6">
</script>
<noscript>
<iframe src="http://o.advg.jp/oif?aid=1346&pid=6" width="1" height="1"></iframe>
</noscript>
<!-- ADPLANタグ挿入 end -->

<!-- dataLayer creteoタグ begin -->
<script type="text/javascript">
/* <![CDATA[ */
var google_tag_params = {
	dynx_pagetype: "product",
	dynx_device: "d",
       dynx_area: "<?= $site_setting['area'] ?>",
	dynx_prefecture: "愛知県",
	dynx_city: "",
	dynx_railway: "",
	dynx_itemid: "<?= $site_setting['prop'] ?>",
	dynx_pvalue: "",
	dynx_station: ""
};

var dataLayer = [{
  google_tag_params: window.google_tag_params
}];
/* ]]> */
</script>
<!-- dataLayer creteoタグ end -->

<!-- Google Tag Manager begin -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-M7LSST"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M7LSST');</script>
<!-- Google Tag Manager end -->

<!-- Yahoo Tag Manager begin -->
<script type="text/javascript">
(function () {
var tagjs = document.createElement("script");
var s = document.getElementsByTagName("script")[0];
tagjs.async = true;
tagjs.src = "//s.yjtag.jp/tag.js#site=DJWhE55";
s.parentNode.insertBefore(tagjs, s);
}());
</script>
<noscript>
<iframe src="//b.yjtag.jp/iframe?c=DJWhE55" width="1" height="1" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</noscript>
<!-- Yahoo Tag Manager end -->

<!-- NabiSTAR script begin -->
<script type="text/javascript">(function(d,u){var b=d.getElementsByTagName("script")[0],j=d.createElement("script");j.async=true;j.src=u;b.parentNode.insertBefore(j,b);})(document,"//img.ak.impact-ad.jp/ut/be1ed93f154f602c_2269.js");</script><noscript><iframe src="//nspt.unitag.jp/be1ed93f154f602c_2269.php" width="0" height="0" frameborder="0"></iframe></noscript>
<!-- NabiSTAR script end -->

<!-- アクセス履歴タグ挿入 begin -->
<img src="/bukken_access.cgi?AREA_CD=<?= $site_setting['area'] ?>&PROP_CD=<?= $site_setting['prop'] ?>" width="1" height="1" id="adtag">
<!-- アクセス履歴タグ挿入 end -->

<!-- ADPLANタグ挿入 begin -->
<script language="JavaScript" type="text/javascript" src="http://o.advg.jp/ojs?aid=1346&pid=6">
</script>
<noscript>
<iframe src="http://o.advg.jp/oif?aid=1346&pid=6" width="1" height="1"></iframe>
</noscript>
<!-- ADPLANタグ挿入 end -->

<!-- dataLayer creteoタグ begin -->
<script type="text/javascript">
/* <![CDATA[ */
var google_tag_params = {
	dynx_pagetype: "product",
	dynx_device: "d",
       dynx_area: "<?= $site_setting['area'] ?>",
	dynx_prefecture: "愛知県",
	dynx_city: "",
	dynx_railway: "",
	dynx_itemid: "<?= $site_setting['prop'] ?>",
	dynx_pvalue: "",
	dynx_station: ""
};

var dataLayer = [{
  google_tag_params: window.google_tag_params
}];
/* ]]> */
</script>
<!-- dataLayer creteoタグ end -->

<!-- Google Tag Manager begin -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-M7LSST"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M7LSST');</script>
<!-- Google Tag Manager end -->

<!-- Yahoo Tag Manager begin -->
<script type="text/javascript">
(function () {
var tagjs = document.createElement("script");
var s = document.getElementsByTagName("script")[0];
tagjs.async = true;
tagjs.src = "//s.yjtag.jp/tag.js#site=DJWhE55";
s.parentNode.insertBefore(tagjs, s);
}());
</script>
<noscript>
<iframe src="//b.yjtag.jp/iframe?c=DJWhE55" width="1" height="1" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</noscript>
<!-- Yahoo Tag Manager end -->

<!-- NabiSTAR script begin -->
<script type="text/javascript">(function(d,u){var b=d.getElementsByTagName("script")[0],j=d.createElement("script");j.async=true;j.src=u;b.parentNode.insertBefore(j,b);})(document,"//img.ak.impact-ad.jp/ut/be1ed93f154f602c_2269.js");</script><noscript><iframe src="//nspt.unitag.jp/be1ed93f154f602c_2269.php" width="0" height="0" frameborder="0"></iframe></noscript>
<!-- NabiSTAR script end -->
<!-- 解析タグここまで -->

