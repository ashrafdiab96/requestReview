<?php
include '/handel/support.php';
//check connection
	if ($conn->connect_error) {
		die ("<h3>فشل الأتصال من فضلك حاول مرة اخرى</h3>");
	}
	
$behavior = $time = $cleaness = $material = $materialPrice = $tps = "";
$workmanship = $workmanshipInp = $preview = $price = $knowUs = $rating = $replay = "";

//to define arabic language
//mysqli_set_charset($conn,'utf8');

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

echo $behavior;
echo $time;
echo $cleaness;
echo $material;
echo $materialPrice;
echo $tps;
echo $workmanship;
echo $workmanshipInp;
echo $preview;
echo $price;
echo $knowUs; 
echo $rating;
echo $replay; 
//insert data into db
/**
$insertQuery = "INSERT INTO follow_up_t
(paid , prices , time , tps , reason , cleaness , rate , product , product_cost , review , behavior , know_us)
VALUES
($workmanship , '$price' , '$time' , '$tps' , '$preview' , '$cleaness' , '$rating' , '$material' , '$materialPrice' , '$replay' , '$behavior' , '$knowUs' )";

// run the query
$result = $conn->query($insertQuery);
*/
// echo "<div class='container'>
//         <div class='row'>
//             <div class='col'>
//                 <h2> Hi </h2>
//             </div>
//         </div>
//     </div>";

?>


