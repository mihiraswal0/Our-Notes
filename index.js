$("#signupform").submit(function(event){
//    prevent default php processing
    event.preventDefault();
    var datapost=$(this).serializeArray();
   
//    window.alert(echo "hogya");
    //send them to signup.php using AJAX
    $.ajax({
    url: "signup.php",
        type:"POST",
        data:datapost,
        success:function(data){
           if(data) $("#signupmessage").html(data);
        },
        error:function(){
           $("#signupmessage").html("<div class='alert alert-danger'>There was an error with ajax call.. Please Try again later</div>"); 
        }
        
    });
});


$("#loginform").submit(function(event){
//    prevent default php processing
    event.preventDefault();
    var datapost=$(this).serializeArray();
   
//    window.alert(echo "hogya");
    //send them to signup.php using AJAX
    $.ajax({
    url: "login.php",
        type:"POST",
        data:datapost,
        success:function(data){
           if(data==="success"){
               window.location="mainPage.php";
           }
            else{
                $('#loginmessage').html(data);
            }
        },
        error:function(){
           $("#signupmessage").html("<div class='alert alert-danger'>There was an error with ajax call.. Please Try again later</div>"); 
        }
        
    });
});

