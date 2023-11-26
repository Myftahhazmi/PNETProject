const stormBtn = document.getElementById("stormButton");
const rainBtn = document.getElementById("rainButton");

stormBtn.addEventListener("click", () => {
    const stormIcon = document.getElementById("stormIcon");

    // Toggle class to change colour of the bell icon
    stormIcon.classList.toggle("green-icon");
});

rainBtn.addEventListener("click", () => {
    const rainIcon = document.getElementById("rainIcon");

    // Toggle class to change colour of the bell icon
    rainIcon.classList.toggle("green-icon");
});
