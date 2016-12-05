<?php
include 'includes/info.php';
echo '<div class="subheader" align="center">Related videos</div>';
echo ''.$yllix.'';
$grab=ngegrab('https://www.googleapis.com/youtube/v3/search?key='.$devkey.'&part=snippet&maxResults=5&relatedToVideoId='.$_GET['id'].'&type=video');
$json = json_decode($grab);
if($json)
{
foreach($json->items as $hasil) 
{
$name = $hasil->snippet->title;
$link = $hasil->id->videoId;
$tgl = $hasil->snippet->publishedAt;
$date = dateyt($tgl);
$des = $hasil->snippet->description;
$chid = $hasil->snippet->channelId;
$linkmake = preg_replace("/[^A-Za-z0-9[:space:]]/","$1",$name);
$linkmake = str_replace(' ','-',$linkmake);
$final = strtolower("$linkmake");
echo '<div class="menu">';
echo '<div class="link">';
echo '<a href="/download/'.$link.'/'.$final.'">';
echo '<table>';
echo '<tbody>';
echo '<tr valign="middle">';
echo '<td>';
echo '<a href="'.$adt.'"><img src="http://ytimg.googleusercontent.com/vi/'.$link.'/mqdefault.jpg" alt="Thumbnail" height="60" width="90" class="thumb"></a>';
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
}
?>