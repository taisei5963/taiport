<?php
$page_title = 'Skills';

$active_home = null;
$active_skills = 'active';
$active_contact = null;
?>

<!DOCTYPE html>
<html lang="ja">

<?php include('templates/head.php') ?>

<body>
  <div class="footer-fixed-bottom">

    <?php include('templates/header.php') ?>

    <!-- home section -->
    <section id="skills" class="skills-section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto text-center">
            <h2>SKILLS</h2>
            <p class="pb-4"></p>
          </div>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-2 mt-3">
          <h3 class="text-center w-100 my-3">【設計 / 製造 / テスト】</h3>
          <ul class="list-group p-0 m-0 border-0">
            <li class="list-group-item mx-auto border-0">
              <i class='bx bxs-file-doc display-1'></i>
            </li>
            <li class="list-group-item mx-auto border-0">
              要件定義：6ヶ月
              <br>基本設計：1年 8ヶ月
              <br>詳細設計：1年
            </li>
          </ul>
          <ul class="list-group border-0">
            <li class="list-group-item mx-auto border-0">
              <span class='devicons devicons-code_badge display-1'></span>
            </li>
            <li class="list-group-item mx-auto border-0">
              コーディング：3年
            </li>
          </ul>
          <ul class="list-group border-0">
            <li class="list-group-item mx-auto border-0">
              <span class='devicons devicons-terminal display-1'></span>
            </li>
            <li class="list-group-item mx-auto border-0">
              単体テスト：4年 3ヶ月
              <br>結合テスト：4年3ヶ月
              <br>システムテスト：1年 1ヶ月
            </li>
          </ul>
          <h3 class="text-center w-100 my-3">【言語】</h3>
          <ul class="list-group border-0">
            <li class="list-group-item mx-auto border-0">
              <img src="/assets/img/logo/Java.svg" alt="Java" width="90" height="90">
            </li>
            <li class="list-group-item mx-auto border-0">
              Java：4年 2ヶ月
            </li>
          </ul>
          <ul class="list-group border-0">
            <li class="list-group-item mx-auto border-0">
              <img src="/assets/img/logo/Html5.svg" alt="html" width="90" height="90">
            </li>
            <li class="list-group-item mx-auto border-0">
              HTML：1年
            </li>
          </ul>
          <ul class="list-group border-0">
            <li class="list-group-item mx-auto border-0">
              <img src="/assets/img/logo/Css3.svg" alt="css" width="90" height="90">
            </li>
            <li class="list-group-item mx-auto border-0">
              CSS：1年 1ヶ月
            </li>
          </ul>
          <ul class="list-group border-0">
            <li class="list-group-item mx-auto border-0">
              <img src="/assets/img/logo/Javascript.svg" alt="javascript" width="90" height="90">
            </li>
            <li class="list-group-item mx-auto border-0">
              JavaScript：6ヶ月
            </li>
          </ul>
          <ul class="list-group border-0">
            <li class="list-group-item mx-auto border-0">
              <img src="/assets/img/logo/Typescript.svg" alt="typescript" width="90" height="90">
            </li>
            <li class="list-group-item mx-auto border-0">
              TypeScript：4ヶ月
            </li>
          </ul>
          <h3 class="text-center w-100 my-3">【フレームワーク】</h3>
          <ul class="list-group border-0">
            <li class="list-group-item mx-auto border-0">
              <img src="/assets/img/logo/Spring.svg" alt="spring" width="90" height="90">
            </li>
            <li class="list-group-item mx-auto border-0">
              Spring Boot：1年 3ヶ月
            </li>
          </ul>
          <ul class="list-group border-0">
            <li class="list-group-item mx-auto border-0">
              <img src="/assets/img/logo/Vuejs.svg" alt="vue" width="90" height="90">
            </li>
            <li class="list-group-item mx-auto border-0">
              VueJS：1年
            </li>
          </ul>
          <h3 class="text-center w-100 my-3">【DB】</h3>
          <ul class="list-group border-0">
            <li class="list-group-item mx-auto border-0">
              <img src="/assets/img/logo/Mysql.svg" alt="mysql" width="90" height="90">
            </li>
            <li class="list-group-item mx-auto border-0">
              MySQL：1年 3ヶ月
            </li>
          </ul>
          <ul class="list-group border-0">
            <li class="list-group-item mx-auto border-0">
              <img src="/assets/img/logo/Mariadb.svg" alt="mariadb" width="90" height="90">
            </li>
            <li class="list-group-item mx-auto border-0">
              MariaDB：6ヶ月
            </li>
          </ul>
          <ul class="list-group border-0">
            <li class="list-group-item mx-auto border-0">
              <img src="/assets/img/logo/SQLServer.svg" alt="sqlserver" width="90" height="90">
            </li>
            <li class="list-group-item mx-auto border-0">
              SQLServer：6ヶ月
            </li>
          </ul>
          <ul class="list-group border-0">
            <li class="list-group-item mx-auto border-0">
              <img src="/assets/img/logo/Postgresql.svg" alt="postgresql" width="90" height="90">
            </li>
            <li class="list-group-item mx-auto border-0">
              PostgreSQL：7ヶ月
            </li>
          </ul>
          <ul class="list-group border-0">
            <li class="list-group-item mx-auto border-0">
              <img src="/assets/img/logo/Oracle.svg" alt="oracle" width="90" height="90">
            </li>
            <li class="list-group-item mx-auto border-0">
              OracleDB：1年 6ヶ月
            </li>
          </ul>
          <h3 class="text-center w-100 my-3">【その他】</h3>
          <ul class="list-group border-0">
            <li class="list-group-item mx-auto border-0">
              <img src="/assets/img/logo/Eclipse.svg" alt="eclipse" width="90" height="90">
            </li>
            <li class="list-group-item mx-auto border-0">
              Eclipse：1年
            </li>
          </ul>
          <ul class="list-group border-0">
            <li class="list-group-item mx-auto border-0">
              <img src="/assets/img/logo/Junit.svg" alt="junit" width="90" height="90">
            </li>
            <li class="list-group-item mx-auto border-0">
              JUnit：1年 1ヶ月
            </li>
          </ul>
          <ul class="list-group border-0">
            <li class="list-group-item mx-auto border-0">
              <i class='bx bxs-terminal display-1'></i>
            </li>
            <li class="list-group-item mx-auto border-0">
              Tera Term：8ヶ月
            </li>
          </ul>
          <ul class="list-group border-0">
            <li class="list-group-item mx-auto border-0">
              <img src="/assets/img/logo/Redis.svg" alt="redis" width="90" height="90">
            </li>
            <li class="list-group-item mx-auto border-0">
              Redis：8ヶ月
            </li>
          </ul>
          <ul class="list-group border-0">
            <li class="list-group-item mx-auto border-0">
              <img src="/assets/img/logo/Vscode.svg" alt="vscode" width="90" height="90">
            </li>
            <li class="list-group-item mx-auto border-0">
              VSCode：1年
            </li>
          </ul>
          <ul class="list-group border-0">
            <li class="list-group-item mx-auto border-0">
              <img src="/assets/img/logo/Dbeaver.svg" alt="dbeaver" width="90" height="90">
            </li>
            <li class="list-group-item mx-auto border-0">
              Dbeaver：5ヶ月
            </li>
          </ul>
          <ul class="list-group border-0">
            <li class="list-group-item mx-auto border-0">
              <img src="/assets/img/logo/Spring.svg" alt="sts" width="90" height="90">
            </li>
            <li class="list-group-item mx-auto border-0">
              Spring Tool Suite：5ヶ月
            </li>
          </ul>
          <ul class="list-group border-0">
            <li class="list-group-item mx-auto border-0">
              <img src="/assets/img/logo/Gitlab.svg" alt="gitlab" width="90" height="90">
            </li>
            <li class="list-group-item mx-auto border-0">
              GitLab：2年 9ヶ月
            </li>
          </ul>
          <ul class="list-group border-0">
            <li class="list-group-item mx-auto border-0">
              <img src="/assets/img/logo/Github.svg" alt="github" width="90" height="90">
            </li>
            <li class="list-group-item mx-auto border-0">
              GitHub：6ヶ月
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- フッター -->
    <?php include('templates/footer.php') ?>
  </div>

  <?php include('templates/script.php') ?>
</body>

</html>