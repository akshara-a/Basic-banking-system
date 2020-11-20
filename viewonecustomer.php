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
    <link rel="stylesheet" href="css/transfer.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
<?php require 'navbar.php'; ?>
    <div class="container" style="margin-top:100px;">
    <center>
        <form action="" method="POST">
            <h4> Re-enter the Customer ID to view further details </h4> <br>
            <input type="text" name="id" placeholder="Enter Customer-ID" style="margin: 20px;" required/> <br>
            <button class="submit" name="search"> View Details </button>
        </form>
</center>
            <?php
            $connection = mysqli_connect("localhost", "id15190826_akshara", "uCQ9ig6h{crHRt&^");
            $db = mysqli_select_db($connection, 'id15190826_banking');
            if(isset($_POST['search']))
            {
                $id = $_POST['id'];
                $query = "SELECT * FROM customer_details where id= '$id' ";
                $query_run = mysqli_query($connection, $query);
                if($row = mysqli_fetch_array($query_run))
                {
                    ?>

                    <center>
                        <b> Customer ID: </b> <?php echo $row['id'] ?> <br>
                        <b> Customer Name: </b> <?php echo $row['customer_name'] ?> <br>
                        <b> Email ID: </b> <?php echo $row['email_id'] ?> <br>
                        <b> Current Balance: </b> INR <?php echo $row['current_balance'] ?> <br>
                        <button class="submit" style="padding-right: 20px; padding-left: 20px;"><a href="transfer.php" style="text-decoration:">Transfer</a></button></td>
                </center>
                    <?php
                }
                else
            {
                echo "User not found!";
            }
            }
            
            ?>
    </div>
</body>
</html>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="js/all.js"></script>
    <script src="js/custom.js"></script>