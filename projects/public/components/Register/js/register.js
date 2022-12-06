function setURL()
{
    localStorage.setItem("ActualPage", "register");
    history.replaceState("","","?register");


}
function Check(){

    var name = document.getElementById("name").value;;
    var surname = document.getElementById("surname").value;;
    var email = document.getElementById("email").value;
    var address = document.getElementById("address").value;;
    var city = document.getElementById("city").value;;
    var state = document.getElementById("state").value;;
    var cp = document.getElementById("cp").value;;
    var country = document.getElementById("country").value;;
    var pwd = document.getElementById("pwd").value;
    var repeatPwd = document.getElementById("repeat-pwd").value;
    var re = /^(?=.*\d)(?=.*[a-zA-Z]).{10,}$/

    Clear();
    if(name == ""){
        NameError();
    }
    if(surname == ""){
        SurnameError();
    }
    if(email == ""){
        EmailError();
    }
    if(address == ""){
        AddressError();
    }
    if(city == ""){
        CityError();
    }
    if(state == ""){
        StateError();
    }
    if(cp == ""){
        CPError();
    }
    if(country == ""){
        CountryError();
    }
    if(pwd == ""){
        PasswordError(1);
    }else if(pwd.length < 10){
        PasswordError(2);
    }else if(!re.test(pwd)){
        PasswordError(3);
    }
    if(repeatPwd == ""){
        RepeatPWD(repeatPwd);
    }
    if (email != "" && pwd != ""){
        login.submit();
    }


}

function NameError(){
    document.getElementById("name-div").classList.add("error");
    document.getElementById("name-err").hidden = false;
}

function SurnameError(){
    document.getElementById("surname-div").classList.add("error");
    document.getElementById("surname-err").hidden = false;
}

function EmailError(){
    document.getElementById("email-div").classList.add("error");
    document.getElementById("email-err").hidden = false;
}

function AddressError(){
    document.getElementById("address-div").classList.add("error");
    document.getElementById("address-err").hidden = false;
}

function CityError(){
    document.getElementById("city-div").classList.add("error");
    document.getElementById("city-err").hidden = false;
}

function StateError(){
    document.getElementById("state-div").classList.add("error");
    document.getElementById("state-err").hidden = false;
}

function CPError(){
    document.getElementById("cp-div").classList.add("error");
    document.getElementById("cp-err").hidden = false;
}

function CountryError(){
    document.getElementById("country-div").classList.add("error");
    document.getElementById("country-err").hidden = false;
}

function PasswordError(type){
    document.getElementById("pwd-div").classList.add("error");
    switch (type) {
        case 1:
            document.getElementById("pwd-err-void").hidden = false;
            break;
        case 2:
            document.getElementById("pwd-err-length").hidden = false;
            break;
        case 3:
            document.getElementById("pwd-err-alfanumeric").hidden = false;
            break;
    }
}

function RepeatPWD(value){
    if ( document.getElementById("pwd").value != value){
        document.getElementById("repeat-pwd-div").classList.add("error");
        document.getElementById("repeat-pwd-err").hidden = false;
    }else{
        document.getElementById("repeat-pwd-div").classList.remove("error");
        document.getElementById("repeat-pwd-err").hidden = true;
    }
}

function Clear(){
    document.getElementById("name").classList.remove("error");
    document.getElementById("name-err").hidden = true;
    document.getElementById("surname").classList.remove("error");
    document.getElementById("surname-err").hidden = true;
    document.getElementById("email").classList.remove("error");
    document.getElementById("email-err").hidden = true;
    document.getElementById("address").classList.remove("error");
    document.getElementById("address-err").hidden = true;
    document.getElementById("city").classList.remove("error");
    document.getElementById("city-err").hidden = true;
    document.getElementById("state").classList.remove("error");
    document.getElementById("state-err").hidden = true;
    document.getElementById("cp").classList.remove("error");
    document.getElementById("cp-err").hidden = true;
    document.getElementById("country").classList.remove("error");
    document.getElementById("country-err").hidden = true;
    document.getElementById("pwd").classList.remove("error");
    document.getElementById("pwd-err-void").hidden = true;
    document.getElementById("pwd-err-length").hidden = true;
    document.getElementById("pwd-err-alfanumeric").hidden = true;

}

