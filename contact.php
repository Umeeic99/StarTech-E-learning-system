

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Form</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body class="bg-light">

<div class="container">
<div class="py-5 text-center">
        <h2 style="font-style: italic; font-weight: 900; font-family: Cooper Black;font-size: 40px">Contact us</h2>
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
      <label for="message">Message</label>
      <textarea name="txtMessage" class="form-control"  id="txtMessage"  placeholder="Message" required></textarea>
    </p>
    <p>&nbsp;</p>
    <p>
      <input type="submit" name="Submit" id="Submit" value="Click here to submit"  class="btn btn-primary btn-lg btn-block">
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
$txtMessage = $_POST['txtMessage'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`Id`, `Name`, `Email`, `Phone`, `Message`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";

// insert in database
$rs = mysqli_query($con, $sql);

echo "<p>Your message has been received. Thank you.</p>";


}
else
{
  echo "Are you a genuine visitor?";
 
}
?>