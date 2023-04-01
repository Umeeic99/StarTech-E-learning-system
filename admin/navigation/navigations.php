<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<title>Star Teach E-Learning System</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<!-- Bootstrap core CSS -->

<link href="<?php echo web_root; ?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo web_root; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen"/>
<link href="<?php echo web_root; ?>css/dataTables.bootstrap.css" rel="stylesheet" media="screen"/>  
<link href="<?php echo web_root; ?>css/alumni.css" rel="stylesheet" media="screen"/>
<link href="<?php echo web_root; ?>fonts/font-awesome.min.css" rel="stylesheet"/>   
<!-- <link href="<?php echo web_root; ?>admin/adminMenu/dist/metisMenu.min.css" rel="stylesheet"/>   -->

<link rel="stylesheet" href="<?php echo web_root; ?>assets/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<link rel="stylesheet" href="<?php echo web_root; ?>css/jquery-ui.css"> 
<!-- <link rel="stylesheet" href="<?php echo web_root; ?>web/viewer.css">  -->
<!-- Plugins -->

 <style type="text/css">

     .page-footer{
      color: red;
     }
 @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
*{
  list-style: none;
  text-decoration: none;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Open Sans', sans-serif;
}
body{
  background: #f5f6fa;
}
.wrapper .sidebar{
  background: rgb(5, 68, 104);
  position: fixed;
  top: 0;
  left: 0;
  width: 225px;
  height: 100%;
  padding: 20px 0;
  transition: all 0.5s ease;
}
.wrapper .sidebar .profile{
  margin-bottom: 30px;
  text-align: center;
}
.wrapper .sidebar .profile img{
  display: block;
  width: 100px;
  height: 100px;
    border-radius: 50%;
  margin: 0 auto;
}
.wrapper .sidebar .profile h3{
  color: #ffffff;
  margin: 10px 0 5px;
}
.wrapper .sidebar .profile p{
  color: rgb(206, 240, 253);
  font-size: 14px;
}
.wrapper .sidebar ul li a{
  display: block;
  padding: 13px 30px;
  border-bottom: 1px solid #10558d;
  color: rgb(241, 237, 237);
  font-size: 16px;
  position: relative;
}
.wrapper .sidebar ul li a .icon{
  color: #dee4ec;
  width: 30px;
  display: inline-block;
}
.wrapper .sidebar ul li a:hover,
.wrapper .sidebar ul li a.active{
  color: #0c7db1;
  background:white;
    border-right: 2px solid rgb(5, 68, 104);
}
.wrapper .sidebar ul li a:hover .icon,
.wrapper .sidebar ul li a.active .icon{
  color: #0c7db1;
}
.wrapper .sidebar ul li a:hover:before,
.wrapper .sidebar ul li a.active:before{
  display: block;
}


body.active .wrapper .sidebar{
  left: -225px;
}
body.active .wrapper .section{
  margin-left: 0;
  width: 100%;
}
#page-wrapper{
  top: 60px;
  }
 </style>

<!-- Custom styles for this template -->
<!-- <link href="<?php echo web_root; ?>css/offcanvas.css" rel="stylesheet"> -->
   <?php
   admin_confirm_logged_in();
  ?>
<body>
<nav class="navbar navbar-default  " role="navigation" style="margin-top: 0px">

<div class="navbar-header">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <a class="navbar-brand"  href="<?php echo web_root; ?>admin/index.php" >StarTech E-Learning System </a>
</div>

  <ul class="nav navbar-top-links navbar-right" >
   <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" >
                <i class="fa fa-user fa-fw"></i> <?php echo $_SESSION['NAME']; ?>  
            </a> 

    </li>
         <li><a href="<?php echo web_root; ?>admin/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
  </ul>

