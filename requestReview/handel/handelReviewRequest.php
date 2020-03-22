<?php

//for test
//echo "hallo";

/* empty variables to carry form data */
$behavior = $time = $cleaness = $material = $materialPrice = $tps = "";
$workmanship = $workmanshipInp = $preview = $price = $knowUs = $rating = $replay = "";

/* connect with database */
/* variables to carry db info */
$serverName = "localhost";
$userName = "root";
$dbPass = "";
$dbName = "sanyaadelivery";

/* create connection */
$conn = new mysqli ($serverName , $userName , $dbPass , $dbName);

/* check connection */
if ($conn->connect_error) {
    die ("<h3>فشل الإتصال مع قواعد البيانات</h3><br>".$conn->connect_error);
}

//to define arabic language
mysqli_set_charset($conn,'utf8');

/* get form data */
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

if (isset($_GET['materialPrice'])) {
    $materialPrice = $_GET['materialPrice'];
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

// for test
// echo $behavior."<br>".$time."<br>".$cleaness."<br>".$material."<br>".$materialPrice."<br>".$tps."<br>";
// echo $workmanship."<br>".$workmanshipInp."<br>".$preview."<br>".$price."<br>".$knowUs."<br>";
// echo $rating."<br>".$replay."<br>";

//insert data into db
$insertQuery = "INSERT INTO follow_up_t
(paid , prices , time , tps , reason , cleaness , rate , product , product_cost , review , behavior , know_us)
VALUES
($workmanship , '$price' , '$time' , '$tps' , '$preview' , '$cleaness' , '$rating' , '$material' , '$materialPrice' , '$replay' , '$behavior' , '$knowUs' )";

// run the query
$result = $conn->query($insertQuery);

// echo "<div class='container'>
//         <div class='row'>
//             <div class='col'>
//                 <h2> Hi </h2>
//             </div>
//         </div>
//     </div>";

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
        <link rel="stylesheet" href="../css/handelReviewRequest.css">

    </head>

    <body>

    <div class='container'>
        <div class='row'>
            <div class='col d-flex justify-content-center align-items-center'>
                <h2> لقد تم إرسال التقييم بنجاح, نشكركم على وقتكم </h2>
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