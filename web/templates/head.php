<!-- 「head」タグ共通ファイル -->
<?php
  switch($page_title) {
    case 'Home':
      $css_name = 'style.css';
      break;
    
    case 'Skills':
      $css_name = 'skills.css';
      break;
    
    case 'Contact':
      $css_name = 'contact.css';
      break;

    case 'Portfolio':
      $css_name = 'portfolio.css';
      break;
    
    default :
      $css_name = 'style.css';
      break;
  }
?>

<head>
  <title><?= $page_title ?> - TaiProt</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/css/fonts.min.css">
  <link rel="stylesheet" href="/assets/css/icon.min.css">
  <link rel="stylesheet" href="/assets/css/<?= $css_name ?>">
</head>