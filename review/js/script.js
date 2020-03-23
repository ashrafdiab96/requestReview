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
    // alert(behaviorValidator);
    if (behaviorValidator == null || behaviorValidator == "") {
        $(".error1").addClass("show");
		focusOnElement("behavior");
        return false;
    }
	else{
		$(".error1").removeClass("show");
	}

    var timeValidator = document.forms["contact"]["time"].value;
    if (timeValidator == null || timeValidator == "") {
        $(".error2").addClass("show");
		focusOnElement("time");
        return false;
    }
	else{
		$(".error2").removeClass("show");
	}

    var cleannesseValidator = document.forms["contact"]["cleanness"].value;
    if (cleannesseValidator == null || cleannesseValidator == "") {
        $(".error3").addClass("show");
		focusOnElement("cleanness");
        return false;
    }
	else{
		$(".error3").removeClass("show");
	}

    var materialValidator = document.forms["contact"]["material"].value;
    if (materialValidator == null || materialValidator == "") {
        $(".error4").addClass("show");
		focusOnElement("material");
        return false;
    }
	else{
		$(".error4").removeClass("show");
	}
	
    var tpsValidator = document.forms["contact"]["tps"].value;
    if (tpsValidator == null || tpsValidator == "") {
        $(".error6").addClass("show");
		focusOnElement("tps");
        return false;
    }
	else{
		$(".error6").removeClass("show");
	}

    var workmanshipValidator = document.forms["contact"]["workmanshipInp"].value;
    if (workmanshipValidator == null || workmanshipValidator == "") {
        $(".error7").addClass("show");
		focusOnElement("workmanshipInp");
        return false;
    }
	else{
		$(".error7").removeClass("show");		
	}

    var previewValidator = document.forms["contact"]["preview"].value;
    if (previewValidator == null || previewValidator == "") {
        $(".error8").addClass("show");
		focusOnElement("preview");
        return false;
    }
	else{
		$(".error8").removeClass("show");		
	}

    var priceValidator = document.forms["contact"]["price"].value;
    if (priceValidator == null || priceValidator == "") {
        $(".error9").addClass("show");
		focusOnElement("price");
        return false;
    }
	else{
		$(".error9").removeClass("show");		
	}

    var knowUsAboutValidator = document.forms["contact"]["knowUsAbout"].value;
    if (knowUsAboutValidator == null || knowUsAboutValidator == "") {
        $(".error10").addClass("show");
		focusOnElement("knowUsAbout");
        return false;
    }
	else{
		$(".error10").removeClass("show");	
	}

    var ratingValidator = document.forms["contact"]["rating"].value;
    if (ratingValidator == null || ratingValidator == "") {
        $(".error11").addClass("show");
		focusOnElement("rating");
        return false;
    }
	else{
		$(".error11").removeClass("show");	
	}

    var ratingServValidator = document.forms["contact"]["ratingServ"].value;
    if (ratingValidator == null || ratingValidator == "") {
        $(".error13").addClass("show");
		focusOnElement("ratingServ");
        return false;
    }
	else{
		$(".error13").removeClass("show");		
	}
    
    var replayValidator = document.forms['contact']['replay'].value;
    if (replayValidator == null || replayValidator == "") {
        $(".error12").addClass("show");
		focusOnElement("replay");
        return false;
    }
	else{
		$(".error12").removeClass("show");		
	}
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
