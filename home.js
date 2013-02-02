$(document).ready(function(){
  $("#first").remove();
  $("#bit").remove();
  $("#commentform").remove();
  $("#comments").html('<div id="fb-root"></div><div class="fb-comments" data-href="'+location.href+'" data-width="700" data-num-posts="20"></div>');
  var js, fjs = document.getElementsByTagName("script")[0];
  if (document.getElementById("facebook-jssdk")) return;
  js = document.createElement("script"); js.id = "facebook-jssdk";
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=449469471758092";
  fjs.parentNode.insertBefore(js, fjs);
});
