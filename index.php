<?php
include 'includes/func.php';

$title  ='Youtuber'; //Edit Homepage Title

include 'includes/config.php';
echo'<div class="subheader">Top Videos</div>';
if($_GET['q']){
$q = $_GET['q'];
} else {
$a = array('Full song bangla Cartoon','bangla short cartoon song','Bangla Short Cartoon song',',Bangla hot','Hot Video hindi','tseries','bangla masala hot aong');
$b = count($a)-1;
$q = $a[rand(0,$b)];
}
$qu=$q;
$qu=str_replace(" ","+", $qu);
$qu=str_replace("-","+", $qu);
$qu=str_replace("_","+", $qu);
if(strlen($_GET['page']) >1){$yesPage=$_GET['page'];}
else{$yesPage='';}
$grab=ngegrab('https://www.googleapis.com/youtube/v3/search?key='.$devkey.'&part=snippet&order=relevance&maxResults=10&q='.$qu.'&pageToken='.$yesPage.'&type=video');
$json = json_decode($grab);
$nextpage=$json->nextPageToken;
$prevpage=$json->prevPageToken;
if($json)
{
foreach ($json->items as $sam)
{
$link= $sam->id->videoId;
$name= $sam->snippet->title;
$desc = $sam->snippet->description;
$chtitle = $sam->snippet->channelTitle;
$chid = $sam->snippet->channelId;
$date = dateyt($sam->snippet->publishedAt);
$sam = ngegrab('https://www.googleapis.com/youtube/v3/videos?key='.$devkey.'&part=contentDetails,statistics&id='.$link.'');
$linkmake = preg_replace("/[^A-Za-z0-9[:space:]]/","$1",$name);
$linkmake = str_replace(' ','-',$linkmake);
$final = strtolower("$linkmake");
$dt=json_decode($sam);
foreach ($dt->items as $dta){
$time=$dta->contentDetails->duration;
$duration= format_time($time);
$views= $dta->statistics->viewCount;   
}
echo '<div class="menu">';
echo '<div class="link">';
echo '<a href="/download/'.$link.'/'.$final.'">';
echo '<table>';
echo '<tbody>';
echo '<tr valign="middle">';
echo '<td>';
echo '<a href="'.$adt.'"><img src="http://ytimg.googleusercontent.com/vi/'.$link.'/mqdefault.jpg" alt="Thumbnail" height="70px" width="90px" class="thumb"></a>';
echo '</td>';
echo '<td style="padding-left:2px;">';
echo '<div style="padding-bottom:1px;">';
echo '<td valign="top">';
echo '<font color="green">'.$name.'</font><br />Duration: '.$duration.' Min<br/>Views: '.$views.'';
echo '</td>';
echo '</tr>';
echo '</tbody>';
echo '</table>';
echo '</a>';
echo '</div>';
echo '</div>';
}
include'includes/ucweb.php';
echo '<div class="subheader" align="center">';
if (strlen($prevpage)>1)
{
echo '<a href="/page/'.$prevpage.'" class="page">&#171;Prev</a> ';}
if (strlen($nextpage)>1)
{
echo '<a href="/page/'.$nextpage.'" class="page">Next&#187;</a>';
}
echo '</div>';
}
include 'last_search.php';
include 'includes/foot.php';
?>
