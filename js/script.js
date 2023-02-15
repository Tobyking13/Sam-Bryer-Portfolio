$(document).ready(function() {
    $("#openModal").on("click", function() {
        $("#emailModal").modal("show");
    });
});

// const slider = document.querySelector('#portfolio');
// let position = 0;

// setInterval(() => {
//   position = (position + 100) % 400;
//   slider.style.transform = `translateX(-${position}%)`;
// }, 1000);