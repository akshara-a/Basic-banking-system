<!DOCTYPE html>
    <html lang="en" class=" js csstransitions android mobile portrait csstransforms csstransforms3d" style="right: 0px;  margin-right: 0px;left: 0px;">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Site Metas -->
    <title>ABC Bank</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/style_css.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
<?php require 'navbar.php'; ?>
<h4 style="margin-top: 100px; margin-bottom: 20px;"><center> LIST OF CUSTOMERS </center></h4>
<?php
$servername = "localhost";
$username = "id15190826_akshara";
$password = "uCQ9ig6h{crHRt&^";
$dbname = "id15190826_banking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, customer_name, email_id, current_balance FROM customer_details";
$result = $conn->query($sql);
?>
<center>
<div style="overflow-x:auto;">
<table>
<tr>
    <th><center> Customer ID </center> </th>
    <th><center> Customer Name </center> </th>
    <th><center> Email ID </center> </th>
    <th><center> Current Balance </center> </th>
    <th><center> Transaction panel </center> </th>
</tr>
<?php

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    ?>
    <tr>
      <td> <center> <?php echo $row["id"]; ?> </center> </td>
      <td><center><?php echo $row["customer_name"]; ?> </center></td>
      <td><center><?php echo $row["email_id"]; ?> </center></td>
      <td><center> <?php echo $row["current_balance"]; ?> </center> </td>
      <td><a href="viewonecustomer.php"> <center><input type="submit" name="search" value="Check"> </center></a> </td>
    </tr>
    <?php
  }
} else {
  echo "0 results";
}

?>
</table>
</div>
</center>
<?php
$conn->close();
?>
<?php require 'footer.php'; ?>
</body>
</html>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="js/all.js"></script>
    <script src="js/custom.js"></script>
