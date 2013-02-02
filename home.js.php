<?php
header("Content-type:text/javascript");
include_once("config.php");
?>
$(document).ready(function(){
  $("#first").remove();
  $("#bit").remove();
  $("#commentform").remove();
  $("#site-generator").remove();
  $(".wpadvert").remove();
  $("#jp-post-flair").remove();
  $("#comments").html('<div id="fb-root"></div><div class="fb-comments" data-href="'+location.href+'" data-width="<?php echo FACEBOOK_WIDTH;?>" data-num-posts="<?php echo FACEBOOK_COMMENT_COUNT;?>"></div>');
  var js, fjs = document.getElementsByTagName("script")[0];
  if (document.getElementById("facebook-jssdk")) return;
  js = document.createElement("script"); js.id = "facebook-jssdk";
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=<?php echo FACEBOOK_APP_ID;?>";
  fjs.parentNode.insertBefore(js, fjs);
});
