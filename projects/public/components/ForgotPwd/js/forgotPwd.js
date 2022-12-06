function setURL()
{
    localStorage.setItem("ActualPage", "forgotPwd");
    history.replaceState("","","?forgotPwd");

}
function Check(){
    var email = document.getElementById("email").value;

    Clear();
    if(email == ""){
        EmailError(1);
    }
    if(email == "w@e.com"){
        EmailError(2);
    }else if (email != ""){
        document.getElementById("email-div").classList.add("success");
        document.getElementById("email-success").hidden = false;
    }

}

function EmailError(num){
    document.getElementById("email-div").classList.add("error");

    switch (num){
        case 1:
            document.getElementById("email-err-void").hidden = false;
            break;
        case 2:
            document.getElementById("email-err-notexist").hidden = false;
            break;
    }
}

function Clear(){
    document.getElementById("email-div").classList.remove("error");
    document.getElementById("email-div").classList.remove("success");
    document.getElementById("email-err-void").hidden = true;
    document.getElementById("email-err-notexist").hidden = true;
    document.getElementById("email-success").hidden = true;
}

