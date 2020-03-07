$(function(){

    $('#register').click(function(e){
       
        var valid = this.form.checkValidity();

        if(valid){
            var firstname = $('#firstname').val();
            var lastname = $('#lastname').val();
            var email = $('#email').val();
            var phonenumber = $('#phonenumber').val();
            var password = $('#password').val();
            
            /*
            alert(firstname);
            alert(lastname);
            alert(email);
            alert(phonenumber);
            alert(password);
            */
            e.preventDefault();
            
            $.ajax({
               type: 'POST',
               url: 'process.php', 
               data:{firstname:firstname,lastname:lastname,email:email,phonenumber:phonenumber,password:password},
               success:function(data){
                 alert(data);
               },
               error:function(data){
                   alert(data);
               }     
            });

        }

    });

});