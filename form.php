<?php
		
	$name = $_GET['name'];
    $email = $_GET['email'];
    $tel = $_GET['tel'];
    $text = $_GET['text'];
	
	
    $link = mysqli_connect('localhost', 'nordic_tamara', '7D1w1V1t', 'nordic_tamara_2');
    mysqli_set_charset($link , "utf8");
    $qr = "INSERT INTO `leads` (`name`, `email`, `tel`, `text`) VALUES('$name', '$email', '$tel', '$text')";
    $result = mysqli_query ($link, $qr);
    if ($result){
        header('Location: http://ironlinks.ru/nordic/tamara/project2/main.php');
    } else {
        echo 'ошибка';
    }