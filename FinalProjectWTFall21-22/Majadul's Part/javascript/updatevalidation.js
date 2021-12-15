const form = document.querySelector(".signup form"),
continueBtn = form.querySelector(".button input"),
errorText = form.querySelector(".error-text");

form.onsubmit = (e)=>{
  e.preventDefault();
}

continueBtn.onclick = ()=>{  


    var result = document.querySelector(
    ".result");
    var firstname = document.forms["myform"]["fname"];
    var lastname = document.forms["myform"]["lname"];
    var email = document.forms["myform"]["email"];
    var password = document.forms["myform"]["password"];
    
    if (firstname.value == "") {  

      //sresult.innerHTML = "";
       
        result.innerHTML = "Please enter your First Name";
        console.log("error");
        
         
         
        
             
        }else{
          
          var vname = /^[a-zA-Z]{2,}\d*$/;
           if(!vname.test(firstname.value)){
             result.innerHTML = "First Name can contain alpha numeric characters, period, dash or  underscore only. User Name must contain at least two (2) characters";
             firstname.focus();
          }else{
            console.log("ok");
            if (lastname.value == "") {
       
              result.innerHTML = "Please enter your Last Name";
              
                  
             }else{
              
               var lname = /^[a-zA-Z]{2,}\d*$/;
              //  var lname =  /^[a-zA-Z0-9]+$/;
               if(!lname.test(lastname.value)){
                 result.innerHTML = "Last Name can contain alpha numeric characters, period, dash or  underscore only. User Name must contain at least two (2) characters";
                 lastname.focus();
                 
              }else{
                result.innerHTML = "";
                console.log("lastname ok");
                
        
             }
              // return false;
          }

              
         }

        
      //  return false;
    }
    

    

    if (email.value == "") {
        
        result.innerHTML = "Please enter a valid e-mail address.";
        email.focus();

        
             
        }else{
          var vemail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
          if(!vemail.test(email.value)){
           result.innerHTML = "Uppercase (A-Z) and lowercase (a-z) English letters  Digits (0-9).Characters ! # $ % & ' * + - / = ? ^ _ ` { | } ~ Character . ( period, dot or fullstop) provided that it is not the first or last character and it will not come one after the other."
         }else{
           console.log("email ok");
         }
        return false;
    }

   

    if (password.value == "") {
        window.alert("Please enter your password");
        password.focus();
        return false;
    }

   

   
    let xhs = new XMLHttpRequest();
    xhs.open("POST", "../php/update-profile.php", true);
    xhs.onload = ()=>{
      if(xhs.readyState === XMLHttpRequest.DONE){
        console.log("send done");
          if(xhs.status === 200){
              let data = xhs.response;
              if(data === "success"){
                location.href="users.php";
              }else{
                errorText.style.display = "block";
                errorText.textContent = data;
              }
          }
      }
    }
    let formData = new FormData(form);
    xhs.send(formData);
}
