$(document).ready(function() {
    $("#openModal").on("click", function() {
        $("#emailModal").modal("show");
    });
});

var audio = document.querySelector('audio');

document.body.addEventListener('mousemove', function(e) {
   audio.play()
})