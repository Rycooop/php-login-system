var signupBtn = document.getElementById("signup");
var signinBtn = document.getElementById("signin");

function changePage()
{
    var loginCont = document.getElementById("login-cont");
    var signupCont = document.getElementById("signup-cont");

    if (signupCont.style.display == "none")
    {
        loginCont.style.display = "none";
        signupCont.style.display = "block";
    }
    else
    {
        signupCont.style.display = "none";
        loginCont.style.display = "block";
    }
}

signupBtn.addEventListener("click", changePage);
signinBtn.addEventListener("click", changePage);