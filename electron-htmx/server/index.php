<?php
  $route = $_SERVER['REQUEST_URI'];

  if ($route === '/click_me') {
      $content = "htmx says: Congratulations on achieving unhinged";
      echo $content;
  } else {
      http_response_code(404);
      echo '404 Not Found';
  };
?>
