box = document.querySelectorAll(".box");
hover_box = document.querySelectorAll(".box-hover");

if ($(document).height() > $(window).height()) {
    $(".box").hide();
} else {
    $(".box").show();
}

box[0].addEventListener("mouseenter", function () { display(0); });
box[0].addEventListener("mouseleave", function () { hide(0); });
box[0].addEventListener("click", function () { location.replace("/produse/index.php?p=.torturi"); });

box[1].addEventListener("mouseenter", function () { display(1); });
box[1].addEventListener("mouseleave", function () { hide(1); });
box[1].addEventListener("click", function () { location.replace("/produse/index.php?p=.prajituri"); });

box[2].addEventListener("mouseenter", function () { display(2); });
box[2].addEventListener("mouseleave", function () { hide(2); });
box[2].addEventListener("click", function () { location.replace("/produse/index.php?p=.macarons"); });

box[3].addEventListener("mouseenter", function () { display(3); });
box[3].addEventListener("mouseleave", function () { hide(3); });
box[3].addEventListener("click", function () { location.replace("/produse/index.php?p=.cup_cakes"); });

box[4].addEventListener("mouseenter", function () { display(4); });
box[4].addEventListener("mouseleave", function () { hide(4); });
box[4].addEventListener("click", function () { location.replace("/produse/index.php?p=.acadele"); });

box[5].addEventListener("mouseenter", function () { display(5); });
box[5].addEventListener("mouseleave", function () { hide(5); });
box[5].addEventListener("click", function () { location.replace("/produse/index.php?p=.cakes"); });

box[6].addEventListener("mouseenter", function () { display(6); });
box[6].addEventListener("mouseleave", function () { hide(6); });
box[6].addEventListener("click", function () { location.replace("/produse/index.php?p=.biscuiti"); });

box[7].addEventListener("mouseenter", function () { display(7); });
box[7].addEventListener("mouseleave", function () { hide(7); });
box[7].addEventListener("click", function () { location.replace("/produse/index.php?p=.cozonac"); });

box[8].addEventListener("mouseenter", function () { display(8); });
box[8].addEventListener("mouseleave", function () { hide(8); });
box[8].addEventListener("click", function () { location.replace("/produse/index.php?p=.figurine"); });

box[9].addEventListener("mouseenter", function () { display(9); });
box[9].addEventListener("mouseleave", function () { hide(9); });
box[9].addEventListener("click", function () { location.replace("/produse/index.php?p=.saratele"); });


function display(x) {
    hover_box[x].style.display = "initial";
}

function hide(x) {
    hover_box[x].style.display = "none";
}

$(window).scroll(function () {
    if ($(window).scrollTop() + $(window).height() > $(document).height() - 300) {
        box_show();
    }
});

function box_show() {
    $(".box").show();
    var i = 0;
    box_anim();
    function box_anim() {
        $(box[i]).animate({ opacity: '1' }, { duration: 1500 });
        i++;
        if (i <= 10)
            setTimeout(function () { box_anim() }, 200);
    }
}