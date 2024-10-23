<!doctype html><?php
 $page_settings = array(
  "directory_pos" => "./",
  "page_id" => "map",
  "gnav_set" => "map",
  "page_class" => "map",
  "url" => "map.html",
  "title" => "���n�ē��}�b",
  "keywords" => "���n�ē��},",
  "description" => "���n�ē��}�y�[�W�B",
  "add_stylesheet" => ["css/map.css"],
  "add_script" =>  ["js/map.js"],
  "canonical_page_id" => "map",  
  "logo_text" => "���n�ē��}�b"
);
?>

<?php require(INCLUDES."header.php"); ?>

<main>
<section id="submaincontainer" class="map-sec">
    <h2 class="ttl"><span class="eng">MAP</span><br><span class="ja">�}���V�����M�������[�E���n�ē��}</span></h2>
    <div class="mapArea map02">
      <h2 class="ttl">�����}���V�����M�������[�h�وē��}</h2>
        <div class="image pc"><img src="./images/map/map02.jpg" alt="���n�ē��}" id="map2"></div>
        <figure class="img img05 tb">
          <img src="./images/map/map02.jpg" class="sp-hide" alt="">
          <img src="./images/map/map02.jpg" class="zoomImg sp" alt=""/>
        </figure>
      </div><!-- mapArea -->
    <div class="mapArea">
    <h2 class="ttl">���n�ē��}</h2>
        <div class="image pc"><img src="./images/map/map.jpg" alt="�}���V�����M�������[�E���n�ē��}" id="map1"></div>
        <figure class="img img05 tb">
          <img src="./images/map/map.jpg" class="sp-hide" alt="">
          <img src="./images/map/map.jpg" class="zoomImg sp" alt=""/>
        </figure>
      </div><!-- mapArea -->
      <p class="zip js-scroll">���É��s����k�񒚖�303��<span>���Z���\���ł͂���܂���B</span></p>

    <div id="btnArea">
			<div id="GoogleMap"><a href="https://goo.gl/maps/dGvZc5oqvqBomWtz7" target="_blank">Google Maps�Ō���</a></div>
			<div id="PrintMap" class="pc"><a href="JavaScript:;" onclick="print_out(); return false;">�������</a></div>
    </div>
    <div class="container">
	     <p class="txt">���u�V�e�B�^���[���ʉ@�v�́u�V�e�B�^���[���É����ʉ@�v�ɕ�������ύX�������܂����B<br>���f�ڂ̌��n�ē��}�͈ꕔ���H�E�{�ݓ��𔲐����ĕ\�L���Ă��܂��B</p>
    </div>
</section>
</main>

<?php require(INCLUDES."footer.php"); ?>
</body>
</html>
