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
let behaviorValidator = document.forms["contact"]["behavior"].value;
let timeValidator = document.forms["contact"]["time"].value;
let cleannesseValidator = document.forms["contact"]["cleanness"].value;
let materialValidator = document.forms["contact"]["material"].value;
let tpsValidator = document.forms["contact"]["tps"].value;
let workmanshipValidator = document.forms["contact"]["workmanship"].value;
let previewValidator = document.forms["contact"]["preview"].value;
let priceValidator = document.forms["contact"]["price"].value;
let knowUsAboutValidator = document.forms["contact"]["knowUsAbout"].value;
let ratingValidator = document.forms["contact"]["rating"].value;
let replayValidator = document.forms['contact']['replay'].value;

function validation() {
    if (behaviorValidator == null || behaviorValidator == "") {
        $(".error1").addClass("show");
        return false;
    }

    if (timeValidator == null || timeValidator == "") {
        $(".error2").addClass("show");
        return false;
    }

    if (cleannesseValidator == null || cleannesseValidator == "") {
        $(".error3").addClass("show");
        return false;
    }

    if (materialValidator == null || materialValidator == "") {
        $(".error4").addClass("show");
        return false;
    }

    if (tpsValidator == null || tpsValidator == "") {
        $(".error6").addClass("show");
        return false;
    }

    if (workmanshipValidator == null || workmanshipValidator == "") {
        $(".error7").addClass("show");
        return false;
    }

    if (previewValidator == null || previewValidator == "") {
        $(".error8").addClass("show");
        return false;
    }

    if (priceValidator == null || priceValidator == "") {
        $(".error9").addClass("show");
        return false;
    }
    if (knowUsAboutValidator == null || knowUsAboutValidator == "") {
        $(".error10").addClass("show");
        return false;
    }

    if (ratingValidator == null || ratingValidator == "") {
        $(".error11").addClass("show");
        return false;
    }

    if (replayValidator == null || replayValidator == "") {
        $(".error12").addClass("show");
        return false;
    }
    return false;
}


$("form").on('submit', function(e) {
    validation();
    e.preventDefault();
    e.validation();
});
