// Toggle class name 0 = sliding-box ; 1 = sliding-box close
document.addEventListener("DOMContentLoaded", () =>{
    document.getElementById("trigger").addEventListener("click", function() {
    var navbtnBox = document.querySelector(".sliding-box");
    navbtnBox.classList.toggle("close");

});
})


