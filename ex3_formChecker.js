function validation()
{
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    var text = document.getElementById("validationMessage");
    text.textContent = outputMessage(username, password);
}

function outputMessage(username, password)
{
    var message = " ";
    var temp = document.getElementById("validationMessage");

    if (usernameVal(username) == true && password.length != 0)
    {
        message = "Valid Credentials";
    }
    else if (usernameVal(username) == true && password.length == 0)
    {
        message = "Invalid Password";
    }
    else if (usernameVal(username) == false && password.length != 0)
    {
        message = "Invalid Username";
    }
    else
    {
        message = "Invalid Username and Password";
    }

    return message;

}

function usernameVal(username)
{

    var valBool = false;
    var emailDomains = ["gmail.com", "outlook.com", "yahoo.com", "hotmail.com"];
    var inputDomain = (username.split('@'))[1];

    for (var i = 0; i < emailDomains.length; i++)
    {
        if (inputDomain == emailDomains[i])
        {
            valBool = True;
            break;
        }
    }

    return valBool;

}