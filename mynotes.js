$(function(){
   $.ajax({
       url:"loadnotes.php",
       success:function(data){
           $('#notes').html(data);
       }
   });
});