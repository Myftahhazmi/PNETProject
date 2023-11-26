document.addEventListener("DOMContentLoaded" , () => {
    const image_api = document.getElementById("image-api");
    const title_api = document.getElementById("title-api");
    const a = document.getElementById("SECS");
    const b = document.getElementById("PM");
    const c = document.getElementById("SS");

    a.addEventListener("click", () =>{
        title_api.textContent = "South China Sea Forecast (7 Days)";
        image_api.src = "http://weather.vsg-labs.com/petronas_data/weatherchart/latest_SCS_mslp_7.0days_24hourly_chart.gif";
    });
    
    b.addEventListener("click", () =>{
        title_api.textContent = "Peninsular Malaysia Forecast (7 Days)";
        image_api.src = "http://weather.vsg-labs.com/petronas_data/weatherchart/latest_PM_area_mslp_7.0days_24hourly_chart.gif";
    });

    c.addEventListener("click", () =>{
        title_api.textContent = "Sabah and Sarawak Forecast (7 Days)";
        image_api.src = "http://weather.vsg-labs.com/petronas_data/weatherchart/latest_SarawakSabah_mslp_7.0days_24hourly_chart.gif";
    });
    
})