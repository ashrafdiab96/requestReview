<?php
	include '/handel/support.php';
	//check connection
	if ($conn->connect_error) {
		die ("<h3>فشل الأتصال من فضلك حاول مرة اخرى</h3>");
	}
	
	/* empty variables to carry form data */
	$behavior = $time = $cleaness = $material = $materialPrice = $tps = "";
	$workmanship = $workmanshipInp = $preview = $price = $knowUs = $rating = $replay = "";
	//get request_id
	//$requestID = $_GET['request_id'];
	$requestID = 109;

	/* get form data */
	if (isset($_GET['behavior'])) {
		$behavior = $_GET['behavior'];
	}

	if (isset($_GET['time'])) {
		$time = $_GET['time'];
	}

	if (isset($_GET['cleanness'])) {
		$cleaness = $_GET['cleanness'];
		//mapping
		function clean($cleanValue){
			if($cleanValue == "نظف المكان"){
				return 1;
			}
			else{
				return 0;
			}
			$cleanValueInput = array("نظف المكان" , "ساب المكان وحش");
			array_map("clean" , $cleanValueInput);
		}
	}

	if (isset($_GET['material'])) {
		$material = $_GET['material'];
		//mapping
		function bringMaterial($materialValue){
			if($materialValue == "جاب خامات"){
				return 1;
			}
			else{
				return 0;
			}
			$materialValueInput = array("جاب خامات" , "ماجابش خامات");
			array_map("bringMaterial" , $materialValueInput);
		}
	}

	if (isset($_GET['materialPrice'])) {
		$materialPrice = $_GET['materialPrice'];
	}

	if (isset($_GET['tps'])) {
		$tps = $_GET['tps'];
		//mapping
		function takeTps($tpsValue){
			if($tpsValue == "أخد تبس"){
				return 1;
			}
			else{
				return 0;
			}
			$tpsValueInput = array("أخد تبس" , "ما أخدش تبس");
			array_map("takeTps" , $tpsValueInput);
		}
	}

	if (isset($_GET['workmanshipInp'])) {
		$workmanshipInp = $_GET['workmanshipInp'];
	}

	if (isset($_GET['workmanship'])) {
		$workmanship = $_GET['workmanship'];
	}

	if (isset($_GET['preview'])) {
		$preview = $_GET['preview'];
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

	echo $requestID; echo "\r\n";

	echo $behavior; echo "\r\n";
	
	echo $time; echo "\r\n";
	
	echo $cleaness;	echo "\r\n";

	echo $material;	echo "\r\n";

	//$materialPrice = 0;
	echo $materialPrice; echo "\r\n";

	echo $tps; echo "\r\n";

	//echo $workmanship;	echo "\r\n";

	echo $workmanshipInp;	echo "\r\n";

	//$preview = 5;
	echo $preview;	echo "\r\n";

	echo $price;	echo "\r\n";

	echo $knowUs; 	echo "\r\n";

	echo $rating;	echo "\r\n";

	echo $replay; 
	insert($conn, $requestID, $workmanshipInp, $price, $time, $tps, $cleaness, $material, $materialPrice, $preview, $rating, $replay, $behavior);
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
