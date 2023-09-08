<!doctype html><?php
 $page_settings = array(
  "directory_pos" => "./",
  "page_id" => "sitemap",
  "gnav_set" => "sitemap",
  "page_class" => "",
  "url" => "sitemap.html",
  "title" => "�T�C�g�}�b�v�b�y�����z�V�e�B�^���[���ʉ@�b���ʉ@�̐V�z�}���V�����b�Z�F�s���Y",
  "keywords" => "�T�C�g�}�b�v,�V�e�B�^���[���ʉ@,���ʉ@ �}���V����,���ʉ@ �V�z�}���V����,���ʉ@,���ʉ@�w,�n���S�����,���É��s����,�}���V����,�V�z�}���V����,�����}���V����,�Z�F�s���Y",
  "description" => "�T�C�g�}�b�v�y�[�W�B�n���S������u���ʉ@�w�v�܂œk��8���B�Z�F�s���Y�̐V�z�}���V���������ʉ@�ɒa���B�y���݂ӓ��ʉ@�z���É��s����̃}���V�����Ȃ�Z�F�s���Y�B",
  "add_stylesheet" => ["css/sitemap.css"], 
  
  "logo_text" => "���ʉ@�w�k��8���b�V�e�B�^���[���ʉ@�b���ʉ@ �V�z�}���V�����b���݂ӓ��ʉ@�b�Z�F�s���Y"
);
?>

<?php require(INCLUDES."header.php"); ?>

<main>
  <section id="submaincontainer">
  <h2 class="ttl">�T�C�g�}�b�v</h2>
  <div class="sitemap_area">
    <ul class="pages">
      <li class="top"><a href="./"><span class="ja">�V�e�B�^���[���ʉ@ �g�b�v</span></a></li>
      <li class="concept"><a href="./concept.html"><span class="ja">�R���Z�v�g</span></a></li>
      <li class="design disable"><a href="./design01.html" class="disable"><span class="ja">�f�U�C��</span></a></li>
      <li class="public disable"><a href="./public01.html" class="disable"><span class="ja">���p���</span></a></li>
      <li class="private disable"><a href="./private01.html" class="disable"><span class="ja">�������</span></a></li>
     <li class="plan disable"><a href="javascript:planFn();" class="disable"><span class="ja">�Ԏ��</span></a></li>
      <li class="equipment disable"><a href="./equipment01.html" class="disable"><span class="ja">�ݔ��E�d�l</span></a></li>
      <li class="structur disable"><a href="./structure01.html" class="disable"><span class="ja">�\���E�h��</span></a></li>
      <li class="location disable">���P�[�V���� �i <span><a href="./location01.html"><span class="ja">�i������s�S�G���A</span></a></span> / <span><a href="./location02.html"><span class="ja">���j����i���̒n</span></a></span> / <span><a href="./location03.html"><span class="ja">���C�t�C���t�H���[�V����</span></a></span> �j</li>
      <li class="access"><a href="./access.html"><span class="ja">�A�N�Z�X</span></a></li>
      <li class="link map"><a href="map.html" target="_blank"><span class="ja">���n�ē��}</span></a></li>
      <li class="link outline"><a href="javascript:outline();"><span class="ja">�����T�v</span></a></li>
      <li class="link faq"><a href="/<?= $folder_name?>faq.cgi" target="_blank"><span class="ja">FAQ</span></a></li>
      <!-- <li class="link blog"><a href="javascript:blog();"><span class="ja">�}���V�������u���O</span></a></li> -->
     <!--<li class="sns-icons">
        <ul class="lists clearfix">
          <li class="sns"><a href="#twitter" target="_blank"><img src="./static/images/common/ico_twitter.png" alt=""></a></li>
          <li class="sns"><a href="#insta" target="_blank"><img src="./static/images/common/ico_instagram.png" alt=""></a></li>
        </ul>
      </li>-->
      <li class="reserveBtn disable"><a href="javascript:raijo();" target="_blank" class="disable">����\��</a></li>
      <li class="onlineBtn disable"><a href="javascript:online();" target="_blank" class="disable"><span class="btnText">�I�����C�����w��</span></a></li>
      <li class="demaeBtn disable"><a href="javascript:delivery();" target="_blank" class="disable">�o�Ode�I�����C�����w��</a></li>
      <!--<li class="requestPageBtn"><a href="#requested_only" target="_blank">���������Ҍ���y�[�W</a></li>
      <li class="meta-gallery"><a href="https://www.sumitomo-rd-mansion.jp/gallery/" target="_blank">���^�}���V�����M�������[</a></li>-->
      <li class="requestBtn"><a href="javascript:siryo();"><span class="btnText">��������<!--�i�����j--></span></a></li>
    </ul>
    </div>
  </section>
</main>

<?php require(INCLUDES."footer.php"); ?>
</body>
</html>
