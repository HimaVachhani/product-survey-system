<?php
  session_start();
  if (!isset($_SESSION['UserName'])) {
     header('Location: UserLogin.php');
     die();
   } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>index</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css">
  <style type="text/css">
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-color: #f4511e;
    color: #fff;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #f4511e;
  }
  .carousel-indicators li {
    border-color: #f4511e;
  }
  .carousel-indicators li.active {
    background-color: #f4511e;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #f4511e; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #f4511e;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #f4511e !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #f4511e;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: #f4511e;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #f4511e !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
}
.container{
    background: white;
    border: 1px solid #ccc;
    border-radius: 5px;
    height: 100%;
    padding: 40px;
}
.star{
    color: #dddddd;
    cursor: pointer;
    transition: all 0.2s linear;
}
.star-checked{
    color: gold;
}
#result{
    display: none;
}
b.r{
    color: red;
}
b.g{
    color: green;
}
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <img class="img img-responsive img-circle" style="width: 65px" src="./img/logo.jpg">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right flex-column">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#products">PRODUCTS</a></li>
        <li><a href="#review">REVIEWED</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li role="presentation" class="dropdown">

              <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
      <?= $_SESSION['UserName']  ?><span class="caret"></span>
    </a>
    <ul class="dropdown-menu" style="background-color: orange">
      <li><a href="EditUser.php?UserID=<?= $_SESSION['UserID'] ?>">Edit Profile</a></li>
      <li><a href="con_UserLogout.php">Logout</a></li>
    </ul>
  </li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>MY Company</h1> 
  <p>Rating and review for all product is avaiable</p> 
  <form>
    <!-- <div class="input-group">
      <input type="email" class="form-control" size="40" placeholder="Email Address" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger">Subscribe</button>
      </div>
    </div> -->
  </form>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row slide">
    <div class="col-sm-8">
      <h2>About My company</h2><br>
      <h4>We are create this website for the survey of the products, in this website user can share his experience to other user and then we create one big survey of that product and that is halpful for people that if that product is usefull for them or not.</h4><br>
      <p>In this website user can gave rating and review(in words) for any product.
      this will help to the people to select any product is buyable or not.
    If there is some issue in that product then user can not buy that product and save their money from that companies.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row slide">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong> Our mission to drow the annetion of the people to the bad and good things and save the people from their moneyloss.</h4><br>
      <p><strong>VISION:</strong>Our vision there is many companies in market which is created good advertise for their product but their product is not good so that we can create a simple survey from the people to the people to check that product is good for you and for payable amount.</p>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slide">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small"></span>
      <h4>POWER</h4>
      <p>Let us teach companies what is the power of people</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>LOVE</h4>
      <p>With the lot of love & silently</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>JOB DONE</h4>
      <p>Please give review for product for your jobdone.</p>
    </div>
  </div>
  <br><br>
  <div class="row slide">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>GREEN</h4>
      <p>Let us support our indian product and make green india.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>CERTIFIED</h4>
      <p>ISO sertified.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">HARD WORK</h4>
      <p>This website do it's work itself.</p>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="products" class="container-fluid text-center bg-grey">
  <h2>Products</h2><br>
  <h4>Select ant product and give it review</h4> 
  <div align="center">
    <form method="get">
      <input type="text" name="search" <?php if (isset($_GET['search'])){
      ?>
      value="<?= $_GET['search'] ?>"
      <?php
      } ?>
 placeholder="search">
      <button type="submit" class="btn btn-default"><i class="
glyphicon glyphicon-search"></i></button>
    </form>
  </div>
  <br> 
  <div class="row text-center slide">
    <?php
      include_once 'classes/product.php';
      $objProduct = new Product();
      $resultProduct = $objProduct->getAll($_GET);
      foreach ($resultProduct as $rowProduct) {
    ?>
    <div class="col-sm-2 col-xs-6">
      <table class="table table-responsive">
        <div class="img-thumbnail">
        <a href="?ProductID=<?= $rowProduct['ProductID'] ?>#review"><img style="width: 180px;height: 180px" class="img img-responsive img-thumbnail" src="<?= $rowProduct['ProductImage'] ?>" alt="Paris"></a>
        <p><strong><?= $rowProduct['ProductName'] ?></strong></p>
        <p>Rs. <?= $rowProduct['ProductPrice'] ?></p>
      </div>
      <br>
      </table>
    </div>
        <?php
         }
        ?>
    <!-- <div class="col-sm-4">
      <div class="thumbnail">
        <img src="newyork.jpg" alt="New York" width="400" height="300">
        <p><strong>New York</strong></p>
        <p>We built New York</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="sanfran.jpg" alt="San Francisco" width="400" height="300">
        <p><strong>San Francisco</strong></p>
        <p>Yes, San Fran is ours</p>
      </div>
    </div> -->
  </div><br>
  <div>

    <ul class="pagination">
  <li 
  <?php
  if (!isset($_GET['page']) ||(isset($_GET['page']) && $_GET['page']==1)) {
    ?>
    class="active"
    <?php
  }
  ?>
  ><a href="?page=1#products">1</a></li>
