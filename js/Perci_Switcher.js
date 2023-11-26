document.addEventListener("DOMContentLoaded", () => {
    const image_api = document.getElementById("image-api");
    const title_api = document.getElementById("title-api");
    const a = document.getElementById("tp24");
    const b = document.getElementById("tp1");
    const c = document.getElementById("bv115");
    const d = document.getElementById("bv116");
    const e = document.getElementById("lapok");
    const f = document.getElementById("lgbedia");
    const g = document.getElementById("longadang");
    const h = document.getElementById("longseridan");
    const i = document.getElementById("meraraps");

    a.addEventListener("click", () => {
        image_api.src = "http://weather.vsg-labs.com/petronas_data/nowcast/24h_precipitation_contour.jpg";
        title_api.textContent = "Precipitation Contour Estimate 24hrs";
    });

    b.addEventListener("click", () => {
        image_api.src = "http://weather.vsg-labs.com/petronas_data/nowcast/nowcast_animated.gif";
        title_api.textContent = "Total Precipitation Accumulation 1hr";
    });

    c.addEventListener("click", () => {
        image_api.src = "http://weather.vsg-labs.com/petronas_data/nowcast/BV115_prep_chart.jpg";
        title_api.textContent = "BV115";
    });

    d.addEventListener("click", () => {
        image_api.src = "http://weather.vsg-labs.com/petronas_data/nowcast/BV116-117_prep_chart.jpg";
        title_api.textContent = "BV116-117";
    });

    e.addEventListener("click", () => {
        image_api.src = "http://weather.vsg-labs.com/petronas_data/nowcast/Lapok_prep_chart.jpg";
        title_api.textContent = "Lapok";
    });

    f.addEventListener("click", () => {
        image_api.src = "http://weather.vsg-labs.com/petronas_data/nowcast/Lg%2520Bedian_prep_chart.jpg";
        title_api.textContent = "Lgbedian";
    });

    g.addEventListener("click", () => {
        image_api.src = "http://weather.vsg-labs.com/petronas_data/nowcast/Long_Adang_prep_chart.jpg";
        title_api.textContent = "LongAdang";
    });

    h.addEventListener("click", () => {
        image_api.src = "http://weather.vsg-labs.com/petronas_data/nowcast/Long_Seridan_prep_chart.jpg";
        title_api.textContent = "LongSeridan";
    });

    i.addEventListener("click", () => {
        image_api.src = "http://weather.vsg-labs.com/petronas_data/nowcast/Merarap_prep_chart.jpg";
        title_api.textContent = "Merarap";
    });
})