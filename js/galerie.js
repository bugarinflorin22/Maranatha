var i = document.querySelector(".fa-chevron-circle-down");
var y = document.querySelector(".fa-chevron-circle-up");
var drop_down = document.querySelector(".drop-down-galerie");
var click = true;

$(".title").animate({ opacity: '1', bottom: '0' }, { duration: 500 });

i.addEventListener("click", function () {
    if (click) {
        click = false;
        drop_down.style.display = "initial";
        i.style.display = "none";
        y.style.display = "initial";
        $(drop_down).animate({ top: '50px', opacity: 1 }, 500, function () {
            click = true;
            document.getElementById("galerie").style.overflow = "visible";
        });
    }
});

y.addEventListener("click", function () {
    if (click) {
        click = false;
        document.getElementById("galerie").style.overflow = "hidden";
        i.style.display = "initial";
        y.style.display = "none";
        $(drop_down).animate({ top: '-350px', opacity: 0 }, 500, function () {
            drop_down.style.display = "none";
            click = true;
        });
    }
});

var element = document.getElementById("mySwipe");
element.addEventListener("touchstart", startTouch, false);
element.addEventListener("touchmove", moveTouch, false);

var initialX = null;
var initialY = null;

function startTouch(e) {
    initialX = e.touches[0].clientX;
    initialY = e.touches[0].clientY;
};

function moveTouch(e) {
    if (initialX === null) {
        return;
    }

    if (initialY === null) {
        return;
    }

    var currentX = e.touches[0].clientX;
    var currentY = e.touches[0].clientY;

    var diffX = initialX - currentX;
    var diffY = initialY - currentY;

    if (Math.abs(diffX) > Math.abs(diffY)) {
        if (diffX > 0) {
            swipe_right();
        } else {
            swipe_left();
        }
    } /* else {
        // sliding vertically
        if (diffY > 0) {
            // swiped up
            console.log("swiped up");
        } else {
            // swiped down
            console.log("swiped down");
        }
    } */

    initialX = null;
    initialY = null;

    e.preventDefault();
};

var readtoswipe = true;
var imgp = document.querySelectorAll(".imgid");
var ppposition = 1
var pposition = 2;
var cposition = 3;
var nposition = 4;
var nnposition = 5;

function close_zoom() {
    $(element).animate({ opacity: 0 }, 500, function () {
        element.style.display = 'none';
    })
}

function open_zoom(p) {
    element.style.display = 'initial';
    $(element).animate({ opacity: 1 }, { duration: 500 })
    ppposition = p - 2;
    pposition = p - 1;
    cposition = p;
    nposition = p + 1;
    nnposition = p + 2;
    ppposition = ver(ppposition);
    pposition = ver(pposition);
    cposition = ver(cposition);
    nposition = ver(nposition);
    nnposition = ver(nnposition);
    final_swipe(ppposition, pposition, cposition, nposition, nnposition);
}

function swipe_left() {
    if (readtoswipe) {
        readtoswipe = false;
        ppposition--;
        pposition--;
        cposition--;
        nposition--;
        nnposition--;
        ppposition = ver(ppposition);
        pposition = ver(pposition);
        cposition = ver(cposition);
        nposition = ver(nposition);
        nnposition = ver(nnposition);
        for ($i = 0; $i <= 4; $i++) {
            $(imgp[$i]).animate({ left: '100%' }, 500, function () {
                final_swipe(ppposition, pposition, cposition, nposition, nnposition);
                imgp[0].style.left = "0%";
                imgp[1].style.left = "0%";
                imgp[2].style.left = "0%";
                imgp[3].style.left = "0%";
                imgp[4].style.left = "0%";
                readtoswipe = true;
            });
        }
    }
}

function swipe_right() {
    if (readtoswipe) {
        readtoswipe = false;
        ppposition++;
        pposition++;
        cposition++;
        nposition++;
        nnposition++;
        ppposition = ver(ppposition);
        pposition = ver(pposition);
        cposition = ver(cposition);
        nposition = ver(nposition);
        nnposition = ver(nnposition);
        for ($i = 0; $i <= 4; $i++) {
            $(imgp[$i]).animate({ left: '-100%' }, 500, function () {
                final_swipe(ppposition, pposition, cposition, nposition, nnposition);
                imgp[0].style.left = "0%";
                imgp[1].style.left = "0%";
                imgp[2].style.left = "0%";
                imgp[3].style.left = "0%";
                imgp[4].style.left = "0%";
                readtoswipe = true;
            });
        }
    }
}

final_swipe(ppposition, pposition, cposition, nposition, nnposition);

function final_swipe(a, b, c, d, e) {
    imgp[0].src = '../images/descriere' + a + '.jpg';
    imgp[1].src = '../images/descriere' + b + '.jpg';
    imgp[2].src = '../images/descriere' + c + '.jpg';
    imgp[3].src = '../images/descriere' + d + '.jpg';
    imgp[4].src = '../images/descriere' + e + '.jpg';
}

function ver(x) {
    if (x <= 0)
        return 5;
    else if (x >= 6) return 1;
    else return x;
}
