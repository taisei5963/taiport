<?php

if ($_SERVER['HTTP_HOST'] === "localhost") {
  $access = true;
} else {
  $access = false;
}

$page_title = 'Portfolio';

// アクティブタブ制御設定
$active_home = null;
$active_skills = null;
$active_contact = null;

?>

<!DOCTYPE html>
<html lang="ja">

<?php
if ($access) {
  include("template/head.php");
} else {
  include("../templates/head.php");
}
?>

<body>
  <div class="footer-fixed-bottom">

    <?php
    if ($access) {
      include("template/header.php");
    } else {
      include("../templates/header.php");
    }
    ?>

    <section id="portfolio" class="portfolio-detail-section">
      <div class="container">
        <div class="row row-bg-img">
          <div class="col-md-8 mx-auto text-center">
            <h2>About「ibooks」</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <table class="table table-light table-bordered">
              <thead>
                <tr class="text-center">
                  <th class="bg-dark-subtle align-middle">環境</th>
                  <th class="bg-dark-subtle align-middle">ツール</th>
                  <th class="bg-dark-subtle align-middle">内容</th>
                  <th class="bg-dark-subtle align-middle">主な機能</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td width="180">
                    【開発機】<br>Mac
                    <br><br>
                    【言語】<br>HTML<br>CSS<br>PHP<br>JavaScript
                    <br><br>
                    【DB】<br>MySQL
                    <br><br>
                    【フレームワーク】<br>Laravel<br>Vue.js
                  </td>
                  <td width="180">
                    VSCode<br>phpMyAdmin<br>MAMP
                  </td>
                  <td>
                    IT業界に就職されている方をメインターゲットに開発したWEBサイト
                    <br>以下の項目での検索が可能
                    <br>◆カテゴリ
                    <br>◆タイトル
                    <br>◆著者
                    <br>◆出版社
                  </td>
                  <td width="180">
                    認証<br>検索<br>レビュー登録<br>レビュー更新<br>レビュー削除<br>ブック登録<br>ブック更新<br>ブック削除
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-12 text-center">
            <?php if ($access) { ?>
              <a href="/taiport" class="btn btn-outline-secondary btn-lg w-25 mt-3">
                戻る
              </a>
            <?php } else { ?>
              <a href="/" class="btn btn-outline-secondary btn-lg w-25 mt-3">
                戻る
              </a>
            <?php } ?>
          </div>
        </div>
      </div>
    </section>

    <!-- フッター -->
    <?php
    if ($access) {
      include("template/footer.php");
    } else {
      include("../templates/footer.php");
    }
    ?>
  </div>

  <?php
  if ($access) {
    include("template/script.php");
  } else {
    include("../templates/script.php");
  }
  ?>
</body>

</html>