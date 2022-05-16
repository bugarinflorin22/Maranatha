input = document.getElementById("input_buc");

$('#multe').hide();
$('#mai_multe').hide();

input.addEventListener("change", function () {
    if (input.value == 1) {
        $('#multe').hide();
        $('#mai_multe').hide();
        $('#una').show();
    } else if (input.value > 1 && input.value <= 19) {
        $('#multe').show();
        $('#mai_multe').hide();
        $('#una').hide();
    } else if (input.value > 19) {
        $('#multe').hide();
        $('#mai_multe').show();
        $('#una').hide();
    } else {
        input.value = 1;
        $('#multe').hide();
        $('#mai_multe').hide();
        $('#una').show();
    }
})