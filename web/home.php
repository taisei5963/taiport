<?php
  $page_title = 'Home';

  $active_home = 'active';
  $active_skills = null;
  $active_contact = null;
?>

<!DOCTYPE html>
<html lang="ja">

<?php include('templates/head.php') ?>

<body>
  <div class="footer-fixed-bottom">
    
  <?php include('templates/header.php') ?>

    <!-- home section -->
    <div id="home" class="home vh-100 d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 mx-auto text-center">
            <h1 class="display-4 text-white fw-bold">
              TaiPort / TAISEI KATO
            </h1>
            <p class="fs-5 text-white my-3 fw-bold">This is my portfolio site.</p>
            <a href="/taiport/contact" class="btn btn-outline-light">CONTACT.</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Profile section -->
    <section id="profile" class="profile-section bg-white">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 text-center mx-auto my-3">
            <h2>PROFILE</h2>
          </div>
          <div class="col-md-6 text-center">
            <img src="./assets/img/profile/profile.jpg" alt="プロフィール画像" class="img-fluid rounded-circle" width="300" height="200">
          </div>
          <div class="col-md-6">
            <table class="table table-borderless">
              <tr>
                <td width="150" class="align-middle">2019年 3月</td>
                <td>関東学院大学 理工学部を卒業</td>
              </tr>
              <tr>
                <td width="150" class="align-middle">2015 年4月</td>
                <td>
                  新卒で株式会社グッドワークス様に入社
                  <br>2ヶ月間の新人研修を受け、テスター・プログラマーとして現場に参画し、業務を遂行する
                </td>
              </tr>
              <tr>
                <td width="150" class="align-middle">2021年 12月</td>
                <td>一身上の都合により、株式会社グッドワークス様を退職</td>
              </tr>
              <tr>
                <td width="150" class="align-middle">2022年 3月</td>
                <td>
                  株式会社スタイル・フリー様に入社
                  <br>設計・プログロマー、テスターとして現場に参画し、業務を遂行、現在に至る
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio section -->
    <section id="portfolio" class="portfolio-section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto text-center">
            <h2 class="mb-5">PORTFOLIO</h2>
          </div>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <a href="./hideyoshi.html">
              <div class="card services-card h-100">
                <div class="card-body">
                  <h5 class="card-title fw-bold d-flex align-items-center">
                    <div class="services-icon fs-3 me-3">
                      <span class="mdi mdi-monitor-cellphone"></span>
                    </div>
                    <div class="mb-3">HIDEYOSHI</div>
                  </h5>
                  <h6 class="card-subtitle mb-2 text-body-secondary">
                    週報システム
                  </h6>
                  <p class="card-text">
                    某企業様の社内専用連絡アプリで提出し、エクセルにて管理している週報をWEBで一元管理できるように開発したWEBシステム
                  </p>
                </div>
              </div>
            </a>
          </div>
          <div class="col">
            <div class="card services-card h-100">
              <div class="card-body">
                <h5 class="card-title fw-bold d-flex align-items-center">
                  <div class="services-icon fs-3 me-3">
                    <span class="mdi mdi-monitor"></span>
                  </div>
                  <div class="mb-3">ibooks</div>
                </h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">
                  IT業界向け本紹介サイト
                </h6>
                <p class="card-text">
                  IT業界に就職されている方をメインターゲットに開発したWEBシステム
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card services-card h-100">
              <div class="card-body">
                <h5 class="card-title fw-bold d-flex align-items-center">
                  <div class="services-icon fs-3 me-3">
                    <span class="mdi mdi-cellphone"></span>
                  </div>
                  <div class="mb-3">ManageHR</div>
                </h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">
                  人事管理アプリ（※開発中）
                </h6>
                <p class="card-text">
                  人事の方が自社へ入社された方あるいは、退社された方を管理するためのスマホ向けアプリケーション
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card services-card h-100">
              <div class="card-body">
                <h5 class="card-title fw-bold d-flex align-items-center">
                  <div class="services-icon fs-3 me-3">
                    <span class="mdi mdi-monitor"></span>
                  </div>
                  <div class="mb-3">ManageHR管理システム</div>
                </h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">
                  人事管理アプリ管理システム（※開発中）
                </h6>
                <p class="card-text">
                  人事管理アプリ「ManageHR」を管理するためのWEBシステム
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- フッター -->
    <?php include('templates/footer.php') ?>
  </div>

  <?php include('templates/script.php') ?>
</body>

</html>