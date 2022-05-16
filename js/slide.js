img = document.getElementById("imagine");
imgtitle = document.querySelector(".img-title");
descriere = document.getElementById("descriere");

$(".title").animate({ opacity: '1', bottom: '0' }, { duration: 500 });

var slide = 1;

nextslide();

function nextslide() {
    img.style = 'opacity: 0;';
    imgtitle.style = 'opacity: 0; left: 250px';
    descriere.style = 'opacity: 0; left: -250px';
    animatie();
    switch (slide) {
        case 1:
            img.src = 'images/descriere' + slide + '.jpg';
            imgtitle.innerHTML = 'Tort MARIANA';
            descriere.innerHTML = 'Tort delicios savoare praline - ciocolata cu blat pufos si aromat de ciocolata. Delicatesa si rafinament garantat.';
            break;
        case 2:
            img.src = 'images/descriere2.jpg';
            imgtitle.innerHTML = 'Tort Buchet de Flori';
            descriere.innerHTML = 'Crema delicata de vaniliei invaluita intr-un coulis de capsuni alaturi de un pufos blat de vanilie. Un frumos buchet de toamna cepoate fi oferit in orice moment al anului. Garantam rafinamentul se calitatea oricarei ocazii.';
            break;
        case 3:
            img.src = 'images/descriere' + slide + '.jpg';
            imgtitle.innerHTML = 'Tort COD PENAL';
            descriere.innerHTML = 'Un tort delicat : mousse ciocolata de lapte intr-un pufos blat de ciocolata. Savoare si rafinament.';
            break;
        case 4:
            img.src = 'images/descriere' + slide + '.jpg';
            imgtitle.innerHTML = 'Tort BAIAT un an';
            descriere.innerHTML = 'Tort savoare  vanilie fructe invaluit in tr-un pufos blat de ciocolata. Armonie delicata si onctuoasa intre gust si rafinament.';
            break;
        case 5:
            img.src = 'images/descriere' + slide + '.jpg';
            imgtitle.innerHTML = 'Tort Romina';
            descriere.innerHTML = 'Tortul de deasupra : blat pufos de ciocolata si vanilie cu o savuroasa crema diplomat ciocolata de lapte si coulis de fructe rosii, iar cel de jos blat pufos de ciocolata cu o crema onctuoasa de ciocolata si coullis de piersici.';
            break;
        case 6:
            img.src = 'images/descriere' + slide + '.jpg';
            imgtitle.innerHTML = 'Tort MAMI';
            descriere.innerHTML = 'Tort mascarpone si fructe rosii, cu ingrediente  de cea mai buna calitate, fara premixuri, amelioratori sau E-uri. Decorul este comestibil , din ciocolata de cea mai buna calitate.';
            break;
        case 7:
            img.src = 'images/descriere' + slide + '.jpg';
            imgtitle.innerHTML = 'Tort Laptop';
            descriere.innerHTML = 'Tort savoare ciocolata. Crema delicata si onctuoasa din ciocolata Barry Force Noire. Totul este artizanal si comestibil.';
            break;
    }

    if (slide == 7)
        slide = 1;
    else slide++;

    setTimeout(function () { nextslide() }, 30000);
}

function animatie() {
    $("#imagine").animate({ opacity: '1' }, { duration: 700 });
    $(".img-title").animate({ opacity: '1', left: 0 }, { duration: 2000 });
    $("#descriere").animate({ opacity: '1', left: 0 }, { duration: 2000 });
}

$(window).scroll(function () {
    if ($(window).scrollTop() >= 5) {
        document.getElementById("infoid").style.fontSize = "12px";
    } else {
        document.getElementById("infoid").style.fontSize = "16px";
    }

    if ($(window).scrollTop() + $(window).height() > $(document).height() - 300) {
        document.getElementById("info").style.position = "relative";
    } else {
        document.getElementById("info").style.position = "fixed";
    }
});
