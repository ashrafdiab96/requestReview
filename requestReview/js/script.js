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

    let behaviorValidator =$("input[name='behavior']:checked").val();
    let timeValidator =$("input[name='time']:checked").val();
    let cleannesseValidator =$("input[name='cleanness']:checked").val();
    let materialValidator =$("input[name='material']:checked").val();
    // let materialPriceValidator = document.forms['contact']['materialPrice'].value;
    let tpsValidator =$("input[name='tps']:checked").val();
    let workmanshipValidator =$("input[name='workmanship']:checked").val();
    let previewValidator = document.forms['contact']['preview'].value;
    let priceValidator =$("input[name='price']:checked").val();
    let knowUsAboutValidator =$("input[name='knowUsAbout']:checked").val();
    let ratingValidator =$("input[name='rating']:checked").val();
    let replayValidator = document.forms['contact']['replay'].value;


    if (behaviorValidator == null) {
        $(".error1").addClass("show");
        return false;
    }
    
    if (timeValidator == null) {
        $(".error2").addClass("show");
        return false;
    }

    if (cleannesseValidator == null) {
        $(".error3").addClass("show");
        return false;
    }

    if (materialValidator == null) {
        $(".error4").addClass("show");
        return false;
    }
    
    // if (materialPriceValidator == "") {
    //     $(".error5").addClass("show");
    //     return false;
    // }


    if (tpsValidator == null) {
        $(".error6").addClass("show");
        return false;
    }

    if (workmanshipValidator == null) {
        $(".error7").addClass("show");
        return false;
    }

    if (previewValidator == "") {
        $(".error8").addClass("show");
        return false;
    }

    if (priceValidator == null) {
        $(".error9").addClass("show");
        return false;
    }
    if (knowUsAboutValidator == null) {
        $(".error10").addClass("show");
        return false;
    }

    if (ratingValidator == null) {
        $(".error11").addClass("show");
        return false;
    }

    if (replayValidator == "") {
        $(".error12").addClass("show");
        return false;
    }

}
