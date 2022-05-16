var cos = document.querySelector('.cosi');
var cos_dropdown = document.querySelector('.cos-dropdown');
var mobile_drop_down = document.querySelector(".mobile-drop-down");

$(".cos-dropdown").load("../php/cos.php");
$(".count_produse").load("../php/countproduse.php");

$(".title").animate({ opacity: '1', bottom: '0' }, { duration: 500 });

function deschide_cos() {
    cos_dropdown.style.display = "initial";
    $(cos_dropdown).animate({ opacity: '1', top: '53px' }, { duration: 500 });
    $(".cosi").animate({ zoom: 0.9 }, 100, function () {
        $(".cosi").animate({ zoom: 1 }, 50);
    });
};

function inchide_cos() {
    $(cos_dropdown).animate({ opacity: '0', top: '-200px' }, 500, function () {
        cos_dropdown.style.display = "none";
    });
    $(".fa-times-circle").animate({ zoom: 0.9 }, 100, function () {
        $(".fa-times-circle").animate({ zoom: 1 }, 50);
    });
}

function lose_session() {
    $(".fa-trash-alt").animate({ zoom: 0.5 }, 100, function () {
        $(".fa-trash-alt").animate({ zoom: 1 }, 50);
    });
    $(".lose_session").load('../php/delcos.php');
    $(".anim_comp").animate({ zoom: 0, opacity: 0 }, 500, function () {
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
};

function lose_session_itm(itm) {
    $(".lose_session").load('../php/delcos.php?remove=' + itm);
    $(".cos-dropdown").load('../php/cos.php', function () {
        $(".cos-dropdown").load('../php/cos.php');
    });
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
}

function open_menu() {
    mobile_drop_down.style.display = 'initial';
    $(mobile_drop_down).animate({ opacity: 1, right: '0px' }, 500, function () {

    });
}

function close_menu() {
    $(mobile_drop_down).animate({ opacity: 0, right: '-300px' }, 500, function () {
        mobile_drop_down.style.display = 'none';
    });
}
