//user id validation starts
function name_validation(){
    'use strict';
    var userid_name = document.getElementById("name");
    var userid_value = document.getElementById("name").value;
    var userid_length = userid_value.length;
    if(userid_length<3 || userid_length>12)
    {
    document.getElementById('name_err').innerHTML = 'Value must not be less than 3 characters and greater than 12 characters';
    userid_name.focus();
    document.getElementById('name_err').style.color = "#FF0000";
    }
    else
    {
    document.getElementById('name_err').innerHTML = 'Valid food name ';
    document.getElementById('name_err').style.color = "#00AF33";
    }
    }
   