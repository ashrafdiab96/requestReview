// alert("welcome55555");
(function($) {

    /* show material price field if getting material */
    $('#materialBtnYes').click(function() {
        $('.materialPrice').addClass('show');
    });

    /* hide material price field if not get material */
    $('#materialBtnNo').click(function() {
        $('.materialPrice').removeClass('show');
    });

    /* show suggessted replays to uset when click on textarea */
    $('.clientReply').click(function() {
        $('.suggestedReply').fadeIn(400);
    });



})(jQuery);

/* add active class to behavior buttons when click on it */
var btns = document.getElementsByClassName("btnActiveBehavior");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("activeBtnBehavior");
        if (current.length > 0) {
            current[0].className = current[0].className.replace("activeBtnBehavior", "");
        }
        this.className += " activeBtnBehavior";
    });
}

/* add active class to times buttons when click on it */
var btns = document.getElementsByClassName("btnActiveTime");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("activeBtnTime");
        if (current.length > 0) {
            current[0].className = current[0].className.replace("activeBtnTime", "");
        }
        this.className += " activeBtnTime";
    });
}

// add active class to cleaness buttons when click on it */
var btns = document.getElementsByClassName("btnActiveCleanness");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("activeBtnCleaness");
        if (current.length > 0) {
            current[0].className = current[0].className.replace("activeBtnCleaness", "");
        }
        this.className += " activeBtnCleaness";
    });
}

/* add active class to material buttons when click on it */
var btns = document.getElementsByClassName("btnActiveMaterial");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("activeBtnMaterial");
        if (current.length > 0) {
            current[0].className = current[0].className.replace("activeBtnMaterial", "");
        }
        this.className += " activeBtnMaterial";
    });
}

/* add active class to tps buttons when click on it */
var btns = document.getElementsByClassName("btnActiveTps");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("activeBtnTps");
        if (current.length > 0) {
            current[0].className = current[0].className.replace("activeBtnTps", "");
        }
        this.className += " activeBtnTps";
    });
}

/* add active class to price buttons when click on it */
var btns = document.getElementsByClassName("btnActivePrice");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("activeBtnPrice");
        if (current.length > 0) {
            current[0].className = current[0].className.replace("activeBtnPrice", "");
        }
        this.className += " activeBtnPrice";
    });
}

/* validation of fields */
function validation() {
    var behaviorValidator = document.forms["contact"]["behavior"].value;
    if (behaviorValidator == null || behaviorValidator == "") {
        $(".error1").addClass("show");
        return false;
    }

    /*********************************************************************/
    var timeValidator = document.forms["contact"]["time"].value;
    if (timeValidator == null || timeValidator == "") {
        $(".error2").addClass("show");
        return false;
    }

    /*********************************************************************/
    var cleannesseValidator = document.forms["contact"]["cleanness"].value;
    if (cleannesseValidator == null || cleannesseValidator == "") {
        $(".error3").addClass("show");
        return false;
    }

    /*********************************************************************/
    var materialValidator = document.forms["contact"]["material"].value;
    if (materialValidator == null || materialValidator == "") {
        $(".error4").addClass("show");
        return false;
    }
    if(materialValidator == "جاب خامات"){
        var materialBuyingValidator = document.forms["contact"]["materialPrice"].value;
        if(materialBuyingValidator == null || materialBuyingValidator == ""){
            $(".error5").addClass("show");
        }
    }

    /*********************************************************************/
    var tpsValidator = document.forms["contact"]["tps"].value;
    if (tpsValidator == null || tpsValidator == "") {
        $(".error6").addClass("show");
        return false;
    }

    /*********************************************************************/
    // var workmanshipValidator = document.forms["contact"]["workmanship"].value;
    let workmanshipValidator = document.getElementById("workmanshipID").value;
    if (workmanshipValidator == null || workmanshipValidator == "") {
        $(".error7").addClass("show");
        return false;
    }

    /*********************************************************************/
    var priceValidator = document.forms["contact"]["price"].value;
    if (priceValidator == null || priceValidator == "") {
        $(".error9").addClass("show");
        return false;
    }

    /*********************************************************************/
    var knowUsAboutValidator = document.forms["contact"]["knowUsAbout"].value;
    if (knowUsAboutValidator == null || knowUsAboutValidator == "") {
        $(".error10").addClass("show");
        return false;
    }

    /*********************************************************************/
    var ratingValidator = document.forms["contact"]["rating"].value;
    if (ratingValidator == null || ratingValidator == "") {
        $(".error11").addClass("show");
        return false;
    }

    /*********************************************************************/
    var ratingServValidator = document.forms["contact"]["ratingServ"].value;
    if (ratingServValidator == null || ratingValidator == "") {
        $(".error13").addClass("show");
        return false;
    }

    /*********************************************************************/
    var replayValidator = document.forms['contact']['replay'].value;
    if (replayValidator == null || replayValidator == "") {
        $(".error12").addClass("show");
        return false;
    }
    location.href="handel/handelReviewRequest.php";
    return false;
}

function focusOnElement(elementID){
		var elmnt = document.getElementById(elementID);
		elmnt.focus();
		elmnt.scrollIntoView();
}


$("form").on('submit', function(e) {
    validation();
    e.preventDefault();
    e.validation();
});