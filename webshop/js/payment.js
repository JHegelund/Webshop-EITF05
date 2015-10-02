$(document).ready(function() {
        $('#register').on('submit', function(e) {

            e.preventDefault();
            var cardType = $(".btn:first-child").val();
            var cardNbr = $("#inputCardNbr").val();
            var cardName = $("#inputCardName").val();
            var expMonth = $(".btn:first-child").val();
            var expYear =  $(".btn:first-child").val();
            var cvc = $("#inputCvc").val();

            var dataString = 'inputCardType=' + cardType + '&inputCardNbr=' + cardNbr + '&inputCardName=' + cardName + '&inputExpMonth=' + expMonth + '&inputExpYear=' + expYear + '&inputCvc=' + cvc;
           
            $.ajax({
                url: "checkoutservice.php",
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

