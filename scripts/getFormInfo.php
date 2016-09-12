<?php
$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$email = $_REQUEST['email'];
$facebook_url = $_REQUEST['facebook_url'];
$twitter_handle = $_REQUEST['twitter_handle'];
?>
<html>
<head>
<link href="../../css/phpMM.css" rel="stylesheet" type="text/css" />
</head>
<body>
Имя: <?php echo $first_name . " " . $last_name ?><br>
Фейсбук: <a href="<?php echo $facebook_url ?>">Ваш фейсбук</a><br>
Твиттер: <?php echo $twitter_handle ?><br>
Email: <?php echo $email ?>
</body>
</html>