<div class="wrapper">
     <!--Top Menu & Menu button-->
     
        <div class="sidebar">
            <div class="profile">
                <!--Profile Image-->
               <!--  <img src=,/images/EducationalLogo.png" alt="profile_picture"> -->
                <!--Profile Title & Descruption-->
                <h3>StarTech E-Learning System</h3>
            </div>
             <!--Menu item-->
             <ul>
               
                <li>
                    <a href="<?php echo web_root; ?>admin/index.php">
                        <span class="icon"><i class="fas fa-desktop"></i></span>
                        <span class="item">My Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo web_root; ?>admin/modules/lesson/index.php">
                        <span class="icon"><i class="fas fa-user-friends"></i></span>
                        <span class="item">Lessons</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo web_root; ?>admin/modules/exercises/index.php">
                        <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                        <span class="item">Exercises</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo web_root; ?>admin/modules/galery/index.php">
                        <span class="icon"><i class="fas fa-database"></i></span>
                        <span class="item">Gallery</span>
                    </a>
                </li>
               
                <li>
                    <a href="<?php echo web_root; ?>admin/modules/user/index.php">
                        <span class="icon"><i class="fas fa-user-shield"></i></span>
                        <span class="item">Manage Admin</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo web_root; ?>admin/modules/modstudent/index.php">
                        <span class="icon"><i class="fas fa-cog"></i></span>
                        <span class="item">Students</span>
                    </a>
                </li>
  </ul>
       </div>
        
    </div>
  <script>
      var hamburger = document.querySelector(".hamburger");
  hamburger.addEventListener("click", function(){
    document.querySelector("body").classList.toggle("active");
  })
  </script>
</section>


<section id="page-wrapper"> 
  <?php  check_message(); ?> 
  <?php  require_once $content;?>  
 </section> 

<section id="page-footer"> 
      <footer>  <p align="center">&copy; Star Teach E-Learning System </p></footer>
</section>
<!-- Plugins -->

<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>js/jquery.js"></script> 
<script src="<?php echo web_root; ?>js/bootstrap.min.js"></script>
<script src="<?php echo web_root; ?>admin/adminMenu/dist/metisMenu.min.js"></script>
  
<script src="<?php echo web_root; ?>js/jquery.dataTables.min.js"></script>/
<script src="<?php echo web_root; ?>js/dataTables.bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo web_root; ?>js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo web_root; ?>js/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>

<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>js/kcctc.js"></script>
<script src="<?php echo web_root;?>assets/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script type="text/javascript" src="<?php echo web_root; ?>js/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo web_root; ?>js/autofunc.js"></script>

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

        // "scrollCollapse": true,

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


<script>

$(function(){
  $(".tds").each(function(i){
    len=$(this).text().length;
    if(len>80)
    {
      $(this).text($(this).text().substr(0,80)+'...');
    }
  });
});
  $(function () {
    //Add text editor 
     $("#ANNOUNCEMENT_WHAT").wysihtml5();
     $("#EVENT_WHAT").wysihtml5();
     $("#compose-textarea").wysihtml5();
  });
</script>
<script type="text/javascript">
    $(function () {
        $('#datetimepicker2').datetimepicker({
            locale: 'ru',
             autoclose: 1,
        });
    });
</script>

<script type="text/javascript">

$("#retype_user_pass").focusout(function(){

        var pass = $("#user_pass").val();
        var repass = $(this).val();
        if (pass != repass) {
            alert("Password does not match");
        };
});

function validatedpass(){

     var pass = $("#user_pass").val();
        var repass = $("#retype_user_pass").val();
        if (pass != repass) {
            alert("Password does not match");
            return false
        }else{
            return true
        };
}

$('#date_pickerfrom').datetimepicker({
  format: 'yyyy',
    language:  'en',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 4,
    minView: 4,
    forceParse: 0
    });


$('#date_pickerto').datetimepicker({
  format: 'yyyy',
    language:  'en',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 4,
    minView: 4,
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

  </script>

<script type="text/javascript">
 


// function truncateText(selector, maxLength) {
//     var element = document.querySelector(selector),
//         truncated = element.innerText;

//     if (truncated.length > maxLength) {
//         truncated = truncated.substr(0,maxLength) + '...';
//     }
//     return truncated;
// }
// //You can then call the function with something like what i have below.
// document.querySelector('#tds').innerText = truncateText('#tds', 107);
    </script>

</body>
</html>
