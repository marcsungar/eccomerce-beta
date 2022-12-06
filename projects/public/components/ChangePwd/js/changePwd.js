function setURL()
{
    localStorage.setItem("ActualPage", "changePwd");
    history.replaceState("","","?changePwd");

}
function Check(){
    var email = document.getElementById("email").value;
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
    document.getElementById("email-err").hidden = false;
}

function PasswordError(){
    document.getElementById("password").classList.add("error");
    document.getElementById("password-err").hidden = false;
}

function Clear(){
    document.getElementById("email-div").classList.remove("error");
    document.getElementById("email-err").hidden = true;
    document.getElementById("password-div").classList.remove("error");
    document.getElementById("password-err").hidden = true;
}

