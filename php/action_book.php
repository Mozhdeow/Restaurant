<html>
	<head>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	</head>
	<br><br><br><br><br><br><br>
</html>


<?php
include('../include/header.php'); 


	$name=$_POST["name"];          //ذخیره نام
	$email=$_POST["email"];       //ذخیره ایمیل
	$pepole=$_POST["pepole"];     //ذخیره نفرات
	$time=$_POST["time"];        //ذخیره ساعت
    $date=$_POST["date"];       //ذخیره تاریخ
    $number=$_POST["number"];   //ذخیره شماره تلفن


	$link=mysqli_connect("localhost","root","","food");// اتصال به  پايگاه داده peka_food

	if(mysqli_connect_errno())
	exit("خطایی در اتصال به پایگاه داده رخ داده ".mysqli_connect_error());

    // ذخیره کردن درخواست مشتریان
	$query="INSERT INTO `book`(`name`, `email`, `person`, `time`, `date`, `number`)
	 VALUES ('$name','$email','$pepole','$time','$date','$number')";

     $result=mysqli_query($link,$query);    //اجراي ذخیره کردن $query
	
	    echo ("<p style='color:green; text-align: center;'><b>درخواست شما با موفقیت ثبت شد</b></p>");

	
	
		include('../include/footer.php');	
	?>