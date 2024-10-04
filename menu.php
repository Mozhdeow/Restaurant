<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device, initial-scale=1">
<title> منو </title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/menu.css">
<!-- box icons -->
<a href="https://lordicon.com/"></a>
<link rel="stylesheet"
href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
<script src="https://cdn.lordicon.com/lordicon.js"></script>

<style>
  .hiden-arrow{
    display: none;
  }
</style>
</head>
  <body >
<?php include('include/header.php'); ?>

    <!-- arrows -->
    <div class="hiden-arrow">
      <button id="prev"><</button>
      <button id="next">></button>
    </div>


    
<div class="slider">

  <div class="list">
      <div class="item" >
          <img src="img/1.png">
      </div>
      <div class="item active">
          <img src="img/2.png">
      </div>
      <div class="item">
          <img src="img/3.png">
      </div>
      <div class="item">
          <img src="img/4.png">
      </div>
      <div class="item">
          <img src="img/5.png">
      </div>
  </div>
  <div class="circle">
  PEKA FOOD WEBSITE - PEKA FOOD WEBSITE - PEKA FOOD WEBSITE - PEKA FOOD WEBSITE
  </div>
  <div class="content">
      <div>منو</div>
      <div>رستوران پکا فود</div>

  </div>
  <div class="arow">
      <button id="prev-menu"><</button>
      <button id="next-menu">></button>
  </div>
</div>





<!--tab -->
<div class="container-tab">
 
  <div class="list-tab">
    <li data-filter=".breakfest"><lord-icon
    src="https://cdn.lordicon.com/kcoawjon.json"
    trigger="hover"
    colors="primary:#ffffff,secondary:#ff9f0d"
    style="width:35px;height:35px">
</lord-icon>صبحانه</li>
    <li data-filter=".lunch"><lord-icon
    src="https://cdn.lordicon.com/mhddipcx.json"
    trigger="hover"
    colors="primary:#ffffff,secondary:#ff9f0d"
    style="width:35px;height:35px">
</lord-icon>ناهار</li>
    <li data-filter=".dinner"><lord-icon
    src="https://cdn.lordicon.com/ozzqxurw.json"
    trigger="hover"
    colors="primary:#ffffff,secondary:#ff9f0d"
    style="width:35px;height:35px">
</lord-icon>شام</li>
    <li data-filter=".drink"><lord-icon
    src="https://cdn.lordicon.com/pqeabrsi.json"
    trigger="hover"
    colors="primary:#ffffff,secondary:#ff9f0d"
    style="width:35px;height:35px">
</lord-icon>نوشیدنی</li>
<li data-filter=".deser"><lord-icon
    src="https://cdn.lordicon.com/uyualwcs.json"
    trigger="hover"
    colors="primary:#ffffff,secondary:#ff9f0d"
    style="width:35px;height:35px">
</lord-icon> دسر</li>
<li data-filter=".salad"><lord-icon
    src="https://cdn.lordicon.com/ssoifezn.json"
    trigger="hover"
    colors="primary:#ffffff,secondary:#ff9f0d"
    style="width:35px;height:35px">
