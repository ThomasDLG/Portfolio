const APIKEY = 'a05e5592bc795ed67e19f638fc54ad71';


let = apiCall = function (city) {
  let url = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${APIKEY}&units=metric&lang=fr`;

fetch(url).then((response) => response.json().then((data) => {
    console.log(data);
    document.querySelector('#city').innerHTML = "<i class='fas fa-city'></i>" + data.name
    document.querySelector('#temp').innerHTML = "<i class='fas fa-thermometer-quarter'></i>" + data.main.temp + '°'
    document.querySelector('#wet').innerHTML = "<i class='fas fa-umbrella'></i>" + data.main.humidity + '%'
    document.querySelector('#wind').innerHTML = "<i class='fas fa-wind'></i>" + data.wind.speed + 'km/h'
  })
) 
.catch((err) => console.log('Erreur : ' + err))
};


document.querySelector('form').addEventListener('submit', function (e) {
  e.preventDefault();
  let ville = document.querySelector('#inputcity').value;

  apiCall(ville);
});

apiCall('Lyon');