<?php
  $countProduct=$objProduct->count($_GET);
  $rowCount=$countProduct[0];
  $i=1;
  while ($i<($rowCount['totalcount'])/12) {
    $i=$i+1;
?>
  <li
  <?php
  if (isset($_GET['page'])  && $_GET['page']==$i) {
    ?>
    class="active"
    <?php
  }
  ?>
  ><a <?php
  if (isset($_GET['search'])) {
    ?>
    href="?page=<?=$i ?>&search=<?=$_GET['search']?>#products"
    <?php
  }
  else{
    ?>
    href="?page=<?=$i ?>#products"
    <?php
  }
  ?>
  ><?=$i ?></a></li>
<?php
}
?>
    </ul>

  </div>
</div>

<!-- Container (Pricing Section) -->
<div id="review" class="container">
  <br>
  <?php
    if (isset($_GET['ProductID'])) {
    ?>
    <div class="text-center slide">
    <h2>Review</h2>
    <br>
    <h4>Give review and write one comment on Product</h4>
  </div>
  <div class="row slide">
    <div class="col-sm-12 col-xs-12">
      <?php
        if (isset($_GET['ProductID'])) {  
      ?>
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>RATE PRODUCT</h1>
        </div>
        <div class="panel-body">
          <form action="con_UserRating.php" method="get">
              <div class="row">

                <input type="text" name="UserID" value="<?= $_SESSION['UserID']  ?>" hidden>

              </div><br>
              <div class="row">
                <div class="form-group">
                  <div class="col-sm-2"></div>
                  <div class="col-sm-8 col-xs-12">
                    <?php
                 if (isset($_GET['ProductID'])) {
                  $resultProduct = $objProduct->getByPK($_GET);
                   $rowProduct = $resultProduct[0];
                   ?>
                    <div class="img img-responsive img-thumbnail"><img src="<?= $rowProduct['ProductImage'] ?>" width="200px" height="200px"></div>
                  </div>
                </div>
              </div>
              <br>

              <div class="row">
                <div class="form-group">
                  <div class="col-sm-2"></div>
              <div class="col-sm-4 col-xs-4">
                <label>Product Name:</label>
              </div>
              <div class="col-sm-4 col-xs-8">
                <input type="text" name="UserID" value="<?= $_SESSION['UserID'] ?>" hidden>
                   <input type="text" name="ProductID" value="<?= $_GET['ProductID'] ?>" hidden>
                   <?=  $rowProduct['ProductName'] ?>
              </div>
              </div> 
              </div><br>
              <div class="row">
                <div class="form-group">
                  <div class="col-sm-2"></div>
                  <div class="col-sm-4 col-xs-4">
                    <label>Product Description</label>
                  </div>
                  <div class="col-sm-4 col-xs-8">
                    <?= $rowProduct['ProductDescription'] ?>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="form-group">
                  <div class="col-sm-2"></div>
                  <div class="col-sm-4 col-xs-4">
                    <label>Product Price</label>
                  </div>
                  <div class="col-sm-4 col-xs-8">
                    <?= $rowProduct['ProductPrice'] ?>
                    <?php
                 }
                ?>
                  </div>
                </div>
              </div>
              <br>

              <div class="row">
                <div class="form-group">
                  <div class="col-sm-2"></div>
              <div class="col-sm-4 col-xs-4">
                <label>Enter Rating value</label>
              </div>
              <div class="col-sm-4 col-xs-8">
                <div id="star-container">
            <i class="fa fa-star fa-2x star" id="star-1"></i>
            <i class="fa fa-star fa-2x star" id="star-2"></i>
            <i class="fa fa-star fa-2x star" id="star-3"></i>
            <i class="fa fa-star fa-2x star" id="star-4"></i>
            <i class="fa fa-star fa-2x star" id="star-5"></i>
            <input type="text" id= "rating" name="RatingValue" value="0" 
             hidden>
                </div>
              </div>
              </div>
              </div><br>

              <div class="row">
                <div class="form-group">
                  <div class="col-sm-2"></div>
              <div class="col-sm-4 col-xs-4">
                <label>Enter Review</label>
              </div>
              <div class="col-sm-4 col-xs-8">
                <textarea class="form-control" rows="3" name="RatingText" placeholder="comments"> </textarea>
              </div>
              </div>
              </div><br>

              <div class="panel-footer">
                <button class="btn btn-lg" type="submit"> Submit</button>
              </div>

          </form>
        </div>
      </div>
      <?php
        }
        elseif(isset($_GET['submit']) && $_GET['submit']==1){
      ?>
      <div class="p-3 mb-2 bg-success text-white" align="center">Your review is successfully submitted.</div>
                <br>
                 <div style="color: red" align="center"><h3>Please select any product</h3></div>
      <?php
        }
        else{
      ?> 
        <div style="color: red" align="center"><h3>Please select any product</h3></div>
      <?php
        }
      ?>     
    </div>         
  </div>
    <?php
    }
    else{
  ?>
  <div class="text-center slide">
    <h1>Reviewed Product</h1>
    <br>
    <div class="row">
               <div class="col-sm-12" align="center">
                  <?php
                  if(isset($_GET['submit']) && $_GET['submit']==1){
                ?>
                <div class="p-3 mb-2 bg-success text-white" style="color: green">Your review is successfully submitted.</div>
                <br>
                <?php
                  }
                ?>
                </div>
      <div>
      <table class="table table-hover" border="3">
        <tr>
          <td><b>ProductName</b></td>
          <td><b>ratingvalue</b></td>
          <td><b>ratingtext</b></td>
          <td><b>Edit</b></td>
        </tr>
        <?php
        include_once 'classes/ProductWiseReview.php';
        $objProductWiseReview = new ProductWiseReview();
        $resultProductWiseReview=$objProductWiseReview->UserWiseReview($_SESSION);
        foreach ($resultProductWiseReview as $rowProductWiseReview) {
          ?>
          <tr>
            <td><?= $rowProductWiseReview['ProductName'] ?></td>
            <td><?= $rowProductWiseReview['RatingValue'] ?></td>
            <td><?= $rowProductWiseReview['RatingText'] ?></td>
            <td><a href="?ProductID=<?= $rowProductWiseReview['ProductID'] ?>#review"><button class="btn btn-danger">Edit</button></a></td>
          </tr>
        <?php
        }
        ?>
        
      </table>
    </div>

    </div>
  </div>
  
<?php
  }
