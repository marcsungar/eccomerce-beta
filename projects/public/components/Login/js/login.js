function setURL()
{
    localStorage.setItem("ActualPage", "login");
    history.replaceState("","","?login");

}
function Check(){
    var email = document.getElementById("mail").value;
    var pwd = document.getElementById("password").value;

    Clear();
    if(email == ""){
        EmailError();
    }
    if(pwd == ""){
        PasswordError();
    }

    if (email != "" && pwd != ""){
        login.submit();
    }

}

function EmailError(){
    document.getElementById("email").classList.add("error");
    document.getElementById("mail-err").hidden = false;
}

function PasswordError(){
    document.getElementById("pwd").classList.add("error");
    document.getElementById("pwd-err").hidden = false;
}

function Clear(){
    document.getElementById("email").classList.remove("error");
    document.getElementById("mail-err").hidden = true;
    document.getElementById("pwd").classList.remove("error");
    document.getElementById("pwd-err").hidden = true;
}

