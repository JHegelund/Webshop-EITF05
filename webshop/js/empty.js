$(document).ready(function() {
        $("#emptybasket").click(function(){


            var dataString = '';

            $.ajax({
                url: "emptybasket.php",
                type: "POST",
                data: dataString,
                cache: false,
                success: function(data) {
                    $("#list").html(data);
                },
                error: function(jXHR, textStatus, errorThrown) {
                    alert(errorThrown);
                }
            });
        });
    });