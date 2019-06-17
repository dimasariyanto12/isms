<?php  
$koneksi=new mysqli("localhost","root","","cms2");
?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <?php
              include 'db/dbsetup.php'; //contains DB connection string and global variables

              session_start();

              //Creates a unique refering value/token
              $_SESSION["unique_referer"] = generateRandomString();

              //SQL Select Statements
          
  $sqlSetup = mysqli_query($db_conn, "SELECT title,heading,author, keywords,description FROM setup");
    $rowSetup  = mysqli_fetch_array($sqlSetup);
  



              $sqlProduk = mysqli_query($db_conn, "SELECT heading, slogan, produk,content,icon , banner FROM produk");
              $rowProduk = mysqli_fetch_array($sqlProduk);


              $sqlFitur= mysqli_query($db_conn, "SELECT heading,main_title,subtitle FROM fitur");
              $rowFitur  = mysqli_fetch_array($sqlFitur);


               $sqlHarga= mysqli_query($db_conn, "SELECT idharga,heading,nama_produk,harga_produk,satuan FROM harga");
              $rowHarga  = mysqli_fetch_array($sqlHarga);
              
              $sqlSub_fitur= mysqli_query($db_conn, "SELECT id,icon,title,teks FROM sub_fitur");
              $rowSub_fitur  = mysqli_fetch_array($sqlSub_fitur);



              $sqlAbout = mysqli_query($db_conn, "SELECT heading, content FROM aboutus");
              $rowAbout = mysqli_fetch_array($sqlAbout);

              $sqlFooter = mysqli_query($db_conn, "SELECT heading, content FROM footer");
              $rowFooter = mysqli_fetch_array($sqlFooter);

              $sqlContact = mysqli_query($db_conn, "SELECT heading, main_title,email, sendtoemail, address, city, state, zipcode, phone FROM contactus");
              $rowContact = mysqli_fetch_array($sqlContact);

              $sqlSocial = mysqli_query($db_conn, "SELECT heading, facebook, twitter, linkedin, google, github FROM socialmedia");
              $rowSocial = mysqli_fetch_array($sqlSocial);

              $sqlPages = mysqli_query($db_conn,"SELECT id, title, thumbnail, content, active, datetime FROM pages WHERE active=1 ORDER BY datetime DESC"); //uses while loop

              $sqlPagesActive = mysqli_query($db_conn,"SELECT id, title, thumbnail, content, active FROM pages WHERE active=1"); //uses while loop


              $koneksi=new mysqli("localhost","root","","cms2");

    ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Parallax, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
     <link rel="icon">
   <title><?php echo $rowSetup["title"];?></title>

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/line-icons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">    
    <link rel="stylesheet" href="css/responsive.css">
    


    <?php 
$ambil = $koneksi->query("SELECT * FROM setup where id='1' ");
while ($pecah=$ambil->fetch_assoc()) :
  ?>
<style type="text/css"> 

/*hero mm*/
#hero-area {
  background: url('img/<?= $pecah ['jumbotron'] ?>') fixed no-repeat;
  background-size: cover;
  color: #fff;
  overflow: hidden;
  position: relative;
}

#hero-area .overlay {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0px;
  left: 0px;
  background: #61D2B4;
  opacity: 0.9;
}

#hero-area .contents {
  padding: 200px 0 130px;
}

#hero-area .contents h1 {
  color: #fff;
  font-size: 42px;
  font-weight: 700;
  margin-bottom: 25px;
}

#hero-area .contents p {
  font-size: 14px;
  color: #fff;
  font-weight: 400;
  line-height: 30px;
  letter-spacing: 0.5px;
}

#hero-area .contents .btn {
  margin: 25px 25px 0px 0px;
  text-transform: uppercase;
}

#hero-area .banner_bottom_btn {
  margin-top: 40px;
}

#hero-area .banner_bottom_btn i {
  color: #fff;
  font-size: 48px;
  -webkit-transition: all 0.2s linear;
  -moz-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  transition: all 0.2s linear;
}

