<?php
include 'includes/func.php';
include 'includes/info.php';
$yf=ngegrab('https://www.googleapis.com/youtube/v3/videos?key='.$devkey.'&part=snippet,contentDetails,statistics,topicDetails&id='.$_GET['id'].'');
$yf=json_decode($yf);

// WapTube API here.

$download = file_get_contents('http://gapi.gdvd.in/getvideo.php?videoid='.$_GET['id'].'&type=Download'); 
$download=str_replace('tryjust.com',''.$sitename.'',$download); // Site Name Replaceing
$download=str_replace('<span class="didl">','<span class="didl">',$download); // Span Class Replaceing
$download=str_replace('<div class="dllink" align="left" style="padding: 6px;">','<div class="dllink" align="left" style="padding: 6px;">',$download); // Div Class Replaceing

if($yf){
foreach ($yf->items as $item)
{

$name=$item->snippet->title;
$des = $item->snippet->description;
$date = dateyt($item->snippet->publishedAt);
$channelId = $item->snippet->channelId;
$chtitle = $item->snippet->channelTitle;
$ctd=$item->contentDetails;
$duration=format_time($ctd->duration);
$hd = $ctd->definition;
$st= $item->statistics;
$views = $st->viewCount;
$likes = $st->likeCount;
$dislike = $st->dislikeCount;
$favoriteCount = $st->favoriteCount;
$commentCount = $st->commentCount;
{$title='Download '.$name.' ('.$duration.') in Mp3, 3GP, MP4, FLV and WEBM Format';}
$tag=$name;
$tag=str_replace("video",",", $tag);
$dtag=$des;
include 'includes/config.php';
echo '<div class="subheader" align="center">'.$name.'</div>';
echo '<div class="group" align="center">';
echo '<iframe width="300" height="170" src="//www.youtube.com/embed/'.$_GET['id'].'" frameborder="0" allowfullscreen></iframe>';
echo '<br/>';
echo '<img src="http://ytimg.googleusercontent.com/vi/'.$_GET['id'].'/1.jpg"/><img src="http://ytimg.googleusercontent.com/vi/'.$_GET['id'].'/2.jpg"/><img src="http://ytimg.googleusercontent.com/vi/'.$_GET['id'].'/3.jpg"/>';
echo ''.$adb.'</div>';
echo '<div class="group">';
echo '<table>';
echo '<tr valign="top">';
echo '<td width="30%">Title</td>';
echo '<td>:</td>';
echo '<td><a href="">'.$name.'</a></td>';
echo '</tr>';
echo '<tr valign="top">';
echo '<td width="30%">Duration</td>';
echo '<td>:</td>';
echo '<td>'.$duration.' Min</td>';
echo '</tr>';
echo '<tr valign="top">';
echo '<td width="30%">Extensions</td>';
echo '<td>:</td>';
echo '<td>Mp3 / Mp4 /3gp / WebM / Flv VideoType: '.$hd.'</td>';
echo '</tr>';
echo '<tr valign="top">';
echo '<td width="30%">Channel</td>';
echo '<td>:</td>';
echo '<td>'.$chtitle.'</td>';
echo '</tr>';
echo '<tr valign="top">';
echo '<td width="30%">Uploaded At</td>';
echo '<td>:</td>';
echo '<td>'.$date.'</td>';
echo '</tr>';
echo '<tr valign="top">';
echo '<td width="30%">Views</td>';
echo '<td>:</td>';
echo '<td>'.$views.'</td>';
echo '</tr>';
echo '<tr valign="top">';
echo '<td width="30%">Likes</td>';
echo '<td>:</td>';
echo '<td>'.$likes.'</td>';
echo '</tr>';
echo '<tr valign="top">';
echo '<td width="30%">Source</td>';
echo '<td>:</td>';
echo '<td>YouTube.com/watch?v='.$_GET['id'].'</td>';
echo '</table>';
echo '</div>';
echo '<div class="subheader" align="center">Download Mp3</div>';
echo '<div class="group">';
/*echo '<form class="menu" method="GET" target="imra" action="http://youtubeinmp3.com/fetch/?video=">
<input type="hidden" value="http://www.youtube.com/watch?v='.$_GET['id'].'" name="url">
<button class="servher1" style="display: inline-block; padding: 5px; background:#F72976; border: solid 1px #F72976; border-radius:5px; color:#fff;" type="submit"> Download MP3 </button>
</form>
<a href="/download.php?v='.$id.'&f=mp3" target="_blank"></a>'; 
echo 'or';
echo '<br>';*/
echo '<img src="/images/music.png" alt="Music"/> <a href="/music/'.$_GET['id'].'" target="_blank">Download as MP3 (HQ Convert)</a>';
echo ''.$adb.'</div>';
echo '<div class="subheader" align="center">Download Video</div>';
echo ''.$download.'';
/*echo '<div class="subheader" align="center">Description</div>';
echo ''.$des.'';*/
echo '<div class="subheader" align="center">Share</div>';
echo '<div class="group" align="center">';
echo '<br/>';
echo '<input type="text" value="http://'.$host.'/download/'.$_GET['id'].'/'.$name.'"/>';
echo '</div>';
echo '<div class="subheader" align="center">
										<a class="twitter-share-button" href="https://twitter.com/share?url=http://youtube.perfectlifehacker.com&amp;text=Tube Boss - Download '.$name.' &amp;related= youtube.perfectlifehacker.com " data-via="hpcopy" title="Share '.$name.' to Twitter" style="background:#4099ff;color:#ffffff; margin:0px; padding:3px;" 
										  data-width="0px"
										  data-count="horizontal">
										Tweet
										</a>
									</div>';
}
}
include'includes/ucweb.php';
include 'related.php';
include 'includes/foot.php';
?>
