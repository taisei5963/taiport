<?php
  // ローカル環境用
  $local_url_list = array();

  $local_url_list['/taiport'] = "/home.php";
  $local_url_list['/taiport/skills'] = "/skills.php";
  $local_url_list['/taiport/contact'] = "/contact.php";

  $local_url_list['/taiport/portfolio/hideyoshi'] = "/portfolio/hideyoshi.php";
  $local_url_list['/taiport/portfolio/ibooks'] = "/portfolio/ibooks.php";

  // 本番環境用
  $url_list = array();

  $url_list['/'] = "/home.php";
  $url_list['/skills'] = "/skills.php";
  $url_list['/contact'] = "/contact.php";

  $url_list['/portfolio/hideyoshi'] = "/portfolio/hideyoshi.php";
  $url_list['/portfolio/ibooks'] = "/portfolio/ibooks.php";

?>