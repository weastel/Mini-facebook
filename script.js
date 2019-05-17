"use strict"

console.log("Script is connected")

var IMGForm = document.forms["IMGForm"]

function validateForm() {
    var check = true
    var nameREGEX = /^[a-zA-Z]+$/
    if (!nameREGEX.test(IMGForm["name"].value)) {
        document.getElementById("nameError").innerHTML =
            "Name should contain only character not digits"
        check = false
        IMGForm["name"].className += " wrong-border "
    } else {
        document.getElementById("nameError").innerHTML = ""
        IMGForm["name"].className += " right-border"
    }
    if (IMGForm["password"].value !== IMGForm["confirmPassword"].value) {
        document.getElementById("confirmError").innerHTML =
            "Password and confirm Password should be same"
        check = false
        IMGForm["confirmPassword"].className += " wrong-border"
    } else {
        document.getElementById("confirmError").innerHTML = ""
        IMGForm["confirmPassword"].className += " right-border"
    }
    var phoneREGEX = /^(91|0)?[9768]\d{9}$/
    console.log(phoneREGEX.test(IMGForm["phoneNumber"].value))
    if (!phoneREGEX.test(IMGForm["phoneNumber"].value)) {
        document.getElementById("phoneError").innerHTML =
            "Phone number is not corect"
        check = false
        IMGForm["phoneNumber"].className += " wrong-border"
    } else {
        document.getElementById("phoneError").innerHTML = ""
        IMGForm["phoneNumber"].className += " right-border"
    }
    var emailREGEX = /iitr\.ac\.in/
    if (!emailREGEX.test(IMGForm["email"].value)) {
        document.getElementById("emailError").innerHTML =
            "IITR email should be used"
        check = false
        IMGForm["email"].className += " wrong-border"
    } else {
        document.getElementById("emailError").innerHTML = ""
        IMGForm["email"].className += " right-border"
    }

    return check;
   
}
