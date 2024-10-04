<!DOCTYPE html>
<html>
  <head>
<meta charset="utf-8">
<meta name="viewport" content="width=device, initial-scale=1">
<title> رزرو </title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<a href="https://lordicon.com/"></a>
<link rel="stylesheet"
href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
<script src="https://cdn.lordicon.com/lordicon.js"></script>

<a href="https://lordicon.com/"></a>
<link rel="stylesheet"
href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
<script src="https://cdn.lordicon.com/lordicon.js"></script>



<style>
  .l{
    text-align: center;
  }
</style>
  </head>
  <body >
<?php include('include/header.php'); ?>


    <div class="form-book">
      <div class="form-text">
          <h1><span>
                            <lord-icon
                      src="https://cdn.lordicon.com/jdsvypqr.json"
                      trigger="hover"
                      colors="primary:#ffffff,secondary:#ff9f0d"
                      style="width:50px;height:50px">
                  </lord-icon>
                همین الان رزرو کنید </span>
              </h1>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ است.</p>
      </div>
      <div class="main-form">
        
          <form action="php/action_book.php" method="post">
            <div>
              <span>نام شما</span>
              <input type="text" placeholder="نام خود را وارد کنید" required id="fname" name="fname">
            </div>
            <div>
              <span>آدرس ایمیل شما </span>
              <input type="email" placeholder="ایمیل خود را وارد کنید" required id="eemail" name="eemail">
            </div>
            <div>
              <span>تعداد نفرات</span>
              <select name="pepole" id="pepole" required id="pepole" name="pepole">
                <option value="">تعداد ...</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
              </select>
            </div>
            <div>
              <span> ساعت</span>
              <input type="text" name="ttime" id="ttime" placeholder="زمان را مشخص کنید" required>
            </div>
            <div>
              <span> تاریخ</span>
              <input type="date" name="ddate" id="ddate" placeholder="تاریخ را مشخص کنید" required>
            </div>
            <div>
              <span>شماره تماس </span>
              <input type="number" name="nnumber" id="nnumber" placeholder="+98 ..." required>
            </div>
              <div id="submit">
              <input type="submit" class="button-42" value="ثبت " id="submit" action="">
              </div>
              
            
          </form>
      </div>
    </div>
    
    <script src="js/script.js"></script>
<?php include('include/footer.php'); ?>

  </body>  
  </html>