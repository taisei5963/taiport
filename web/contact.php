<?php
$page_title = 'Contact';

$active_home = null;
$active_skills = null;
$active_contact = 'active';
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
      <form action="#" method="post" class="mx-auto" style="max-width: 600px;">
        <div class="mb-3">
          <label for="name" class="form-label">
            お名前<span class="badge rounded-pill text-bg-danger ms-2">必須</span>
          </label>
          <input type="text" class="form-control" id="name" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">
            メールアドレス<span class="badge rounded-pill text-bg-danger ms-2">必須</span>
          </label>
          <input type="email" class="form-control" id="email" required>
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">
            メッセージ<span class="badge rounded-pill text-bg-danger ms-2">必須</span>
          </label>
          <textarea class="form-control" id="message" rows="4" required></textarea>
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