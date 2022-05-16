$(document).ready(function () {
    var menu = document.getElementById("menu");
    var torturi = document.querySelector(".torturi");
    var prajituri = document.querySelector(".prajituri");
    var macarons = document.querySelector(".macarons");
    var cup_cakes = document.querySelector(".cup_cakes");
    var acadele = document.querySelector(".acadele");
    var cakes = document.querySelector(".cakes");
    var biscuiti = document.querySelector(".biscuiti");
    var cozonac = document.querySelector(".cozonac");
    var figurine = document.querySelector(".figurine");
    var saratele = document.querySelector(".saratele");
    var zoom = document.querySelectorAll(".zoom_img");
    var addtocardbutton = document.querySelectorAll(".add");

    hide();

    function hide() {
        $(torturi).hide();
        $(prajituri).hide();
        $(macarons).hide();
        $(cup_cakes).hide();
        $(acadele).hide();
        $(biscuiti).hide();
        $(cozonac).hide();
        $(cakes).hide();
        $(figurine).hide();
        $(saratele).hide();
    }

    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const parametru = urlParams.get('p')

    if (parametru == null)
        $(torturi).show();
    else {
        $(parametru).show();
        menu.value = parametru;
    }

    window.history.pushState("", "", "/produse");

    menu.addEventListener("change", function () {
        hide();
        $(menu.value).show();
    })

    zoom.forEach(element => {
        element.addEventListener("mouseenter", function () {
            $(element).toggleClass('img_anim');
            $(element).toggleClass('img_anim_reverse');
        })
        element.addEventListener("mouseleave", function () {
            $(element).toggleClass('img_anim');
            $(element).toggleClass('img_anim_reverse');
        })
    });

    addtocardbutton.forEach(button => {
        button.addEventListener("click", function () {
            console.log($(".refresh").value);
            var extra = button.firstElementChild.innerHTML;
            $(button).animate({ fontSize: '14px' }, 200, function () {
                $(button).animate({ fontSize: '18px' }, 200);
            });
            $(document).ready(function () {
                $(".addtocard").load('../php/addtocart.php?ex=' + extra);
                $(".cos-dropdown").load('../php/cos.php');
                $(".count_produse").load("../php/countproduse.php");
                $(".cos-dropdown").load('../php/cos.php');
                $(".count_produse").load("../php/countproduse.php");
                $(".cos-dropdown").load('../php/cos.php');
                $(".count_produse").load("../php/countproduse.php");
                $(".cos-dropdown").load('../php/cos.php');
                $(".count_produse").load("../php/countproduse.php");
                $(".cos-dropdown").load('../php/cos.php');
                $(".count_produse").load("../php/countproduse.php");
                $(".cos-dropdown").load('../php/cos.php');
                $(".count_produse").load("../php/countproduse.php");
            });
        });
    });

});