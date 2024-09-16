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

<?php include("../templates/head.php"); ?>

<body>
  <div class="footer-fixed-bottom">

    <?php include("../templates/header.php"); ?>

    <section id="portfolio" class="portfolio-detail-section">
      <div class="container">
        <div class="row row-bg-img">
          <div class="col-md-8 mx-auto text-center">
            <h2>About「HIDEYOSHI」</h2>
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
                    【言語】<br>HTML<br>CSS<br>PHP
                    <br><br>
                    【DB】<br>MySQL
                    <br><br>
                    【フレームワーク】<br>Laravel
                  </td>
                  <td width="180">
                    VSCode<br>phpMyAdmin<br>docker sails
                  </td>
                  <td>
                    某企業様従業員専用ツール内で提出し、エクセルで管理されていた週報をWEBで一元化するためのシステム
                  </td>
                  <td width="180">
                    認証<br>週報提出<br>フィードバック<br>表示切替<br>CSV出力 ※
                  </td>
                </tr>
              </tbody>
            </table>
            <p class="mt-2">※ 現在開発中</p>
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
    <?php include("../templates/footer.php"); ?>
  </div>

  <?php include("../templates/script.php"); ?>
</body>

</html>