#hero-area .banner_bottom_btn i:hover {
  color: #61D2B4;
}

<?php endwhile; ?>


/*ttp*/

.typewriter h3 {
  overflow: hidden; /* Ensures the content is not revealed until the animation */
  border-right: .15em solid orange; /* The typwriter cursor */
  white-space: nowrap; /* Keeps the content on a single line */
  margin: 0 auto; /* Gives that scrolling effect as the typing happens */
  letter-spacing: .15em; /* Adjust as needed */
  animation: 
    typing 3.5s steps(40, end),
    blink-caret .75s step-end infinite;
}

/* The typing effect */
@keyframes typing {
  from { width: 0 }
  to { width: 100% }
}

/* The typewriter cursor effect */
@keyframes blink-caret {
  from, to { border-color: black }
  50% { border-color: orange; }
}

</style>

<script type="text/javascript">
  var i = 0;
  var txt = '<?php echo $rowSetup['description']; ?>';
  var speed = 100;

  function typeWriter() {
    if (i < txt.length) {
      document.getElementById("demo").innerHTML += txt.charAt(i);
      i++;
      setTimeout(typeWriter, speed);
    }
  }
</script>


  </head>
  <body>

    <!-- Header Section Start -->
    <header id="hero-area" data-stellar-background-ratio="0.5">    
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">


<?php 
$ambil = $koneksi->query("SELECT * FROM setup where id='1' ");
while ($pecah=$ambil->fetch_assoc()) :
  

 ?>

            <a href="#" class="navbar-brand"><img class="img-fulid" src="img/<?php echo $pecah ['logo'] ?>" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <i class="lnr lnr-menu"></i>
            <?php endwhile  ?>
            </button>
          </div>
                             
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                 <?php
                                    $sql= $koneksi ->query("select *from navbar where id ='1'");
                                    while($tampil = $sql->fetch_assoc()){
                                    ?>
               
                <a class="nav-link page-scroll" href="index.php"><?php echo $tampil['navbar']?></a>
              </li>

              <li class="nav-item">

                 <?php
                                    $sql= $koneksi ->query("select *from navbar where id ='2'");
                                    while($tampil = $sql->fetch_assoc()){
                                    ?>
                                   
                <a class="nav-link page-scroll" href="#services"><?php echo $tampil['navbar']?></a>
              </li>              <li class="nav-item">
                <?php
                                    $sql= $koneksi ->query("select *from navbar where id ='3'");
                                    while($tampil = $sql->fetch_assoc()){
                                    ?>
                <a class="nav-link page-scroll" href="#features"><?php echo $rowFitur["heading"];?></a>
              </li>
             
              <li class="nav-item">
                <?php
                                    $sql= $koneksi ->query("select *from navbar where id ='4'");
                                    while($tampil = $sql->fetch_assoc()){
                                    ?>
                <a class="nav-link page-scroll" href="#pricing"><?php echo $rowHarga["heading"];?></a>
            
            
              <li class="nav-item">
                <?php
                                    $sql= $koneksi ->query("select *from navbar where id ='5'");
                                    while($tampil = $sql->fetch_assoc()){
                                    ?>
                <a class="nav-link page-scroll" href="#contact"><?php echo $rowContact["heading"];?></a>
              </li>
            </ul>
          </div>
        </div>
<?php } } } } }
        
?>

        <!-- Mobile Menu Start -->
        <ul class="mobile-menu">
           <li>
              <a class="page-scroll" href="#home">Home</a>
            </li>
            <li>
              <a class="page-scroll" href="#services">Services</a>
            </li>
            <li>
              <a class="page-scroll" href="#features">Features</a>
            </li>
         
            <li>
              <a class="page-scroll" href="#pricing">Pricing</a>
            </li>
            <li>
          
          
            <li>
              <a class="page-scroll" href="#contact">Contact</a>
            </li>
        </ul>
        <!-- Mobile Menu End -->

      </nav>
      <!-- Navbar End -->   
      <div class="container">      
        <div class="row justify-content-md-center">
          <div class="col-md-10">
            <div class="contents text-center">
