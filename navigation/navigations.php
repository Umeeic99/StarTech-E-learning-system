<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title><?php echo $title;?> | StarTech E-Learning System</title>
 <!-- styles -->
  <link href="<?php echo web_root;?>plugins/homepage/assets/css/bootstrap.css" rel="stylesheet">
  <link href="<?php echo web_root;?>plugins/homepage/assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="<?php echo web_root;?>plugins/homepage/assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="<?php echo web_root;?>plugins/homepage/assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="<?php echo web_root;?>plugins/homepage/assets/css/flexslider.css" rel="stylesheet">
  <link href="<?php echo web_root;?>plugins/homepage/assets/css/style.css" rel="stylesheet">
  <link href="<?php echo web_root;?>plugins/homepage/assets/color/cyan.css" rel="stylesheet">
  <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.1/css/all.css"
      integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q"
      crossorigin="anonymous"
    />
  <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,600,400italic|Open+Sans:400,600,700" rel="stylesheet">

  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="assets/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo web_root;?>plugins/homepage/assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo web_root;?>plugins/homepage/assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo web_root;?>plugins/homepage/assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="<?php echo web_root;?>plugins/homepage/assets/ico/apple-touch-icon-57-precomposed.png">

<!-- Bootstrap core CSS -->
 <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.1/css/all.css"
      integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q"
      crossorigin="anonymous"
    />
<link href="<?php echo web_root; ?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo web_root; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<link href="<?php echo web_root; ?>css/dataTables.bootstrap.css" rel="stylesheet" media="screen">  
<!-- <link href="<?php echo web_root; ?>css/kcctc.css" rel="stylesheet" media="screen">  -->
<link href="<?php echo web_root; ?>fonts/font-awesome.min.css" rel="stylesheet" media="screen">  
<link rel="stylesheet" type="text/css" href="<?php echo web_root; ?>loginregister.css">  
<link rel="stylesheet" href="<?php echo web_root; ?>assets/iCheck/flat/blue.css">
<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="<?php echo web_root; ?>assets/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<link rel="stylesheet" href="<?php echo web_root; ?>css/jquery-ui.css">  
 <style type="text/css"> 
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
 body, html {
  height: 100%;
  width: 100%
  font-family: Poppins-Regular, sans-serif;
   /*background: url(./images/backdemo2.jpg)no-repeat;*/
    background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    -moz-background-size: cover;
    min-height: 100%;
    background-size: 100% 100%
  

}
#content {
 /* min-height: 550px;
  margin: 0;
  width: 100%;*/
}
/* Nav Bar css */
@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600&display=swap');

