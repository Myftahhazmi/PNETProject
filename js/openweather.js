// Function to make the API request and update the webpage
function fetchWeatherData() {
    // Replace 'YOUR_API_KEY' with your actual OpenWeatherMap API key
    const apiKey = '92dfc7b315f103f7c01eb9d3d6c0eab5';
    const apiUrl = 'https://api.openweathermap.org/data/2.5/weather?q=Malaysia&appid=' + apiKey;

    // Make a request to the OpenWeatherMap API
    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            // Extract the relevant information from the API response
            const cityName = data.name;
            const temperature = data.main.temp;
            const weatherDescription = data.weather[0].description;
            const wind = data.wind.deg;

            // Display the information on the webpage
            const weatherDataElement = document.getElementById('weather-data');
            weatherDataElement.innerHTML = `
            <div class = apiWrapper>
                <p>City: ${cityName}</p>
                <p>Temperature: ${temperature} K</p>
                <p>Description: ${weatherDescription}</p>
                <p>Wind: ${wind} degrees </p>
            </div>
            `;
        })
        .catch(error => {
            console.error('Error fetching data:', error);
        });
}

// Call the function when the page loads
window.onload = fetchWeatherData;