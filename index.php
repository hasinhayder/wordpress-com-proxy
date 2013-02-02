<?php
$dataurl =$primaryurl = "http://ph0t0graphs.wordpress.com";//old domain
$secondaryurl = "http://wpproxy.rs.af.cm"; //new domain
$path =array_keys($_GET);
if(!empty($path[0])) $dataurl = "{$primaryurl}/{$path[0]}";
$data = file_get_contents($dataurl);
$pattern = "~{$primaryurl}/([\d\S\/]+)~";
$data = preg_replace($pattern,"{$secondaryurl}/$1",$data);
$data = str_replace(
  array(
    "<a href=\"{$primaryurl}",
    "</body>"),
  array(
    "<a href=\"{$secondaryurl}",
    "<script src='http://code.jquery.com/jquery.min.js'></script><script src='{$secondaryurl}/home.js'></script></body>"),$data);
// $data = str_replace(array("<a href=\"{$primaryurl}","<form action=\"{$secondaryurl}"),array("<a href=\"{$secondaryurl}","<form action=\"{$primaryurl}"),$data);
echo $data;
?>