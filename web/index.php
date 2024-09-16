<?php

//読み込み用ファイル宣言
require_once(dirname(__FILE__) . '/mapping.php');

try {
  // セッション開始
  session_start();

  $err = array();

  $request_path = $_REQUEST['path'];

  // 文頭にスラッシュが付与されていない場合場合は強制的に付与する
  if (!str_starts_with($request_path, '/')) {
    $request_path = '/' . $request_path;
  }

  // アクセス環境に応じてアクセス先を変更
  if ($_SERVER['HTTP_HOST'] === "localhost") {
    // mapping.phpに従って対象PHPに処理を移譲
    if (isset($local_url_list[$request_path])) {
      include(dirname(__FILE__) . $local_url_list[$request_path]);
    } else {
      // 存在しないパスへのアクセスはエラーページへ
      throw new Exception('存在しないパスへのアクセス:' . $request_path, 700);
    }
  } else {
    // mapping.phpに従って対象PHPに処理を移譲
    if (isset($url_list[$request_path])) {
      include(dirname(__FILE__) . $url_list[$request_path]);
    } else {
      // 存在しないパスへのアクセスはエラーページへ
      throw new Exception('存在しないパスへのアクセス:' . $request_path, 700);
    }
  }

  unset($pdo);
} catch (Exception $e) {
  unset($pdo);
  exit;
}
