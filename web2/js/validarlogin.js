function Validar(user, pass)
        {
            $.ajax({
                url: "Validar/Validar.php",
                type: "POST",
                data: "user="+user+"&pass="+pass,
                success: function(resp){
                $('#resultado').show();    
                $('#resultado').html(resp)
                }       
            });
        }