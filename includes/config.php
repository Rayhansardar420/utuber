<?php
include 'info.php';
?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<head>
<meta http-equiv="content-type" content="application/xhtml xml; charset=utf-8"/>
<meta name="google-site-verification" content="<?php echo $google;?>"/>
<title><?php echo $title;?></title> 
<meta name="description" content="<?php echo $title;?>"/>
<meta name="keywords" content="<?php echo $keywords;?>"/>
<meta name="msvalidate.01" content="<?php echo ''.$bing.'';?>"/>
<meta name="alexaVerifyID" content="<?php echo ''.$alexa.'';?>" />
<meta name="spiders" content="all" />
<meta name="author" content="vid.tryjust.com"/>
<meta name="owner" content="vid.tryjust.com"/>
<meta name="revisit-after" content="2 Hours" />
<meta content="Aeiwi, Alexa, AllTheWeb, AltaVista, AOL Netfind, Anzwers, Canada, DirectHit, EuroSeek, Excite, Overture, Go, Google, HotBot. InfoMak, Kanoodle, Lycos, MasterSite, National Directory, Northern Light, SearchIt, SimpleSearch, WebsMostLinked, WebTop, What-U-Seek, AOL, Yahoo, Bing, WebCrawler, Infoseek, Excite, Magellan, LookSmart, CNET, googlebot-news, Googlebot" name="search engines"/>
<meta name="distribution" content="global"/>
<meta name="robots" content="All, Follow, Index" />
<meta property="og:image" content="http://i.ytimg.com/vi/'.$_GET['id'].'/default.jpg" />
<meta name="revisit-after" content="1 days">
<meta property="og:title" content="Mobile Youtube Video Converter"/>
<meta property="og:url" content="http://<?php echo ''.$host.'';?>/"/>
<meta property="og:image" content="http://<?php echo ''.$host.'';?><?php echo ''.$logo.'';?>"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<link media="handheld,all" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<style type="text/css">
body img {max-width:98%;max-height:50%}
body {max-width:98%;max-height:50%}
width {max-width:98%;max-height:50%}
img {max-width:98%;max-height:50%}
</style>
<link rel="icon" href="/favicon.ico" type="image/x-icon"/>
<link rel="stylesheet" href="/style.css" type="text/css"/>
</head>
<body>
<h2 id="site-name">
<a rel="home" href="/"><img src="<?php echo ''.$logo.'';?>" alt=""></a>
</h2>
<div id="groupp">
<div class="group" align="center">
Download YouTube Videos:
<br/>
<form action="/video" method="get">
<input type="text" name="id" placeholder="Enter the YouTube Video ID"/> 
<input type="submit" value="Download" title="Download Now"/>
</form>
<b>How to find the Youtube video ID:</b><br/>
<br/>
* http://www.youtube.com/watch?v=<b>The text here in the link is Video ID</b><br/>
</br>
*Example: http://youtube.com/watch?v=<b>8ql07ripkDQ</b><br/><br/>
<b>Just copy the ID from Youtube video link and paste it up and click download.</b>
</div>
<br/><br/>
<div class="group" align="center">
Search Videos:
<br/>
<form action="/search.php" method="get">
<input type="text" name="q" placeholder="Search In Here"/> 
<input type="submit" value="Search" title="Search Now"/>
</form>
</div>
