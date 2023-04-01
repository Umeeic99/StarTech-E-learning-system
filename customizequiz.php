<style type="text/css">
 body, html {
  height: 100%;
  width: 100%
  font-family: Poppins-Regular, sans-serif;
   background: url(./images/backdemo2.jpg)no-repeat;
    background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    -moz-background-size: cover;
    min-height: 100%;
    background-size: 100% 100%
  </style>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title >Customized Quiz</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body class="bg-light">

<div class="container">
<div class="py-5 text-center">
        <h1 style="font-style: italic; font-weight: 900; font-family: Cooper Black;font-size: 40px">Customized Quiz</h1>
      </div>
<fieldset style="font-family:comic Sans MS;font-size: 15px;">
 
  <form name="frmContact" class="needs-validation " method="post" action="">
    <p>
      <label for="Name">Your Name </label>
      <input type="text" class="form-control" name="txtName" id="txtName" placeholder="Name" value="" required>
 <div class="invalid-feedback">
                  Valid first name is required.
                </div>
    </p>
    <p>
      <label for="email">Your Email</label>
      <input type="text"  class="form-control"  name="txtEmail" id="txtEmail" placeholder="Email" value="" required>
    </p>
    <p>
      <label for="phone">Your Phone</label>
      <input type="text"  class="form-control" name="txtPhone" id="txtPhone" placeholder="Phone" value="" required>
    </p>
     <p>
      <label for="class">Class</label>
      <input type="text"  class="form-control" name="txtClass" id="txtClass" placeholder="Class" value="" required>
    </p>
     <p>
      <label for="Marks">Marks</label>
      <input type="text"  class="form-control" name="txtMarks" id="txtMarks" placeholder="TotalMarks" value="" required>
    </p>
     <p>
      <label for="Date">Date</label>
      <input type="text"  class="form-control" name="txtDate" id="txtDate" placeholder="DateBefore" value="" required>
    </p>
    <p>
      <label for="Description">Description</label>
      <textarea name="txtDescription" class="form-control"  id="txtDescription"  placeholder="Description(TopicNames)" required></textarea>
    </p>
    <p>&nbsp;</p>
    <p>
      <input type="submit" name="Submit" id="Submit" value="Generate"  class="btn btn-primary btn-lg btn-block">
    </p>
  </form>
</fieldset>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>



<?php
// database connection code
if(isset($_POST['txtName']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','dbcaiwl');

// get the post records

$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtClass = $_POST['txtClass'];
$txtMarks = $_POST['txtMarks'];
$txtDate = $_POST['txtDate'];
$txtDescription = $_POST['txtDescription'];

// database insert SQL code
$sql = "INSERT INTO `tbl_customized` (`Id`, `Name`, `Email`,`Class`, `Marks`, `Date`, `Description`,`Phone`) VALUES  ('0', '$txtName', '$txtEmail', '$txtClass', '$txtMarks', '$txtDate', '$txtDescription','$txtPhone')";

// insert in database
$rs = mysqli_query($con, $sql);

echo "<p>Your message has been received. Thank you.We will send you quiz on your respective email address before due date.</p>";


}
else
{
  echo "Are you a genuine visitor?";
 
}
?>
<?php
require('config1.php');
?>
<form action="submit.php" method="post">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="<?php echo $publishableKey?>"
    data-amount="100000"
    data-name="Star Teach E-Learning System"
    data-description="Payment With Stripe"
    data-image="https://www.logostack.com/wp-content/uploads/designers/eclipse42/small-panda-01-600x420.jpg"
    data-currency="pkr"
    data-email="starTech150@gmail.com"
  >
  </script>

</form>