<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>  
<script src=”https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.7/jquery.inputmask.min.js”></script>
<script>
    $(document).ready(function(){

$('.checkemail').focusout(function(e){
                          
    var email=$('.checkemail').val();
  

    $.ajax({
       type: "POST",
       url: "functions.php",
      data: {
         "check_btn":1,
         "email":email,
           },
                 
     success: function(response){
        $('.errordisplay').text(response);

          }  
      });

});
});

$(document).ready(function(){

     $.validator.addMethod("passvalidator",function(value,element,args)
     {
        return /(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{8,})/.test(value);
     },'Password must contain one lowercase letter,one uppercase letter,one digit,one special character');

     $.validator.addMethod("zipvalidator",function(value,element,args)
     {
        return /^[0-9]{5}(?:-[0-9]{4})?$/.test(value);
     },'Zipcode contains 5 numbers');

     $("#registration").validate({
        rules:{
            newpwd:{
                required:true,
                passvalidator:true
            },
            confirmpwd:{
                equalTo:"#pass"
            },
            zip:{
                zipvalidator:true
            }
           },
           messages:{
            confirmpwd:{
                equalTo: "Please enter the same password as above"
            }
           }

          

     })
    
})

$(document).ready(function(){

$('.third-phone').keyup(function(e){
                          
    var phone=$('.third-phone').val();
    if(phone.length==10)
    {
        if(isNaN(phone))
        {
            $("#errorphone").html("Not a Number");
        }
        else
        {
            $("#errorphone").html(" ");
        }
       
    }
    else
    {
        $("#errorphone").html("Your Mobile Number must contain 10 numbers");
    }
    



});
})




</script>
</body>
</html>