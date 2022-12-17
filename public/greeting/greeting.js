function clock(){
    var date = new Date();
    var hours = date.getHours();
    var minutes = date.getMinutes();
    var seconds = date.getSeconds();
    var midday;

    hours = updateTime(hours);
    minutes = updateTime(minutes);
    seconds = updateTime(seconds);

    // username disini
    var name = "Username";

    // if else midday
    midday = (hours >= 12) ? "PM" : "AM";

    document.getElementById("clock").innerHTML = "<span>" + hours + "</span>" + ":" + "<span>" + minutes + "</span>" + ":" + "<span>" + seconds + "</span>" + midday;
    
    var time = setTimeout(function(){
        clock();
    }, 1000);

    // greeting condition
    if (hours < 12) {
        var greeting = "Selamat Pagi " + name + " Yuk Semangat!"
    }
    if (hours >= 12 && hours <= 15) {
        var greeting = "Selamat Siang" + name;
    }
    if (hours >= 15 && hours <= 18) {
        var greeting = "Selamat Sore" + name;
    }
    if (hours >= 18 && hours <= 24) {
        var greeting = "Selamat Malam " + name + " Yuk Semangat!";
    }
    document.getElementById("greeting").innerHTML = greeting;
}

function updateTime(k) {
    if(k<10){
        return "0" + k
    } else {
        return k;
    }
}
clock();