body{
  line-height: 1.5;
  font-family: 'Raleway', sans-serif;
  font-weight: 400;
}
body.hidden-scrolling{
  overflow-y: hidden;
}
*{
  margin:0;
  box-sizing: border-box;
}
.containerr{
  max-width: auto;
  margin:auto;
}
ul{
  list-style: none;
  margin:0;
  padding:0;
}
a{
  text-decoration: none;
}
/*header*/
.header{
  position: relative;
  width: 100%;
  left:0;
  top:0;
  z-index: 99;
  padding: 15px;
}
.header-main{
  background-color: #000000;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 0;
  border-radius: 4px;
}
.header .logo{
  padding: 0 15px;
}
.header .logo a{
  font-size: 15px;
  text-transform: capitalize;
  color: #ffffff;
  font-weight: 600;
}
.header .nav-menu{
  padding: 0 15px;
}
.header .menu > .menu-item{
  display: inline-block;
  margin-left: 10px;
  position: relative;
}
.header .menu > .menu-item > a{
  display: block;
  padding: 12px 0;
  font-size: 12px;
  color: #ffffff;
  text-transform: capitalize;
  font-weight: 600;
  transition: all 0.3s ease;
  font-weight: 900;
}
.header .menu > .menu-item > a .plus{
  display: inline-block;
  height: 12px;
  width: 12px;
  position: relative;
  margin-left:5px; 
  pointer-events: none;
}
.header .menu > .menu-item > a .plus:before,
.header .menu > .menu-item > a .plus:after{
  content:'';
  position: absolute;
  box-sizing: border-box;
  left: 50%;
  top:50%;
  background-color: #000000;
  height: 2px;
  width: 100%;
  transform: translate(-50%,-50%);
  transition: all 0.3s ease;
}
.header .menu > .menu-item:hover > a .plus:before,
.header .menu > .menu-item:hover > a .plus:after{
   background-color: white;
}
.header .menu > .menu-item > a .plus:after{
   transform: translate(-50%,-50%) rotate(-90deg);  
}
.header .menu > .menu-item > .sub-menu > .menu-item > a:hover,
.header .menu > .menu-item:hover > a{
  color: #e91e63;
}
.header .menu > .menu-item > .sub-menu{
  box-shadow: 0 0 10px rgba(0,0,0,0.2);
  width: 220px;
  position: absolute;
  left:0;
  top:100%;
  background-color: #ffffff;
  padding: 10px 0;
  border-top: 3px solid #e91e63;
  transform: translateY(10px);
  transition: all 0.3s ease;
  opacity:0;
  visibility: hidden;
}
@media(min-width: 992px){
.header .menu > .menu-item-has-children:hover > .sub-menu{
  transform: translateY(0);
  opacity: 1;
  visibility: visible;
 }
 .header .menu > .menu-item-has-children:hover > a .plus:after{
    transform: translate(-50%,-50%) rotate(0deg);   
 }
}
.header .menu > .menu-item > .sub-menu > .menu-item{
  display: block;
}
.header .menu > .menu-item > .sub-menu > .menu-item > a{
  display: block;
  padding: 10px 20px;
  font-size: 16px;
  font-weight: 600;
  color: #000000;
  transition: all 0.3s ease;
  text-transform: capitalize;
}
.header .open-nav-menu{
  height: 34px;
  width: 40px;
  margin-right: 15px;
  display: none;
  align-items: center;
  justify-content: center;
  cursor: pointer;
}
.header .open-nav-menu span{
  display: block;
  height: 3px;
  width: 24px;
  background-color: white;
    position: relative;
}
.header .open-nav-menu span:before,
.header .open-nav-menu span:after{
  content: '';
  position: absolute;
  left:0;
  width: 100%;
  height: 100%;
  background-color: #000000;
  box-sizing: border-box;
}
.header .open-nav-menu span:before{
  top:-7px;
}
.header .open-nav-menu span:after{
  top:7px;
}
.header .close-nav-menu{
  height: 40px;
  width: 40px;
  background-color: #ffffff;
  margin:0 0 15px 15px;
  cursor: pointer;
  display: none;
  align-items: center;
  justify-content: center;
}
.header .close-nav-menu img{
  width: 16px;
}
.header .menu-overlay{
  position: fixed;
  z-index: 999;
  background-color: rgba(0,0,0,0.5);
  left:0;
  top:0;
  height: 100%;
  width: 100%;
  visibility: hidden;
  opacity:0;
  transition: all 0.3s ease;
}

/*home section*/
/*.home-section{
  width: 100%;
  display: block;
  min-height: 100vh;
  background-image: url('./images/home.jpg');
  background-position: center top;
  background-size: cover;
}*/



/* responsive */

