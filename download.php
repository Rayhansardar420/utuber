<?

error_reporting(E_ALL ^ (E_DEPRECATED | E_NOTICE | E_WARNING));

if($_GET) {
    foreach($_GET as $key => $value) {
        $_GET[$key] = trim($value);
    }
}

if(preg_match('/[a-zA-Z0-9\-\_]{11}/', $_GET['v'])) {
    if(!preg_match('/mp[3-4]{1}/', $_GET['f'])) {
        $_GET['f'] = 'mp3';
    }
    $src = 'https://www.youtube2mp3.cc/api/#'.$_GET['v'].'|'.$_GET['f'];
} else {
    $src = 'https://www.youtube2mp3.cc/api/';
}

print '
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="/dl.css" type="text/css"/>
<title>Download Mp3</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
</head>
<body>



<p>Please wait it may take a few seconds !!</p>
 <center><iframe src="'.$src.'" width="360" heigh="180" style="border:none;"></iframe></center>

<bottom>
    
</center>

</body>
</html>
';

?>