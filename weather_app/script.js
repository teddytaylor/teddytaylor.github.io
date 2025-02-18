const apiKey = '15117b74410ddddec93e0af9ed4d84a9';

function getWeather(zipCode = null, lat = null, lon = null) {
    let url = '';

    if (zipCode) {
        url = `https://api.openweathermap.org/data/2.5/weather?zip=${zipCode},us&appid=${apiKey}&units=imperial`;
    } else if (lat && lon) {
        url = `https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&appid=${apiKey}&units=imperial`;
    } else {
        document.getElementById('weather').innerHTML = `<p class="error">Error: No location provided</p>`;
        return;
    }

    fetch(url)
        .then(response => response.json())
        .then(data => {
            const locationDiv = document.getElementById('location');
            const weatherDiv = document.getElementById('weather');
            const containerDiv = document.getElementById('container');

            if (data.cod === 200) {
                // Display location name in a separate section
                locationDiv.innerHTML = `<h2>${data.name}</h2>`;

                // Clear previous weather class
                containerDiv.className = '';

                // Add a class to the weather div based on the weather description
                const weatherMain = data.weather[0].main.toLowerCase();
                switch (weatherMain) {
                    case 'clear':
                        containerDiv.classList.add('sunny');
                        break;
                    case 'clouds':
                        containerDiv.classList.add('cloudy');
                        break;
                    case 'rain':
                    case 'drizzle':
                        containerDiv.classList.add('rainy');
                        break;
                    case 'snow':
                        containerDiv.classList.add('snowy');
                        break;
                    default:
                        containerDiv.classList.add('default-weather');
                }

                // Display weather data
                weatherDiv.innerHTML = `
                    <div class="weather-detail m-weather">
                        <div class="m-weather__temperature">
                        ${Math.round(data.main.temp)}°
                        </div>
                        <ul class="m-weather__other">
                        <li><h3>Wind</h3><span>${data.wind.speed} m/s</span></li>
                        <li><h3>Sky</h3><span>${data.weather[0].description}</span></li>
                        <li><h3>Humidity</h3><span>${data.main.humidity}%</span></li>
                        </ul>
                    </div>
                `;
                getForecast(data.coord.lat, data.coord.lon);
            } else {
                weatherDiv.innerHTML = `<p class="error">Error: ${data.message}</p>`;
            }
        })
        .catch(error => {
            const weatherDiv = document.getElementById('weather');
            weatherDiv.innerHTML = `<p class="error">Error: Unable to fetch data</p>`;
            console.error('Error fetching the weather data:', error);
        });
}

function getForecast(lat, lon) {
    const forecastUrl = `https://api.openweathermap.org/data/3.0/onecall?lat=${lat}&lon=${lon}&exclude=current,minutely,hourly,alerts&appid=${apiKey}&units=metric`;

    fetch(forecastUrl)
        .then(response => response.json())
        .then(data => {
            const forecastDiv = document.getElementById('forecast');
            forecastDiv.innerHTML = '<h3>7-Day Forecast</h3>';

            data.daily.slice(0, 7).forEach(day => {
                const date = new Date(day.dt * 1000);
                const dayOfWeek = date.toLocaleDateString('en-US', { weekday: 'long' });
                forecastDiv.innerHTML += `
                    <div class="forecast-day">
                        <h4>${dayOfWeek}</h4>
                        <p>${date.toLocaleDateString()}</p>
                        <p id="day-temp">Temp: ${day.temp.day} °F</p>
                        <p id="day-description">${day.weather[0].description}</p>
                    </div>
                `;
            });
        })
        .catch(error => {
            const forecastDiv = document.getElementById('forecast');
            forecastDiv.innerHTML = `<p class="error">Error: Unable to fetch forecast data</p>`;
            console.error('Error fetching the forecast data:', error);
        });
}

function fetchWeatherByLocation() {
    if (localStorage.getItem('userLocation')) {
        const { lat, lon } = JSON.parse(localStorage.getItem('userLocation'));
        getWeather(null, lat, lon);
    } else if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(position => {
            const lat = position.coords.latitude;
            const lon = position.coords.longitude;

            // Save location to localStorage
            localStorage.setItem('userLocation', JSON.stringify({ lat, lon }));

            getWeather(null, lat, lon);
        }, () => {
            document.getElementById('weather').innerHTML = `<p class="error">Error: Unable to retrieve your location</p>`;
        });
    } else {
        document.getElementById('weather').innerHTML = `<p class="error">Error: Geolocation is not supported by this browser</p>`;
    }
}


// Automatically fetch weather on page load based on user's location
window.onload = fetchWeatherByLocation;

// Function to get weather based on ZIP code input
function getWeatherByZip(event) {
    event.preventDefault(); // Prevent form submission from refreshing the page
    const zipCode = document.getElementById('zipCode').value;
    getWeather(zipCode);
}

// Attach the function to the form's submit event
document.getElementById('zipForm').addEventListener('submit', getWeatherByZip);