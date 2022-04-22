var usernameRegex = /^(?:[a-zA-Z\d][a-zA-Z\d_!.-]{5,15})/;
var phoneNumberRegex=/^\+[1-9]{1}[0-9]{1,14}$/;

var passwordRegex = /^[A-Z].*(?=.{8,20})(?=.*[0-9])(?=.*[a-zA-Z])(?=.*[@#$%^&+=]).*/;
var email1Regex= /^(?:[a-zA-Z0-9._%+-]+@[a-zA-Z.-]+\.[a-z]{1,3})$/ ;

var signUpButton=document.getElementById("signUpButton");
var emailMsg=document.getElementById("emailMsg");

var username1Msg=document.getElementById("usernameMsg");

var password1Msg=document.getElementById("passwordMsg");

var password2Msg=document.getElementById("password2Msg");

var phoneNumberMsg=document.getElementById("phoneNumberMsg");

signUpButton.addEventListener("click", function(event){
    var email = document.getElementById("email").value;

    var username1=document.getElementById("username1").value;

    var password1=document.getElementById("password").value;

    var password2=document.getElementById("password2").value;

    var phoneNumber=document.getElementById("phoneNumber").value;

    if(email=="" || email==null){
        emailMsg.innerText="Fill Email";
        event.preventDefault();
    } else if(email1Regex.test(email)){
        emailMsg.innerText="";
        } else{
            emailMsg.innerText="Email not correct";
            event.preventDefault();
        }

    if(username1=="" || username1==null){
        username1Msg.innerText="Fill Username";
        event.preventDefault();
    } else if(usernameRegex.test(username1)){
        username1Msg.innerText="";
        } else{
            username1Msg.innerText="Username not correct";
            event.preventDefault();
        }
    
    
    if(password1=="" || password1==null){
        password1Msg.innerText="Fill password";
        event.preventDefault();
    } else if(passwordRegex.test(password1)){
        password1Msg.innerText="";
    } else {
        password1Msg.innerText="The password policy is: • At least 8 chars • Contains at least one digit • Starts with upper case • Contains at least (@#$%^ etc) • Does not contain space, tab.";
        event.preventDefault();
    }

    if(password2=="" || password2==null){
        password2Msg.innerText="Fill password";
        event.preventDefault();
    } else if(password2==password1){
        password2Msg.innerText="";
    } else{
        password2Msg.innerText="The passwords does not match."
        event.preventDefault();
    }
    
    if(phoneNumber=="" || phoneNumber==null){
        phoneNumberMsg.innerText="Fill Phone number";
        event.preventDefault();
    } else if(phoneNumberRegex.test(phoneNumber)){
        phoneNumberMsg.innerText="";
    } else {
        phoneNumberMsg.innerText="Incorrect Phone Number";
        event.preventDefault();
    }
})