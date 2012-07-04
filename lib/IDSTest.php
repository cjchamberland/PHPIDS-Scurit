<?php
 require_once 'IDS/Init.php';
  $request = array(
      'REQUEST' => $_REQUEST,
      'GET' => $_GET,
      'POST' => $_POST,
      'COOKIE' => $_COOKIE
  );
  $init = IDS_Init::init('IDS/Config/Config.ini');
  $ids = new IDS_Monitor($request, $init);
  $result = $ids->run();

  if (!$result->isEmpty()) {
   // Take a look at the result object
   echo $result;
  }
  ?>