</lord-icon>سالاد</li>
  </div>


  <div class="content-tab">

  <div class="box-tab slide breakfest" data-name="food-1">
    <div class="roww">
      <img src="img/menu/breakfest/b1.png"/>
      <h3>  بشقاب سبزیجات</h3>
    <div class="in-text">
      <div class="price">
        <h6>210,000 تومان </h6>
      </div>
      <div class="s-btnn">
        <a href="#">جزئیات</a>
      </div>
      <div class="top-icon">
      <a href="#"><lord-icon
    src="https://cdn.lordicon.com/jjoolpwc.json"
    trigger="hover"
    colors="primary:#ff9f0d,secondary:#ffffff"
    style="width:30px;height:25px"></lord-icon></a>
    </div>
    </div>
    </div>
  </div>


  

  <div class="box-tab slide lunch" data-name="food-4">
    <div class="roww">
      <img src="img/menu/lunch/l1.png"/>
      <h3> رول پلیت</h3>
    <div class="in-text">
      <div class="price">
        <h6>295,000  تومان  </h6>
      </div>
      <div class="s-btnn">
        <a href="#">جزئیات</a>
      </div>
      <div class="top-icon">
      <a href="#"><lord-icon
    src="https://cdn.lordicon.com/jjoolpwc.json"
    trigger="hover"
    colors="primary:#ff9f0d,secondary:#ffffff"
    style="width:30px;height:25px"></lord-icon></a>
    </div>
    </div>
    </div>
  </div>

  
  <div class="box-tab slide dinner" data-name="food-6">
    <div class="roww">
      <img src="img/menu/dinner/d1.png"/>
      <h3> میکس برگر با دورچین</h3>
    <div class="in-text">
      <div class="price">
        <h6>335,000  تومان  </h6>
      </div>
      <div class="s-btnn">
        <a href="#">جزئیات</a>
      </div>
      <div class="top-icon">
      <a href="#"><lord-icon
    src="https://cdn.lordicon.com/jjoolpwc.json"
    trigger="hover"
    colors="primary:#ff9f0d,secondary:#ffffff"
    style="width:30px;height:25px"></lord-icon></a>
    </div>
    </div>
    </div>
  </div>

  

  <div class="box-tab slide salad" data-name="food-8">
    <div class="roww">
      <img src="img/menu/salad/salad1.png"/>
      <h3> سالاد</h3>
    <div class="in-text">
      <div class="price">
        <h6>50,000  تومان  </h6>
      </div>
      <div class="s-btnn">
        <a href="#">جزئیات</a>
      </div>
      <div class="top-icon">
      <a href="#"><lord-icon
    src="https://cdn.lordicon.com/jjoolpwc.json"
    trigger="hover"
    colors="primary:#ff9f0d,secondary:#ffffff"
    style="width:30px;height:25px"></lord-icon></a>
    </div>
    </div>
    </div>
  </div>

  <div class="box-tab slide drink" data-name="food-9">
    <div class="roww">
      <img src="img/menu/drink/drink1.png"/>
      <h3> نوشیدنی</h3>
    <div class="in-text">
      <div class="price">
        <h6>50,000  تومان  </h6>
      </div>
      <div class="s-btnn">
        <a href="#">جزئیات</a>
      </div>
      <div class="top-icon">
      <a href="#"><lord-icon
    src="https://cdn.lordicon.com/jjoolpwc.json"
    trigger="hover"
    colors="primary:#ff9f0d,secondary:#ffffff"
    style="width:30px;height:25px"></lord-icon></a>
    </div>
    </div>
    </div>
  </div>

  <div class="box-tab slide deser" data-name="food-10">
    <div class="roww">
      <img src="img/menu/deser/deser1.png"/>
      <h3> دسر</h3>
    <div class="in-text">
      <div class="price">
        <h6>200,000  تومان  </h6>
      </div>
      <div class="s-btnn">
        <a href="#">جزئیات</a>
      </div>
      <div class="top-icon">
      <a href="#"><lord-icon
    src="https://cdn.lordicon.com/jjoolpwc.json"
    trigger="hover"
    colors="primary:#ff9f0d,secondary:#ffffff"
    style="width:30px;height:25px"></lord-icon></a>
    </div>
    </div>
    </div>
  </div>

</div>
</div>


