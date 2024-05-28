<?php
  $route = $_SERVER['REQUEST_URI'];

  if ($route === '/') {
    $content = file_get_contents('index.html');
    echo $content;
  } else if ($route === '/htmx') {
      //
      $content = "<button hx-get='/click_me' hx-swap='outerHTML' hx-target='#synergy'>";
      $content .= "<script src='https://htmx.org/js/htmx.js'></script>";
      $content .= "ix says: Click here for true unhinged";
      $content .= "</button>";
      echo $content;
  } else if ($route === '/click_me') {
      $content = "htmx says: Congratulations on achieving unhinged";
      echo $content;
  } else {
      http_response_code(404);
      echo '404 Not Found';
  };
?>