?>

</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid  bg-grey">
  <h1 class="text-center">CONTACT</h1>

        <div class="about-col">

           <div class="row ">
                        <div class="col-xs-12 col-sm-12 col-md-8 " style="margin-top:20px;">

                            <div class="heading" style="color: orange">
                              <h3> About Darshan Institute Of Engineering And Technology</h3>
                            </div><br>
                            <p class="p-about" align="justify">Darshan Institute of Engineering &amp; Technology is a leading institute offering undergraduate, graduate and post graduate programs in engineering. DIET is Located in peaceful and sylvan surroundings, about 19 km from Rajkot, Gujarat, India.
                            </p>
                            <p class="p-about" align="justify" >The Institute is affiliated to the Gujarat Technological University and approved by the AICTE, New Delhi. The Institute was established in the year 2009, by Shree G.N.Patel Education &amp; Charitable Trust. DIET is managed by technical experienced &amp; well qualified management team, under leadership of Prof. R.G. Dhamsania. From its inception, the college has grown steadily and is imparting quality technical education.
                            </p>
                            <p class="p-about" align="justify" >The Institute has well experienced, highly qualified and dedicated faculty for committed education. All head of the departments and senior faculties are reputed industrial consultants.
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <br><br><br>
                            <center>
                                <a title="Darshan Institute of Engineering &amp; Technology, Rajkot" href="http://www.darshan.ac.in" target="_blank">
                                    <img style="height: 80px;width: 300px" class="img-responsive " src="images/Dlogo.png" alt="College">
                                </a>
                            </center>
                        </div>
    </div>
    <br>
    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-8 " style="margin-top:20px;">
                            <div class="heading" style="color: orange">
                              <h3> About ASWDC (Apps, Software & Website Development Center)</h3>
                            </div><br>
                            <p class="p-about" align="justify" >Darshan Institute of Engineering &amp; Technology is a leading institute offering undergraduate, graduate and post graduate programs in engineering. DIET is Located in peaceful and sylvan surroundings, about 19 km from Rajkot, Gujarat, India.
                            </p>
                            <p class="p-about" align="justify" >The Institute is affiliated to the Gujarat Technological University and approved by the AICTE, New Delhi. The Institute was established in the year 2009, by Shree G.N.Patel Education &amp; Charitable Trust. DIET is managed by technical experienced &amp; well qualified management team, under leadership of Prof. R.G. Dhamsania. From its inception, the college has grown steadily and is imparting quality technical education.
                            </p>
                            <p class="p-about" align="justify" >The Institute has well experienced, highly qualified and dedicated faculty for committed education. All head of the departments and senior faculties are reputed industrial consultants.
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <br>
                            <br><br>
                            <center>
                                <a title="Darshan Institute of Engineering &amp; Technology, Rajkot" href="http://www.darshan.ac.in" target="_blank">
                                    <img style="height: 200px;width: 300px" class="img-responsive" src="images/ASWDC.png" alt="College">
                                </a>
                            </center>
                        </div>
    </div><br>
    <div class="row ">
                        <div class="col-xs-12 col-sm-12 col-md-8 " style="margin-top:20px;">
                            <div class="heading">
                                <h3 >Meet Our Team</h3>
                            </div>

                            <table class="table table-responsive" >
                                <tbody>
                                    <tr>
                                        <td>Developed By</td>
                                        <td>:</td>
                                        <td><a href="https://in.linkedin.com/in/jigar-dhamsaniya-ba8b23143" title="linkedin jigardhamsaniya">Jigar Dhamsaniya (170540107035) </a></td>
                                    </tr>
                                    <tr>
                                        <td>Mentored By</td>
                                        <td>:</td>
                                        <td title="Dr. N. M. Gambhava"><a href="http://www.darshan.ac.in/DIET/Faculty/Dr-Nilesh-Maganbhai-Gambhava" target="_blank">Dr. N. M. Gambhava</a></td>
                                    </tr>
                                    <tr>
                                        <td>Guided By</td>
                                        <td>:</td>
                                        <td title="Prof. Arjun V. Bala"><a href="http://www.darshan.ac.in/DIET/Faculty/Prof-Arjun-Virjibhai-Bala" target="_blank">Prof. Arjun V. Bala , Computer Engineering Department</a></td>
                                    </tr>
                                    <tr>
                                        <td>Explored By</td>
                                        <td>:</td>
                                        <td>ASWDC , Computer Engineering Department</td>
                                    </tr>
                                    <tr>
                                        <td>Eulogized By</td>
                                        <td>:</td>
                                        <td>Darshan Institute of Engineering &amp; Technology, Rajkot, Gujarat - INDIA</td>
                                    </tr>
                                </tbody>
                             </table>
                        </div>
                        <!-- <div class="col-xs-12 col-sm-12 col-md-3">
                            <center>
                                <a href="index.php"><img class="logo  p-log" src="images/logo2.png" alt="Hotel Booking"></a>
                            </center>
                        </div> -->
        </div>
    </div>
  </div>