<div class="container">
<div class="typewriter">
  <font color=”red”><h3><?php echo $rowSetup['author']; ?></h3></font>
</div>
 
    <button type="button" class="btn btn-outline-danger"on onclick="typeWriter()"><?php echo $rowSetup['keywords']; ?></button>
    <p id="demo"></p>
  </div>
           
            </div>
          </div>
        </div> 
      </div>           
    </header>
    <!-- Header Section End --> 

    <!-- Services Section Start -->
    <section id="services" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s"><?php echo $rowProduk["heading"];?></h2>
          <hr class="lines wow zoomIn" data-wow-delay="0.3s">
          <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s"><?php echo $rowProduk["slogan"];?></p>
        </div><?php $ambil=$koneksi->query("SELECT * FROM produk " ) ?>
        <div class="row">
                <?php while ($pecah = $ambil->fetch_assoc()) :?>

          <div class="col-md-4 ">
            <div class="item-boxes wow fadeInLeft" data-wow-delay="0.5s">
              <div class="icon">
                     
                
                <?php echo $pecah['icon']; ?>
              </div>
              <h4><?php echo $pecah['produk']; ?></h4>
              <p align="justify"><?php echo $pecah['content']; ?></p>
                 
            </div>
          </div>


             <?php endwhile; ?>

            
    </section>

 
     <center><img src="<?php echo $rowProduk['banner']; ?>"width="1200px" height="360px"></center>
    <!-- Services Section End -->

    <!-- Features Section Start -->
    <section id="features" class="section" data-stellar-background-ratio="0.2">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title"><?php echo $rowFitur['main_title']; ?></h2>
          <hr class="lines">
          <p class="section-subtitle"><?php echo $rowFitur['subtitle']; ?></p>
        </div>

<div class="row">
  <?php $ambil=$koneksi->query("SELECT * FROM sub_fitur  " ) ?>
                <?php while ($pecah = $ambil->fetch_assoc()) :?>   

          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.2s">
              <div class="icon">

                

                  <?php echo $pecah ['icon'];?>
                </div>

                <h4><?php echo $pecah ['title']; ?></h4>
            
              <p align="justify">
               
                  <?php echo $pecah ['teks'];?>
              </p>
              

            </div>
          </div>

          
<?php endwhile; ?>

        
    </section>
    <!-- Features Section End -->    

    <!-- Portfolio Section -->
  
      <!-- Container Starts -->
  
    <!-- Start Video promo Section -->


    <!-- End Video Promo Section -->
<br>
    <!-- Start Pricing Table Section -->
    <div id="pricing" class="section pricing-section">
      <div class="container">
        <div class="section-header">  

        
          <h2 class="section-title"><?php echo $rowHarga['heading']; ?></h2>
          <hr class="lines">
          <p class="section-subtitle"></p>
        </div>

        <div class="row pricing-tables">
           <?php $ambil=$koneksi->query("SELECT * FROM harga" ) ?>
                <?php while ($pecah = $ambil->fetch_assoc()) :?>   
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="pricing-table">
              <div class="pricing-details">
                   
                <h2><?php echo $pecah['nama_produk']; ?></h2>
                <p><strong>Rp.<?php echo $pecah['harga_produk']; ?>/<?php echo $pecah['satuan']; ?></strong></p>

                <ul>
              </div>
              <div class="plan-button">
                <a href="#contact" class="btn btn-common">Buy Now</a>
                
              </div>
            </div>
          </div>

         
 <?php endwhile; ?>
        </div>
      </div>
    </div>


  
    <!-- End Pricing Table Section -->

   
   

    <!-- Contact Section Start -->
    <section id="contact" class="section" data-stellar-background-ratio="-0.2">      
      <div class="contact-form">
        <div class="container">
          <div class="row">     
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <div class="contact-us">
                <h3><?php echo $rowContact['main_title']; ?></h3>
                <div class="contact-address">
                  <p> <?php echo $rowContact['address']; ?></p>
                