@media(max-width: 991px){
  .header .menu-overlay.active{
  visibility: visible;
  opacity: 1;
}
  .header .nav-menu{
    position: fixed;
    right: -280px;
    visibility: hidden;
    width: 280px;
    height: 100%;
    top:0;
    overflow-y: auto;
    background-color: #222222;
    z-index: 1000;
    padding: 15px 0;
    transition: all 0.5s ease;
  }
  .header .nav-menu.open{
    visibility: visible;
    right: 0px;
  }
  .header .menu > .menu-item{
    display: block;
    margin:0;
  }
  .header .menu > .menu-item-has-children > a{
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .header .menu > .menu-item > a{
    color: #ffffff;
    padding: 12px 15px;
    border-bottom: 1px solid #333333;
  }
  .header .menu > .menu-item:first-child > a{
      border-top: 1px solid #333333;  
  }
  .header .menu > .menu-item > a .plus:before, 
  .header .menu > .menu-item > a .plus:after{
    background-color: #ffffff;
  }
  .header .menu > .menu-item-has-children.active > a .plus:after{
        transform: translate(-50%,-50%) rotate(0deg);
  }
  .header .menu > .menu-item > .sub-menu{
    width: 100%;
    position: relative;
    opacity: 1;
    visibility: visible;
    border:none;
    background-color: transparent;
    box-shadow: none;
    transform: translateY(0px);
    padding: 0px;
    left: auto;
    top:auto;
    max-height: 0;
    overflow: hidden;
  }
  .header .menu > .menu-item > .sub-menu > .menu-item > a{
    padding: 12px 45px;
    color: #ffffff;
    border-bottom: 1px solid #333333;
  }
  .header .close-nav-menu,
  .header .open-nav-menu{
    display: flex;
  }
}


/*#footer > div {
  background-color: #fff;
  min-height: 200px;
  padding: 10px 50px;
  margin-top: 30px;
  border-top: 1px solid #ddd;

}
.footer-links { 
  margin-left: 5px;
}
#footer > footer { 
    background-color: rgb(0, 67, 200);
  min-height: 50px;
  padding: 10px; 
  border-top: 1px solid #ddd;
  color:#fff;

}*/
/*.navbar-nav {
  float: center;
}
@media only screen and (max-width: 768px){
 .navbar-nav {
  float: none;
 }

}
#content { 
  margin-right: 0px;
  margin-left: 90px;
  width:90%;
}

#content:before,
#content:after {
  display: table;
  content: "";
}

#content:after {
  clear: both;
}

#content:before,
#content:after {
  display: table;
  content: "";
}

#content:after {
clear: both;
}*/

/*#mySidenav a {
    position: absolute;
    left: -130px;
    transition: 0.3s;
    padding: 20px;
    width: 190px;
    text-decoration: none;
    font-size: 25px;
    color: white;
    border-radius: 0 5px 5px 0;
}

#mySidenav a:hover {
    left: 0;
}

#lesson {
    top: 180px;
    background-color: rgb(0, 67, 200)
}

#exercise {
    top:260px;
    background-color: rgb(0, 81, 242);
}

#download {
    top: 340px;
    background-color: rgb(33, 107, 255);
}

#about {
    top: 420px;
    background-color: rgb(79, 138, 255);
}
#login {
    top: 500px;
    background-color: rgb(137, 176, 255);
}*/
/*body{
  line-height: 1.5;
  font-family: 'Poppins', sans-serif;
}*/
/**{
  margin:0;
  padding:0;
  box-sizing: border-box;
}
.container{
  max-width: 1170px;
  margin:auto;
}
.row{
  display: flex;
  flex-wrap: wrap;
}
ul{
  list-style: none;
}*/


/*responsive*/
/*@media(max-width: 767px){
  .footer-col{
    width: 50%;
    margin-bottom: 30px;
}
}
@media(max-width: 574px){
  .footer-col{
    width: 100%;
}
}*/

/*#title-header {
  background-color: rgb(0, 67, 200); 
  border-bottom: 1px solid #ddd; 
  height: 130px;  
  padding: 10px 0px;
  text-align: center;
  color: #fff;
  font-size: 18px;
}*/
/*.logo{
  font-size: 2rem;
  display: inline-block;
  



  
}
.Logo{
  justify-self: start;
    margin-left: 20px;
    cursor: pointer;
    text-decoration: none;
    font-size: 2.2rem;
   /* margin-bottom: 10px;*/
  /*  display: flex;
    align-items: center;
}*/
./*footernavbar{
   background: linear-gradient(90deg, rgb(28, 27, 27) 0%, rgb(26, 23, 23) 100%);
    
    display: block;
    justify-content: left;
    align-items: left;
    font-size: 15px;
    text-overflow: none;
}*/
  
/*    z-index: 999;*/


/*a{
  text-decoration: none;
  color: black;
}*/
@import url('http://fonts.googleapis.com/css?family=Open+Sans:400,700');
/** {
    padding: 0;
    margin: 0;
}

body {
    font-family: 'Poppins', sans-serif;
}

html {
    background-color: #eaf0f2;
}

header {
    text-align: center;
    padding-top: 100px;
    margin-bottom: 300px;
    font-size: 35px;
}

header h2 {
    color: #f0525f;
}

header span {
    color: #eaa03f;
}*/

/* The footer is fixed to the bottom of the page */

footer {
    position: relative;
    bottom: 0;
}

@media (max-height:800px) {
    footer {
        position: static;
    }
   /* header {
        padding-top: 40px;
    }*/
}

.footer-distributed {
    background-color: #000000;
    box-sizing: border-box;
    width: 100%;
    text-align: left;
    font: bold 16px sans-serif;
    padding: 50px 50px 60px 50px;
    margin-top: 80px;
}

.footer-distributed .footer-left, .footer-distributed .footer-center, .footer-distributed .footer-right {
    display: inline-block;
    vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left {
    width: 30%;
}

.footer-distributed h3 {
    color: #ffffff;
    font: normal 36px 'Cookie', cursive;
    margin: 0;
}


.footer-distributed h3 span {
    color: #e0ac1c;
}

/* Footer links */

.footer-distributed .footer-links {
    color: #ffffff;
    margin: 20px 0 12px;
}

.footer-distributed .footer-links a {
    display: inline-block;
    line-height: 1.8;
    text-decoration: none;
    color: inherit;
}

.footer-distributed .footer-company-name {
    color: #8f9296;
    font-size: 14px;
    font-weight: normal;
    margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center {
    width: 35%;
}

.footer-distributed .footer-center i {
    background-color: #33383b;
    color: #ffffff;
    font-size: 25px;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    text-align: center;
    line-height: 42px;
    margin: 10px 15px;
    vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope {
    font-size: 17px;
    line-height: 38px;
}

.footer-distributed .footer-center p {
    display: inline-block;
    color: #ffffff;
    vertical-align: middle;
    margin: 0;
}

.footer-distributed .footer-center p span {
    display: block;
    font-weight: normal;
    font-size: 14px;
    line-height: 2;
}

.footer-distributed .footer-center p a {
    color: #e0ac1c;
    text-decoration: none;
    ;
}

/* Footer Right */

.footer-distributed .footer-right {
    width: 30%;
}

.footer-distributed .footer-company-about {
    line-height: 20px;
    color: #92999f;
    font-size: 13px;
    font-weight: normal;
    margin: 0;
}

.footer-distributed .footer-company-about span {
    display: block;
    color: #ffffff;
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 20px;
}

.footer-distributed .footer-icons {
    margin-top: 25px;
}

.footer-distributed .footer-icons a {
    display: inline-block;
    width: 35px;
    height: 35px;
    cursor: pointer;
    background-color: #33383b;
    border-radius: 2px;
    font-size: 20px;
    color: #ffffff;
    text-align: center;
    line-height: 35px;
    margin-right: 3px;
    margin-bottom: 5px;
}

.footer-distributed .footer-icons a:hover {
    background-color: #3F71EA;
}

.footer-links a:hover {
    color: #3F71EA;
}

@media (max-width: 880px) {
    .footer-distributed .footer-left, .footer-distributed .footer-center, .footer-distributed .footer-right {
        display: block;
        width: 100%;
        margin-bottom: 40px;
        text-align: center;
    }
    .footer-distributed .footer-center i {
        margin-left: 0;
    }
}       
 </style>

 

<body >
  <header>
    <header class="header">
     <div class="containerr">
        <div class="header-main">
           <div class="logo">
            <img src="images/EducationalLogo.png" style="width: 10%; height: 8%" >
              <a href="#">StarTech E-Learning System</a>
           </div>
           <div class="open-nav-menu">
              <span></span>
           </div>
           <div class="menu-overlay">
           </div>
           <!-- navigation menu start -->
           <nav class="nav-menu">
             <div class="close-nav-menu">
                <img src="images/close.svg" alt="close">
             </div>
             <ul class="menu">
                <li class="menu-item menu-item-has-children">
                   <a href="index.php" data-toggle="sub-menu">Home<i class="fa-solid fa-house"></i></a>
                   
                </li>
                <li class="menu-item">
                   <a href="<?php echo web_root; ?>index.php?q=about">About</a>
                </li>
                <li class="menu-item">
                  <a href="<?php echo web_root; ?>index.php?q=lesson">Lessons</a>
                </li>
                <li class="menu-item">
                  <a href="<?php echo web_root; ?>index.php?q=exercises">Exercises</a>
                </li>
                
                
                    <!--  <li class="menu-item menu-item-has-children">
                   <a href="index.php" data-toggle="sub-menu">Class IX <i class="plus"></i></a>
                   <ul class="sub-menu">
                       <li class="menu-item"><a href="<?php echo web_root; ?>index.php?q=lesson">Lesson</a></li>
                       <li class="menu-item"><a href="<?php echo web_root; ?>index.php?q=exercises">Exercise</a></li>
                      
                   </ul>
                </li>
                 <li class="menu-item menu-item-has-children">
                   <a href="index.php" data-toggle="sub-menu">Class X <i class="plus"></i></a>
                   <ul class="sub-menu">
                        <li class="menu-item"><a href="<?php echo web_root; ?>index.php?q=lesson">Lesson</a></li>
                       <li class="menu-item"><a href="<?php echo web_root; ?>index.php?q=exercises">Exercise</a></li>
                       
                   </ul>
                </li>
                 <li class="menu-item menu-item-has-children">
                   <a href="index.php" data-toggle="sub-menu">Class XI <i class="plus"></i></a>
                   <ul class="sub-menu">
                        <li class="menu-item"><a href="<?php echo web_root; ?>index.php?q=lesson">Lesson</a></li>
                       <li class="menu-item"><a href="<?php echo web_root; ?>index.php?q=exercises">Exercise</a></li>
                       
                   </ul>
                </li> -->
                 <!-- <li class="menu-item menu-item-has-children">
                   <a href="index.php" data-toggle="sub-menu">Class XII<i class="plus"></i></a>
                   <ul class="sub-menu">
                        <li class="menu-item"><a href="<?php echo web_root; ?>index.php?q=lesson">Lesson</a></li>
                       <li class="menu-item"><a href="<?php echo web_root; ?>index.php?q=exercises">Exercise</a></li>
                       
                   </ul>
                </li> -->
                <li class="menu-item">
                   <a href="<?php echo web_root; ?>index.php?q=customizequiz">Customize Quiz</a>
                </li>
                
                <li class="menu-item menu-item-has-children">
                   <a href="<?php echo web_root; ?>index.php?q=download" data-toggle="sub-menu">Downloads</a>
                   
                </li>
                <li class="menu-item">
                   <a href="<?php echo web_root; ?>index.php?q=faq">FAQ</a>
                </li>
                <li class="menu-item">
                   <a href="<?php echo web_root; ?>index.php?q=contact">Contact</a>
                </li>
               <!--  <li class="menu-item">
                   <a href="<?php echo web_root; ?>index.php?q=customizequiz">Customize Quiz</a>
                </li> -->
                <li class="menu-item">
                   <a href="logout.php">Logout</a>
                </li>
             </ul>
           </nav>
           <!-- navigation menu end -->
        </div>
     </div>
   <!--  <div class="Logo">
        <div class="logopic" data-tilt  style="">
          <img src="images/EducationalLogo.png" style="width: 18%; height: 12%" >
          <a> Star Teach E-Learning System</a>
        </div>  -->
     
            <!-- end logo -->
    <!-- Navbar
    ================================================== -->
      
    </header>


   <!--  <script src="<?php echo web_root;?>plugins/homepage/assets/js/jquery.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/assets/js/raphael-min.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/assets/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/assets/js/bootstrap.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/assets/js/google-code-prettify/prettify.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/assets/js/jquery.elastislide.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/assets/js/jquery.prettyPhoto.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/assets/js/jquery.flexslider.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/assets/js/jquery-hover-effect.js"></script>
  <script src="<?php echo web_root;?>plugins/homepage/assets/js/animate.js"></script> -->

  <!-- Template Custom JavaScript File -->
  <script src="<?php echo web_root;?>plugins/homepage/assets/js/custom.js"></script>
<!-- <section id="title-header">
  <div class="title">  
     <img class="logo" src=""> <br>
      <br>
      <p class="subtitle">Star Tech E-Learning System</p> 
  </div>
</section>  --> 
<!-- <section id="navigation">
  <div id="mySidenav" class="sidenav">
    <a href="<?php echo web_root; ?>index.php?q=lesson" id="lesson">Lesson <i class="fa fa-home pull-right"></i></a> 
    <a href="<?php echo web_root; ?>index.php?q=exercises" id="exercise">Exercises <i class="fa fa-pencil pull-right"></i></a>
    <a href="<?php echo web_root; ?>index.php?q=download" id="download">Download <i class="fa fa-download pull-right"></i></a>
    <a href="<?php echo web_root; ?>index.php?q=about" id="about">About Us <i class="fa fa-info-circle pull-right"></i></a>  
     <a href="logout.php" id="login">Logout <i class="fa fa-sign-out pull-right"></i></a> 
  </div>
</section>   -->

<section id="content"> 
<?php check_message(); ?> 
  <div class="container"> 
    <?php require_once $content; ?> 
  </div>  
</section>

<section id="footer"> 
<!--      <div > 

</div>   -->
<!-- <div class="footerdesign" style="border: 1px solid black">
 -->
  
</div>
<footer class="footer-distributed">

        <div class="footer-left">
            <h3>StarTech<span>E-Learning System</span></h3>

            <p class="footer-links">
                <a href="index.php">Home</a>
                |
                <a href="<?php echo web_root; ?>index.php?q=about">About</a>
                |
                <a href="<?php echo web_root; ?>index.php?q=Termofuse">Term Of Use</a>
                |
                <a href="<?php echo web_root; ?>index.php?q=privacypolicy">Privacy Policy</a>
            </p>

            <p class="footer-company-name">Copyright © 2021 <strong>StarTech E-Learning System</strong> All rights reserved</p>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Lahore</span>
                   IBIT || Punjab University</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+92 3134330859</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:sagar00001.co@gmail.com">umerkhalid150@gmail.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>About the company</span>
                <strong>StarTech E-Learning System</strong> is a Web Based Online Learning System where you can find more attractive Lessons, Exercises and Important Material For Preparation Of Exams.
            </p>
            <div class="footer-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
            </div>
        </div>
    </footer>

<!-- <footer  >
  <nav class="footernavbar">
    <div class="col-lg-2">
      <a href="<?php echo web_root; ?>index.php?q=about"> About us</a>
      
    </div>
     <div class="col-lg-2">
      <a href="<?php echo web_root; ?>index.php?q=Termofuse"> Terms of use</a>
      
    </div>
     <div class="col-lg-2">
      <a href="<?php echo web_root; ?>index.php?q=privacypolicy"> Privacy Policy</a>
      
    </div>
     <div class="col-lg-2">
      <a href="<?php echo web_root; ?>index.php?q=contactus">  Contact Us</a>
      
    </div>
    <div class="col-lg-2">
      <a href="<?php echo web_root; ?>index.php?q=faq.">FAQ</a>
      
    </div>
    

  </nav>


    <p align="center">&copy; Star Teach E-Learning System</p>
</footer> -->
</section>
  <script type="text/javascript" language="javascript" src="<?php echo web_root; ?>jquery/jquery.min.js"></script>
  <script src="<?php echo web_root; ?>js/bootstrap.min.js"></script> 
  <script type="text/javascript" src="<?php echo web_root; ?>js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
  <script type="text/javascript" src="<?php echo web_root; ?>js/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>
  <script type="text/javascript" language="javascript" src="<?php echo web_root; ?>js/jquery.dataTables.js"></script> 
  <script src="<?php echo web_root;?>assets/iCheck/icheck.min.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script type="text/javascript" src="<?php echo web_root; ?>js/jquery-ui.js"></script> 
  <script type="text/javascript" src="<?php echo web_root; ?>js/autofunc.js"></script> 
  <script src="<?php echo web_root;?>assets/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Page Script -->
<script>


(() =>{
 
  const openNavMenu = document.querySelector(".open-nav-menu"),
  closeNavMenu = document.querySelector(".close-nav-menu"),
  navMenu = document.querySelector(".nav-menu"),
  menuOverlay = document.querySelector(".menu-overlay"),
  mediaSize = 991;

  openNavMenu.addEventListener("click", toggleNav);
  closeNavMenu.addEventListener("click", toggleNav);
  // close the navMenu by clicking outside
  menuOverlay.addEventListener("click", toggleNav);

  function toggleNav() {
    navMenu.classList.toggle("open");
    menuOverlay.classList.toggle("active");
    document.body.classList.toggle("hidden-scrolling");
  }

  navMenu.addEventListener("click", (event) =>{
      if(event.target.hasAttribute("data-toggle") && 
        window.innerWidth <= mediaSize){
        // prevent default anchor click behavior
        event.preventDefault();
        const menuItemHasChildren = event.target.parentElement;
        // if menuItemHasChildren is already expanded, collapse it
        if(menuItemHasChildren.classList.contains("active")){
          collapseSubMenu();
        }
        else{
          // collapse existing expanded menuItemHasChildren
          if(navMenu.querySelector(".menu-item-has-children.active")){
          collapseSubMenu();
          }
          // expand new menuItemHasChildren
          menuItemHasChildren.classList.add("active");
          const subMenu = menuItemHasChildren.querySelector(".sub-menu");
          subMenu.style.maxHeight = subMenu.scrollHeight + "px";
        }
      }
  });
  function collapseSubMenu(){
    navMenu.querySelector(".menu-item-has-children.active .sub-menu")
    .removeAttribute("style");
    navMenu.querySelector(".menu-item-has-children.active")
    .classList.remove("active");
  }
  function resizeFix(){
     // if navMenu is open ,close it
     if(navMenu.classList.contains("open")){
      toggleNav();
     }
     // if menuItemHasChildren is expanded , collapse it
     if(navMenu.querySelector(".menu-item-has-children.active")){
          collapseSubMenu();
     }
  }

  window.addEventListener("resize", function(){
     if(this.innerWidth > mediaSize){
      resizeFix();
     }
  });

})();


 
  $(function () {
    //Add text editor
    $("#compose-textarea").wysihtml5();
  });
</script>
<script type="text/javascript" charset="utf-8">

$(document).ready(function() {
    var t = $('#example').DataTable( {
      "bSort": false,
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 0
        } ],

          //vertical scroll
         // "scrollY":        "300px",
        "scrollCollapse": true,

        //ordering start at column 1
        "order": [[ 1, 'desc' ]]
    } );
 
    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
} );
$(document).ready(function() {
    var t = $('#example2').DataTable( {
      "bSort": false,
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 0
        } ],

          //vertical scroll
         // "scrollY":        "300px",
        "scrollCollapse": true,

        //ordering start at column 1
        "order": [[ 1, 'desc' ]]
    } );
 
    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
} );

