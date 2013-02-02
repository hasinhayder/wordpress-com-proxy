<?php
include_once("config.php");
$dataurl =$primaryurl = OLD_BLOG_URL;
$secondaryurl = NEW_BLOG_URL;
$path =array_keys($_GET);
if(!empty($path[0])) $dataurl = "{$primaryurl}/{$path[0]}";
$data = file_get_contents($dataurl);
$pattern = "~{$primaryurl}/([\d\S\/]+)~";
$data = preg_replace($pattern,"{$secondaryurl}/$1",$data);
$data = str_replace(
  array(
    "<a href=\"{$primaryurl}",
    "</body>",
    "</head>"
    ),
  array(
    "<a href=\"{$secondaryurl}",
    "<script src='http://code.jquery.com/jquery.min.js'></script><script type='text/javascript' src='{$secondaryurl}/home.js.php'></script></body>",
    "<meta property='fb:admins' content='".FACEBOOK_ID."'/><meta property='fb:app_id' content='".FACEBOOK_APP_ID."'/></head>"
    ),$data);
echo $data;
?>