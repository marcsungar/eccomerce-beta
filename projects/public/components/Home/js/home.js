var fotos = [
    "tostadora.jpg",
    "logo.png",
    "tostadora.jpg",
    "tostadora.jpg",
    "tostadora.jpg",
    "tostadora.jpg",
];
var actual = fotos.length-1;

var arrowClicked = false;
var route = "components/Home/images/Productos/";

function sliderload(){

    localStorage.setItem("ActualPage", "home");
    history.replaceState("","","?home");

    arrows()
    if(!arrowClicked){
        timer = setInterval(arrows, 5000);

    }else{
        clearInterval(timer);
    }
}
function arrows(i){
    document.getElementById(actual+" punto").classList.remove("dot--active");
    if(i == 0){
        if (actual == 0){
            actual = fotos.length-1;
        }else{
            actual--;
        }
    }else{
        if(actual == fotos.length-1){
            actual = 0;
        }else{
            actual++;
        }
    }
    var actualroute = route+ fotos[actual];
    document.getElementById("image slider").style.backgroundImage= "url("+actualroute+")";
    document.getElementById(actual+" punto").classList.add("dot--active");
}