<?php echo $rowContact['city']; ?>


                  <p class="phone">Call Us :
 <span><?php echo $rowContact['phone']; ?></span></p>
     <p class="email">Whattsapp : <span><?php echo $rowContact['state'];?></span></p>
                  <p class="email">E-mail  : <span><?php echo $rowContact['email']; ?></span></p>
                </div>
                <div class="social-icons">
                   <?php $ambil=$koneksi->query("SELECT * FROM socialmedia WHERE id='1' " ) ?>
                <?php while ($pecah = $ambil->fetch_assoc()) :?>   

                  <ul>
                    <li class="facebook"><a href="<?php echo $pecah['facebook']; ?>"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="<?php echo $pecah['twitter']; ?>"><i class="fa fa-twitter"></i></a></li>
                    <li class="google-plus"><a href="<?php echo $pecah['google']; ?>"><i class="fa fa-google-plus"></i></a></li>
                    <li class="linkedin"><a href="<?php echo $pecah['linkedin']; ?>"><i class="fa fa-linkedin"></i></a></li>
                  
                  </ul>
                <?php endwhile ?>
                </div>
              </div>
            </div>     


<div class="col-lg-6 col-sm-6 col-xs-12">
              <div class="contact-block">
                



<!DOCTYPE html>
<head>
<title>Form submission</title>
</head>
<body>

                  <form name="contactform" method="post" action="send_form_email.php">
                  <div class="row">
                    
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required data-error="Please enter your First name">
                        <div class="help-block with-errors"></div>
                      </div>                                 
                    </div>


                      <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required data-error="Please enter yourLast Name ">
                        <div class="help-block with-errors"></div>
                      </div>                                 
                    </div>


                    


                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" placeholder="Your Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
                        <div class="help-block with-errors"></div>
                      </div> 
                    </div>

                       <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" class="form-control" id="telephone" name="telephone" placeholder="telephone " required data-error="Please enter your telephone ">
                        <div class="help-block with-errors"></div>
                      </div>                                 
                    </div>
                    <div class="col-md-12">
                      <div class="form-group"> 
                        <textarea class="form-control" id="comments"name="comments" placeholder="Your Message" rows="8" data-error="Write your message" required></textarea>
                        <div class="help-block with-errors"></div>
                         <div class="submit-button text-center">
                        
                          <button class="btn btn-common" id="submit" type="submit">Send Message</button>
                       
                        <div class="clearfix"></div> 
                      </div> 
                      </div>
                    </div>
                  </div>            
                </form>
             
              </div>
            </div>
          </div>
        </div>
      </div>  


    </section>


    <!-- Contact Section End -->

    <!-- Footer Section Start -->
    <footer>          
      <div class="container">
        <div class="row">
          <!-- Footer Links -->
          <div class="col-lg-6 col-sm-6 col-xs-12">
            <ul class="footer-links">
             
            </ul>
          </div>
          <div class="col-lg-6 col-sm-6 col-xs-12">
            <div class="copyright">
              <p><?php echo $rowFooter['content']; ?></a></p>
            </div>
          </div>  
        </div>
      </div>
    </footer>
    <!-- Footer Section End --> 


    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lnr lnr-arrow-up"></i>
    </a>
    
    <div id="loader">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
      </div>
    </div>     



    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="js/jquery-min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mixitup.js"></script>
    <script src="js/nivo-lightbox.js"></script>
    <script src="js/owl.carousel.js"></script>    
    <script src="js/jquery.stellar.min.js"></script>    
    <script src="js/jquery.nav.js"></script>    
    <script src="js/scrolling-nav.js"></script>    
    <script src="js/jquery.easing.min.js"></script>    
    <script src="js/smoothscroll.js"></script>    
    <script src="js/jquery.slicknav.js"></script>     
    <script src="js/wow.js"></script>   
    <script src="js/jquery.vide.js"></script>
    <script src="js/jquery.counterup.min.js"></script>    
    <script src="js/jquery.magnific-popup.min.js"></script>    
    <script src="js/waypoints.min.js"></script>    
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>   
    <script src="js/main.js"></script>

  </body>
</html>

