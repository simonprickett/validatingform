function myValidateForm()
{
    var chk = document.forms["registration"]["name"].value;
    if (chk == null || chk == "") {
        alert('Please enter your name!');
        document.forms[0].action='';
        return false;
    }
    var chk = document.forms["registration"]["email"].value;
    var atpos = chk.indexOf("@");
    var dotpos = chk.indexOf(".");
    if (atpos < 1 || dotpos+2>chk.length)
    {
        document.forms[0].action='';
        alert("Email address must be valid!");
        return false;
    }
    var chk = document.forms["registration"]["phone"].value;
    var phoneNumberPattern = /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;
    if (!phoneNumberPattern.test(chk)) 
    {
        document.forms["registration"].action='';
        alert("Invalid phone number!");
        return false;
    } 
    document.forms["registration"].action='thankyou.php';
    return true;
}
