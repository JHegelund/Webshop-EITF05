$(document).ready(function() {
        $("#Lundastout, #JoelsIPA, #Valborgslager").click(function(){
            
            var productId = this.id;

            var dataString = 'productId=' + productId;

            $.ajax({
                url: "addtobasket.php",
                type: "POST",
                data: dataString,
                cache: false,
                success: function(data) {
                    $("#message").html(data);
                },
                error: function(jXHR, textStatus, errorThrown) {
                    alert(errorThrown);
                }
            });
        });
    });