<?php
  $url_route = htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8');
  if(isset($url_route)) {
    if($url_route == "/hacker-application") {
      include_once("hacker-application.html");
    } else if($url_route == "/mentor-application") {
      include_once("mentor-application.html");
    }else {
      include_once("index.html");
    }
  }
?>