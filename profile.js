$("#updateusernameform").submit(function(event){
//    prevent default php processing
    event.preventDefault();
    var datapost=$(this).serializeArray();
   
//    window.alert(echo "hogya");
    //send them to signup.php using AJAX
    $.ajax({
    url: "updateusername.php",
        type:"POST",
        data:datapost,
        success:function(data){
           if(data) {$("#updateusernamemessage").html(data);}
            else
               { location.reload();}
        },
        error:function(){
           $("#updateusernamemessage").html("<div class='alert alert-danger'>There was an error with ajax call.. Please Try again later</div>"); 
        }
        
    });
});