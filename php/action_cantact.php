html>
	<head>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	</head>
	<br><br><br><br><br><br><br>
</html>


<?php
include('../include/header.php'); 

	$firstname=$_POST["firstname"];//ذخیره نام
	$lastname=$_POST["lastname"];//ذخیره نام خانوادگی
	$email=$_POST["email"];//ذخیره ایمیل
	$number=$_POST["number"];//ذخیره شماره تلفن
    $pm=$_POST["payam"];

	$link=mysqli_connect("localhost","root","","food");// اتصال به  پايگاه داده peka_food

	if(mysqli_connect_errno())
	exit("خطا ".mysqli_connect_error());

    // ذخیره کردن پیام مشتریان
	$query="INSERT INTO `contact`(`firstname`, `lastname`, `email`, `number`, `pm`) VALUES ('$firstname','$lastname','$email','$number','$pm')";

     $result=mysqli_query($link,$query);    //اجراي ذخیره کردن $query
	

	
	echo ("<p style='color:green; text-align: center;'><b>پیام شما با موفقیت ثبت شد</b></p>");

    mysqli_close($link);


	
		include('../include/footer.php');	
	?>