<section class="food-preview-container">
  <div id="close-preview" class="bx bx-x"></div>

  <div class="food-preview" data-target="food-1">
  <img src="img/menu/breakfest/b1.png"/>
  <h3>بشقاب سبزیجات</h3>
  <div class="stars-food">
  <a href="#"><i class='bx bxs-star'></i></a>
  <a href="#"><i class='bx bxs-star'></i></a>
  <a href="#"><i class='bx bxs-star'></i></a>
  <a href="#"><i class='bx bxs-star'></i></a>
  <a href="#"><i class='bx bxs-star'></i></a>

  </div>
  <p>نیمرو-گوشت استیک 100-قارچ-بیکن ایرلندی-سیب زمینی-گوجه </p>
  <div class="price-food">
  210,000 تومان 
      </div>
  </div>


  <div class="food-preview" data-target="food-3">
  <img src="img/menu/breakfest/b4.png"/>
  <h3>چیکن پو</h3>
  <div class="stars-food">
  <a href="#"><i class='bx bxs-star'></i></a>
  <a href="#"><i class='bx bxs-star'></i></a>
  <a href="#"><i class='bx bxs-star'></i></a>
  <a href="#"><i class='bx bxs-star'></i></a>
  <a href="#"><i class='bx bxs-star'></i></a>

  </div>
  <p>نیمرو-گوشت استیک 100-قارچ-بیکن ایرلندی-سیب زمینی-گوجه </p>
  <div class="price-food">
  245,000  تومان  
      </div>
  </div>

  <div class="food-preview" data-target="food-4">
  <img src="img/menu/lunch/l1.png"/>
  <h3>رول پلیت</h3>
  <div class="stars-food">
  <a href="#"><i class='bx bxs-star'></i></a>
  <a href="#"><i class='bx bxs-star'></i></a>
  <a href="#"><i class='bx bxs-star'></i></a>
  <a href="#"><i class='bx bxs-star'></i></a>
  <a href="#"><i class='bx bxs-star'></i></a>

  </div>
  <p>میکس رول پنیر و سمبوسه و اسپرینگ رول به همراه سس تای</p>
  <div class="price-food">
  295,000  تومان  
      </div>
  </div>

  <div class="food-preview" data-target="food-5">
  <img src="img/menu//lunch/l2.png"/>
  <h3>کالزونه اسکرامبل</h3>
  <div class="stars-food">
  <a href="#"><i class='bx bxs-star'></i></a>
  <a href="#"><i class='bx bxs-star'></i></a>
  <a href="#"><i class='bx bxs-star'></i></a>
  <a href="#"><i class='bx bxs-star'></i></a>
  <a href="#"><i class='bx bxs-star'></i></a>

  </div>
  <p> خمیر-سوسی دست ساز-تخم مرغ-سبزیجات-پنیر</p>
  <div class="price-food">
  265,000  تومان  
      </div>
  </div>

  <div class="food-preview" data-target="food-6">
  <img src="img/menu/dinner/d1.png"/>
  <h3>میکس برگر با دورچین</h3>
  <div class="stars-food">
  <a href="#"><i class='bx bxs-star'></i></a>
  <a href="#"><i class='bx bxs-star'></i></a>
  <a href="#"><i class='bx bxs-star'></i></a>
  <a href="#"><i class='bx bxs-star'></i></a>
  <a href="#"><i class='bx bxs-star'></i></a>

  </div>
  <p>کاهو-گوجه-پیاز-خیارشور-برگرمرغ-پنیر پستو-پنیر تست ورقه ای</p>
  <div class="price-food">
  335,000  تومان  
      </div>
  </div>

  <div class="food-preview" data-target="food-7">
  <img src="img/menu/dinner/d4.png"/>
  <h3>ساندویچ</h3>
  <div class="stars-food">
  <a href="#"><i class='bx bxs-star'></i></a>
  <a href="#"><i class='bx bxs-star'></i></a>
  <a href="#"><i class='bx bxs-star'></i></a>
  <a href="#"><i class='bx bxs-star'></i></a>
  <a href="#"><i class='bx bxs-star'></i></a>

  </div>
  <p>سالامی-فلفل دلمه رنگی-زیتون-پیاز-سوسیس انجوی-گوشت-پنیر گودا -پارمیسان</p>
  <div class="price-food">
  685,000  تومان  
      </div>
  </div>

  <div class="food-preview" data-target="food-8">
  <img src="img/menu/salad/salad1.png"/>
  <h3>سالاد</h3>
  <div class="stars-food">
  <a href="#"><i class='bx bxs-star'></i></a>
  <a href="#"><i class='bx bxs-star'></i></a>
  <a href="#"><i class='bx bxs-star'></i></a>
  <a href="#"><i class='bx bxs-star'></i></a>
  <a href="#"><i class='bx bxs-star'></i></a>

  </div>
  <p>سالامی-فلفل دلمه رنگی-زیتون-پیاز-سوسیس انجوی-گوشت-پنیر گودا -پارمیسان</p>
  <div class="price-food">
  50,000  تومان  
      </div>
  </div>

  <div class="food-preview" data-target="food-9">
  <img src="img/menu/drink/drink1.png"/>
  <h3>نوشیدنی</h3>
  <div class="stars-food">
  <a href="#"><i class='bx bxs-star'></i></a>
  <a href="#"><i class='bx bxs-star'></i></a>
  <a href="#"><i class='bx bxs-star'></i></a>
  <a href="#"><i class='bx bxs-star'></i></a>
  <a href="#"><i class='bx bxs-star'></i></a>

  </div>
  <p>سالامی-فلفل دلمه رنگی-زیتون-پیاز-سوسیس انجوی-گوشت-پنیر گودا -پارمیسان</p>
  <div class="price-food">
  50,000  تومان  
      </div>
  </div>


  <div class="food-preview" data-target="food-10">
  <img src="img/menu/deser/deser1.png"/>
  <h3>دسر</h3>
  <div class="stars-food">
  <a href="#"><i class='bx bxs-star'></i></a>
  <a href="#"><i class='bx bxs-star'></i></a>
  <a href="#"><i class='bx bxs-star'></i></a>
  <a href="#"><i class='bx bxs-star'></i></a>
  <a href="#"><i class='bx bxs-star'></i></a>
  </div>
  <p>سالامی-فلفل دلمه رنگی-زیتون-پیاز-سوسیس انجوی-گوشت-پنیر گودا -پارمیسان</p>
  <div class="price-food">
  200,000  تومان  
      </div>
  </div>

  



