<?php

/* empty variables to carry form data */
$behavior = $time = $cleaness = $material = $materialPrice = $tps = "";
$workmanship = $workmanshipInp = $preview = $price = $knowUs = $rating = $replay = "";

$serverName = "den1.mysql6.gear.host";
$userName = "sanyaatest";
$dbPass = "Ko6j1572F7_~";
$dbName = "sanyaatest";

//create connection
$conn = new mysqli ($serverName , $userName , $dbPass , $dbName);

//check connection
if ($conn->connect_error) {
    die ("<h3>فشل الإتصال مع قواعد البيانات</h3><br>".$conn->connect_error);
}

//get request_id
//$requestID = $_GET['request_id'];

$requestID = 3;

$selectQuery = "SELECT request_id
                FROM follow_up_t";

$result = $conn->query($selectQuery);


//return request cost
function getCost(int $requestID): double {
    $costQuery = "SELECT product_cost
                  FROM follow_up_t
                  WHERE request_id = $requestID";
    $requestCost = mysql_fetch_array($costQuery);
    if(checkRequestIDIfUnsigned($requestID) == false){
        return 0;
    }
    return $requestCost;
}

//update know us
$knowUsQuery = "SELECT know_us
FROM follow_up_t
WHERE request_id = $requestID";
$knowUs = $conn->query($knowUsQuery);

function updateKnowUs(int $reqeustID, string $knowUs): bool {
    if(checkRequestIDIfUnsigned($requestID) == false){
        return false;
    }
    if($knowUs == NULL){
        return false;
    }
    else{
        return true;
    }
}

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

if (isset($_GET['replay'])) {
    $replay = $_GET['replay'];
}

//insert data into db
$insertQuery = "INSERT INTO follow_up_t
(paid , prices , time , tps , reason , cleaness , rate , product , product_cost , review , behavior , know_us)
VALUES
($workmanship , '$price' , '$time' , '$tps' , '$preview' , '$cleaness' , '$rating' , '$material' , '$materialPrice' , '$replay' , '$behavior' , '$knowUs' )";

// run the query
$result = $conn->query($insertQuery);


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
