<?php
  if ($_SERVER['HTTP_HOST'] === "localhost") {
    $access = true;
    require_once __DIR__.'/../config/config.php';
  } else {
    $access = false;
  }
?>

<nav class="navbar navbar-expand-lg p-0 fixed-top bg-white">
  <div class="container">
    <div class="only-view-sp">
      <div class="col-3"></div>
      <div class="col-6">
        <a class="navbar-brand fs-2 ms-5" href="/taiport">Taiport</a>
      </div>
      <div class="col-3">
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>

    <div class="only-view-pc">
      <a class="navbar-brand fs-2" href="/taiport">TaiPort</a>
    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title fs-3 fw-bold" id="offcanvasNavbar2Label">
          TaiPort
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul id="navbarId" class="navbar-nav nav-underline justify-content-end">
          <li class="nav-item">
            <?php if ($access) { ?>
              <a id="homeId" class="nav-link <?php if(isset($active_home)) echo 'active' ?>" href="/taiport">Home</a>
            <?php } else { ?>
              <a id="homeId" class="nav-link <?php if(isset($active_home)) echo 'active' ?>" href="/">Home</a>
            <?php } ?>
          </li>
          <li class="nav-item">
            <?php if ($access) { ?>
              <a id="skillId" class="nav-link <?php if(isset($active_skills)) echo 'active' ?>" href="/taiport/skills">Skills</a>
            <?php } else { ?>
              <a id="skillId" class="nav-link <?php if(isset($active_skills)) echo 'active' ?>" href="/skills">Skills</a>
            <?php } ?>
          </li>
          <li class="nav-item">
            <?php if ($access) { ?>
              <a id="contactId" class="nav-link disabled" aria-disabled="true" href="/contact">Contact（※使用不可）</a>
            <?php } else { ?>
              <a id="contactId" class="nav-link disabled" aria-disabled="true" href="/contact">Contact（※使用不可）</a>
            <?php } ?>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>