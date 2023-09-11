<!doctype html><?php
 $page_settings = array(
  "directory_pos" => "./",
  "page_id" => "map",
  "gnav_set" => "map",
  "page_class" => "",
  "url" => "map.html",
  "title" => "���n�ē��}�b�y�����z�V�e�B�^���[���ʉ@�b���ʉ@�̐V�z�}���V�����b�Z�F�s���Y",
  "keywords" => "���n�ē��},�V�e�B�^���[���ʉ@,���ʉ@ �}���V����,���ʉ@ �V�z�}���V����,���ʉ@,���ʉ@�w,�n���S�����,���É��s����,�}���V����,�V�z�}���V����,�����}���V����,�Z�F�s���Y",
  "description" => "���n�ē��}�y�[�W�B�n���S������u���ʉ@�w�v�܂œk��8���B�Z�F�s���Y�̐V�z�}���V���������ʉ@�ɒa���B�y���݂ӓ��ʉ@�z���É��s����̃}���V�����Ȃ�Z�F�s���Y�B",
  "add_stylesheet" => ["css/map.css"],
  "add_script" =>  ["js/map.js"],
    
  "logo_text" => "���ʉ@�w�k��8���b�V�e�B�^���[���ʉ@�b���ʉ@ �V�z�}���V�����b���n�ē��}�b���݂ӓ��ʉ@�b�Z�F�s���Y"
);
?>

<?php require(INCLUDES."header.php"); ?>

<main>
	<div class="content-inner">
    <div class="print-area">
      <h2 class="page-title js-scroll"><span class="font-size400">MAP</span><br class="sp">���n�ē��}</h2>

      <div class="map-image">
        <div class="image pc"><img src="./images/map/map.jpg" alt="���n�ē��}"></div>
        <figure class="img img05 sp">
          <img src="./images/map/map.jpg" class="sp-hide" alt="">
          <img src="./images/map/map.jpg" class="zoomImg sp" alt=""/>
        </figure>
      </div><!-- map-image -->
      <p class="text01 js-scroll">���É��s����k�񒚖�303��<span>���Z�˕\���ł͂���܂���B</span></p>
    </div> 

    <ul class="link-buttons js-scroll">
      <li class="link"><a href="https://goo.gl/maps/dGvZc5oqvqBomWtz7" target="_blank">Google Maps�Ō���</a></li>
      <li class="link02 pc"><a href="JavaScript:;" onclick="print_out(); return false;">�������</a></li>
    </ul>
    <p class="annotation js-scroll">���f�ڂ̌��n�ē��}�͈ꕔ���H�E�{�ݓ��𔲐����ĕ\�L���Ă��܂��B</p>
  </div>
</main>

<?php require(INCLUDES."footer.php"); ?>
</body>
</html>
