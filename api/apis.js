fetch ('http://api.weatherapi.com/v1/current.json?key=e3a9206e2984497aba320952251405&q=Jeddah') 
.then(response => response.json()) 
.then( data => {
    const temperature = data.current.temp_c;
    document.getElementById("temp").textContent = `Temperature in Jeddah: ${temperature}°C`;
    if(temperature > 25){
        document.getElementById("tempMenu").textContent = `Perfect weather for a Cold drink from our Menu!`;
    } else {
        document.getElementById("tempMenu").textContent = `Perfect weather for a Hot drink from our Menu!`;
    }   
})  .catch(error => console.error("Error fetching weather data:", error));