</script>  

<script type="text/javascript"> 

$('#date_picker').datetimepicker({
  format: 'mm/dd/yyyy',
    language:  'en',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
});

  
</script>
<script>
  function checkall(selector)
  {
    if(document.getElementById('chkall').checked==true)
    {
      var chkelement=document.getElementsByName(selector);
      for(var i=0;i<chkelement.length;i++)
      {
        chkelement.item(i).checked=true;
      }
    }
    else
    {
      var chkelement=document.getElementsByName(selector);
      for(var i=0;i<chkelement.length;i++)
      {
        chkelement.item(i).checked=false;
      }
    }
  }
   function checkNumber(textBox){
        while (textBox.value.length > 0 && isNaN(textBox.value)) {
          textBox.value = textBox.value.substring(0, textBox.value.length - 1)
        }
        textBox.value = trim(textBox.value);
      }
      //
      function checkText(textBox)
      {
        var alphaExp = /^[a-zA-Z]+$/;
        while (textBox.value.length > 0 && !textBox.value.match(alphaExp)) {
          textBox.value = textBox.value.substring(0, textBox.value.length - 1)
        }
        textBox.value = trim(textBox.value);
      }
 

  $(document).on("change",".radios",function(){

    var exerciseid = $(this).data('id');
    var value = $(this).val();

       // alert(value);
       if ($(this).is(':checked'))
        {
            $.ajax({
            type : "POST",
            url : "validation.php",
            dataType: "text",
            data: {ExerciseID:exerciseid,Value:value},
            success : function(data){
              // alert(data)
            }
           });
        }
  

  });

//    $(function(){
//   $('input[type="radio"]').change(function(){
//     if ($(this).is(':checked'))
//     {
//       alert($(this).val());
//       $(this).disabled=true;
//     }
//   });
// });
  </script>     

</body>
</html>