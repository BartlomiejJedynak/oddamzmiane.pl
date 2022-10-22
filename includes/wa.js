// let city="Wrocław";
let weather = {
    "apiKey":"e227773eb2827c25be305eb13d10eec4",
    
    fetchWeather:function(city){
    // alert("asdasdasdasd");
    
        fetch(
            "https://api.openweathermap.org/data/2.5/weather?q=Wrocław&units=metric&appid="
            +this.apiKey
            )
        .then((response)=> response.json())
        .then((data)=>this.displayWeather(data)); 
    },
        displayWeather: function(data){
            // const { name } = data;
            const {icon} = data.weather[0];

            const {temp} = data.main;
            const {temp_max} = data.main;
            const {temp_min} = data.main;
            const{humidity} = data.main;
            const {speed}=data.wind;
            console.log(name,icon,temp,humidity,speed,temp_min,temp_max);
            document.querySelector(".temp").innerText=Math.round(temp)+"°C";
            document.querySelector(".temp_max").innerText=Math.round(temp_max)+"°C";
            document.querySelector(".temp_min").innerText=Math.round(temp_min)+"°C";
            document.querySelector(".humidity").innerText=humidity+"%";
            document.querySelector(".wind").innerText=Math.round(speed)*18/5+"km/h";
            // document.querySelector(".wind_icon").src="172922.png";
            document.querySelector(".icon").src="http://openweathermap.org/img/wn/"+icon+"@2x.png";
        }
        
}
weather.fetchWeather();