<!-- Image of location/map -->
<img src="./img/UConn-Survey-Research-Certificate-e1526591057263.jpg" class="w3-image w3-greyscale-min img img-responsive" style="width:100%">

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Bootstrap Theme Made By <a href="https://in.linkedin.com/in/jigar-dhamsaniya-ba8b23143" title="Visit Jigar Account">Jigar Dhamsaniya</a></p>
</footer>

<script type="text/javascript">
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
  $('.star').click(function(){
        //get the stars index from it id
        var star_id = $(this).attr('id');
        switch (star_id){
            case "star-1":
                $("#star-1").addClass('star-checked');
                $("#star-2").removeClass('star-checked');
                $("#star-3").removeClass('star-checked');
                $("#star-4").removeClass('star-checked');
                $("#star-5").removeClass('star-checked');
                $("#rating").attr("value", "1");
                break;
            case "star-2":
                $("#star-1").addClass('star-checked');
                $("#star-2").addClass('star-checked');
                $("#star-3").removeClass('star-checked');
                $("#star-4").removeClass('star-checked');
                $("#star-5").removeClass('star-checked');
                $("#rating").attr("value", "2");
                break;
            case "star-3":
                $("#star-1").addClass('star-checked');
                $("#star-2").addClass('star-checked');
                $("#star-3").addClass('star-checked');
                $("#star-4").removeClass('star-checked');
                $("#star-5").removeClass('star-checked');
                $("#rating").attr("value", "3");
                break;
            case "star-4":
                $("#star-1").addClass('star-checked');
                $("#star-2").addClass('star-checked');
                $("#star-3").addClass('star-checked');
                $("#star-4").addClass('star-checked');
                $("#star-5").removeClass('star-checked');
                $("#rating").attr("value", "4");
                break;
            case "star-5":
                $("#star-1").addClass('star-checked');
                $("#star-2").addClass('star-checked');
                $("#star-3").addClass('star-checked');
                $("#star-4").addClass('star-checked');
                $("#star-5").addClass('star-checked');
                $("#rating").attr("value", "5");
                break;
            }
    });
})
</script>

</body>
</html>
