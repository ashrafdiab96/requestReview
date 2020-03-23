
<?php
	include '/handel/support.php';
	
	
	//get request_id
	$request_id = 0;
	$request_id = $_GET['id'];

	if(!checkRequestIDIfUnsigned($request_id)){
		header("Location: error.html"); die;
	}

	//check connection
	if ($conn->connect_error) {
		die ("<h3>فشل الأتصال من فضلك حاول مرة اخرى</h3>");
	}
	
	if(!checkRequestIfExist($request_id, $conn)){
		header("Location: error.html"); die;
	}
	
	if(checkRequestIfReviewed($request_id, $conn)){
		header("Location: thanks.html"); die;
	}
	
	$cost = getCost($request_id, $conn);
?>


<html>

    <head>
        <title>متابعة الطلب</title>


        <meta charset="UTF-8">
        <!--================================================================================================-->
        <link rel="icon" href="images/icons/icons8-new-message-30.png">
        <!--================================================================================================-->
        <link rel="stylesheet" href="css/all.min.css">
        <!--================================================================================================-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!--================================================================================================-->
        <link rel="stylesheet" href="css/bootstrap-RTL-4.1.1-master/bootstrap-rtl.css">
        <!--================================================================================================-->
        <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
        <!--================================================================================================-->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous">
        <!--================================================================================================-->
        <link rel="stylesheet" href="css/style.css">
        <!--================================================================================================-->

    </head>


    <body>


    <header>
        <div class="header">
            <h2>تقييم الخدمة</h2>
        </div>
    </header>


    <div class="container">
        <form name="contact" id="contact" action="handel/handelReviewRequest.php" method="GET" onsubmit="return validation();">
            <fieldset id="behavior">
                <label>سلوك الفني <span class="requiredStar">*</span></label>
                <span class="error1">هذا الحقل مطلوب</span>
                <br>
                <div class="myDiv">
                    <label class="btn btn-outline-success btnActiveBehavior">
                        <input name="behavior" type="radio" class="behaviorError" value="كويس جدا">
                        كويس جدا
                    </label>
                    <label class="btn btn-outline-primary btnActiveBehavior">
                        <input name="behavior" type="radio" class="behaviorError" value="كويس">
                        كويس
                    </label>
                    <label class="btn btn-outline-secondary btnActiveBehavior">
                        <input name="behavior" type="radio" class="behaviorError" value="مقبول">
                        مقبول
                    </label>
                    <label class="btn btn-outline-warning btnActiveBehavior">
                        <input name="behavior" type="radio" class="behaviorError" value="سيئ">
                        سيئ
                    </label>
                    <label class="btn btn-outline-danger btnActiveBehavior">
                        <input name="behavior" type="radio" class="behaviorError" value="سيئ جدا">
                        سيئ جدا
                    </label>
                </div>
            </fieldset>
            <hr>
            <fieldset id="time">
                <label>المواعيد <span class="requiredStar">*</span></label>
                <span class="error2">هذا الحقل مطلوب</span>
                <br>
                <label class="btn btn-outline-success btnActiveTime">
                    <input name="time" type="radio" id="x" value="1" class="time">
                    جه في ميعاده
                </label>
                <label class="btn btn-outline-danger btnActiveTime">
                    <input name="time" type="radio" value="0" class="time">
                    مجاش في ميعاده
                </label>
            </fieldset>
            <hr>
            <fieldset id="cleanness">
                <label>نظافة المكان <span class="requiredStar">*</span></label>
                <span class="error3">هذا الحقل مطلوب</span>
                <br>
                <label class="btn btn-outline-success btnActiveCleanness">
                    <input name="cleanness" type="radio" value="1" class="clean">
                    نظف المكان
                </label>
                <label class="btn btn-outline-danger btnActiveCleanness">
                    <input name="cleanness" type="radio" value="0" class="clean">
                    ساب المكان وحش
                </label>
                <br>
            </fieldset>
            <hr>
            <fieldset id="material">
                <label>الخامات <span class="requiredStar">*</span></label>
                <span class="error4">هذا الحقل مطلوب</span>
                <br>
                <label class="btn btn-outline-success btnActiveMaterial" id="materialBtnYes">
                    <input name="material" type="radio" value="1" class="material">
                    جاب خامات
                </label>
                <label class="btn btn-outline-danger btnActiveMaterial" id="materialBtnNo">
                    <input name="material" type="radio" value="0" class="material">
                    ماجابش خامات
                </label>
            </fieldset>
            <fieldset class="materialPrice">
                <label>قيمة الخامات <span class="requiredStar">*</span></label>
                <span class="error5">هذا الحقل مطلوب</span>
                <input name="materialPrice" placeholder="الخامات بكام" type="text">                
            </fieldset>
            <hr>
            <fieldset id="tps">
                <label>التبس <span class="requiredStar">*</span></label>
                <span class="error6">هذا الحقل مطلوب</span>
                <br>
                <label class="btn btn-outline-success btnActiveTps">
                    <input name="tps" type="radio" value="1" class="tps">
                    أخد تبس
                </label>
                <label class="btn btn-outline-danger btnActiveTps">
                    <input name="tps" type="radio" value="0" class="tps">
                    ما أخدش تبس
                </label>
            </fieldset>
            <hr>
            <fieldset class="workmanship">
                <label>المصنعية <span class="requiredStar">*</span></label>
                <span class="error7">هذا الحقل مطلوب</span>
                <input placeholder="أخد منك المصنعية قد أيه ( إختياري )" type="text" name="workmanshipInp" class="workmanship"><br>
				<?php
					echo "<input type='radio' name='workmanship' value='$cost' require> <label>$cost</label><br>";
				?>
            </fieldset>
            <hr>
            <fieldset id="price">
                <label>الأسعار <span class="requiredStar">*</span></label>
                <span class='error9'>هذا الحقل مطلوب</span>
                <br>
                <label class="btn btn-outline-success btnActivePrice">
                    <input name="price" type="radio" value="كويسة قوي" class="price">
                    كويسة قوي
                </label>
                <label class="btn btn-outline-primary btnActivePrice">
                    <input name="price" type="radio" value="كويسة" class="price">
                    كويسة
                </label>
                <label class="btn btn-outline-secondary btnActivePrice">
                    <input name="price" type="radio" value="مقبولة" class="price">
                    مقبولة
                </label>                
                <label class="btn btn-outline-warning btnActivePrice">
                    <input name="price" type="radio" value="غالية شوية" class="price">
                    غالية شوية
                </label>                
                <label class="btn btn-outline-danger btnActivePrice">
                    <input name="price" type="radio" value="غالية قوي" class="price">
                    غالية قوي
                </label>
            </fieldset>
            <hr>
            <fieldset id="knowUs">
                <label>عرفتنا ازاي <span class="requiredStar">*</span></label>
                <span class='error10'>هذا الحقل مطلوب</span>
                <div class="knowUsAbout">
                    <input type="radio" id="facebook" name="knowUsAbout" value="صفحتنا" class="knowUs">
                    <label title="صفحة الفيس بوك">
                        <i class="fab fa-facebook-square fa-2x"></i>
                        <span>صفحتنا على الفيس بوك</span>
                    </label>
                    <br>
                    <input type="radio" id="twitter" name="knowUsAbout" value="جروبات" class="knowUs">
                    <label title="تويتر">
                        <i class="fab fa-twitter-square fa-2x"></i>
                        <span>جروبات الفيس بوك</span>
                    </label>
                    <br>
                    <input type="radio" id="webSite" name="knowUsAbout" value="صفحتنا" class="knowUs">
                    <label title="صفحتنا">
                        <i class="far fa-file-code fa-2x"></i>
                        <span>موقعنا على الانترنت </span>
                    </label>
                    <br>
                    <input type="radio" id="friend" name="knowUsAbout" value="صديق-جار" class="knowUs">
                    <label title="جار-صديق">
                        <i class="fas fa-user-friends fa-2x"></i>
                        <span> جار - صديق </span>
                    </label>
                    <br>
                    <input type="radio" id="banner" name="knowUsAbout" value="يافطة" class="knowUs">
                    <label title="يافطة">
                        <i class="fas fa-band-aid fa-2x"></i>
                        <span> يافطة إعلانية </span>
                    </label>
                    <br>
                    <input type="radio" id="advertising" name="knowUsAbout" value="الإعلانات المطبوعة" class="knowUs">
                    <label title="الإعلانات المطبوعة">
                        <i class="fas fa-ad fa-2x"></i>
                        <span> الإعلانات المطبوعة </span>
                    </label>
                </div>
            </fieldset>
            <hr>
            <fieldset class="preview">
            <label>تقييم الفني <span class="requiredStar">*</span></label>
                <div class="star-rating">
                    <input id="star-1" type="radio" name="rating" value="5" class="preview">
			        <label for="star-1" title="5 stars">
					    <i class="active fa fa-star" aria-hidden="true"></i>
                    </label>
                    <input id="star-2" type="radio" name="rating" value="4" class="preview">
		 	        <label for="star-2" title="4 stars">
					    <i class="active fa fa-star" aria-hidden="true"></i>
                    </label>
                    <input id="star-3" type="radio" name="rating" value="3" class="preview">
			        <label for="star-3" title="3 stars">
					    <i class="active fa fa-star" aria-hidden="true"></i>
                    </label>
                    <input id="star-4" type="radio" name="rating" value="2" class="preview">
			        <label for="star-4" title="2 stars">
					    <i class="active fa fa-star" aria-hidden="true"></i>
			        </label>
			        <input id="star-5" type="radio" name="rating" value="1" class="preview">
			        <label for="star-5" title="1 star">
					    <i class="active fa fa-star" aria-hidden="true"></i>
			        </label>
                </div>
                <span class='error11'>هذا الحقل مطلوب</span>
            </fieldset>
            <hr>
            <fieldset class="ratingSystem">
                <label>تقييم الخدمة <span class="requiredStar">*</span></label>
                <div class="star-rating">
                    <input id="star-1" type="radio" name="rating" value="5" class="ratingSystem">
			        <label for="star-1" title="5 stars">
					    <i class="active fa fa-star" aria-hidden="true"></i>
                    </label>
                    <input id="star-2" type="radio" name="rating" value="4" class="ratingSystem">
		 	        <label for="star-2" title="4 stars">
					    <i class="active fa fa-star" aria-hidden="true"></i>
                    </label>
                    <input id="star-3" type="radio" name="rating" value="3" class="ratingSystem">
			        <label for="star-3" title="3 stars">
					    <i class="active fa fa-star" aria-hidden="true"></i>
                    </label>
                    <input id="star-4" type="radio" name="rating" value="2" class="ratingSystem">
			        <label for="star-4" title="2 stars">
					    <i class="active fa fa-star" aria-hidden="true"></i>
			        </label>
			        <input id="star-5" type="radio" name="rating" value="1" class="ratingSystem">
			        <label for="star-5" title="1 star">
					    <i class="active fa fa-star" aria-hidden="true"></i>
			        </label>
                </div>
                <span class='error11'>هذا الحقل مطلوب</span>
            </fieldset>
            <hr>
            <fieldset class="replay">
                <label>رد العميل <span class="requiredStar">*</span></label>
                <span class='error12'>هذا الحقل مطلوب</span>
                <textarea name="replay" placeholder="ملاحظتك تهمنا, سيبها هنا" class="clientReply"></textarea>
                <div class="suggestedReply">
                    <div class="suggestedReplyStyle">
                        <h4>إقتراحات :</h4>
                        <p>- الخدمة كويسة جدا</p>
                        <p>- الخدمة كويسة بس الفني وحش</p>
                        <p>- الخدمة وحشة بس الفني كويس</p>
                        <p>- الخدمة سيئة جدا</p>
                    </div>
                </div>
            </fieldset>
            <hr>
            <fieldset>
                <button title="إرسال التقييم" class="submit" name="submit" type="submit" onclick="return validation()">تقييم</button>
            </fieldset>
        </form>
    </div>

    <!--================================================================================================-->

    <footer class="footer">
        <div class="container-fluid footerContent py-5">
            <div class="row">
                <div class="footerIcons">
                    <div class="icons">
                        <a href="https://play.google.com/store/apps/details?id=com.semicoloneg.sanyaa&fbclid=IwAR3U7XEl7FFqBKyw79oLbmwkuN1Kjc1FrP8KlrFQSJFJnGow9ng9aMsz1T0" class="px-1" title="تطبيق الأندرويد" target="_blank">
                            <i class="fas fa-robot fa-2x android"></i>
                        </a>
                        <a href="https://www.facebook.com/SANAY3EDELIVERY/" class="px-1" title="صفحة الفيس بوك" target="_blank">
                            <i class="fab fa-facebook-f fa-2x facebook"></i>
                        </a>
                        <a href="https://apps.apple.com/us/app/%D8%B5%D9%86%D8%A7%D9%8A%D8%B9%D9%8A-%D8%AF%D9%84%D9%8A%D9%81%D8%B1%D9%8A/id1500739129?fbclid=IwAR0Ir1QaXYTeJapZcN6MI2I8CPARIdtse4W5QkdHIZ6KnwMyLARV01ly8Tw" class="px-1" title="تطبيق أبل ستور"target="_blank">
                            <i class="fab fa-apple fa-2x ios"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="footerLinks">
                    <div class="links">
                        <!-- <a href="#" class="px-2">الصفحة الرئيسية</a>
                        <a href="#" class="px-2">من نحن</a>
                        <a href="#" class="px-2">تواصل معنا</a>
                        <a href="#" class="px-2">فروعنا</a> -->
                        <h6>Contacts : 01200299917 - 01093408442</h6>
                    </div>
                </div>
            </div>

        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="copy w-100 col">
                    <p class="text-center text-white py-2">
                        حقوق النشر &copy; 2020 &copy; جميع الحقوق محفوظة للموقع
                    </p>
                </div>
            </div>
        </div>
    </footer>
    

    <!--================================================================================================-->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!--================================================================================================-->
    <script src="js/popper.min.js"></script>
    <!--================================================================================================-->
    <script src="js/bootstrap.min.js"></script>
    <!--================================================================================================-->
    <script src="js/script.js"></script>
    <!--================================================================================================-->
     


    </body>

</html>

