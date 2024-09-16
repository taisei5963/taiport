<?php
if ($_SERVER['HTTP_HOST'] === "localhost") {
  $access = true;
  require_once __DIR__ . '/../../config/config.php';
} else {
  $access = false;
}

$page_title = 'Contact';

// ワンタイムトークン発行
$csrf_token = bin2hex(random_bytes(16));

// トークンのセッション保存
$_SESSION['csrf_token'] = $csrf_token;

// アクティブタブ制御設定
$active_home = null;
$active_skills = null;
$active_contact = 'active';

// GET通信かPOST通信か
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // POST通信の場合
  // 入力フォームから各入力情報を取得
  $name = htmlspecialchars($_POST['name'], ENT_QUOTES, "UTF-8");
  $email = htmlspecialchars($_POST['email'], ENT_QUOTES, "UTF-8");
  $message = htmlspecialchars($_POST['message'], ENT_QUOTES, "UTF-8");

  // 送信先
  $to_address = TO_MAIL_ADDRESS;
  // 件名
  $subject = MAIL_SUBJECT;
  // 送信元
  $headers = "From: {$email}";
  $params = "-f " . TO_MAIL_ADDRESS;

  // メール送信
  // TODO:実際の送信はサーバ上で確認とする
  // $result = mb_send_mail($to_address, $subject, $message, $headers, $params);

  if ($result) {
    $alert_view_flg = true;
    $alert_kind = 'alert-success';
    $alert_message = '送信しました';
  } else {
    $alert_view_flg = true;
    $alert_kind = 'alert-danger';
    $alert_message = '送信できませんでした';
  }
} else {
  // GET通信の場合
  $name = null;
  $email = null;
  $message = null;

  $result = false;

  $alert_view_flg = false;
  $alert_kind = null;
  $alert_message = null;
}
?>

<!DOCTYPE html>
<html lang="ja">

<?php include('templates/head.php') ?>

<body>
  <div class="footer-fixed-bottom">

    <?php include('templates/header.php') ?>

    <!-- home section -->
    <section id="contact" class="contact-section">
      <div class="container">
        <h2 class="text-center">CONTACT</h2>
        <p class="text-center pb-4">
          私のポートフォリオサイトをご覧いただき、ありがとうございます。
          <br>何かご不明点やご質問等ございましたら、下記お問合せフォームをご利用ください。
        </p>
        <?php if($alert_view_flg): ?>
          <div class="alert <?= $alert_kind ?>" role="alert">
            <?= $alert_message ?>
          </div>
        <?php endif; ?>
        <form method="post" class="mx-auto">
          <input type="hidden" name="csrf_token" value="<?= $csrf_token ?>">
          <div class="mb-3">
            <label for="name" class="form-label">
              お名前<span class="badge rounded-pill text-bg-danger ms-2">必須</span>
            </label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">
              メールアドレス<span class="badge rounded-pill text-bg-danger ms-2">必須</span>
            </label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">
              メッセージ<span class="badge rounded-pill text-bg-danger ms-2">必須</span>
            </label>
            <textarea class="form-control" id="message" rows="4" name="message" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary btn-lg w-50 mt-4">送信</button>
        </form>
      </div>
    </section>

    <!-- フッター -->
    <?php include('templates/footer.php') ?>
  </div>

  <?php include('templates/script.php') ?>
</body>

</html>