
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device, initial-scale=1">
<title> ورود </title>
<link rel="stylesheet" type="text/css" href="css/login-user.css">
<!-- box icons -->
<link rel="stylesheet"
href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

</style>
</head>
  <body class="b">
<?php include('include/header.php'); ?>

<section class="ho">
<div class="wrapper">
<span class="icon-close"><a href="Index.php"><i class='bx bx-x'></i></a></span>

    <div class="form-box login">
        <h2>ورود</h2>
        <form action="#">
          <div class="input-box">
          <label>نام کاربری</label>
            <span class="icon"><i class='bx bx-user'></i></span>
            <input type="text" placeholder>
            
          </div>
          <div class="input-box">
            <span class="icon"><i class='bx bx-lock-alt'></i></span>
          <label>رمز ورود</label>
          
            <input type="password" placeholder>
           
          </div>
          <div class="remember-forgot">
            <label><input type="checkbox">من را به یاد داشته باش</label>
            <a href="#">فراموشی رمز عبور</a>
          </div>
          <button type="submit" class="btn-login">ورود</button>
          <div class="login-register">
            <p>هنوز ثبت نام نکردید؟ <a href="#" class="register-link">ثبت نام</a></p>
          </div>
        </form>
    </div>

<!-- register-->
    <div class="form-box register">
        <h2>ثبت نام </h2>
        <form action="#">
          <div class="input-box">
          <label>نام کاربری</label>
            <span class="icon"><i class='bx bxs-user'></i></span>
            <input type="text" placeholder>
          </div>
          <div class="input-box">
          <label> ایمیل</label>
            <span class="icon"><i class='bx bxs-envelope'></i></span>
            <input type="email" placeholder>
          </div>
          <div class="input-box">
            <span class="icon"><i class='bx bx-lock-alt'></i></span>
          <label>رمز </label>
          
            <input type="password" placeholder>
           
          </div>
          <div class="remember-forgot">
            <label><input type="checkbox">من با تمام قوانین موافقم.</label>
          </div>
          <button type="submit" class="btn-login">ثبت نام</button>
          <div class="login-register">
            <p>قبلا وارد شدید؟ <a href="#" class="login-link">ورود </a></p>
          </div>
        </form>
    </div>
</div>
</section>

<!-- link to js -->
<script src="js/login-register.js"></script>
<script src="js/script.js"></script>

<?php include('include/footer.php'); ?>

  </body>  
  </html>