<!DOCTYPE html>
<html>
<head>
	<title>Reverse Path - Jamet1337</title>
	<meta name="description" content=Reverse Path>
    <meta name="keyword" content="Reverse Patch,Tools Online, Reverse Patch Online">
    <link href="https://fonts.googleapis.com/css?family=Skranji|Play" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	
	<style type="text/css">
		
		html{
			background: #333333;
		}
		textarea:hover{
			border:2px solid #33a7ff;
			color: white;
			border-radius: 4px 4px;	
		}
		input:hover{
			border:2px solid #33a7ff;
			color: black;
			border-radius: 4px 4px;	
		}
		h1{
			font-family: Skranji;
		}
		@media screen and (max-width: 780px){
			h1{
				width: auto;
				float: none;
			}
			.url{
				width: auto;
				float: none;
			}
			textarea{
				width: auto;
				float: none;
			}
			input{
				width: auto;
				float: none;
			}

		}
	
	</style>
	<center>
			<h1><font color="white">Reverse Path </h1>
</center>
<br>
<form action='' method='post'>
<center>
<input type='text' name='url' style="width: 55%; height:30px; border-radius: 4px 4px;" placeholder="  /admin , /timthumb.php , /kcfinder/upload.php , /js/jQuery-File-Upload/server/php/">
</center>
<br>
<center>
<textarea name='path' placeholder="example.com not https://" style="width: 60%; color: white; height: 250px; border:2px solid green; border-radius: 4px 4px; background: #444444;"></textarea>
</center>
<center><input type='submit' name='gas' value="Reverse" style="width: 300px;">
</center>
</form>
</div>
<?php
//tools reverse path
//by jamet1337

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

//ekse

if($_POST['gas']){
$url  = $_POST['url'];
$path = $_POST['path'];
$ajg  = explode("\r\n", $path);

foreach($ajg as $_path){
$full = "$_path$url";	
$ch = curl_init($full);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HEADER, true);  
	curl_setopt($ch, CURLOPT_NOBODY, true);
	curl_setopt($ch, CURLOPT_TIMEOUT,10);
	curl_setopt($ch, option, value);
	$exec = curl_exec($ch);
	$info = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	curl_close($ch);
echo "

<style type='text/css'>
a{
color:white;
pading-top:50px;
text-decoration:none;
text-align:center;
}
table{
background:none;
color:white;
width:60%;
height:35px;

border: 1px solid white;	
}
td{
	border:none;
	color:#33a7ff;
	background:#333333;
}

.code{
pading:10px auto;
text-align:center;
width:30px;
background:#33a7ff;
border-radius:2px;
color:white;
}

html{
	background: #333333;
	}
</style>
<center>	
 <table width='550px' >
<tr>
<td style='width:85%;'>$full</td><br>
<td><center><div class='code'><b>$info<b></div></center></td>
</tr>
</table>
</center>";
}
}
?>
</body>
</html>
