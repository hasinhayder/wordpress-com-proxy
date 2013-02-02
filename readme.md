## Wordpresss Com Proxy


wordpress-com-proxy is created to help you deliver your wordpress.com from anywhere. This script is simple and masks pretty well. Using this script you can still manage your blog content from wordpress.com while deliver the contents elsewhere. 

wordpress-com-proxy also loads ***jquery*** in the context which will allow you to do anything possible with jquery.


#### Using wordpress-com-proxy

First, download/checkout the code from the github repository. You will find three files in the repository. To get up and running quickly edit the **config.php** like below

```php
<?php
define("OLD_BLOG_URL","http://hasin.me"); 
define("NEW_BLOG_URL","http://wpproxy.rs.af.cm"); 
define("FACEBOOK_ID",""); 
define("FACEBOOK_APP_ID","249643311490"); 
define("FACEBOOK_WIDTH","750"); 
define("FACEBOOK_COMMENT_COUNT","30"); 
```

define your old blog url in **line #2** and new url in **line #3**, so for example in the example above my actual wordpress.com blog is ***http://hasin.me*** and I am proxying it from ***http://wpproxy.rx.af.cm***

### Integrating it with Facebook

wordpress-com proxy dynamically replaces the wordpress.com commenting system with **Facebook Comments**. You don't need to do anything to enable this feature. But if you want to perform moderation then create a Facebook application from [Facebook Developers](http://www.facebook.com/developers), note the **app id**. Now edit the **config.php** and add that app id in **line #5**. Also add your facebook id in **line #4**

```php
define("FACEBOOK_ID","your facebook id"); 
define("FACEBOOK_APP_ID","your app id"); 
```

#### Using jQuery
Check the source code of **home.js.php** and add your javascript at the end of the file, and you are done. 

#### How to load external js plugins
Check the sourcecode of index.php and add reference to your external javascript files on **line #18**, i.e

```
"<script src='http://code.jquery.com/jquery.min.js'></script><script type='text/javascript' src='{$secondaryurl}/home.js.php'></script></body>",
```

> Dont exclude the scripts which are already loaded, because those scripts are essential for wordpress-com-proxy


