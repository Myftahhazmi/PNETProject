document.addEventListener("DOMContentLoaded", () => {
    const image_api = document.getElementById("image-api");
    const title_api = document.getElementById("title-api");
    const a = document.getElementById("wh");
    const b = document.getElementById("ws50");
    const c = document.getElementById("ws10");

    a.addEventListener("click", () => {
        image_api.src = "http://weather.vsg-labs.com/petronas_data/latest_compilation_charts/latest_wave_compilation_charts.png.gif";
        title_api.textContent = "Hs Forecast (7 Days)";
    });

    b.addEventListener("click", () => {
        image_api.src = "http://weather.vsg-labs.com/petronas_data/latest_compilation_charts/latest_50m_wind_compilation_charts.png.gif";
        title_api.textContent = "50m Wind Speed (7 Days)";
    });

    c.addEventListener("click", () => {
        image_api.src = "http://weather.vsg-labs.com/petronas_data/latest_compilation_charts/latest_10m_wind_compilation_charts.png.gif";
        title_api.textContent = "10m Wind Speed (7 Days)";
    });
});