</section>

<!-- Review -->
<section class="review">
  
  <div class="review-content">
    <div class="box-review">
      <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است </p>
      <div class="in-box">
        <div class="box-img-review">
          <img src="img/r1.jpg" alt="">
        </div>
        <div class="bxx-text-review">
          <h4>شیوا عزیزی</h4>
          <h5>پیتزا</h5>
          <div class="ratings">
            <a href="#"><i class='bx bxs-star'></i></a>
            <a href="#"><i class='bx bxs-star'></i></a>
            <a href="#"><i class='bx bxs-star'></i></a>
            <a href="#"><i class='bx bxs-star'></i></a>
            <a href="#"><i class='bx bxs-star'></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="box-review">
      <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است </p>
      <div class="in-box">
        <div class="box-img-review">
          <img src="img/r2.jpg" alt="">
        </div>
        <div class="bxx-text-review">
          <h4>مهسا عزیزی</h4>
          <h5>پیتزا</h5>
          <div class="ratings">
            <a href="#"><i class='bx bxs-star'></i></a>
            <a href="#"><i class='bx bxs-star'></i></a>
            <a href="#"><i class='bx bxs-star'></i></a>
            <a href="#"><i class='bx bxs-star'></i></a>
            <a href="#"><i class='bx bxs-star'></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="box-review">
      <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است </p>
      <div class="in-box">
        <div class="box-img-review">
          <img src="img/r3.jpg" alt="">
        </div>
        <div class="bxx-text-review">
          <h4> ارتین عزیزی</h4>
          <h5>پیتزا</h5>
          <div class="ratings">
            <a href="#"><i class='bx bxs-star'></i></a>
            <a href="#"><i class='bx bxs-star'></i></a>
            <a href="#"><i class='bx bxs-star'></i></a>
            <a href="#"><i class='bx bxs-star'></i></a>
            <a href="#"><i class='bx bxs-star'></i></a>
          </div>
        </div>
      </div>
    
    
    </div>
   
</div>

  <div class="center">
      <a href="about-us.php" class="btn"> <i class='bx bxs-right-arrow'></i>درباره ما</a>
  </div>
  
</section>



<a href="#top" class="scroll-top"><i class='bx bx-up-arrow-alt'></i>  </a>


<!-- link to js -->
<script src="js/script.js"></script>
<script src="js/menu.js"></script>



<?php include('include/footer.php'); ?>

  </body>  
  </html>