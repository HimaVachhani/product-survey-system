<?php
  session_start();
  if (!isset($_SESSION['UserName'])) {
     header('Location: UserLogin.php');
     die();
   } 
?>
<!DOCTYPE html>
<html>

<head>
  <title>Product Survey System</title>
  <link rel = "icon" href =  
"images/titlelogo.png" 
        type = "image/x-icon">
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300,700,800" rel="stylesheet" media="screen">

  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="css/style.css" rel="stylesheet" media="screen">
  <link href="color/default.css" rel="stylesheet" media="screen">
  <style type="text/css">
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
      .hidden{
        visibility: hidden;
      }
      .halfchecked0{

        position: relative;
          top: 2px;
          left: -85px;
          width: 7px;    
          color: gold;
          overflow: hidden;

      }
      .halfchecked1{

        position: relative;
          top: 2px;
          left: -67px;
          width: 7px;    
          color: gold;
          overflow: hidden;

      }
      .halfchecked2{

        position: relative;
          top: 2px;
          left: -50px;
          width: 7px;    
          color: gold;
          overflow: hidden;

      }
      .halfchecked3{

        position: relative;
          top: 2px;
          left: -34px;
          width: 7px;    
          color: gold;
          overflow: hidden;

      }
      .halfchecked4{

        position: relative;
          top: 2px;
          left: -17px;
          width: 7px;    
          color: gold;
          overflow: hidden;

      }
  </style>
  
  <!-- =======================================================
    Theme Name: Alstar
    Theme URL: https://bootstrapmade.com/alstar-free-parallax-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-default" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle nav</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <!-- Logo text or image -->
        <a class="navbar-brand" href="index.html">Project</a>

      </div>
      <div class="navigation collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li class="current"><a href="#intro">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Service</a></li>
          <li><a href="#product">Products</a></li>
          <li><a href="#review">review</a></li>
          <li><a href="#contact">Contact</a></li>
          <li class="dropdown" role="presentation"><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <?= $_SESSION['UserName']  ?><span class="caret"></span>
                    </a>
            <ul class="dropdown-menu navbar-nav" style="background-color: #00C1C1">
              <li><a href="con_UserLogout.php" style="color: white">LOGOUT</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- intro area -->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="item active">
            <div class="carousel-background"><img src="img/intro/5.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated fadeInDown">Product Survey System</h2>
                <p class="animated fadeInUp">This is for the survey of the all products which is commonly used and which Product is batter.</p>
                <a href="#about" class="btn-get-started animated fadeInUp">Read More</a>
              </div>
            </div>
          </div>
          
          <!-- Slide 2 -->
          <div class="item">
            <div class="carousel-background"><img src="img/intro/6.jpeg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated fadeInDown">Please give Review and Rating</span></h2>
                <p class="animated fadeInUp">We are going to take your review as per Product and make a survey off all products</p>
                <a href="#about" class="btn-get-started animated fadeInUp">Read More</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon fa fa-angle-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon fa fa-angle-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <!-- About -->
  <section id="about" class="home-section bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>About us</h2>
            <div class="heading-line"></div>
          </div>
        </div>
      </div>
      <div class="row wow fadeInUp">
        <div class="col-md-6 about-img">
          <img src="img/intro/4.jpg" alt="">
        </div>

        <div class="col-md-6 content">
          <h2>Survay of the products which we are use in our daily life.</h2>
          <h3>We are create this website for the survey of the products, in this website user can share his experience to other user and then we create one big survey of that product and that is halpful for people that if that product is usefull for them or not.</h3>
          <p>
           In this website user can gave rating and review(in words) for any product.
      this will help to the people to select any product is buyable or not.
    If there is some issue in that product then user can not buy that product and save their money from that companies.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Parallax 1 -->
  <!-- <section id="parallax1" class="home-section parallax" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="color-light">
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- Services -->
  <section id="services" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Services</h2>
            <div class="heading-line"></div>
            <p>We Provide survey of products to the users from the users.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div id="carousel-service" class="service carousel slide">

            <!-- slides -->
            <div class="carousel-inner">
              <div class="item active">
                <div class="row">
                  <div class="col-sm-12 col-md-offset-1 col-md-6">
                    <div class="wow bounceInLeft">
                      <h4>POWER</h4>
                      <p>Let us teach companies what is the power of people.</p>
                      <h4>CERTIFIED</h4>
                      <p>ISO sertified.</p>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-5">
                    <div class="screenshot wow bounceInRight">
                      <img style="height: 250px;width: 350px" src="img/parallax/power.jpg" class="img-responsive" alt="" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-sm-12 col-md-offset-1 col-md-6">
                    <div class="wow bounceInLeft">
                      <h4>LOVE</h4>
                      <p>With the lot of love & silently.</p><br>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-5">
                    <div class="screenshot wow bounceInRight">
                      <img style="height: 250px;width: 350px" src="img/parallax/love.jpg" class="img-responsive" alt="" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-sm-12 col-md-offset-1 col-md-6">
                    <div class="wow bounceInLeft">
                      <h4>GREEN</h4>
                      <p>Let us support our indian product and make green india.</p><br>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-5">
                    <div class="screenshot wow bounceInRight">
                      <img style="height: 250px;width: 350px" src="img/parallax/green.jpeg" class="img-responsive" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-service" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-service" data-slide-to="1"></li>
              <li data-target="#carousel-service" data-slide-to="2"></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Works -->
  <section id="product" class="home-section bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading wow bounceInLeft" data-wow-delay="0.2s">
            <h2>Products</h2>
            <div class="heading-line"></div>
            <p>Select any product and give it review.</p><br>
            <form method="get" action="#product">
              <input type="text" style="background-color: #dddddd" name="search" <?php if (isset($_GET['search'])){
              ?>
              value="<?= $_GET['search'] ?>"
              <?php
              } ?>
         placeholder="search">
              <button type="submit" class="btn btn-default" style="background-color: #00c1c1;color: white"><i class="
        glyphicon glyphicon-search"></i></button>
            </form>
          </div>
        </div>
      </div>
      <div class="row wow bounceInRight"  data-wow-delay="0.2s">
        <div class="col-lg-12 col-xs-12">
          <?php
            include_once '../admin/classes/product.php';
            $objProduct = new Product();
            $resultProduct = $objProduct->getAll($_GET);$j=1;
            foreach ($resultProduct as $rowProduct) {
          ?>
          <div class="col-lg-3 col-xs-6">
            <a href="?ProductID=<?= $rowProduct['ProductID'] ?>#review"><img style="width: 200px;height: 200px" class="img img-responsive img-thumbnail" src="..\admin\<?= $rowProduct['ProductImage'] ?>" alt="Paris"></a>
            <p><strong><?= $rowProduct['ProductName'] ?></strong></p>
            <p>Rs. <?= $rowProduct['ProductPrice'] ?></p>
            <div id="star-container" style="">
                <?php
                  if (isset($rowProduct['Average'])) {
                ?>
                   <?= $rowProduct['Average'] ?>
                <?php
                  }
                  else{
                ?>
                    0.0
                <?php
              }
                ?>
                <input type="text" name="abc" value="<?= $rowProduct['Average'] ?>" hidden="">
                <i class="fa fa-star fa-1x star star-1" id="star-1<?php echo($j); ?>"></i>
                <i class="fa fa-star fa-1x star star-2" id="star-2<?php echo($j); ?>"></i>
                <i class="fa fa-star fa-1x star star-3" id="star-3<?php echo($j); ?>"></i>
                <i class="fa fa-star fa-1x star star-4" id="star-4<?php echo($j); ?>"></i> 
                <i class="fa fa-star fa-1x star star-5" id="star-5<?php echo($j); ?>"></i>
                <i class="fa fa-star fa-1x star star-6 hidden" id="star-6<?php echo($j); ?>"></i>
            </div>
            <p><span class="glyphicon glyphicon-user"></span><?= $rowProduct['Count'] ?></p>
          </div>
          <?php
          $j++;
           }
          ?>
        </div>
        <ul class="pagination">
          <li 
          <?php
          if (!isset($_GET['page']) ||(isset($_GET['page']) && $_GET['page']==1)) {
            ?>
            class="active"
            <?php
          }
          ?>
          ><a href="?page=1#product">1</a></li>
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
            href="?page=<?=$i ?>&search=<?=$_GET['search']?>#product"
            <?php
          }
          else{
            ?>
            href="?page=<?=$i ?>#product"
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
  </section>

  <!-- Parallax 2 -->

  <!-- Team -->
  <section id="review" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading wow bounceInLeft" data-wow-delay="0.2s">
            <h2>Review</h2>
            <div class="heading-line"></div>
            <?php
              if (!isset($_GET['ProductID'])) {
            ?>
            <a href="#product"><p style="color: red">Select any Product for review</p></a>
            <?php
              }
            ?>
          </div>
        </div>
      </div>
      
      <?php
      if (isset($_GET['ProductID'])) {
        include_once '../admin/classes/Product.php';
        $objProduct= new Product();
        $resultProduct=$objProduct->getByPK($_GET);
        if (isset($resultProduct[0])) {
      ?>

      <div class="row wow bounceInRight" data-wow-delay="0.2s">
        <div class="col-md-12 col-xs-12">
          <div>

            <form action="con_UserRating.php" onsubmit="return ValidProductWiseReview()">
              <div class="panel-heading">
              <h1>RATE PRODUCT</h1>
            </div>
            <div class="row">
              <input type="text" name="UserID" value="<?= $_SESSION['UserID']  ?>" hidden>
              <div class="col-md-12 col-xs-12">
                <?php
                if (isset($_GET['ProductID'])) {
                $resultProduct = $objProduct->getByPK($_GET);
                $rowProduct = $resultProduct[0];
                ?>
                  <div class="img img-responsive img-thumbnail"><img style="height: 200px;width: 200px" class="img img-responsive" src="../admin/<?= $rowProduct['ProductImage'] ?>" ></div>
              </div> 
            </div><br>
            <div class="row">
              <div class="col-md-offset-2 col-md-4 col-xs-6">
                <label>Product Name:</label>
              </div>
              <div class="col-md-4 col-xs-6">
                <input type="text" name="ProductID" value="<?= $_GET['ProductID'] ?>" hidden>
                <?=  $rowProduct['ProductName'] ?>
              </div>
            </div><br>
            <div class="row">
              <div class="col-md-offset-2 col-md-4 col-xs-6">
                <label>Product Description:</label>
              </div>
              <div class="col-md-4 col-xs-6">
                <?= $rowProduct['ProductDescription'] ?>
              </div>
            </div><br>
            <div class="row">
              <div class="col-md-offset-2 col-md-4 col-xs-6">
                <label>Product Price:</label>
              </div>
              <div class="col-md-4 col-xs-6">
                <?= $rowProduct['ProductPrice'] ?>
              </div><?php
                      }
                    ?>
            </div><br>
            <div id="error" style="color: red" ></div>
            <div class="row">
                <div class="form-group">
                  <div class="col-md-2"></div>
              <div class="col-md-4 col-xs-6">
                <label>Enter Rating value<b style="color: red">*</b></label>
              </div>
              <div class="col-md-4 col-xs-6">
                <div id="star-container">
                  <i class="fa fa-star fa-2x star" id="star-1"></i>
                  <i class="fa fa-star fa-2x star" id="star-2"></i>
                  <i class="fa fa-star fa-2x star" id="star-3"></i>
                  <i class="fa fa-star fa-2x star" id="star-4"></i>
                  <i class="fa fa-star fa-2x star" id="star-5"></i>
                  <input type="text" id="RatingValue" name="RatingValue" required 
                   hidden>
                </div>
              </div>
              </div>
              </div><br>
              <div class="row">
                <div class="form-group">
                  <div class="col-md-2"></div>
              <div class="col-md-4 col-xs-6">
                <label>Enter Review<b style="color: red">*</b></label>
              </div>
              <div class="col-md-4 col-xs-6">
                <textarea class="form-control" id="RatingText" rows="3" name="RatingText" placeholder="comments" required> </textarea>
              </div>
              </div>
              </div><br>
              <div class="panel-footer">
                <button class="btn btn-lg" type="submit"> Submit</button>
              </div>
            </form>
            
          </div>
        </div>
      </div><br><hr>
      <div class="row">
        <u><h2>Another user review</h2></u>
        <?php
          include_once '../admin/classes/ProductWiseReview.php';
          $objProductWiseReview = new ProductWiseReview();
          $resultProductWiseReview=$objProductWiseReview->reviewproduct($_GET);
          foreach ($resultProductWiseReview as $rowProductWiseReview) {
        ?>
          <div>
            <div>

            <h4 align="left" style="margin-left: 30px"><b><span class="glyphicon glyphicon-user"> <?= $rowProductWiseReview['UserName'] ?></b></h4>
            </div>
            <div class="star-container" align="left" style="margin-left: 70px">
              <input type="text" name="abc" value="<?= $rowProductWiseReview['RatingValue'] ?>" hidden="">
                <i class="fa fa-star fa-1x star star-1" id="star-1<?php echo($j); ?>"></i>
                <i class="fa fa-star fa-1x star star-2" id="star-2<?php echo($j); ?>"></i>
                <i class="fa fa-star fa-1x star star-3" id="star-3<?php echo($j); ?>"></i>
                <i class="fa fa-star fa-1x star star-4" id="star-4<?php echo($j); ?>"></i> 
                <i class="fa fa-star fa-1x star star-5" id="star-5<?php echo($j); ?>"></i>
            </div>
          <p align="left" style="margin-left: 50px"><span class="glyphicon glyphicon-pencil"> <?= $rowProductWiseReview['RatingText'] ?></p>
          </div>
        <?php
        $j++;
          }
        ?>
      </div>

      <?php
        }
      }
      ?>
      <hr>
      <div class="row wow bounceInUp" data-wow-delay="0.2s">
        <div class="panel-heading">
          <h1>Reviewed Product</h1>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="table table-responsive">
            <table class="table table-hover">
              <tr>
                <td><b>ProductName</b></td>
                <td><b>ratingvalue</b></td>
                <td><b>ratingtext</b></td>
                <td><b>Edit</b></td>
              </tr>
              <?php
                include_once '../admin/classes/ProductWiseReview.php';
                $objProductWiseReview = new ProductWiseReview();
                $resultProductWiseReview=$objProductWiseReview->UserWiseReview($_SESSION);
                foreach ($resultProductWiseReview as $rowProductWiseReview) {
              ?>
                  <tr>
                    <td><?= $rowProductWiseReview['ProductName'] ?></td>
                    <td><?= $rowProductWiseReview['RatingValue'] ?></td>
                    <td><?= $rowProductWiseReview['RatingText'] ?></td>
                    <td><a href="?ProductID=<?= $rowProductWiseReview['ProductID'] ?>#review"><span class="glyphicon glyphicon-edit"></span></a></td>
                  </tr>
                <?php
                }
                ?>
            </table>
          </div>
        </div>
      </div>
      <!-- <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <div class="box-team wow bounceInUp" data-wow-delay="0.1s">
            <img src="img/team/1.jpg" alt="" class="img-circle img-responsive" />
            <h4>Dominique Vroslav</h4>
            <p>Art Director</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.3s">
          <div class="box-team wow bounceInUp">
            <img src="img/team/2.jpg" alt="" class="img-circle img-responsive" />
            <h4>Thomas Jeffersonn</h4>
            <p>Web Designer</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.5s">
          <div class="box-team wow bounceInUp">
            <img src="img/team/3.jpg" alt="" class="img-circle img-responsive" />
            <h4>Nola Maurin</h4>
            <p>Illustrator</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.7s">
          <div class="box-team wow bounceInUp">
            <img src="img/team/4.jpg" alt="" class="img-circle img-responsive" />
            <h4>Mira Ladovic</h4>
            <p>Typographer</p>
          </div>
        </div>
      </div> -->
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="home-section parallax" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Contact us</h2>
          </div>
          <div class="color-light">
            <div class="row" >
              <div class="col-md-8 col-xs-12 wow bounceInDown" style="margin-top: 20px" data-wow-delay="0.2s">
                            <div class="heading">
                              <h3 style="color: #00c1c1"> About Darshan Institute Of Engineering And Technology</h3>
                            </div><br>
                            <p class="p-about" align="justify">Darshan Institute of Engineering &amp; Technology is a leading institute offering undergraduate, graduate and post graduate programs in engineering. DIET is Located in peaceful and sylvan surroundings, about 19 km from Rajkot, Gujarat, India.
                            </p>
                            <p class="p-about" align="justify" >The Institute is affiliated to the Gujarat Technological University and approved by the AICTE, New Delhi. The Institute was established in the year 2009, by Shree G.N.Patel Education &amp; Charitable Trust. DIET is managed by technical experienced &amp; well qualified management team, under leadership of Prof. R.G. Dhamsania. From its inception, the college has grown steadily and is imparting quality technical education.
                            </p>
                            <p class="p-about" align="justify" >The Institute has well experienced, highly qualified and dedicated faculty for committed education. All head of the departments and senior faculties are reputed industrial consultants.
                            </p>
              </div>
              <div class="col-md-4 col-xs-12">
                <br><br><br>
                            <center>
                                <a title="Darshan Institute of Engineering &amp; Technology, Rajkot" href="http://www.darshan.ac.in" target="_blank">
                                    <img style="height: 80px;width: 300px" class="img-responsive " src="images/Dlogo.png" alt="College">
                                </a>
                            </center>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8 col-xs-12 wow bounceInUp" style="margin-top: 20px" data-wow-delay="0.3s">
                <div class="heading">
                              <h3 style="color: #00c1c1"> About ASWDC (Apps, Software & Website Development Center)</h3>
                            </div><br>
                            <p class="p-about" align="justify" >Darshan Institute of Engineering &amp; Technology is a leading institute offering undergraduate, graduate and post graduate programs in engineering. DIET is Located in peaceful and sylvan surroundings, about 19 km from Rajkot, Gujarat, India.
                            </p>
                            <p class="p-about" align="justify" >The Institute is affiliated to the Gujarat Technological University and approved by the AICTE, New Delhi. The Institute was established in the year 2009, by Shree G.N.Patel Education &amp; Charitable Trust. DIET is managed by technical experienced &amp; well qualified management team, under leadership of Prof. R.G. Dhamsania. From its inception, the college has grown steadily and is imparting quality technical education.
                            </p>
                            <p class="p-about" align="justify" >The Institute has well experienced, highly qualified and dedicated faculty for committed education. All head of the departments and senior faculties are reputed industrial consultants.
                            </p>
              </div>
              <div class="col-md-4 col-xs-12">
                <br>
                            <br><br>
                            <center>
                                <a title="Darshan Institute of Engineering &amp; Technology, Rajkot" href="http://www.darshan.ac.in" target="_blank">
                                    <img style="height: 200px;width: 300px" class="img-responsive" src="images/ASWDC.png" alt="College">
                                </a>
                            </center>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 

  <!-- Bottom widget -->
  <section id="bottom-widget" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="contact-widget wow bounceInLeft">
            <i class="fa fa-map-marker fa-4x"></i>
            <h5>Main Office</h5>
            <p>
              Darshan Inst. of engg. &tech.,<br />Rajkot-Morbi highway
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-widget wow bounceInUp">
            <i class="fa fa-phone fa-4x"></i>
            <h5>Call</h5>
            <p>
              +91 97277 43310<br> +91 97277 47311

            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-widget wow bounceInRight">
            <i class="fa fa-envelope fa-4x"></i>
            <h5>Email us</h5>
            <p>
              darshan.ac.in<br />aswdc.in
            </p>
          </div>
        </div>
      </div>
      <div class="row mar-top30">
        <div class="col-md-12">
          <h5>We're on social networks</h5>
          <ul class="social-network">
            <li><a href="">
                <span class="fa-stack fa-2x">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                </span></a>
            </li>
            <!-- <li><a href="">
                <span class="fa-stack fa-2x">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-dribbble fa-stack-1x fa-inverse"></i>
                </span></a>
            </li> -->
            <li><a href="">
                <span class="fa-stack fa-2x">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                </span></a>
            </li>
            <!-- <li><a href="">
                <span class="fa-stack fa-2x">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-pinterest fa-stack-1x fa-inverse"></i>
                </span></a>
            </li> -->
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p>Copyright &copy; ProductSurveySystem. All rights reserved.</p>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Alstar
            -->
            Designed by <a href="https://aswdc.in/">aswdc</a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- js -->
  
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nav.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/grid.js"></script>
  <script src="js/stellar.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Custom Javascript File -->
  <script src="js/custom.js"></script>

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
                $("#RatingValue").attr("value", "1");
                break;
            case "star-2":
                $("#star-1").addClass('star-checked');
                $("#star-2").addClass('star-checked');
                $("#star-3").removeClass('star-checked');
                $("#star-4").removeClass('star-checked');
                $("#star-5").removeClass('star-checked');
                $("#RatingValue").attr("value", "2");
                break;
            case "star-3":
                $("#star-1").addClass('star-checked');
                $("#star-2").addClass('star-checked');
                $("#star-3").addClass('star-checked');
                $("#star-4").removeClass('star-checked');
                $("#star-5").removeClass('star-checked');
                $("#RatingValue").attr("value", "3");
                break;
            case "star-4":
                $("#star-1").addClass('star-checked');
                $("#star-2").addClass('star-checked');
                $("#star-3").addClass('star-checked');
                $("#star-4").addClass('star-checked');
                $("#star-5").removeClass('star-checked');
                $("#RatingValue").attr("value", "4");
                break;
            case "star-5":
                $("#star-1").addClass('star-checked');
                $("#star-2").addClass('star-checked');
                $("#star-3").addClass('star-checked');
                $("#star-4").addClass('star-checked');
                $("#star-5").addClass('star-checked');
                $("#RatingValue").attr("value", "5");
                break;
            }
    });
    $(document).on('ready', function(){
            //get the stars index from it id
            var star_id =document.getElementsByName('abc');
            for (var i = 0; i <= star_id.length - 1; i++) {
              console.log(star_id[i].value);
              if (star_id[i].value<1  && star_id[i].value>0) { 
                      $("#star-6"+(i+1)).removeClass('hidden');
                      $("#star-6"+(i+1)).addClass('halfchecked0');
              }
              else if (star_id[i].value==1) { 
                  $("#star-1"+(i+1)).addClass('star-checked');
              }
              else if(star_id[i].value>1 && star_id[i].value<2){
                  $("#star-1"+(i+1)).addClass('star-checked');
                      $("#star-6"+(i+1)).removeClass('hidden');
                      $("#star-6"+(i+1)).addClass('halfchecked1');
              }
              else if(star_id[i].value==2){
                $("#star-1"+(i+1)).addClass('star-checked');
                      $("#star-2"+(i+1)).addClass('star-checked');
                      $("#star-3"+(i+1)).removeClass('star-checked');
                      $("#star-4"+(i+1)).removeClass('star-checked');
                      $("#star-5"+(i+1)).removeClass('star-checked');
              }
              else if(star_id[i].value>2 && star_id[i].value<3){
                  $("#star-1"+(i+1)).addClass('star-checked');
                      $("#star-2"+(i+1)).addClass('star-checked');
                      $("#star-6"+(i+1)).removeClass('hidden');
                      $("#star-6"+(i+1)).addClass('halfchecked2');
              }
              else if(star_id[i].value==3){
                $("#star-1"+(i+1)).addClass('star-checked');
                      $("#star-2"+(i+1)).addClass('star-checked');
                      $("#star-3"+(i+1)).addClass('star-checked');
              }
              else if(star_id[i].value>3 && star_id[i].value<4){
                  $("#star-1"+(i+1)).addClass('star-checked');
                      $("#star-2"+(i+1)).addClass('star-checked');
                      $("#star-3"+(i+1)).addClass('star-checked');
                      $("#star-6"+(i+1)).removeClass('hidden');
                      $("#star-6"+(i+1)).addClass('halfchecked3');
              }
              else if(star_id[i].value==4){
                 $("#star-1"+(i+1)).addClass('star-checked');
                      $("#star-2"+(i+1)).addClass('star-checked');
                      $("#star-3"+(i+1)).addClass('star-checked');
                      $("#star-4"+(i+1)).addClass('star-checked');
              }
              else if(star_id[i].value>4 && star_id[i].value<5){
                   $("#star-1"+(i+1)).addClass('star-checked');
                      $("#star-2"+(i+1)).addClass('star-checked');
                      $("#star-3"+(i+1)).addClass('star-checked');
                      $("#star-4"+(i+1)).addClass('star-checked');
                      $("#star-6"+(i+1)).removeClass('hidden');
                      $("#star-6"+(i+1)).addClass('halfchecked4');
              }
              else if(star_id[i].value==5){
                $("#star-1"+(i+1)).addClass('star-checked');
                      $("#star-2"+(i+1)).addClass('star-checked');
                      $("#star-3"+(i+1)).addClass('star-checked');
                      $("#star-4"+(i+1)).addClass('star-checked');
                      $("#star-5"+(i+1)).addClass('star-checked');
              }
            }
        });
})
</script>
<script type="text/javascript">
      function ValidProductWiseReview() {
        var RatingValue=document.getElementById('RatingValue').value;
        var RatingText=document.getElementById('RatingText').value;
        var Err=document.getElementById('error');

        var pattern1="^[0-5]{0,1}$";
        var pattern2="^[A-Za-z0-9,.&% ]+$";
        var reg=new RegExp(pattern1);
        if (!reg.test(RatingValue)) {
          Err.innerHTML="invalid RatingValue";
          return false;
        }
        reg=new RegExp(pattern2);
        if (!reg.test(RatingText)) {
          Err.innerHTML="invalid Review";
          return false;
        }
      }
    </script>

</body>

</html>
