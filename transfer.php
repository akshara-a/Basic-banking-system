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
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/transfer.css">
</head>
<body>
<?php require 'navbar.php'; ?>
<h4 style="margin-top: 100px; margin-bottom: 20px;"><center> TRANSACTION </center></h4>
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
?>
<center>
<div>
    <form action="transfer.php" method="POST">
            <input type="text" name="sender_id" placeholder="Enter Sender ID" style="margin: 20px;" required/> <br>
            <input type="text" name="receiver_id" placeholder="Enter Receiver ID" style="margin: 20px;" required/> <br>
            <input type="text" name="amount" placeholder="Enter Amount" style="margin: 20px;" required/> <br>
           <button class="submit" type="submit" name="submit"style="margin: 20px;"> Send Money </button>
	</form>
</div>
</center>
<?php
 if(isset($_POST['submit']))
 {
	$sender_id = $_POST['sender_id'];
	$receiver_id = $_POST['receiver_id'];
    $amount = $_POST['amount'];
    
    $sql = "SELECT * FROM customer_details WHERE id='$sender_id'";
    $result=mysqli_query($conn, $sql); 
	$row=mysqli_fetch_assoc($result) ;
	$money= $row['current_balance'];


    $sql1 = "SELECT * FROM customer_details WHERE id='$receiver_id'";
	$result1 = mysqli_query($conn, $sql1); 
	
	if ($money<$amount) {
        ?>
        <center><h6> <?php echo "Insufficient amount, check your balance!"; ?> </h6></center>
        <center> <button class="view"> <a href="viewallcustomers.php" style="text-decoration: none;"> View All Customers </a> </button> </center>
        <?php
     }
     elseif($amount <= 0)
     {
         ?>
        <center><h6> <?php echo "Invalid amount, check the amount!"; ?> </h6></center>
        <center> <button class="view"> <a href="viewallcustomers.php" style="text-decoration: none;"> View All Customers </a> </button> </center>
        <?php
     }

	else{
	 	$sql2 = "UPDATE customer_details SET current_balance=current_balance-$amount WHERE id='$sender_id'";
		$sql3= "UPDATE customer_details SET current_balance=current_balance+$amount WHERE id='$receiver_id' ";
 		$result2 = mysqli_query($conn, $sql3); 
 		$result1 = mysqli_query($conn, $sql2);
 	 ?>
      <center><h6> <?php echo "Transfer to Customer-ID: $receiver_id is successfull!"; ?> </h6></center>

       <center> <button class="view"> <a href="viewallcustomers.php" style="text-decoration: none;"> View All Customers </a> </button> </center>
 		<?php
 	}
 }


    ?>
    <?php require 'footer.php'; ?>
</body>
</html>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="js/all.js"></script>
    <script src="js/custom.js"></script>


	