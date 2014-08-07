<?php
	$r = substr($_SERVER["REQUEST_URI"], 1);

	if((strlen($r) >= 7 && substr($r, 0, 7) == "http://") || (strlen($r) >= 8 && substr($r, 0, 8) == "https://"))
	{
		// if(empty($_SERVER['HTTP_REFERER']))
		// {
		// 	echo "gtfo";
		// 	exit();
		// }

		// $referer = false;
		// $referer = ($referer == false ? !strpos($_SERVER['HTTP_REFERER'], "example.com") === true : true);

		// if($referer == false)
		// {
		// 	echo "gtfo";
		// 	exit();
		// }

		//header("Location: ".$r);
?>

<html>
<head><title>Redirecting...</title><meta http-equiv="refresh" content="0;url=<?php echo $r;?>"></head>
<body>Attempting to redirect to <a href="<?php echo $r;?>"><?php echo $r;?></a>.</body>
</html>

<?php
		exit();
	}
?>

