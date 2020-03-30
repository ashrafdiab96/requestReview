<?php
	include '/support.php';
	/* empty variables to carry form data */
	$behavior = $time  = $cleaness = $material = $materialPrice = $tps = "";
	$workmanship = $workmanshipInp = $ratingServ = $price = $knowUs = $rating = $replay = "";

	/* get form data */

	$requestID = $_GET['request_id'];
	
	if (isset($_GET['behavior'])) {
		$behavior = $_GET['behavior'];
	}
	
	if (isset($_GET['time'])) {
		$time = $_GET['time'];
	}

	if (isset($_GET['cleanness'])) {
		$cleaness = $_GET['cleanness'];
	}

	if (isset($_GET['material'])) {
		$material = $_GET['material'];
	}
	
	if (isset($_GET['materialPriceC'])) {
		$materialPrice = $_GET['materialPriceC'];
	}

	if (isset($_GET['tps'])) {
		$tps = $_GET['tps'];
	}

	if (isset($_GET['workmanshipInp'])) {
		$workmanshipInp = $_GET['workmanshipInp'];
	}

	if (isset($_GET['workmanship'])) {
		$workmanship = $_GET['workmanship'];
	}

	if (isset($_GET['price'])) {
		$price = $_GET['price'];
	}

	if (isset($_GET['knowUsAbout'])) {
		$knowUs = $_GET['knowUsAbout'];
	}

	if (isset($_GET['rating'])) {
		$rating = $_GET['rating'];
	}

    if(isset($_GET['ratingServ'])){
            $ratingServ = $_GET['ratingServ'];
        }

	if (isset($_GET['replay'])) {
		$replay = $_GET['replay'];
	}

	if($materialPrice == NULL){
		$materialPrice = 0;
	}
	
	$result = insertRecord($requestID, $workmanshipInp, $price, $time, $tps, $cleaness, $material, $materialPrice, $rating, $ratingServ, $replay, $behavior);
	$result = updateKnowUs($requestID, $knowUs);
	header("Location: ../thanks.html"); die;
?>

<html>
<head>
        <title>متابعة الطلب</title>


        <meta charset="UTF-8">
        <!--================================================================================================-->
        <link rel="icon" href="../images/icons/icons8-new-message-30.png">
        <!--================================================================================================-->
        <link rel="stylesheet" href="../css/all.min.css">
        <!--================================================================================================-->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <!--================================================================================================-->
        <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
        <!--================================================================================================-->
        <link rel="stylesheet" href="../css/thank.css">

    </head>

    <body>

    <div class='container thankContainer'>
        <div class='row'>
            <div class='col'>
			<br>
                <h2> لقد تم تقييم الطلب بنجاح </h2><br>
                <h2> شكرا لوقتك </h2><br>
                <h2>🥰🥰🥰🥰🥰🥰🥰🥰🥰</h2>
            </div>
        </div>
    </div>

    <!--================================================================================================-->
    <script src="../js/jquery-3.4.1.min.js"></script>
    <!--================================================================================================-->
    <script src="../js/popper.min.js"></script>
    <!--================================================================================================-->
    <script src="../js/bootstrap.min.js"></script>
    <!--================================================================================================-->

    </body>
</html>